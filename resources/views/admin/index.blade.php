@extends('layoutadmin.content')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tempat Wisata</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Category</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($wisata as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->category }}</td>
                        <td style="width: 200px;">
                            <a href="{{ url('/tambah/' . $item->id_wisata . '/edit') }}" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            <form method="POST" action="{{ url('/tambah' . '/' . $item->id_wisata) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-icon-split btn-sm" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <span class="icon text-white-50">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>
                            </form>



                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>



@endsection