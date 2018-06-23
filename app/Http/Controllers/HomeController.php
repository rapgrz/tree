<?php

namespace App\Http\Controllers;

use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\FormModel;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use PMA\libraries\config\Form;
use Jcf\Geocode\Geocode;

class HomeController extends Controller
{

    protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
        $this->middleware('auth');
    }
    function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
        $theta = $longitude1 - $longitude2;
        $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $distance = acos($distance);
        $distance = rad2deg($distance);
        $distance = $distance * 1.609344;
        return (round($distance,2));
    }

    public function index(){

        $config = array();
        $config['map_height'] = "100%";
        $config['map_weight'] = "100%";
        $config['zoom'] = 'auto';

        $allData = FormModel::all();
        $dist = $this->getDistanceBetweenPointsNew(54.71631900, 25.28006800, 54.63847000, 24.93317900);


        foreach ($allData as $data){
            $latitude = $data->latitude;
            $longitudes = $data->longitudes;
            $response = Geocode::make()->latLng($latitude, $longitudes);
            if ($response) {
                $address = $response->formattedAddress();
            }
            $marker['animation'] = 'DROP';
            $marker['position'] = ''.$latitude.','.$longitudes.'';
            $marker['infowindow_content'] = '<table class="table"><tbody><tr><td><b>Address</b></td><td>'.$address.'</td></tr><tr><td><b>Device ID</b></td><td>'.$data->device_Id.'</td></tr><tr><td><b>HOME/WORK</b></td><td>'.$data->select.'</td></tr></tbody></table>';
            $marker['icon'] = 'http://maps.google.com/mapfiles/kml/paddle/red-circle.png';
            $this->gmap->add_marker($marker);
        }

        $this->gmap->initialize($config);


        $map = $this->gmap->create_map();

        return view('home', ['map' => $map, 'allData' => $allData]);
    }
}
