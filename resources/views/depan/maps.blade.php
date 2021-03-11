@extends('depan.template.content2')
@section('main')
<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Maps</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Maps</li>
            </ol>
        </div>

    </div>
</section><!-- End Our Portfolio Section -->

<section class="map mt-2">
    <div class="container-fluid p-0">
        <div id='map' style="width: 100%; height: 700px;"></div>
    </div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpa3NoaW5lbGYiLCJhIjoiY2p5Y3lxb202MG12djNkazQxNnUwbjM3NCJ9.h7Seoet9AWgLJ7K95GTeew';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [107.6425043, -2.7356446],
            zoom: 13
        });
        var directions = new MapboxDirections({
            accessToken: mapboxgl.accessToken
        });

        map.addControl(directions, 'top-left');

        map.on('load', function() {
            directions.setOrigin([107.64095934760599, -2.7393311079020037]);
            directions.setDestination([107.63366373908309, -2.7423317454915406]);
        })
    </script>
</section><!-- End Map Section -->
@endsection