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
            <h1>Inserir Dados</h1>
        </div>
        <form action="{{ route('propriedade-store') }}" method="POST" enctype="multipart/form-data" class="form-group">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">TITULO:</label>
                        <input type="text" name="titulo" class="form-control" placeholder="CASA EM JOÃO PESSOA" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">TIPO:</label>
                        <input type="text" name="tipo" class="form-control" placeholder="Casa / Apartamento" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">QUARTOS:</label>
                        <input type="text" name="quarto" class="form-control" placeholder="03" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">STATUS:</label>
                        <input type="text" name="status" class="form-control" placeholder="ATIVO / INATIVO" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <label class="form-label">GARAGEM:</label>
                        <input type="text" name="garagem" class="form-control" placeholder="01" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">ÁREA:</label>
                        <input type="text" name="area" class="form-control" placeholder="50M²" required>
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
                        <input type="text" name="banheiro" class="form-control" placeholder="03" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">DESCRIÇÃO:</label>
                        <textarea name="descricao" cols="50" rows="10" class="form-control"></textarea>
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

                         {{-- <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded">
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{URL::asset('build/images/new-document.png')}}" alt="Dropzone-Image" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="pt-1">
                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-3">
                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>  --}}
                        
                    </div>
                </div>
                <p class="text-muted mt-1">Reslução ideal para o Propriedade: 600 x 800</p>
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Incluir</button>
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


