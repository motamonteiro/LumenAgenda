<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 02/12/2015
 * Time: 11:48
 */

namespace LumenAgenda\Http\Controllers;


use Illuminate\Http\Request;
use LumenAgenda\Entities\Pessoa;

class AgendaController extends Controller
{
    public function index($letra = "A")
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

    public function busca(Request $request)
    {
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)) {
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")
                ->orWhere('apelido', 'like', "%{$busca}%")
                ->get();
        }
        return view('agenda', compact('pessoas'));
    }

}