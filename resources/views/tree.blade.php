@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Category TreeView</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        @if (count($categories) > 0)
                        <h3>Category List</h3>
                        <ul class="list-group" id="tree">
                            @foreach($categories as $category)
                                <li class="list-group-item list-group-item-info">
                                    {{ $category->name }}
                                    @if(count($category->childs))
                                        @include('manageChilds',['childs' => $category->childs])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

