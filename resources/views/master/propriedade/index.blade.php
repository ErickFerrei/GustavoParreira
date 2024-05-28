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
            <a href="{{ route('propriedade-create') }}" class="btn rounded-pill btn-primary waves-effect waves-light">INCLUIR</a>
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
            <h1>Listagem de Propriedades</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGEM</th>
                            <th scope="col">TITULO</th>
                            <th scope="col">AÇÕES</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($propriedades as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>
                                @php
                                $imageUrls = json_decode($data->images);
                                $firstImageUrl = isset($imageUrls[0]) ? $imageUrls[0] : null;
                                @endphp
                                @if ($firstImageUrl)
                                <img src="{{ $firstImageUrl }}" alt="Imagem" style="width: 97px">
                                @endif
                            </td>

                            <td>
                                {{$data->titulo}}
                            </td>

                            <td>
                                <div class="d-flex gap-3">

                                        <a href="{{ route('propriedade-edit', ['id'=> $data->id]) }}" class="btn btn-success btn-sm">Editar</a>
                                        <form action="{{ route('propriedade-destroy', ['id'=> $data->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                        </form>

                                </div>
                            </td>


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
