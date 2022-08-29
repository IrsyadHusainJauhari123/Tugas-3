@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5"></div>
    </div>
    <div class="card">
        <div class="card-header">
            Tambah Data Produk
        </div>
        <div class="card-body">
            <form action="{{url('produk')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="" class="control-">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-">Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-">Berat</label>
                            <input type="text" class="form-control" name="berat">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-">Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection