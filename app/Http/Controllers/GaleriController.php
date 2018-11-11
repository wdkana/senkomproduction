<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Galeri;
use App\Galerivideos;
use File;


class GaleriController extends Controller
{



    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::orderBy('created_at', 'asc')->take(10)->get();
        $videos = Galerivideos::orderBy('created_at', 'asc')->take(10)->get();
        if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.galeri', compact('galeris', 'videos'));        
            }else{
                return view('user_component.user.galeri', compact('galeris', 'videos'));
            }
        }
         
    }
    public function slider1(Request $request){
        $id = $request->id;
        $data = Galeri::where('id', $id)->first();
        if(count($data) > 0){
            Galeri::where('id', $id)->update(['slider1' => "tampil", 'slider2' => ""]);
            return back();      
        }
    }
    public function slider2(Request $request){
        $id = $request->id;
        $data = Galeri::where('id', $id)->first();
        if(count($data) > 0){
            Galeri::where('id', $id)->update(['slider2' => "tampil", 'slider1' => ""]);
            return back();      
        }
    }

    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
	$input['title'] = $request->title;
	Galeri::create($input);		
	return back()
    		->with('success','berhasil di upload');
        }
	public function upload_vid(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
   	     ]);

	$input['videolink'] = $request->videolink;
        $input['title'] = $request->title;
        Galerivideos::create($input);
		return back()
    		->with('success-video','berhasil di upload');
            	
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($image)
    {
    	Galeri::where('image',$image)->delete();
	$tempat = 'public/images'; 
	unlink($tempat.'/'.$image);
        
    	return back()
    		->with('success','Gambar Berhasil di Hapus.');	
    }
    public function destroy_video($videolink)
    {
    	Galerivideos::where('videolink',$videolink)->delete();
        
    	return back()
    		->with('success-video','Berhasil di Hapus.');	
    }
}
