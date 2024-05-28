@extends('layouts.master')
@section('title') @lang('translation.starter') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Configuração @endslot
@slot('title') Principal @endslot
@endcomponent

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Editar Banner</h1>
        </div>
        <form action="{{ route('banner-update', ['id'=>$banner->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="col-md-12 d-flex gap-3 align-items-center">
                    <div class="col-md-4">
                        <label class="form-label">
                            Titulo do Banner <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="titulo" class="form-control" value="{{$banner->titulo}}" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label class="form-label">
                            SubTitulo <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="subtitulo" class="form-control" value="{{$banner->subtitulo}}" required>
                    </div>


                    <div class="col-md-3">
                        <label class="form-label">
                            Titulo do Botão <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="texto_botao" class="form-control" value="{{$banner->texto_botao}}" required>
                    </div>

                    
                </div>
                {{-- INPUT IMG --}}
                <div class="col-md-4 mt-3">
                    <label class="form-label">
                        Imagem do Banner
                    </label>
                    <input class="form-control" type="file" name="image" accept=".png">
{{-- ------------------------------------------------------------------------------------------------------------------------------ --}}
                    <div class="col-md-4 bg-primary mt-4 rounded">
                        <img src="{{ asset('images/banner/' . $banner->image) }}" alt="Logo" style="width: 150px">
                    </div>
                </div>

                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Salvar</button>
                    <a href="{{ route('banner-index') }}" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>

            </div>
        </form>




    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection