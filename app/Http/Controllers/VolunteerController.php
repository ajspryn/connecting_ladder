<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Universitas;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=User::select();
        $volunteer=DB::table('users')->join('volunteers','users.id','=','volunteers.user_id');

        if(Request('pencarian')){
            $volunteer->where('name', 'like', '%'.Request('pencarian').'%')
                        ->orwhere('email', 'like', '%'.Request('pencarian').'%');
            $user->where('email', 'like', '%'.Request('pencarian').'%');
        }

        return view('volunteer.index', [
            'forums'=>DB::table('users')->join('forums','users.id','=','forums.user_id')->join('volunteers','users.id','=','volunteers.user_id')->select()->get(),
            'volunteers'=>$volunteer->select()->get(),
            'post'=>Post::select()->get(),
            'users'=>$user->select()->get(),
            'universitass'=>Universitas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::select();
        if(Request('pencarian')){
            $user->where('email', 'like', '%'.Request('pencarian').'%');
        }

        return view('volunteer.tambah', [
            'users'=>$user->select()->get(),
            'universitass'=>Universitas::all(),
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
            'universitas_id'=>'required',
            'user_id'=>'required',
            'role'=>'nullable',
            'status'=>'nullable',
        ]);

        $input=$request->all();

        Volunteer::create($input);
        User::where('id',$request->user_id)->update(['role'=>1]);
        return redirect('/volunteer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('volunteer.lihat', [
            'users'=>User::select()->where('id',$id)->get(),
            'universitass'=>Universitas::all(),
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
