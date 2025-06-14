
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
                        <p class="mx-auto">A secretaria do Liceu Eiffel de Ondjiva está disponível para atendimento ao público de segunda a sexta-feira, das 8h00 às 15h00. Durante este período, estamos prontos para prestar apoio em questões administrativas, inscrições, informações sobre cursos, e outras solicitações relacionadas à vida escolar.Para garantir um atendimento eficiente, recomendamos que os interessados procurem a secretaria dentro deste horário. Estamos empenhados em oferecer um serviço acolhedor e ágil para toda a comunidade escolar. para mais informções entre em contacto apartir dos números de telefones ou E-mail.</p>
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
                        <h5>eiffelondjiva@gmail.com</h5>
                        <p></p>
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
                                style="background-image: url(img/email.png); min-height:300px;">
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








