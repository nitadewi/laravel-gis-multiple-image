@extends('layoutadmin.content')
@section('content')

<h1 class="h3 mb-4 text-gray-800">Tes saja</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <div id='map' style='width: 100%; height: 700px;'></div>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpa3NoaW5lbGYiLCJhIjoiY2p5Y3lxb202MG12djNkazQxNnUwbjM3NCJ9.h7Seoet9AWgLJ7K95GTeew';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [107.6425043, -2.7356446],
                zoom: 13
            });
        </script>

    </div>
</div>
</div>

@endsection