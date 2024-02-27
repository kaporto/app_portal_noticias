<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenoticiaRequest;
use App\Http\Requests\UpdatenoticiaRequest;
use App\Models\Noticia;
use Illuminate\Support\Facades\Cache;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$noticias = Noticia::orderByDesc('created_at')->limit(10)->get();
        $noticias = [];
        //criar um dado dentro do bd Redis
        Cache::put('site','karineporto.com.br',10);
        //chave, valor, tempo em segundos para expirar o dado em memoria

        //recuperar o dado dentro do bd redis
        $site = Cache::get('site');
        echo $site;
        return view('noticia',['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenoticiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenoticiaRequest $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
