<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Config;
use App\Models\Endereco;
use App\Models\Propriedade;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $config = Config::first();
        $banner = Banner::all();
        $dados = Propriedade::all();
        return view(
            'index',
            [
                'data' => $config,
                'banner' => $banner,
                'propriedades' => $dados
            ]
        );
    }

    public function propriedades()
    {
        $dados = Propriedade::all();

        return view(
            'property-grid',
            [
                'propriedades' => $dados
            ]
        );
    }

    public function propriedadeDetalhe($id)
    {
        $propriedade = Propriedade::findOrFail($id);
        $imagens = json_decode($propriedade->images);
        $endereco = Endereco::findOrFail($propriedade->endereco_id);

        return view('propriedade-detalhe', [
            'propriedade' => $propriedade,
            'endereco' => $endereco,
            'imagens' => $imagens
        ]);
    }
}
