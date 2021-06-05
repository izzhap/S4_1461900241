<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = \App\Models\Siswa::leftjoin('kelas', 'siswa.id', '=', 'kelas.id_siswa')
        ->leftjoin('guru', 'guru.id', '=', 'kelas.id_guru')
        ->select(
            array(
                'guru.*',
                'siswa.alamat',
                \App\Models\Siswa::raw('siswa.nama AS nama_siswa'),
                \App\Models\Siswa::raw('siswa.id AS id_siswa'),
              )
        )
        ->get();

        return view('index_0241', ['siswa' => $siswa]);
    }

    public function add()
    {
        return view('add_0241');
    }

    public function tambah(Request $request)
    {
        
        $siswa = \App\Models\Siswa::insert([
            'nama' => $request->nama_b,
            'alamat' => $request->alamat_b,
        ]);
        $id = DB::getPdo()->lastInsertId();
        DB::table('kelas')->insert([
            'id_siswa' => $id,
            'id_guru' => 1,
        ]);
        
        
        return redirect('');
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::join('kelas', 'siswa.id', '=', 'kelas.id_siswa')
        ->join('guru', 'guru.id', '=', 'kelas.id_guru')
        ->select(
            array(
                'guru.*',
                'siswa.alamat',
                \App\Models\Siswa::raw('siswa.nama AS nama_siswa'),
                \App\Models\Siswa::raw('siswa.id AS id_siswa'),

              )
        )
        ->where('id_siswa', $id)
        ->get();
        return view('edit_0241', ['siswa' => $siswa]);
    }

    public function update(Request $request)
    {
        Db::table('siswa')->where('id', $request->id)->update([
            'nama' => $request->nama_b,
            'alamat' => $request->alamat_b,
        ]);
        return redirect('');
    }

    public function del($id)
    {
        DB::table('kelas')->where('id_siswa', $id)->delete();
        \App\Models\Siswa::where('id', $id)->delete();

        return redirect('');
    }
}
