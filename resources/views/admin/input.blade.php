@extends('template')

@section('judul','home')

@section('content')
    <form action="/save" method="post">
        @csrf 
        <div>
            <label for="nama"> Nama </label>
            <input type="text" name="nama">
        </div>

        <div>
            <label for="kategori"> kategori </label>
            <input type="text" name="Kategori">
        </div>

        <div>
            <label for="harga"> harga </label>
            <input type="number" name="harga">
        </div>

        <div>
            <label for="ket"> Keterangan </label>
            <input type="text" name="ket">
        </div>

        <!-- {{-- <input type="submit" value="Simpan"> --}} -->
        <button type="submit"> Simpan </button>
    </form>
@endsection        









    </form>