<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portadas;
use Illuminate\Http\Request;

class PortadasController extends Controller
{
    public function index()
    {
        $portadas = Portadas::all();
        return view("admin.portadas.index", compact('portadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.portadas.create");
    }

    public function store(Request $request)
    {
        $portada = new Portadas($request->all());
        if ($request->hasfile('urlfoto')) {
            $urlfoto = $request->file('urlfoto');
            $ruta = public_path('/img/portadas/' . $request->file('urlfoto')->getClientOriginalName());
            copy($urlfoto->getRealPath(), $ruta);
            $portada->urlfoto = $request->file('urlfoto')->getClientOriginalName();
        }
        $portada->save();
        return redirect()->route('admin.portadas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portada = Portadas::whereId($id)->first();
        return view("admin.portadas.edit", \compact('portada'));
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
        $portada = Portadas::findOrFail($id);
        $portada->fill($request->all());
        if ($request->hasfile('urlfoto')) {
            $urlfoto = $request->file('urlfoto');
            $ruta = public_path('/img/portadas/' . $request->file('urlfoto')->getClientOriginalName());
            copy($urlfoto->getRealPath(), $ruta);
            $portada->urlfoto = $request->file('urlfoto')->getClientOriginalName();
        }

        $portada->save();
        return redirect()->route('admin.portadas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portada=Portadas::findOrFail($id);
        if(file_exists(public_path('/img/portadas/'.$portada->urlfoto)))
        unlink(public_path('/img/portadas/'.$portada->urlfoto));
        $portada->delete();
        return redirect()->route('admin.portadas.index');
    }
}
