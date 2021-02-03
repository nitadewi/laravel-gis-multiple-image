@extends('LayoutAdmin.content')
@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('tambah.update', $datas->id_wisata)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    @include ('admin.form', ['formMode' => 'edit'])
                </form>
            </div>

        </div>
    </div>

    <div class="col-xl-6 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Maps</h6>
            </div>
            <div class="card-body">
                <div id='map' style='width: 100%; height: 400px;'></div>
                <script>
                    mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpa3NoaW5lbGYiLCJhIjoiY2p5Y3lxb202MG12djNkazQxNnUwbjM3NCJ9.h7Seoet9AWgLJ7K95GTeew';

                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: [107.6425043, -2.7356446],
                        zoom: 13
                    });

                    var marker = new mapboxgl.Marker({
                            draggable: true
                        })
                        .setLngLat([107.6425043, -2.7356446])
                        .addTo(map);

                    function onDragEnd() {
                        var lngLat = marker.getLngLat();
                        ltd.style.display = 'block';
                        lngtd.style.display = 'block';
                        document.getElementById('ltd').value = lngLat.lat;
                        document.getElementById('lngtd').value = lngLat.lng;
                    }

                    marker.on('dragend', onDragEnd);
                </script>

            </div>
        </div>
    </div>
</div>
@endsection