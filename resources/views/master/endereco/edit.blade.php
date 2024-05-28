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
        <form action="{{ route('endereco-update', ['id'=>$dados->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
         
                    <div class="col-md-12 d-flex gap-3 justify-content-center align-items-center"> 
                        <div class="col-md-3">
                            <label class="form-label">
                                CEP
                            </label>
                            <input type="text" name="cep" id="cep" class="form-control text-uppercase" placeholder="57040-555" value="{{$dados->cep}}" required>
                            
                        </div> 
    
                        <div class="col-md-4">
                            <label class="form-label">
                                CIDADE
                            </label>
                            <input type="text" name="cidade" id="cidade" class="form-control text-uppercase" placeholder="MACEIÓ" value="{{$dados->cidade}}" required>
                        </div>
    
                        <div class="col-md-3">
                            <label class="form-label">
                                BAIRRO
                            </label>
                            <input type="text" name="bairro" id="bairro" class="form-control text-uppercase" placeholder="ANTARES" value="{{$dados->bairro}}" required>
                        </div> 
    
    
                        
                    </div>
    
                    <div class="col-md-12 d-flex justify-content-center gap-3 mt-3 align-items-center">
                        <div class="col-md-3">
                           <label class="form-label">
                               ESTADO
                           </label>
                           <input type="text" name="estado" id="uf" class="form-control text-uppercase" placeholder="AL"  value="{{$dados->estado}}"required>
                       </div>
   
                       <div class="col-md-4">
                           <label class="form-label">
                               RUA
                           </label>
                           <input type="text" name="rua" id="logradouro" class="form-control text-uppercase" placeholder="RUA AT" value="{{$dados->rua}}" required>
                       </div>
   
                       <div class="col-md-3">
                           <label class="form-label">
                               REFERENCIA
                           </label>
                           <input type="text" name="referenia"  class="form-control text-uppercase" placeholder="AO LADO COVENIENCIA"  value="{{$dados->referenia}}"required>
                       </div>
   
                       
   
                   </div>

                
                
                   <div class="mt-4 d-flex gap-3">
                        <button type="submit" class="btn rounded-pill btn-primary waves-effect waves-light">Atualizar</button>
                        <a href="{{ route('endereco-index') }}" class="btn rounded-pill btn-light waves-effect">Voltar</a>
                    </div>
                </div>
                
            
        </form>

    </div>

</div>
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
