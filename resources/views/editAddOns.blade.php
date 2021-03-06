@extends('layout.Layout')
@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Data Add-ons</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/AddOns">Add-Ons</a></li>
            <li class="breadcrumb-item active">Edit Data Add-Ons</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div> 
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Add-Ons</h3>
            </div>
            <form role="form" method="POST" action="/AddOns/Update/{{$ambildata->add_ons_id}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Add-Ons</label>
                  <input type="text" value="{{$ambildata->add_ons_name}}" name="nama_addons" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                </div>
                <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="number" value="{{$ambildata->add_ons_buy_price}}" name="harga_beli" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                </div>
                <div class="form-group">
                    <label>Harga Jual</label>
                    <input type="number" value="{{$ambildata->add_ons_sale_price}}" name="harga_jual" class="form-control" id="exampleInputEmail1" placeholder="position name..." required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan Add-Ons...">{{$ambildata->add_ons_ket}}</textarea>
                    {{-- <input type="text" name="alamat1" class="form-control" id="exampleInputEmail1" placeholder="Alamat Perusahaan..."> --}}
                </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection