
@extends('layouts.layouts')

@section('title', 'Galeria')

@section('content')
    
    




     

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Memória em Galeria</h1>
                        <p class="mx-auto"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="img/kongo2.jpg" alt="">
                <div class="content">
                    <h2>Arte e Cultura </h2>
                    <h6>Alunos da 10 classe</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/proto.png" alt="">
                <div class="content">
                    <h2>Sr. Embaixador</h2>
                    <h6>de França em Angola</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/discurso.jpg" alt="">
                <div class="content">
                    <h2>Director Tuta</h2>
                    <h6>Durante o discurso de Abertura para a Francofonia...</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/bg_banner2.png" alt="">
                <div class="content">
                    <h2>Coordenador da Rede Eiffel</h2>
                    <h6>Dr. Philippe dos Santos</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/aulafisica.jpg" alt="">
                <div class="content">
                    <h2>Recriação e Disporto</h2>
                    <h6>Corpo e Mente sempre serão a Chave...</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/francofonia.JPG" alt="">
                <div class="content">
                    <h2>Dr. Tuta, Dr. do Gab. da Educação e Coordenadora da lingua Francesa no Cunene </h2>
                    <h6>Comemoração do dia da  Francofonia...</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/femenino.JPG" alt="">
                <div class="content">
                    <h2>Palestra sobre o Emponderamento Femenino</h2>
                    <h6>Moderado por Pf. Natália</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/finalistas.JPG" alt="">
                <div class="content">
                    <h2>Finalistas 2024/2025</h2>
                    <h6> Geração de Ouro...</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/lab3.JPG" alt="">
                <div class="content">
                    <h2>Visita ao Lab. de Biologia</h2>
                    <h6>Rep. da FOCUS, Prof. Buta e Dr. Domingos de Oliveira</h6>
                </div>
            </div>

        

            <div class="project">
                <div class="overlay"></div>
                <img src="img/visita8.JPG" alt="">
                <div class="content">
                    <h2>Memória</h2>
                    <h6>A foto de família</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/prova1.jpg" alt="">
                <div class="content">
                    <h2>Realização das PCT's</h2>
                    <h6>Alunos em provas...</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/professores.jpg" alt="">
                <div class="content">
                    <h2>Professores do LEO</h2>
                    <h6>A Preparação é a Chave...</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/informatica.jpg" alt="">
                <div class="content">
                    <h2> Professor Manuel PrimeirO e Dário </h2>
                    <h6> professores de Informática do LEO</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/calouros.jpg" alt="">
                <div class="content">
                    <h2> Benvidos a família Eiffeliana. </h2>
                    <h6>Construindo Sonhos...</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/aulas1.jpg" alt="">
                <div class="content">
                    <h2>Alunos em aulas</h2>
                    <h6>Aprendendo a aprender...</h6>
                </div>
            </div>

            <div class="project">
                <div class="overlay"></div>
                <img src="img/komgo.JPG" alt="">
                <div class="content">
                    <h2>Representando culturas</h2>
                    <h6>República Democrática do Kongo...</h6>
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
                                        <input type="email" class="form-control" placeholder="Exemplo: leondjiva@redeeiffel.ao" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Escrever mensagem</label>
                                        <textarea name="" placeholder="Bom dia, gostaria de saber das inscrições." class="form-control" id=""  rows="4"></textarea>
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








