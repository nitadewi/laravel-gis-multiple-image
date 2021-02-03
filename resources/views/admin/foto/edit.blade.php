@extends('LayoutAdmin.content')
@section('content')
<div class="form-group">
    <label>Photos</label>
    <div class="row">
        @foreach($foto as $f)
        <div class="col-xl-2 col-lg-2">
            <img src="{{ isset($f->nama) ? url('/image/'.$f->nama) : ''}}" class="img-thumbnail" style="height: 100px;width: 100px;object-fit: cover;" />
            <div>
                <form method="POST" action="{{ route('foto.destroy', $f->id_foto) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button style="margin-top:3px;" type="submit" class="btn btn-danger btn-icon-split btn-sm" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)">
                        <span class="icon text-white-50">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </span>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

<form method="POST" action="{{ route('foto.update', $t->id_wisata) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
        <div class="input-group control-group increment">
            <input class="form-control" type="file" name="filename[]">
            <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i class="fas fa-plus"></i>Add</button>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
                <input class="form-control" type="file" name="filename[]">
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="fas fa-times"></i> Remove</button>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">
        <span class="icon text-white-50">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </span>
        <span class="text">Add</span>
    </button>
</form>
@endsection