@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Criar @endslot
@slot('title') Principal  @endslot
@endcomponent

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Novo Banner</h1>
        </div>
        <form action="{{ route('banner-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-md-12 d-flex gap-3 align-items-center">
                    <div class="col-md-4">
                        <label class="form-label">
                            Titulo do Banner <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="titulo" class="form-control" placeholder="EX: OPORTINUDADE" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label class="form-label">
                            SubTitulo <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="subtitulo" class="form-control" placeholder="EX: PROMOÇÃO" required>
                    </div>


                    <div class="col-md-3">
                        <label class="form-label">
                            Titulo do Botão <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="texto_botao" class="form-control" placeholder="EX: FALAR COM ESPECIALISTA" required>
                    </div>

                    
                </div>
                {{-- INPUT IMG --}}
                    <div class="col-md-4 mt-3">
                        <label class="form-label">
                            Imagem do Banner <span class="text-danger">*</span>
                        </label>
                        <input class="form-control" type="file" name="image" accept=".png/.jpg" required>
                        <p class="text-muted mt-1">Reslução ideal para o banner: 1920 x 960</p>
                    </div> 
                     
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Salvar</button>
                    <a href="{{ route('banner-index') }}" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>
                
            </div>
        </form>

        <div class="py-3 d-flex justify-content-center col-md-8">
            <img class="" src="{{asset('build/images/banner-exem.svg')}}" alt="" style="width: 500px">
        </div>
        

    </div>
    
</div>
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
