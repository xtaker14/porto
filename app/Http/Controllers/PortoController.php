<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortoController extends Controller
{ 

    public function index($str = 'index'){ 
    	switch ($str) {
    		case 'index':
    			return view("porto/home");
    			break;
    		case 'tentang':
    			// return view("dynamic/tentang");
    			break;
    		case 'kontak':
    			// return view("dynamic/kontak",array(
    			// 	"details"=>["Tes ke-1","Tes ke-2","Tes ke-3"]
    			// ));
    			break;
    		
            default:
                return redirect('/home');
    			break;
    	}
    }
 
}

?>