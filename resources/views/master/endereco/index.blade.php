@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Configuração @endslot
@slot('title') Principal  @endslot
@endcomponent

<div class="container">
    

    <div class="card">
        <div class="card-body">
            <a href="{{ route('endereco-create') }}" class="btn rounded-pill btn-primary waves-effect waves-light">INCLUIR</a>
        </div>
    </div>

    

    @if(session('error'))
        <div class="alert alert-danger alert-border-left alert-dismissible fade show mb-xl-0" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-border-left alert-dismissible fade show mb-xl-0" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mt-3">
        <div class="card-header">
            <h1>Listagem da Endereço</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CEP</th>
                            <th scope="col">CIDADE</th>
                            <th scope="col">BAIRRO</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">AÇÕES</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td class="text-uppercase">{{$item->cep}}</td>
                            <td class="text-uppercase">{{$item->cidade}}</td>
                            <td class="text-uppercase">{{$item->bairro}}</td>
                            <td class="text-uppercase">{{$item->estado}}</td>
                            
                                <th class="d-flex gap-3">
                                    <a href="{{ route('endereco-edit', ['id'=>$item->id]) }}" class="btn btn-success  btn-sm">Editar <i class="ri-arrow-right-line align-middle"></i></a>
                                    <form action="{{ route('endereco-destroy', ['id'=>$item->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                        
        
                                    </form>
                                </th>
                               
                            
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')

<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
