<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use App\registation;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gambar = Gambar::all();
        return view('home',['gambar' => $gambar]);
    }
    public function formulir()
    {
        $registation = registation::all();
        return view('formulir',['registation' => $registation]);
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file =$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/home')->with('success','data berhasil di simpan');
    }
    
    public function hapus($id)
        {
            $gambar = Gambar::where('id',$id)->first();
            File::delete('data_file/'.$gambar->file);
            // menghapus data pegawai berdasarkan id yang dipilih
            Gambar::where('id', $id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/home');
        }
    public function del($id)
        {
            
            // menghapus data pegawai berdasarkan id yang dipilih
            registation::where('id', $id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/home');
        }
}
