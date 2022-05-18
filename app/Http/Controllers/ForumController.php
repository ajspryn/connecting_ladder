<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Komentar_forum;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum=Forum::latest();

        if(Request('pencarian')){
            $forum->where('judul', 'like', '%'.Request('pencarian').'%')->orwhere('isi', 'like', '%'.Request('pencarian').'%')->orwhere('excerpt', 'like', '%'.Request('pencarian').'%');
        }

        return view('forum.index', [
            'forums'=>$forum->with('user')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.tambah', [
            'forums'=>Forum::select()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request -> validate([
            'user_id'=>'required',
            'judul'=>'required',
            'kategori'=>'required',
            'isi'=>'required',
            'slug'=> 'nullable',
            'foto'=> ['image','nullable'],
        ]);
        $validate['excerpt']=Str::limit(strip_tags($request->isi), 200);

        // $input=$request->all();

        Forum::create($validate);
        return redirect('forum')->with('success', 'Data anda berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('forum.lihat', [
            'forum'=>Forum::select()->where('id',$id)->get()->first(),
            'komentars'=>Komentar_forum::select()->where('forum_id',$id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
