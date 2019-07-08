<?php

namespace App\Http\Controllers\Api;

use App\Info;
use App\Galeria;
use App\Nota;
use App\Noticia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\InfoResource;
use App\Http\Resources\GaleriaResource;
use App\Http\Resources\NoticiaResource;

class PageController extends Controller
{
    //
    public function galeriaportada()
    {
        return GaleriaResource::collection(Galeria::where('active', '=', '1')->orderBy('id', 'DESC')->limit(3)->get());
        // $galerias = Galeria::where('active', '=', '1')->orderBy('id', 'DESC')->limit(6)->get();
        // return response()->json([
        //     'galerias'    => $galerias,
        // ], 200);
    }

    public function notasportada()
    {
        //return InfoResource::collection(Info::all());
        $notas = Nota::where('type', '=', 'P')->orderBy('id', 'DESC')->limit(6)->get();
        return response()->json([
            'notas'    => $notas,
        ], 200);
    }

    public function infofooter()
    {
        //return InfoResource::collection(Info::all());
        $infos = Info::get();
        return response()->json([
            'infos'    => $infos,
        ], 200);
    }

    public function noticias()
    {
        return NoticiaResource::collection(Noticia::where('type', '=', 'P')->limit(21)->orderBy('id', 'DESC')->get());
        // $noticias = Nota::where('type', '=', 'P')->orderBy('id', 'DESC')->get();
        // return response()->json([
        //     'noticias'    => $noticias,
        // ], 200);
    }

    public function noticiashow($id)
    {
        //return new NoticiaResource($id);
        $noticia = Nota::find($id);
        return response()->json([
            'noticia'    => $noticia,
        ], 200);

    }

    public function galerias()
    {
        return GaleriaResource::collection(Galeria::where('active', '=', '1')->orderBy('id', 'DESC')->limit(9)->get());
        // $galerias = Galeria::get();
        // return response()->json([
        //     'galerias'    => $galerias,
        // ], 200);
    }

}
