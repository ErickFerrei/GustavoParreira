@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Configuração @endslot
@slot('title') Principal  @endslot
@endcomponent

<div class="container">
    

    <div class="card">
        <div class="card-header">
            <h1>Editar Dados</h1>
        </div>
        <form action="{{ route('config-update',['id'=>$config->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="col-md-12 d-flex gap-3 align-items-center">
                    <div class="col-md-4">
                        
                        <label class="form-label">
                            Nome do Sistema
                        </label>
                        <input type="text" name="nome" class="form-control " value="{{$config->nome}}" required>
                    </div>
                    {{-- INPUT IMG --}}
                    <div class="col-md-4">
                        <label class="form-label">
                            Logo marca
                        </label>
                        <input class="form-control" type="file" name="logo" accept=".png">
                    </div>

                    
                </div>

                <div class="col-md-4 bg-primary mt-4 rounded">
                    <img src="{{ asset('images/' . $config->logo) }}" alt="Logo" style="width: 150px">
                </div>
                
                <div class="mt-4 d-flex gap-3">
                    <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Atualizar</button>
                    <a href="{{ route('config-index') }}" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                </div>
                
            </div>
        </form>

    </div>

</div>
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
