@extends("layouts.master")
@section('title', 'Desa / Kelurahan')
@section("content")
<div class="row">
  <div class="col-md-12">
    <h1 class="page-head-line">Master Data Desa / Kelurahan</h1>
    <h1 class="page-subhead-line">Berikut adalah master data Desa / Kelurahan. Jika ingin menambah data, silahkan klik tombol tambah data. </h1>
  </div>
</div>
<div class="row">
  @include('villages.list')
</div>
<!-- /. ROW  -->
@endsection
