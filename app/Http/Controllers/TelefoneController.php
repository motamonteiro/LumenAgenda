<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 03/12/2015
 * Time: 16:13
 */

namespace LumenAgenda\Http\Controllers;


use LumenAgenda\Entities\Telefone;

class TelefoneController extends Controller
{

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