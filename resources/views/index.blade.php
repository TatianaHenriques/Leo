@extends('layouts/layouts')

@section('title', 'leo')

@section('content')



<!-- SLIDER -->

<div class="owl-carousel owl-theme hero-slider">
    <div class="slide slide1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h6 class="text-white text-uppercase"></h6>
                    <h1 class="display-3 my-4">Philippe Dos Santos<br />Coordenador da Rede Eiffel</h1>
                    <!-- #region <a href="#" class="btn btn-brand">Ler +</a>-->
                    <a href="http://redeeiffel.ao" class="btn btn-outline-light ms-3" target="_blank">Rede Eiffel</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 my-4"> Dr.Tuta, Dr. do Gab. Prov. Da Educação e Coordenadora da lingua francesa
                        <br />Cunene</h1>
                    <h6 class="text-white text-uppercase">Comemoração do dia da Francofonia</h6>

                </div>
            </div>
        </div>
    </div>
    <div class="slide slide4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 my-4 "> Finalistas 2024/2025</h1>
                    <h6 class="text-white text-uppercase">Geração de Ouro</h6>
                    <a href="#about" class="btn btn-brand">Ler +</a>
                    <!--<a href="#" class="btn btn-outline-light ms-3">Our work</a>-->
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- sobre -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 py-5">
                <div class="row">

                    <div class="col-12">
                        <div class="info-box">
                            <img src="img/icone-7.png" alt="">
                            <div class="ms-4">
                                <h5>Liceu Eiffel de Ondjiva</h5>
                                <p>Ou simplesmente LEO localiza-se em Angola, na província do Cunene, no município do
                                    Cuanhama na
                                    comuna de Ondjiva. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="img/local-2.png" alt="">
                            <div class="ms-4">
                                <h5>Área de de Localização</h5>
                                <p>Com cerca de 320 mil habitantes, a comuna de Ondjiva é limitada a Norte pela
                                    comuna da Môngua, a Este pela comuna do Nehone, a Sul pela comuna de Namacunde e a
                                    Oeste pela comuna de Ombala-yo-Mungu. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="img/ondjiva-3.png" alt="">
                            <div class="ms-4">
                                <h5>Bairro:</h5>
                                <p>Naipalala III, Estrada Nacional 105;
                                    próximo do Comando dos Bombeiros;
                                    Junto à Casa da Juventude; </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/sobre.png" alt="" style= "width:80%; margin-top:30px;"class ="mx-auto">
            </div>

            <p style="text-align:center;">
                Actualmente o Liceu atende o IIº Ciclo do Ensino Secundário, em um período diurno, com a
                capacidade de albergar 150 alunos no máximo.
            </p>
        </div>
    </div>


</section>

<!-- MILESTONE -->
<section id="milestone" class="py-5 text-white" style="background: linear-gradient(to right, #76889b, #76adf5);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-6" data-aos="fade-up">
                <h1 class="display-4">+500</h1>
                <p>Estudantes Formados</p>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-4">+80</h1>
                <p>Estudantes Fora do País</p>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <h1 class="display-4">+140</h1>
                <p>Estudantes 2024-2025</p>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="300">
                <h1 class="display-4">+18</h1>
                <p>Professores Qualificados</p>
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