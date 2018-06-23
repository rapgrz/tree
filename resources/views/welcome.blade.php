<!doctype html>
<html>
@extends('layouts.app')
@section('content')
      <body>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Form') }}</div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('form') }}" aria-label="{{ __('Form') }}">
                              @csrf

                              <div class="form-group row">
                                  <label for="deviceId" class="col-md-4 col-form-label text-md-right">{{ ('Device ID') }}</label>
                                  <div class="col-md-6">
                                      <input id="deviceId" type="text" class="form-control" name="deviceId" placeholder="{{ 'Enter Device ID' }}" required autofocus>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                                  <div class="col-md-6">
                                      <input id="latitude" type="text" class="form-control" name="latitude" placeholder="For example: 9.0200417" required>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                                  <div class="col-md-6">
                                      <input id="longitude" type="text" class="form-control" name="longitude" placeholder="For example: -79.5189333" required>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="select" class="col-md-4 col-form-label text-md-right">{{ __('Select') }}</label>

                                  <div class="col-md-6">
                                      <select class="form-control" name="select" id="select"required>
                                          <option>Home</option>
                                          <option>Work</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Send') }}
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </body>
    @endsection
</html>
