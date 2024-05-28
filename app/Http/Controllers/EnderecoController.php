<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {
        $dados = Endereco::all();
        return view('master.endereco.index', ['dados' => $dados]);
    }

    public string $cep = '';

    public function create()
    {

        return view('master.endereco.create');
    }


    public function store(Request $request)
    {
        $dados = $request->all();

        // BEGIN VERIFICAÇÃO SE TEM MAIS DE UM CEP
        $existeCep = Endereco::where('cep', $dados['cep'])->first();
        if ($existeCep) {
            return redirect()->route('endereco-index')->with('error', 'Este CEP já está cadastrado😬!');
        }
        // END VERIFICAÇÃO SE TEM MAIS DE UM CEP

        // Se o CEP não existe, então criar um novo registro
        Endereco::create($dados);
        return redirect()->route('endereco-index')->with('success', 'Endereço salvo com sucesso📍!');
    }



    public function edit($id)
    {
        $data = Endereco::where('id', $id)->first();

        if (!empty($data)) {
            return view('master.endereco.edit', ['dados' => $data]);
        }
        return redirect()->route('endereco-index');
    }


    //IRAR ATUALIZAR O REGISTRO 
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Endereco::where('id', $id)->update($dados);

        return redirect()->route('endereco-index')->with('success', 'Endereço atualizado com sucesso 🥳!');
    }


    public function destroy($id)
    {
        Endereco::where('id', $id)->delete();
        return redirect()->route('endereco-index')->with('error', 'Endereço excluido com sucesso 🥳!');
    }
}
