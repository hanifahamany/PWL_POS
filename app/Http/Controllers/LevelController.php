<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', 
        //            ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('Update m_level set level_nama = ? where level_kode = ?',
        //                    ['Customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row. ' baris';

        // $data = DB::select('select * from m_level');
        // return view('level', ['data' => $data]);
        // $data = DB::select('select * from m_level');
        // return view('level', ['data' => $data]);

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
    public function tambah()
    {
        return view('level_tambah');
    }
    public function tambah_simpan(Request $request)
    {
        // LevelModel::create([
        //     'level_kode' => $request->level_kode,
        //     'level_nama' => $request->level_nama,
        // ]);
        // return redirect('/level');

        // Retrieve the validated input data
        $validated = $request->validate();

        // Retreive a portion of the validated input data
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_kode', 'level_nama']);

        return redirect()->route('level.tambah');

        // Retrieve a portion of the validated input data
        // $validated = $request->safe()->only(['level_kode', 'level_nama']);
        // $validated = $request->safe()->except(['level_kode', 'level_nama']);
    }
}
