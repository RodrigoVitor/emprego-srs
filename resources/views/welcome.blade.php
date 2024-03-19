@extends('layouts.appGeneral')
@section('title', 'Teste')

<style>
    main {
        background-color: #003366 
    }
</style>

@section('content')
    <main class="text-center p-4">
        <h1 class="mt-5 text-light">Encontre seu emprego em Santa Rita do Sapucaí</h1>
        <p class="mt-3 mb-5 display-6 text-white-50">200 vagas cadastradas</p>
        <div class="m-auto mb-5">
            <iframe width="300" height="250" src="https://www.youtube.com/embed/fA0CR7KwEIM" title="Iniciar com Java em 2020 (minha opinião) #020" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
@endsection