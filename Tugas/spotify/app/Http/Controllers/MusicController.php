<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musik = Music::all();
        return view("home", ["musik"=>$musik]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    public function das(){
        $musik = Music::all();
        return view("dash", ["musik"=>$musik]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file= $request->image->getClientOriginalName();
        $file_musik= $request->musik->getClientOriginalName();
        if($request->file('image')){
            Music::create([
                 "nama_musisi" => request('nama_musisi'),
                 "judul_musik" => request('judul_musik'),
                 "musik" => $request->file('musik')->storeAs('musik', $file_musik),
                 "lirik_musik" => request('lirik_musik'),
                 'image' => $request->file('image')->storeAs('image', $file)
             ]);
         
           
             }
             return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musik = Music::find($id);
        return view('detail',["musik"=>$musik]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit',[
            'musik' => Music::find($id)
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
        $file= $request->image->getClientOriginalName();
        $file_musik= $request->musik->getClientOriginalName();
        if($request->file('image')){
        Music::find($id)->update([
            "nama_musisi" => request('nama_musisi'),
            "judul_musik" => request('judul_musik'),
            "musik" => $request->file('musik')->storeAs('musik', $file_musik),
            "lirik_musik" => request('lirik_musik'),
            'image' => $request->file('image')->storeAs('image', $file)
             ]);
         
           
             }
             return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musik = Music::find($id);
        $musik->delete();
        return redirect("/home");
    }
}
