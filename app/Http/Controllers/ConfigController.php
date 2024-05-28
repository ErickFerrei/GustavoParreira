<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ConfigController extends Controller
{
    //IRAR ME LISTAR TODOS OS REGISTROS
    public function index()
    {
        $dados = Config::all();
        return view('master.config.index', ['config' => $dados]);
    }
    //IRAR ME RETORNAR A VIEW
    public function create()
    {
        return view('master.config.create');
    }
    //IRAR GRAVAR TODOS OS DADOS NO BANCO DE DADOS
    public function store(Request $request)
    {
        $existeRe = Config::first();
        if ($existeRe) {
            return redirect()->route('config-index')->with('error', 'Já existe uma configuração criada!');
        }

        $data = $request->all();

        // Salvar a imagem
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo.png'; // Nome fixo para a imagem
            $filePath = public_path('/images/');
            $file->move($filePath, $filename);
            $data['logo'] = $filename;
        }

        // Salvar os dados no banco de dados
        Config::create($data);

        return redirect()->route('config-index')->with('success', 'Configuração criada com sucesso!');
    }

    //IRAR PUXAR O REGISTRO APARTIR DO ID 
    public function edit($id)
    {
        $data = Config::where('id', $id)->first();

        if (!empty($data)) {
            return view('master.config.edit', ['config' => $data]);
        }
        return redirect()->route('config-index');
    }


    //IRAR ATUALIZAR O REGISTRO 
    public function update(Request $request, $id)
    {
        $data = [];

        // Verifica se o campo 'nome' foi enviado no formulário e adiciona ao array de dados
        if ($request->has('nome')) {
            $data['nome'] = $request->nome;
        }

        // Verifica se um novo arquivo de logo foi enviado no formulário e o salva
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo.png'; // Nome fixo para a imagem
            $filePath = public_path('/images/');
            $file->move($filePath, $filename);
            $data['logo'] = $filename;
        }

        // Atualiza somente os campos que foram enviados no formulário
        Config::where('id', $id)->update($data);

        return redirect()->route('config-index')->with('success', 'Configuração atualizado com sucesso!');
    }

    //IRAR DELETAR O REGISTRO ATRAVES DO ID
    public function destroy($id)
    {
        Config::where('id', $id)->delete();
        return redirect()->route('config-index')->with('error', 'Configuração deletada com sucesso!');
    }
}
