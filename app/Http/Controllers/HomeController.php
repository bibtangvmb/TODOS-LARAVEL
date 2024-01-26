<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller 
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function simpan(request $request)
    {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('nama');
        $ket = $request->input('ket');

        return view('result',[
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $keterangan,
        ]);
    }
    
    public function test()
        {
            // // Query Builder untuk insert 1 data ke dalam table makanans
            // // DB::table('makanans')->insert([
            // //     'nama' => 'Bintang',
            // //     'kategori' => 'tampan',
            // //     'harga' =>100000,
            // //     'ket' => 'dijual',
            // // ]);

            // // Query Builder untuk insert 1 data ke dalam table makanans
            // DB::table('makanans')->insert([
            //     [
            //         'nama' => 'Bintang',
            //         'kategori' => 'tampan',
            //         'harga' =>100000,
            //         'ket' => 'dijual',
            //     ],
            //     [
            //         'nama' => 'Bintang',
            //         'kategori' => 'tampan',
            //         'harga' =>100000,
            //         'ket' => 'dijual',
            //     ],
            //     [
            //         'nama' => 'Bintang',
            //         'kategori' => 'tampan',
            //         'harga' =>100000,
            //         'ket' => 'dijual',
            //     ],
            //     [
            //         'nama' => 'Bintang',
            //         'kategori' => 'tampan',
            //         'harga' =>100000,
            //         'ket' => 'dijual',
            //     ],
            // ]);    
            //  Query untuk select data dari table makanans
            //  $result = DB::table('makananans')->where('id',1)->get();
            //  dd($result);

            //  Query untuk delete data dari table makanans
            //  DB::table('makananans')->where('id',1)->delete();

            //  Query untuk update data dari table makanans

            return 'masuk test';
        }
    }    


















// }    



