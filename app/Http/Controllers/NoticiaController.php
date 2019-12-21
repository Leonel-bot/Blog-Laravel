<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Comentario;
use App\Noticia;

class NoticiaController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \App\Noticia  $noticia
     */
    public function index()
    {
        $noticias= Noticia::orderBy('id' ,'DESC')->paginate(6);

        return view('noticia.lista',compact('noticias'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        
        $noticia= new Noticia();

        //guardo el archivo en la carpeta public
        $ruta= $req->file('foto')->store('public');
        //recorto la ruta y obtengo solo el nombre del archivo
        $nombreFoto= basename($ruta);
        //guardo el archivo
        $noticia->foto= $nombreFoto;

        $noticia->title= $req['title'];
        $noticia->subtitle= $req['subtitle'];
        $noticia->cuerpo= $req['cuerpo'];
        $noticia->user_id= \Auth::user()->id;

        $noticia->save();
        return redirect('/Noticias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia= Noticia::findOrFail($id);
        $noticia->comentarios;
        return view('noticia.detalle',compact('noticia','id'));
    }
    public function editar($id)
    {
        $noticia= Noticia::findOrFail($id);
        return view('noticia.editar',compact('noticia','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //buscar que queremos modificar
        $id= $req['id'];
        
        $noticia= Noticia::findOrFail($id);
        
        
        //guardo el archivo en la carpeta public
        $ruta= $req->file('foto')->store('public');;
        //recorto la ruta y obtengo solo el nombre del archivo
        $nombreFoto= basename($ruta);
        //guardo el archivo
        $noticia->foto= $nombreFoto;

        $noticia->title= $req['title'];
        $noticia->subtitle= $req['subtitle'];
        $noticia->cuerpo= $req['cuerpo'];

        $noticia->save();
        return redirect('/Noticias');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $id= $req['id'];
        $noticiaDelet = Noticia::findOrFail($id);
        //$noticiaDelet = Noticia::findOrFail($req['id']);
        $noticiaDelet->delete();
        return redirect('/Noticias');
    }

}
