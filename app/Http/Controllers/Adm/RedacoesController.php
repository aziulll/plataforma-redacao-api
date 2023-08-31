<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Redacao;
use App\Http\Resources\RedacaoResource;


class RedacoesController extends Controller
{
    public function index(Redacao $redacao) {
        $redacoes = $redacao ->all();

        return view ('redacoes/correcao', [
            'redacoes' => $redacoes
        ]);
      }

      public function create(Request $request) {
        
        $request->validate([
            'titulo' => ['required', 'string'],
            'status' => ['required', 'string'],
            'body' => ['required', 'string'],
            
            
        ]);
        $post = Redacao::create([
            'titulo' => $request->get('titulo'),
            'status' => $request->get('status'),
            'body' => $request->get('body'),
            
            
        ]);
        return new RedacaoResource($post);
      }

      public function show($id) {

        $redacao = Redacao::findOrFail($id);

        // Pode retornar a redação em formato JSON
        return response()->json($redacao);
      }

      public function destroy($id){

        $redacao = Redacao::findOrFail($id);
        $redacao->delete();

        // Pode retornar uma mensagem de sucesso em formato JSON
        return response()->json(['message' => 'Redacao deleted successfully']);
      }



}
