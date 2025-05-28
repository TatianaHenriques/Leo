@extends('layouts.layouts')

@section('title', 'quimica')

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
                                
                                    <h1>Laboratório de  QuÍmica equipado</h1>
                                    <p>O laboratório de Química do Liceu Eiffel de Ondjiva está bem equipado, oferecendo aos estudantes um ambiente seguro e estimulante para a aprendizagem prática. Com materiais modernos e espaço adequado, o laboratório permite que os alunos desenvolvam suas habilidades científicas, ampliem seus conhecimentos e despertem o interesse pela pesquisa e experimentação. É um espaço essencial para o crescimento académico e profissional dos estudantes.</p>
                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/formation4.jpg" alt="">
                </div>
             </div>
            <div class="galeria">
             <figure>
            <img src="img/quimica-1.jpg" alt="Imagem 1">
            <figcaption>TABELA DO ELEMENTOS QUIMICOS</figcaption>
             </figure>
             <figure>
            <img src="img/quimica-2.jpg" alt="Imagem 2">
            <figcaption>ARMÁRIO DE MATERIAIS QUIMICOS </figcaption>
             </figure>
             <figure>
            <img src="img/quimica-3.jpg" alt="Imagem 3">
            <figcaption>SALA EQUIPADA COM TODOS  MATERIAIS DISPONÍVEIS</figcaption>
             </figure>
             <figure>
            <img src="img/quimica-4.jpg" alt="Imagem 4">
            <figcaption>QUIMICOS INFLAMÁVEIS</figcaption>
             </figure>
             <figure>
            <img src="img/quimica-5.jpg" alt="Imagem 5">
            <figcaption>EQUIPAMENTOS DE ULTIMA GERAÇÃO</figcaption>
             </figure>
             <figure>
            <img src="img/quimica-6.jpg" alt="Imagem 5">
            <figcaption>MATERIAIS</figcaption>
             </figure>
            <!-- Adicione mais imagens -->
        </div>

                 
            </div>   
        </div>

        
    </section>



<script>
  function abrirImagem(img) {
    const lightbox = document.getElementById('lightbox');
    const imagemGrande = document.getElementById('imagem-grande');
    imagemGrande.src = img.src;
    lightbox.style.display = 'flex';
  }

  function fecharImagem() {
    document.getElementById('lightbox').style.display = 'none';
  }
</script>


@endsection