<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Galeri;

class PemantauanController extends Controller
{
    //
    public function index(){
        $photo = Galeri::where('slider1',"tampil")->orwhere('slider2',"tampil")->get();
        return view('pemantauan', compact('photo'));
    }
    public function data(){
    	$data_berita = Berita::orderBy('id', 'DESC')->where('status_tampil','tampil')->paginate(6);
        return view('data', compact('data_berita'));
    }
    public function jam()
    {
        $tgl = date('Y-m-d');
        $tanggal = $tgl;
            $datas = Berita::where('tgl',$tanggal)->where('status_tampil',"tampil")->paginate(6);
            return view('data_beritajam', compact('datas'));
    }
}
