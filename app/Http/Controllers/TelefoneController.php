<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 03/12/2015
 * Time: 16:13
 */

namespace LumenAgenda\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LumenAgenda\Entities\Pessoa;
use LumenAgenda\Entities\Telefone;

class TelefoneController extends Controller
{

    public function create($idPessoa)
    {
        $pessoa = Pessoa::find($idPessoa);
        return view('telefone.create', compact('pessoa'));
    }

    public function store(Request $request, $idPessoa)
    {
        $pessoa = Pessoa::find($idPessoa);
        $validator = Validator::make($request->all(), [
            'descricao' => 'required|in:Comercial,Celular,Residencial,Recados',
            'codpais' => 'required|integer|min:1|max:197',
            'ddd' => 'required|integer|min:11|max:91',
            'prefixo' => 'required|integer|digits_between:4,5',
            'sufixo' => 'required|integer|digits:4',
        ]);

        if ($validator->fails()) {
            return redirect()->route('telefone.create', ['idPessoa' => $pessoa->id])
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        $data['pessoa'] = $pessoa;

        Telefone::create($data);
        return redirect()->route('telefone.create', ['idPessoa' => $pessoa->id]);
    }

    public function delete($id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('pessoa', 'telefone'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }
}