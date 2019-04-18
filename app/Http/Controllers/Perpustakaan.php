<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
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