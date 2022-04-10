<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pertanyaan;
use App\kategori;
use File;

class pertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $pertanyaan = pertanyaan::all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();

        return view('pertanyaan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            'kategori_id' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('images'), $imageName);

        $pertanyaan = new pertanyaan;
        $pertanyaan->judul = $request->judul;
        $pertanyaan->content = $request->content;
        $pertanyaan->file = $imageName;
        $pertanyaan->kategori_id = $request->kategori_id;
        $pertanyaan->save();

        return redirect('/pertanyaan');
        
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
        {
            $request->validate([
                'judul' => 'required',
                'content' => 'required',
                'kategori_id' => 'required',
                'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->file->extension();  
       
            $request->file->move(public_path('images'), $imageName);
    
            $pertanyaan = new pertanyaan;
            $pertanyaan->judul = $request->judul;
            $pertanyaan->content = $request->content;
            $pertanyaan->file = $imageName;
            $pertanyaan->kategori_id = $request->kategori_id;
            $pertanyaan->save();
    
            return redirect('/pertanyaan');
            
        }
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
