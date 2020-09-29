<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Form;

use App\Blocos;
use App\Condominios;
use App\Http\Requests\RequestCondominio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ControllerCondominio extends Controller
{

    public function ListAllCondominios()
    {
        $condominios = Condominios::with([
            "blocos"
        ])->get();

        return view('listAllCondominios', [
            'condominios' => $condominios
        ]);
    }

    public function listCondominios(Condominios $condominio)
    {
        return view('listCondominios', [
            'condominio' => $condominio
        ]);
    }

    public function formAddCondominios()
    {
        return view('addCondominios');
    }

    public function storeCondominios(RequestCondominio $request)
    {
            /*$data = $request->all();
            $validator = Validator::make($data, [
                'numero' => 'required',
                'quantidade_ap' => 'required'
            ]);

            if ($validator->fails()) {
                return [
                    'message' => 'Error',
                    $validator->errors()
                ];
            } else {*/
                $condominio = new Condominios();
                $condominio->nome = $request->nome;
                $condominio->email = $request->email;
                $condominio->save();

                for ($i = 0; $i < $request->numero; $i++) {
                    $bloco = new Blocos();
                    $bloco->numero = $i + 1;
                    $bloco->quantidade_ap = $request->quantidade_ap;
                    $bloco->condominios_id = $condominio->id;
                    $bloco->save();
                }

                return redirect()->route('condominios.listAll');
            //}
    }

    public function formEditCondominios(Condominios $condominio)
    {
        $condominio->delete();
        return view('editCondominios', [
            'condominio' => $condominio
        ]);
    }

    public function edit(Condominios $condominio, Request $request)
    {
        $condominio->nome = $request->nome;

        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $condominio->email = $request->email;
        }
        $condominio->save();
        return redirect()->route('condominios.listAll');
    }

    public function destroy(Condominios $condominio)
    {
        $condominio->delete();
        return redirect()->route('condominios.listAll');
    }
}
