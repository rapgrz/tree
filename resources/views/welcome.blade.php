@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Categories form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('form') }}" aria-label="{{ __('Form') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="parent" class="col-md-4 col-form-label text-md-right">{{ __('Parent Category') }}</label>
                                @isset($categories)
                            <div class="col-md-6">
                                <select id="category" class="form-control" name="category_id">
                                    <option value="0">{{ 'No parent cat' }}</option>
                                    @foreach($categories as $category):
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    </div>
                                </select>
                                </div>
                            </div>
                            @endisset
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send form') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
