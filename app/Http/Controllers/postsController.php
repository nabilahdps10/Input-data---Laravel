<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Post;

class postsController extends Controller
{
    public function index()
    {
        $data['buku'] = Post::all();
        return view('index',$data);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        DB::table('posts')->insert([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
        ]);
        return redirect ('home');
    }
    public function show($id)
    {
        //
    }
    public function delete($id)
    {
        //menghapus data
        DB::table('posts')->where('id',$id)->delete();

        //alihkan halaman
        return redirect('/home');
    }
    public function edit($id){
        $posts = DB::table('posts')->where('id', $id)->get();
        return view('edit', ['posts'=>$posts]);
    }

    public function update(Request $request)
    {
        DB::table('posts')->where('id' ,$request->id)->update([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
        ]);

        return redirect('/home');
    }
    
}
