@extends('mitra.index')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Jenis Paket</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Jenis Paket</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <form method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="laundry_id" value="{{ $laundry->id }}">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Pengisian Jenis Paket</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label>Nama Jenis</label>
                <input type="text" name="nama_jenis" class="form-control">
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control">
              </div>
              <div class="form-group">
                <label>Estimasi</label>
                <input type="text" name="estimasi" class="form-control">
              </div>
                          
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Tambah" class="btn btn-success float-right">
        </div>
      </div>
    </form>
    <br>
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Paket</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Jenis</th>
                      <th>Harga</th>
                      <th>Estimasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach($data as $value)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $value->nama_jenis }}</td>
                      <td>{{ $value->harga }}</td>
                      <td>{{ $value->estimasi }}</td>

                      <td>
                        <form method="POST" action="/mitra/delete_jenis_paket">
                          @csrf
                          <input type="hidden" name="jenispaket_id" value="{{ $value->id }}">
                          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
