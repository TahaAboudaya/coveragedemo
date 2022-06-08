@extends('layouts.master')

@section('content')
<div class="container text-center">
    <form action="{{ route('store') }}" method="post">
        {!! csrf_field() !!}
         <h2>
            LTT Coverage
        </h2>
        <div id="map">
        </div>
        <div class="row">
            <div class="col-5">
                <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="service_num" name="service_num" id="service_num">
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="phone" name="phone" id="phone">
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="name" name="name" id="name">
            </div>
            
        </div>
        <input type="submit" class="btn btn-primary">
        <a href="/export" class="btn btn-primary">
             Export Data
        </a>
    </form>
</div>
@endsection

