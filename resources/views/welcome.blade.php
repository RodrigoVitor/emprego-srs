@extends('layouts.appGeneral')
@section('title', 'Teste')

<style>
    main, #your-cv {
        background-color: #003366 
    }
    #button-cv {
        width:250px;
        height: 50px;
        font-size: 22px;
        background-color: #FFCA28 
    }
    #button-cv:hover {
        background-color: #f3bd1e 
    }
</style>

@section('content')
    <main class="text-center p-3">
        <h1 class="mt-5 text-light">Encontre seu emprego em Santa Rita do Sapucaí</h1>
        <p class="mt-3 mb-5 display-6 text-white-50">200 vagas cadastradas</p>
        <div class="m-auto mb-5">
            <iframe width="300" height="250" src="https://www.youtube.com/embed/fA0CR7KwEIM" title="Iniciar com Java em 2020 (minha opinião) #020" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>

    <section class="p-3">
        <p class="text-center display-6">Vagas de emprego mais recente</p>

        <div class="container text-center mt-5">
            <div class="row">
              <div class="col-md">
                <div class="card m-auto mb-3 pb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <span>2 vagas - Balconista de bar</span>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Bar dos malas</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#">Ver vaga</a>
                  </div>
              </div>
              <div class="col-md">
                <div class="card m-auto mb-3 pb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <span> vagas - Recepcionista</span>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Crisal Hotel</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#">Ver vaga</a>
                  </div>
              </div>
              <div class="col-md">
                <div class="card m-auto mb-3 pb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <span>4 vagas - Enfermeira</span>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Hospital Santa Luzia</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#">Ver vaga</a>
                  </div>
              </div>
            </div>
        </div>

        <a href="#" class="d-block text-center" style="font-size: 18px">Ver todas as vagas</a>
    </section>

    <section id="your-cv" class="p-4 text-center">
        <p class="text-light display-6">Ta com dificuldade em <br> montar seu <span class="fw-bold">Currículo?</span></p>
        <p class="text-light display-6 mt-4">Não se preocupe, aqui <br> montamos para você.</p>

        <a href="#" id="button-cv" class="btn mt-4">Montar meu curriculo</a>
    </section>
@endsection