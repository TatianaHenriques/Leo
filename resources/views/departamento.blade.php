@extends('layouts.layouts')

@section('title', 'departamento')

@section('content')












<section id="services" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h1> Áreas do Liceu</h1>
                    <p class="mx-auto">Com vista na formação de futuros quadros Angolanos, proporcionando-lhes um ensino
                        de qualidade nas áreas de
                        Ciências Físicas e Biológicas, envolvendo o ensino das línguas estrangeiras (Francês e Inglês).
                        Dispomos aos alunos e professores
                        as melhores as condições para o Ensino e aprendizagem, com vista no melhor aproveitamento dos
                        estudantes durante suas formações. Conheça as nossas áreas abaixo:</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/biolo.png" alt="">
                    <h5>Laboratório de Biologia</h5>
                    <p>É um ambiente onde os alunos de todas classes podem
                        aprender na prática os conteúdos vistos em sala de aulas. </p><a class="nav-link" href="{{ url('/biologia') }}">clique aqui para visitar o Laboratório</a>

                        
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/fisica.png" alt="">
                    <h5>Laboratório de Física</h5>
                    <p>O laboratório está capacitado para o desenvolvimento de
                        projetos de pesquisa voltados na área de ciências físicas.</p>
                        <a class="nav-link" href="{{ url('/fisica') }}">clique aqui para visitar o laboratório</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/quimica.png" alt="">
                    <h5>Laboratório de Química</h5>
                    <p>O laboratório de Química possue diversos equipamentos, vidrarias,
                        aparelhos e dispositivos que permitem a realização de inúmeras actividades.
                    </p><a class="nav-link" href="{{ url('/quimica') }}">clique aqui para visitar o laboratório</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/informatica.png" alt="">
                    <h5>Sala de Informática Equipada</h5>
                    <p>O liceu Eiffel de Ondjiva promove a utilização das tecnologias da informação e comunicação
                        no sistema educativo.</p><a class="nav-link" href="{{ url('/informatica') }}">clique aqui para visitar o Laboratório </q></a>

                </div>  
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/arte-2-0.png" alt="">
                    <h5>Arte e Cultura</h5>
                    <p> Desenvolvendo a criatividade intercultural </p>
                    <a class="nav-link" href="{{ url('/arte') }}">clique aqui para a secção de Arte</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/quadra.png" alt="">
                    <h5>Quadro desportiva</h5>
                    <p> Alargar a prática desportiva a todos alunos nas diversas modalidades desportivas praticadas em
                        quadras...</p><a class="nav-link" href="{{ url('/desporto') }}">Clique aqui para visitar a quadra desportiva</a>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                            style="background-image: url(img/c2.jpg); min-height:300px;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3">
                                <div>
                                    <h1>Temos o prazer de receber sua SMS</h1>
                                    <p></p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Primeiro nome</label>
                                    <input type="text" class="form-control" placeholder="Leo" id="userName"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Último nome</label>
                                    <input type="text" class="form-control" placeholder="eiffel" id="userName"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Endereço de e-mail</label>
                                    <input type="email" class="form-control"
                                        placeholder="Exemplo: leondjiva@redeeiffel.ao" id="userName"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="exampleInputEmail1" class="form-label">Escrever mensagem</label>
                                    <textarea name="" placeholder="Bom dia, gostaria de saber das inscrições."
                                        class="form-control" id="" rows="4"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand">Enviar Mensagem</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection