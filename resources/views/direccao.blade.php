
@extends('layouts.layouts')

@section('title', 'Direcção')

@section('content')
    
    


 



    

    <!-- SLIDER --> 

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Direcção do Liceu</h1>
                        <p class="mx-auto">Todos os nossos trabalhadores têm a maior vontade de resolver problemas, têm a ambição de deixar os 
                                        professores e alunos satisfeitos e a determinação de ter êxito onde outros não poderam.
                                    
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/baima.jpg" alt="">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61575700967289" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Sub. Diretor Pedagógico</h5>
                        <p>Mateus António Baima</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/discurso.jpg" alt="">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61575700967289" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Director Geral do Liceu</h5>
                        <p>Bernardo Mukungu Tuta</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_3.png" alt="">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61575700967289" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Sub. Diretora Administrativa</h5>
                        <p>Ruth da Conceição Eleutério</p>
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
