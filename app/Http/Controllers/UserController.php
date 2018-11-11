<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\bcrypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\SendMessageRequest;
use App\Berita;
use App\User;
use Telegram;

class UserController extends Controller
{
    //
    public function index(){
        $tgl = date('Y-m-d');
        $tanggal = $tgl;
        $data_berita = Berita::where('tgl',$tanggal)->paginate(10);
		if(Session::get('login')){
            if(Session::get('role') == "basic"){
                return view('user_component.user.user', compact('data_berita'));    
            }else if(Session::get('role') == "admin"){
                return Redirect('admin');
            }else{
                return view('/');    
            }
        }else{
            return view('/');
        }
	}
	public function user(){
        $tgl = date('Y-m-d');
        $tanggal = $tgl;
        $data_berita = Berita::where('tgl',$tanggal)->paginate(5);
		if(Session::get('login')){
            if(Session::get('role') == "basic"){
                return view('user_component.user.user', compact('data_berita'));
            }else if(Session::get('role') == "admin"){
                return Redirect('admin');
            }else{
                return view('/');
            }
        }else{
            return view('/');
        }
	}

       public function dashboard(){
        if(Session::get('login')){
            if(Session::get('role') == "basic"){
                return view('user_component.user.dashboard');    
            }else if(Session::get('role') == "admin"){
                return view('user_component.admin.dashboard');
            }else{
                return redirect('/');    
            }
        }else{
            return redirect('/');
        }
    }


	public function profile(){
		$id = Session::get('id');
		$data = User::where('id', $id)->first();
		if(Session::get('login')){
			if(Session::get('role') == "basic"){
				return view('user_component.user.profil', compact('data'));
			}else{
				return Redirect('admin');
			}
		}else{
			return Redirect('login');
		}
	}
	public function ubah($id){
		$data = User::where('id', $id)->first();
		if(Session::get('login')){
			if(Session::get('role') == "basic"){
				return view('user_component.user.update', compact('data'));
			}else{
				return Redirect('admin');
			}
		}else{
			return Redirect('login');
		}
	}
	public function update(Request $request){
        $id = $request->id;
        $username = $request->username;
        $password = bcrypt($request->password);
        $pass = $request->pass;
        $nama = $request->nama;
        	if(Hash::check("",$password)){
        		User::where('id', $id)->update(['username' => $username, 'nama' => $nama]);
        		Session::flash('sukses', 'User Berhasil Di Ubah');
        		return back();		
        	}else{
        		User::where('id', $id)->update(['username' => $username, 'password'=> $password, 'nama' => $nama]);
        		Session::flash('sukses', 'User Berhasil Di Ubah');
        		return back();		
        	}
    }
    public function tampil(Request $request){
        $tgl = $request->tgl;
        $format = date('Y-m-d', strtotime($tgl));
        $data_berita = Berita::where('tgl',$format)->paginate(5);
        if(count($data_berita) == 0){
            Session::flash('alert-', 'Tidak Ada Berita');
            return view('user_component.user.user', compact('data_berita'));
        }else{
            Session::forget('alert-');
            return view('user_component.user.user', compact('data_berita'));
        }
    }
    public function kirim(Request $request){
        $callsign = $request->callsign;
        $nomor = $request->tlp;
        $pesan = $request->pesan;
        $status_tampil = "tampil";
        $status_pemantauan = "tidak tampil";
        $recaptcha = new \ReCaptcha\ReCaptcha('6LcsQ3UUAAAAAGK8O86zrgrVeY4HOLOurUlocwTv');
        $resp = $recaptcha->verify(Input::get('g-recaptcha-response'), $_SERVER['REMOTE_ADDR']);
        if ($resp->isSuccess()){
            $data = new Berita();
            $data->callsign = $request->callsign;
            $data->tlp = $request->tlp;
            $data->pesan = $request->pesan;
            $data->tgl = $request->tgl;
            $data->jam = $request->jam;
            $data->status_tampil = $status_tampil;
            $data->status_pemantauan = $status_pemantauan;
            $data->save();
            Telegram::sendMessage([
            'chat_id' => '@senkomtelegram', 
            'text' => 'Dari: '. $nomor .' Pesan: ' . $pesan .' Callsign: ' . $callsign,
            'parse_mode' => 'HTML'
            ]);
            $config = Configuration::getDefaultConfiguration();
            $config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0MDA1OTk0MCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjYyOTA1LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.CCQ1yUpCU6curWt8Cs3e77UOR2242cprPwJvjl58Kus');
            $apiClient = new ApiClient($config);
            $messageClient = new MessageApi($apiClient);

            //Sending a SMS Message
            $kirimpes = 'Dari '.$callsign."\r\n No. ".$nomor."\r\n ".$pesan;
            $sendMessageRequest1 = new SendMessageRequest([
            'phoneNumber' => $nomor,
            'message' => $kirimpes,
            'deviceId' => 103891
            ]);

            $sendMessages = $messageClient->sendMessages([
            $sendMessageRequest1
            ]);
            Session::flash('alert', 'Berita Berhasil Di Tambahkan');
            return back();
        }else{
            //$errors = $resp->getErrorCodes();
            Session::flash('message', 'Kode Captcha Salah');
            return Redirect('/admin');
        }
    }
    public function pemantauan(){
        if(Session::get('login')){
            if(Session::get('role') == "basic"){
                return view('user_component.user.pemantauan');
            }else if(Session::get('role') == "admin"){
                return redirect('admin');    
            }else{
                return view('user_component.login');    
            }
        }else{
            return view('user_component.login');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login');
    }
}
