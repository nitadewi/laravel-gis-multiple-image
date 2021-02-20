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
        map.addControl(
            new MapboxDirections({
                accessToken: mapboxgl.accessToken
            }),
            'top-left'
        );

        var marker = new mapboxgl.Marker()
            .setLngLat([107.6425043, -2.7356446])
            .addTo(map);
    </script>
</section><!-- End Map Section -->
@endsection