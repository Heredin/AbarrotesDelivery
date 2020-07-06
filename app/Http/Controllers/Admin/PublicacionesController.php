<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Publicaciones;
use App\Categorias;
class PublicacionesController extends Controller
{
    public function index()
    {
        $publicaciones = Publicaciones::all();
        return view("admin.publicaciones.index", compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categorias::orderBy('nombre','asc')->pluck('nombre','id');
        return view("admin.publicaciones.create",compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion = new Publicaciones($request->all());
        if ($request->hasfile('urlfoto')) {
            $urlfoto = $request->file('urlfoto');
            $ruta = public_path('/img/publicaciones/' . $request->file('urlfoto')->getClientOriginalName());
            copy($urlfoto->getRealPath(), $ruta);
            $publicacion->urlfoto = $request->file('urlfoto')->getClientOriginalName();
        }

        $publicacion->save();
        return redirect()->route('admin.publicaciones.index');

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
        $publicacion = Publicaciones::whereId($id)->first();
        $categorias=Categorias::orderBy('nombre','asc')->pluck('nombre','id');
        return view("admin.publicaciones.edit", \compact('publicacion','categorias'));
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
        $publicacion = Publicaciones::findOrFail($id);
        $publicacion->fill($request->all());
        if ($request->hasfile('urlfoto')) {
            $urlfoto = $request->file('urlfoto');
            $ruta = public_path('/img/publicaciones/' . $request->file('urlfoto')->getClientOriginalName());
            copy($urlfoto->getRealPath(), $ruta);
            $publicacion->urlfoto = $request->file('urlfoto')->getClientOriginalName();
        }


        $publicacion->save();
        return redirect()->route('admin.publicaciones.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $publicacion = Publicaciones::findOrFail($id);
        if (file_exists(public_path('/img/publicaciones/' . $publicacion->urlfoto))) {
            unlink(public_path('/img/publicaciones/' . $publicacion->urlfoto));
        }

        $publicacion->delete();
        return redirect()->route('admin.publicaciones.index');
    }
}
