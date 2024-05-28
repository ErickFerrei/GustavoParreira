<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Imagem;
use App\Models\Propriedade;
use Illuminate\Http\Request;

class PropriedadeController extends Controller
{
    public function index()
    {
        $propriedade = Propriedade::all();
        return view('master.propriedade.index', ['propriedades' => $propriedade]);
    }

    public function create()
    {
        $date = Endereco::all();
        return view('master.propriedade.create', ['enderecos' => $date]);
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'titulo' => 'required',
            'tipo' => 'required',
            'quarto' => 'required',
            'status' => 'required',
            'garagem' => 'required|numeric',
            'area' => 'required|numeric',
            'endereco_id' => 'required|integer',
            'banheiro' => 'required|numeric',
            'descricao' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:25600'
        ]);

        $imageUrls = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imageUrls[] = asset('images/' . $imageName);
            }
        }


        // CONVERTENDO O ARRAY DE IMAGES PARA JSON
        $imageUrlsJson = json_encode($imageUrls);

        // ATUALIZANDO OS DADOS PARA JSON
        $validatedData['images'] = $imageUrlsJson;

        // SALVANDO OS DADOS
        Propriedade::create($validatedData);

        return redirect()->route('propriedade-index')->with('success', 'Propriedade salva com sucesso !');
    }


    public function edit($id)
    {
        $propriedade = Propriedade::find($id);
        $enderecos = Endereco::all();

        if ($propriedade) {
            $images = json_decode($propriedade->images);
            return view('master.propriedade.edit', compact('propriedade', 'enderecos', 'images'));
        }

        return redirect()->route('propriedade-index')->with('error', 'Propriedade não encontrada');
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->all();

        // Array para armazenar as URLs das imagens
        $imageUrls = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imageUrls[] = asset('images/' . $imageName);
            }
        }

        // Se houver URLs de imagens, converte para JSON
        if (!empty($imageUrls)) {
            $validatedData['images'] = json_encode($imageUrls);
        }

        // Encontra a propriedade
        $propriedade = Propriedade::findOrFail($id);

        // Preenche apenas os campos que foram modificados
        $propriedade->fill($validatedData)->save();

        return redirect()->route('propriedade-index')->with('success', 'Propriedade atualizada com sucesso!');
    }


    public function destroy($id)
    {
        Propriedade::where('id', $id)->delete();
        return redirect()->route('propriedade-index')->with('error', 'Propriedade deletada com sucesso!');
    }
}
