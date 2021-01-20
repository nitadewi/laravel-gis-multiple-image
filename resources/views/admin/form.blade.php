        <div class="form-group">
            <label>Judul</label>
            <input class="form-control form-control-solid" type="text" name="title" value="{{ isset($datas->title) ? $datas->title : ''}}" placeholder="judul">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
                <option value="">Pilih Kategori</option>
                <option value="pantai">Pantai</option>
                <option value="alam">Alam</option>
                <option value="religi">Religi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" value="{{ isset($datas->deskripsi) ? $datas->deskripsi : ''}}" name="deskripsi" rows="4" placeholder="tulis disini"></textarea>
        </div>
        <div class="form-group">
            <label>Latitude</label>
            <input class="form-control" id="ltd" type="text" name="ltd" value="{{ isset($datas->ltd) ? $datas->ltd : ''}}" readonly>
        </div>
        <div class="form-group">
            <label>Longtitude</label>
            <input class="form-control" id="lngtd" type="text" name="lngtd" value="{{ isset($datas->lngtd) ? $datas->lngtd : ''}}" readonly>
        </div>
        @if($formMode === 'create')
        <div class="form-group">
            <label>Photos</label>
            <div class="input-group control-group increment">
                <input class="form-control" type="file" name="filename[]" value="{{ isset($f->nama) ? $f->nama : ''}}">
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
        @else
        <div class="form-group">
            <label>Photos</label>
            <div class="row">
                @foreach($foto as $f)
                <div class="col-xl-2 col-lg-3">
                    <img src="{{ isset($f->nama) ? url('/image/'.$f->nama) : ''}}" class="img-thumbnail" style="height: 50px; width: 50px; object-fit: cover;" />
                </div>
                @endforeach
            </div>
            <div class="row float-right">
                <a href="{{ url('/foto/' . $datas->id_wisata . '/edit') }}" class="btn btn-success btn-sm" type="submit">
                    <span class="icon text-white-50">
                        <i class="fa fa-pen" aria-hidden="true"></i>
                    </span>
                    <span class="text">edit foto</span>
                </a>
            </div>
        </div>

        @endif
        <button class="btn btn-primary" type="submit">
            <span class="icon text-white-50">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
            </span>
            <span class="text">{{ $formMode === 'edit' ? 'Update' : 'Add' }}</span>
        </button>