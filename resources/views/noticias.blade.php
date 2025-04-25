@extends('layouts.layouts')

@section('title', 'noticias')

@section('content')









<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6> </h6>
                    <h1>Notícias</h1>
                    <p class="mx-auto"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="blog-post">
                    <img src="img/aulas1.jpg" alt="">
                    <a href="#" class="tag">Regresso as aulas !</a>
                    <div class="content">
                        <small>28, Abril 2025</small>
                        <h5>Regresso as Aulas do Terceiro Trimestre</h5>
                        <p> Acabaram as Férias, depois de Quase um mês longe das paredes do Liceu os Alunos se preparam
                            para começar mais um Desafio, o último Trimestre do Ano...</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="blog-post">
                    <div class="imagem-com-tag" style="position: relative;display: inline-block ">
                        <img src="img/visitacoordenador.jpg" alt="" style="width: 100%;">
                        <a href="#" class="tag">Coordenador da Rede Eiffel</a>
                    </div>
                    <div class="content">
                        <small>23 Fevereiro, 2025</small>
                        <h5>Visita do coordenados ao LEO </H5>
                        <p>O coordenador da Rede Eiffel Philippe Dos Santos, juntamente com sua equipe, fezeram uma
                            visata ao LEO, com satisfação e muitas novidades os Professores ficaram empolgados com
                            Ventos de Desenvolvimento.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="blog-post">
                    <img src="img/formacaocanva.jpg" alt="">
                    <a href="#" class="tag">Formação Canva...</a>
                    <div class="content">
                        <small>09, Abril 2025</small>
                        <h5>Professores recebem uma formação interna sobre Canva</h5>
                        <p>Tema: Canva como ferramenta para o Desenvolvimento do Ensina e aprendizagem...</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand"> Liceu Eiffel de Ondjiva<span class="dot"> </span></h4>
                    <p> </p>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">Desenvolvido por: <a style="text-decoration:none; color:#fff;" href=""> Liceu Eiffel de
                Ondjiva</a></p>
    </div>
</footer>


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