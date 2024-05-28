<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $dados = Banner::all();
        return view('master.banner.index', ['banner' => $dados]);
    }

    //IRAR ME RETORNAR A VIEW
    public function create()
    {
        return view('master.banner.create');
    }



    //IRAR GRAVAR TODOS OS DADOS NO BANCO DE DADOS
    public function store(Request $request)
    {
        $data = $request->all();

        // Salvar a imagem
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName(); // Nome fixo para a imagem
            $filePath = public_path('/images/banner/');
            $file->move($filePath, $filename);
            $data['image'] = $filename;
        }

        // Salvar os dados no banco de dados
        Banner::create($data);

        return redirect()->route('banner-index')->with('success', 'Configuração criada com sucesso!');
    }


    public function edit($id)
    {
        $data = Banner::where('id', $id)->first();

        if (!empty($data)) {
            return view('master.banner.edit', ['banner' => $data]);
        }
        return redirect()->route('banner-index');
    }

    public function update(Request $request, $id)
    {
        $data = [];

        // Verifica se o campo 'nome' foi enviado no formulário e adiciona ao array de dados
        if ($request->has('titulo')) {
            $data['titulo'] = $request->titulo;
            $data['subtitulo'] = $request->subtitulo;
            $data['texto_botao'] = $request->texto_botao;
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
        Banner::where('id', $id)->update($data);

        return redirect()->route('banner-index')->with('success', 'Banner atualizado com sucesso!');
    }

    //IRAR DELETAR O REGISTRO ATRAVES DO ID
    public function destroy($id)
    {
        Banner::where('id', $id)->delete();
        return redirect()->route('banner-index')->with('error', 'Banner deletada com sucesso!');
    }
}
