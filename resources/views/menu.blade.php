@extends('template.index')

@section('tittle','home')

@section('content')

   <div class="container">
    <div class="row">
        <div class="col-12">
            <a href="/menu/add">
                <button type="button" class="btn btn-success">Add</button>
            </a>    
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode Makanan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="col">{{ $row->kode_makanan }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </div>

@endsection