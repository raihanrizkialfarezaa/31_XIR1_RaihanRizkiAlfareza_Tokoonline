<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liga;

class LigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liga = Liga::all();
        return view('admin.liga.index',compact('liga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.liga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('ligas');
        Liga::create($data);
        return redirect()->route('liga.index');
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
        $liga = Liga::find($id);
        return view('admin.liga.edit', compact('liga'));
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
        $liga = Liga::find($id);
        if (!empty($request->file('gambar'))) {
            $data = $request->all();
            Storage::delete($liga->gambar);
            $data['gambar'] = $request->file('gambar')->store('ligas');
            $liga->update($data);
        } else {
            $data = $request->all();
            $liga->update($data);
        }
        
        return redirect()->route('liga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $liga = Liga::find($id);
        $liga->delete();
        return redirect()->back();
    }
}
