<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Makanan;

class MenuController extends Controller
{
    public function index(){

        $makanan = Makanan::all();

        return view('menu',[
            'data'=> $makanan
    ]); 
}

    public function add()
    {
        return view('form_menu');
    }

    public function edit($id)
    {
        $makanan = Makanan::find($id);
        
        return view('form_menu',[
            'data' => $makanan
        ]);
    }

    public function save(request $req)
    {
        $old_kode = @$req->old_kode;

        if ($old_kode){
            Makanan::where('kode_makanan', $old)->update([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                '[kategori' => $req->harga,
                'ket' => $req->ket

            ]);
        } else {
            DB::table('makanans')->insert([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket
            ]);
        }
        
        return redirect('/menu');
    }

    public function delete($id)
    {
        Makanan::find($id)->delete();

        return redirect('/menu');
        
    }

}    
