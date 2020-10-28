<div class="col-md-12">
  <!--   Kitchen Sink -->
    <div class="panel panel-default">
      <div class="panel-heading">
      <a class="btn btn-info" href="{{ route('villages.create') }}"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
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
                <td>
                  <div class="btn-group">
                  <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                      <li><a href="#">Lihat</a></li>
                      <li><a href="#">Edit</a></li>
                        <form action="{{ route('villages.destroy', $village->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <li><a href="#">Hapus</a></li>
                        </form>
                  </ul>
                </div>
              </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- End  Kitchen Sink -->