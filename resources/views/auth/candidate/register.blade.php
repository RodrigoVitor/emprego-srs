
@extends('layouts.appGeneral')

@section('title', 'Cadastrar como Candidato')

@section('link-css')
    <link rel="stylesheet" href="/css/registerCandidate.css">
@endsection

@section('content')
    <section class="pb-5">
        <div id="header-candidate" class="p-4">
            <h1 class="text-center text-light">Entrar como Candidato</h1>
        </div>
        <div id="form" class="w-75 m-auto text-bg-light p-4 mt-md-3">
            <p id="subtitle" class="text-center">Informações para o seu acesso</p>
            <form class="row d-flex justify-content-center">
                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="FullName" class="form-label">Nome Completo</label>
                    <input type="text" name="full-name" class="form-control" id="FullName" aria-describedby="nameHelp">
                    {{-- <div id="nameHelp" class="form-text">error</div> --}}
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">error</div> --}}
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp">
                    {{-- <div id="passwordHelp" class="form-text">error</div> --}}
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="zap" class="form-label">Whatsapp</label>
                    <input type="text" name="whatsapp" maxlength="15" placeholder="(XX) XXXX-XXXX" class="form-control" id="zap" aria-describedby="zapHelp"     
                        oninput="mascaraTelefone(this)">
                    {{-- <div id="zapHelp" class="form-text">error</div> --}}
                </div>

                <hr class="mt-4">
                <p id="subtitle" class="text-center">Informações para candidatura</p>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="state" class="form-label">Estado</label>
                    <select class="form-select" aria-label="Default select example" id="estados" onchange="buscarCidades()">
                      <option value="">Selecione um estado</option>
                    </select>
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="city" class="form-label">Cidade</label>
                    <select class="form-select" aria-label="Default select example" id="cidades" disabled>
                      <option value="">Selecione uma cidade</option>
                    </select>
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="graduate">Selecione o tipo de formação:</label>
                    <select class="form-select" id="graduate" onchange="showGraduate()">
                        <option value="incomplete-high-school">Ensino Médio Incompleto</option>
                        <option value="complete-high-school">Ensino Médio Completo</option>
                        <option value="graduate-doit">Graduação (Cursando)</option>
                        <option value="complete-graduate">Graduação (Completa)</option>
                        <option value="posgraduacao">Pós-Graduação</option>
                    </select>
                    
                    <div id="graduateDiv" style="display: none;">
                        <label for="graduate">Qual a faculdade que você está?</label>
                        <input class="form-control" type="text" id="graduate" name="graduate">
                    </div>
                    <div id="incompleteHighSchoolDiv" style="display: none;">
                        <label for="graduate">Qual nome da escola?</label>
                        <input class="form-control" type="text" id="incomplete-high-school" name="incomplete-high-school">
                    </div>
                    <div id="completeHighSchoolDiv" style="display: none;">
                        <label for="graduate">Qual nome da escola?</label>
                        <input class="form-control" type="text" id="graduate" name="graduate">
                    </div>
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="plusCourse" class="form-label">Cursos complementares</label>
                    <input type="text" name="plusCourse" class="form-control" id="plusCourse" aria-describedby="plusCourseHelp">
                    {{-- <div id="plusCourseHelp" class="form-text">error</div> --}}
                </div>

                <div class="mb-3 col-sm-12 col-md-8">
                    <label for="goal" class="form-label">Objetivo</label>
                    <input type="text" name="goal" class="form-control" id="goal" aria-describedby="goalHelp">
                    {{-- <div id="goalHelp" class="form-text">error</div> --}}
                </div>
                
                <button type="submit" class="btn btn-primary w-50">Entrar</button>
                <div id="passwordHelp" class="form-text text-center mt-3">Não tem conta? <a href="#">Cadastra-se gratuitamente</a></div>
            </form>
        </div>
    </section>
@endsection

@section('script')
    <script src="/js/candidate.js"></script>
@endsection