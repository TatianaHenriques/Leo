
@extends('layouts.layouts')

@section('title', 'secretaria')

@section('content')
    
    



  

   

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>De 2ª à 6ª das 8H as 15H</h1>
                        <h6>Fale com nosco</h6>
                        <h1>Secretaria Liceu Eiffel de Ondjiva</h1>
                        <p class="mx-auto">A comunicação é fundamental para o funcionamento da organização, pois,
                             para a melhoria e desenvolvimento de nossas atividades, há a necessidade de troca de informações com o público.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icone tel2.webp" alt="">
                        <h5>+244 265 351 020</h5>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icone7.png" alt="">
                        <h5>+244 265 351 020</h5>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icone5.png" alt="">
                        <h5>leondjiva17@gmail.com</h5>
                        <p></p>
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
             <p class="mb-0">Desenvolvido por: <a style="text-decoration:none; color:#fff;" href=""> Liceu Eiffel de Ondjiva</a></p>
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








