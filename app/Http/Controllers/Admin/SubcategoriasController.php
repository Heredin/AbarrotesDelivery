<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subcategorias;
use Session;
class SubcategoriasController extends Controller
{
    public function index()
    {
        if(!empty(Session::get('categorias_id'))){
        $subcategorias= Subcategorias::whereCategorias_id(Session::get('categorias_id'))->get();
        return view("admin.subcategorias.index",compact('subcategorias'));
        }
    }


    public function create()
    {
        return view("admin.subcategorias.create");
    }

    public function store(Request $request)
    {
     $subcategoria= new Subcategorias($request->all());
     if($request->hasfile('urlfoto')){
     $urlfoto=$request->file('urlfoto');
     $ruta =public_path('/img/subcategorias/'.$request->file('urlfoto')->getClientOriginalName());
     copy($urlfoto->getRealPath(),$ruta);
     $subcategoria->urlfoto=$request->file('urlfoto')->getClientOriginalName();
     }
    $subcategoria->categorias_id= Session::get('categorias_id');
                                 $subcategoria->save();
                                 return redirect()->route('admin.subcategorias.index');

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
        $subcategoria= Subcategorias::whereId($id)->first();
        return view("admin.subcategorias.edit",\compact('subcategoria'));
    }
    public function show($id)
    {

       Session::put('subcategorias_id',$id);
        return redirect('/admin/productos');
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
        $subcategoria= Subcategorias::findOrFail($id);
        $subcategoria->fill($request->all());
        if($request->hasfile('urlfoto')){
        $urlfoto=$request->file('urlfoto');
        $ruta =public_path('/img/subcategorias/'.$request->file('urlfoto')->getClientOriginalName());
        copy($urlfoto->getRealPath(),$ruta);
        $subcategoria->urlfoto=$request->file('urlfoto')->getClientOriginalName();
        }
                                    $subcategoria->save();
                                    return redirect()->route('admin.subcategorias.index');

    }


    public function destroy($id)
    {
$subcategoria=Subcategorias::findOrFail($id);
if(file_exists(public_path('/img/subcategorias/'.$subcategoria->urlfoto)))
unlink(public_path('/img/subcategorias/'.$subcategoria->urlfoto));
$subcategoria->delete();
return redirect()->route('admin.subcategorias.index');
    }
}
