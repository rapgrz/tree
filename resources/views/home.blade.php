<html>
@extends('layouts.app')
<style>
    html {
        height: 100%
    }
    body {
        height: 100%;
        margin: 0px;
        padding: 0px;
    }

    #nav {
        z-index: 100;
        position: absolute;
        right: 91%;
        top: 25%;
    }
    #map {
        width: 100%;
        height: 100%
    }
</style>
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<head>

</head>
<body>
<div id="nav">
    <div class="card">
        <div class="card-header">{{"Device List"}}</div>
        <div class="card-body">
            <table class="table">
                <tbody>
        @foreach ($allData as $data)
                    <tr>
                <td>
                {{$data->device_Id}}
                </td>
                    </tr>
                    @endforeach
                </tbody></table>
            <button type="button" class="btn btn-warning btn-sm float-right">Add Device</button>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
<div id="map">
    {!! $map['html'] !!}
    {!! $map['js'] !!}
    </div>
@endsection
</body>
</html>
