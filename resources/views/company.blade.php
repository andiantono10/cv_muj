@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Perusahaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Perusahaan</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <!-- /.card -->

      <div class="card">
        <div class="card-header">
            <a href="/addCompany" class="btn btn-success">Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Perusahaan</th>
              <th>NPWP Perusahaan</th>
              <th>No. Telepon</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 0; ?>
                @foreach($dataComp as $d)
                <?php $no++;?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->comp_name}}</td>
                    <td>{{$d->comp_npwp}}</td>
                    <td>{{$d->comp_phone}}</td>
                    <td>{{$d->comp_email}}</td>
                    <td>
                      <div class="row">
                        <a href="/dataCompany/Edit/{{$d->comp_id}}" class="btn btn-warning" style="margin-left: 10px;">Edit</a>
                        <a href="/dataCompany/Hapus/{{$d->comp_id}}" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
                      </div>
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
    <!-- /.col -->
  </div>
@endsection