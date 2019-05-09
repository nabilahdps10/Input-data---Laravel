<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request; //memanggil library fungsi request
use Illuminate\Support\Facades\DB; //untuk memanggil  library database
 
class PerpustakaanController extends Controller
{
	public function index(){
		// mengambil data dari table buku
    	$perpustakaan = DB::table('buku')->get();
 
    	// mengirim data perpustakaan ke view index
    	return view('index',['perpustakaan' => $perpustakaan]);
	}
}
?>