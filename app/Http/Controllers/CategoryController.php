<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{   
    public function index()
    {
        /*$data = [
            'category_kode' => 'SNK',
            'category_nama' => 'Snack/Makanan Ringan',
            'created_at' => NOW()
        ];
        DB::table ('m_category')-> insert($data);
        return 'insert data baru berhasil';*/

        //$row = DB::table('m_category')->where ('category_kode', 'SNK')->update(['category_nama' => 'Camilan']);
        //return 'update data berhasil. jumlah data yang di update ' .$row. 'baris';

        //$row = DB::table ('m_category')->where ('category_kode', 'SNK')->delete();
        //return 'delete data berhasil. data yang di hapus ' .$row. 'baris';

        $data = DB::table('m_category')->get();
        return view ('category', [ 'data' => $data]);
        
    }

}

