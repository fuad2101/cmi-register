<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggal = date('Ymd');
        $cek = User::count();
        $urut = '00001';

        if($cek == 0){
            $gabung= $tanggal.$urut;
        }else{
            $last = User::all()->last();
            $nomor = str_pad(substr($last->kode_registrasi,-4)+1,4,"0",STR_PAD_LEFT) ;
            $gabung = $tanggal.$nomor;
        }

        return view('index')->with('gabung',$gabung);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            "kode_registrasi"=>$request->kode_registrasi,
            "nama"=>$request->nama,
            "ttl"=>$request->ttl,
            "gender"=>$request->gender,
            "pendidikan"=>$request->pendidikan,
            ];

        //dd($data);
        User::create($data);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
