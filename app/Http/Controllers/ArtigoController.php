<?php

namespace App\Http\Controllers;

use App\Artigo;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ArtigoController extends Controller {

    public function getNovo(){
        return view("artigo.novo");
    }

    public function postNovo(Requests\ArtigoRequest $request){
        try {
            Artigo::updateOrCreate([ "id"=> ($request->exists("id") ? $request->get("id") : -1) ], $request->except("_token"));
            return Redirect::back()->with("success", "Artigo Adicionado com Sucesso!");
        }catch (\Exception $e){
            return Redirect::back()->withErros(["Não foi possível adicionar um novo Artigo"]);
        }
    }

    public function getListar(){
        $artigos = Artigo::all();
        return view("artigo.listar", compact("artigos"));
    }

    public function getEditar($id){
        try {
            $artigo = Artigo::find($id);
            return view("artigo.novo", compact("artigo"));
        }catch (\Exception $e){
            return Redirect::back()->withErros(["Não foi possível editar o Artigo"]);
        }
    }

    public function getExcluir($id){
        try {
            $artigo = Artigo::find($id);
            $artigo->delete();
            return Redirect::back()->with("success", "Artigo Excluído com Sucesso!");
        }catch (\Exception $e){
            return Redirect::back()->withErros(["Não foi possível excluir o Artigo"]);
        }
    }

}
