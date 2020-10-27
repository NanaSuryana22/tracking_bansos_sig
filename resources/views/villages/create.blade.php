@extends("layouts.master")
@section('title', 'Desa / Kelurahan')
@section("content")
<div class="row">
  <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        Silahkan Inputkan Data Desa / Kelurahan
      </div>
      <div class="panel-body">
      <form action="{{url('villages.store')}}" method="POST" role="form">
        {{csrf_field()}}
        <div class="form-group">
          <label for="code">Kode Desa / Kelurahan</label>
          <input class="form-control @error('code') is-invalid @enderror"
                 type="text" name="code" id="code" value="{{ old('code')}}"
                 placeholder="Masukkan Kode Desa / Kelurahan">
          <p class="help-block">@error('code') {{ $message }}</p>@enderror
        </div>
        <div class="form-group">
          <label for="name">Nama Desa / Kelurahan</label>
          <input class="form-control @error('name') is-invalid @enderror"
                type="text" name="name" id="name" value="{{ old('name')}}"
                placeholder="Masukkan Nama Desa / Kelurahan">
          <p class="help-block">@error('code') {{ $message }}</p>@enderror
        </div>
        <button type="submit" class="btn btn-info">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection
