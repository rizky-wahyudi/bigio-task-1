@extends('main')
@section('title','Commodity Center')
@section('content')
    <div id="main-admin">
        <div class="greeting-message">
            <h1>Welcome <i>{{Session::get("name")}}!</i> </h1>
        </div>
        <div class="main-menu">
            <a href="{{route('admin-commodity-request')}}">
                <div class="menu-option">
                    <div class="image-menu">
                        <img src="{{asset('images/add-commodity.png')}}" alt="Add Data">
                    </div>
                    <div class="title-menu">
                        <h2>See Data Request</h2>
                    </div>
                </div>
            </a>
            <a href="{{route('admin-list-commodity')}}">
                <div class="menu-option">
                    <div class="image-menu">
                        <img src="{{asset('images/data-list.png')}}" alt="See Data">
                    </div>
                    <div class="title-menu">
                        <h2>See Commodity</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="logout-button">
            <a href="{{route('admin-do-logout')}}" class="btn btn-danger"><h3>Logout</h3></a>
        </div>
    </div>
@endsection