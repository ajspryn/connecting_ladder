<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Post;
use App\Models\Volunteer;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universitas=Universitas::latest();

        if(Request('pencarian')){
            $universitas->where('nama_universitas', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('alamat', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('provinsi', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('kabkota', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('kecamatan', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('desa', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('deskripsi', 'like', '%'.Request('pencarian').'%');
        }

        return view('universitas.index', [
            'jumlah_universitas'=>Universitas::select()->count(),
            'universitass'=>$universitas->select()->get(),
            'volunteer'=>Volunteer::select()->get(),
            'forum'=>DB::table('users')->join('forums','users.id','=','forums.user_id')->join('volunteers','users.id','=','volunteers.user_id')->select()->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universitas.tambah', [

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

        $request -> validate([
            'logo'=>['image','required'],
            'foto_cover'=>['image','nullable'],
            'nama_universitas'=>'required',
            'deskripsi'=>'required',
            'provinsi'=>'required',
            'kabkota'=>'required',
            'kecamatan'=>'required',
            'desa'=>'required',
            'alamat'=>'required',
            'alamat_email'=>'nullable',
            'no_telp'=>'nullable',
        ]);

        $input=$request->all();

        if($request->file('logo')){
            $input['logo'] = $request->file('logo')->store('logo_universitas');
        }
        if($request->file('foto_cover')){
            $input['foto_cover'] = $request->file('foto_cover')->store('foto_cover_universitas');
        }

        Universitas::create($input);
        return redirect('/universitas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('universitas.lihat', [
            'universitas'=>Universitas::select()->where('id',$id)->get()->first(),
            'volunteer'=>Volunteer::select()->where('universitas_id',$id)->get(),
            'forums'=>DB::table('users')->join('forums','users.id','=','forums.user_id')->join('volunteers','users.id','=','volunteers.user_id')->select()->where('universitas_id',$id)->get(),
            'volunteer_universitass'=>DB::table('users')->join('volunteers','users.id','=','volunteers.user_id')->select()->where('universitas_id',$id)->get(),
            'post'=>Post::select()->get(),
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
        return view('universitas.edit', [
            'universitas'=>Universitas::select()->where('id',$id)->get()->first(),
            'volunteer'=>Volunteer::select()->where('universitas_id',$id)->get(),
            'forum'=>DB::table('users')->join('forums','users.id','=','forums.user_id')->join('volunteers','users.id','=','volunteers.user_id')->select()->where('universitas_id',$id)->get(),
        ]);
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

        $validate= [
            'logo'=>['image','required'],
            'foto_cover'=>['image','nullable'],
            'nama_universitas'=>'required',
            'deskripsi'=>'required',
            'provinsi'=>'required',
            'kabkota'=>'required',
            'kecamatan'=>'required',
            'desa'=>'required',
            'alamat'=>'required',
            'alamat_email'=>'nullable',
            'no_telp'=>'nullable',
        ];

        $input=$request->validate($validate);

        if($request->file('logo')){
            if($request->logolama){
                Storage::delete($request->logolama);
            }
            $input['logo'] = $request->file('logo')->store('logo_universitas');
        }
        if($request->file('foto_cover')){
            if($request->foto_coverlama){
                Storage::delete($request->foto_coverlama);
            }
            $input['foto_cover'] = $request->file('foto_cover')->store('foto_cover_universitas');
        }

        Universitas::where('id',$id)->update($input);
        return redirect('/universitas');

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
