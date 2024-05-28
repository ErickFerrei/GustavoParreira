@extends('layouts.master')
@section('title')
@section('css')
    <link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet"
        href="{{ URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Configuração @endslot
@slot('title') Principal  @endslot
@endcomponent

<div class="container">


    <div class="card">
        <div class="card-header">
            <h1>Atualizando dados da Propriedade</h1>
        </div>

        <form action="{{ route('propriedade-update', ['id'=>$propriedade->id ]) }}" method="POST" enctype="multipart/form-data" class="form-group">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">TITULO:</label>

                            <input type="text" name="titulo" class="form-control" value="{{ $propriedade['titulo'] }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">TIPO:</label>
                        <input type="text" name="tipo" class="form-control" value="{{$propriedade->tipo}}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">QUARTOS:</label>
                        <input type="text" name="quarto" class="form-control" value="{{$propriedade->quarto}}">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">STATUS:</label>
                        <input type="text" name="status" class="form-control" value="{{$propriedade->status}}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="form-label">GARAGEM:</label>
                        <input type="text" name="garagem" class="form-control" value="{{$propriedade->garagem}}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">ÁREA:</label>
                        <input type="text" name="area" class="form-control" value="{{$propriedade->area}}M²">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">ENDEREÇO:</label>
                        <select class="form-select" aria-label="Default select example" name="endereco_id">
                            @foreach ($enderecos as $item)
                                <option value="{{$item->id}}">{{$item->cidade}}-{{$item->uf}}, {{$item->rua}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">BANHEIRO:</label>
                        <input type="text" name="banheiro" class="form-control" value="{{$propriedade->banheiro}}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">DESCRIÇÃO:</label>
                        <textarea name="descricao" cols="50" rows="10" class="form-control">{{$propriedade->descricao}}</textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="dropzone">
                            <div class="fallback">
                                <input name="images[]" type="file"  accept="image/png, image/jpeg" multiple>
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>
                                <h4>Solte os arquivos aqui ou clique para fazer upload.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card ">
                    <div class="card-body">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>IMAGENS</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($images as $image)
                                <tr>
                                    <td>
                                        <img src="{{ $image }}" alt="Imagem da Propriedade" style="width: 90px">
                                    </td>
                                    <td>
                                        <form action="#" method="POST">
                                            @csrf
                                            <input type="hidden" name="image_url" value="{{ $image }}">
                                            <button type="submit" class="btn btn-sm btn-danger remove-item-btn">Excluir</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Atualizar</button>
                    <a href="{{ route('propriedade-index') }}" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>
            </div>
        </form>

    </div>

</div>
@endsection

@section('script')
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}">
    </script>
    <script
        src="{{ URL::asset('build/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
    </script>
    <script
        src="{{ URL::asset('build/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script src="{{ URL::asset('build/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection


