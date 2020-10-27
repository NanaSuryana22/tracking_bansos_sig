<div class="col-md-12">
  <!--   Kitchen Sink -->
    <div class="panel panel-default">
      <div class="panel-heading">
      <a class="btn btn-info" href="{{url('villages/create')}}"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            @foreach($villages as $village)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{!! $village->code !!}</td>
                <td>{!! $village->name !!}</td>
                <td>LIHAT</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- End  Kitchen Sink -->