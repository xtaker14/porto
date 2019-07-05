<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //di sini isi controller 
    public function index(){
    	return "Halo ini adalah controller tes 3";
    }
    public function tes3(){
    	$nama = "Bakri";
    	$ar_details = [
    		"Umur 21thn",
    		"Tinggal di Kemayoran serdang",
    		"Status Single",
    	];
    	return view('demo/tes3',array(
    		"nama"=>$nama,
    		"details"=>$ar_details,
    	));
    }
    public function tes4($str){
    	$nama = "Bakri"; 
    	return view('demo/tes4',array(
    		"nama"=>$nama,
    		"details"=>$str,
    	));
    }
    public function tes5_input(){
    	$nama = ""; 
    	return view('demo/tes5_input',array(
    		"nama"=>$nama, 
    	));
    }
    public function tes5_result(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }

    public function home($str = 'index'){ 
    	switch ($str) {
    		case 'index':
    			return view("dynamic/home");
    			break;
    		case 'tentang':
    			return view("dynamic/tentang");
    			break;
    		case 'kontak':
    			return view("dynamic/kontak",array(
    				"details"=>["Tes ke-1","Tes ke-2","Tes ke-3"]
    			));
    			break;
    		
    		default:
    			$this->home('index');
    			break;
    	}
    }

    // crud database
    public function karyawan($t_case = 'list',$t_id = null){
    	switch ($t_case) {
    		case 'list':
		    	$karyawan = DB::table('karyawan')->get();
		    	return view('karyawan/list',array(
		    		'karyawan' => $karyawan
		    	));
    			break;
    		case 'tambah':
		    	$karyawan = DB::table('karyawan')->get();
		    	return view('karyawan/tambah',array(
		    		'karyawan' => $karyawan,
		    		"this_case"=>"tambah",
		    	));
    			break;
    		case 'edit':
	    		$karyawan = DB::table('karyawan')->where('id',$t_id)->get();
		    	return view('karyawan/tambah',array(
		    		'karyawan' => $karyawan,
		    		"this_case"=>"edit",
		    	));
    			break;
    		case 'hapus':
				// $karyawan = DB::table('karyawan')->get();
				DB::table('karyawan')
				->where('id',$t_id)
				->delete(); 
				return redirect('/karyawan');
				 
    			break; 
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function karyawan_proccess(Request $request){
		$t_case = $request->input('submit'); 
    	switch ($t_case) {
    		case 'Simpan Data':
        		$nama = $request->input('nama'); 
        		$umur = $request->input('umur'); 
        		$alamat = $request->input('alamat');  

        		DB::table('karyawan')->insert([
					'nama' => $nama, 
					'umur' => $umur,
					'alamat' => $alamat
				]);

				// alihkan halaman ke halaman karyawan
				return redirect('/karyawan');

    			break;
    		case 'Ubah Data':
        		$id = $request->input('id'); 
        		$nama = $request->input('nama'); 
        		$umur = $request->input('umur'); 
        		$alamat = $request->input('alamat');  

				DB::table('karyawan')
				->where('id',$id)
				->update([
					'nama' => $nama, 
					'umur' => $umur,
					'alamat' => $alamat
				]);

				// alihkan halaman ke halaman karyawan
				return redirect('/karyawan');

    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}

?>