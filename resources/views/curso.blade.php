
@extends('layouts.layouts')

@section('title', 'curso')

@section('content')
    
    


   

   
    

    <!-- Sobre -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                            <!--<img src="img/icon6.png" alt=""> --> 
                                <div class="ms-">
                                
                                    <h1>Ciências Físicas e Biológicas</h1>
                                    <p>Este curso constitui o campo do conhecimento na qual se estudam os 
                                        processos físicos que governam os sistemas vivos. O curso consiste na construção de modelos para estudar a
                                        complexa rede de interações da matéria viva e aperfeiçoar os potenciais que determinam a associação e organização 
                                        de estruturas microscópicas em macro estruturas.
                                        <h2>SAIDAS PROFISSIONAIS</h2>
                                        O mercado de trabalho para os profissionais dessa área é Âmplo, com oportunidades interessantes tanto para quem quer actuar no ensino como para quem pretende trabalhar em indústrias ou órgãos de pesquisa.  </p>
                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/aulas4.jpg" alt="">
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




    