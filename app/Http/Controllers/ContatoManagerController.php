<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoManagerController extends Controller
{
    public function index()
    {
        $contatos = Contato::orderBy('nome', 'ASC')->paginate(5);

        return view('contatosmanager.index', compact('contatos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->status = true;
        Contato::findOrFail($id)->update($contato);

        return redirect()->route('contatosmanager.index')->with('success', 'Mensagem visualizada!');
    }

    public function show($id)
    {
        $contato = Contato::findOrFail($id);

        $contato->status = true;
        $contato->save();

        return view('contatosmanager.show', compact('contato'));
    }

    public function destroy($id)
    {
        Contato::findOrFail($id)->delete();

        return redirect()->route('contatosmanager.index')->with('success', 'Mensagem excluida com sucesso!');
    }
}
