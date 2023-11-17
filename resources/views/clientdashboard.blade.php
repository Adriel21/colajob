
@include('components.header')


<main class="container">

    <section class="main-body">



          <div class="row">

            <div class="col-lg-5 col-sm-12 col-md-9 mb-3 mx-auto perfil">

              <div class="card">

                <div class="card-body ">

                  <div class="d-flex flex-column align-items-center text-center flex-lg-row text-lg-start justify-content-start gap-lg-2">

                    @if($userData['profile_pic'])
                    <img src="../fotos_de_perfil/" class="perfil_freela_feed" alt="Admin" width="100">
                    @else
                    <img src="{{ asset('img/profile/user.png') }}" class="perfil_freela_feed" alt="Admin" width="100">
                    @endif

                    <div class="mt-2 mt-lg-3">

                      <h4 class="nome">{{ $userData['name'] }}</h4>

                      <button button class="rounded-3 botao_perfil py-1 px-5 my-1 border-none fs-6" type="button">

                                <a href="./projeto_insere.php">Publicar Projeto</a>

                            </button>

                    </div>

                  </div>

                </div>

              </div>



              <div class="card mt-3 shadow">

                <ul class="list-group list-group-flush">

                  <li class="list-group-item ">


                    <h6 class="text-lg-start"><i class="bi bi-browser-chrome fs-4"></i> Website</h6>

                    <span class="text-secondary">

                        

                        <!-- <p class="text-lg-start"><a href="" class="text-center text-lg-start" target="_blank">https://www.exemplo.com.br</a></p> -->
                        <p class="text-lg-start">https://www.exemplo.com.br</p>


                    </span>

                     

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkdin</h6>

                    <span class="text-secondary">


                         <p class="text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>

                      
                        <p class="text-lg-start"><a href="" class="text-center text-lg-start" target="_blank"></a></p>

                    </span>

                    

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>

                    <span class="text-secondary">

                    

                         <p class="text-lg-start">https://www.instagram.com/exemplo/</p>

                      

                        <p class="text-lg-start"><a href="" target="_blank"></a></p>

                            

                    </span>


                  </li>


  

                  </li>

                 

                  <li class="list-group-item text-lg-end">

                 

                    <!-- <span class="text-secondary"><a href="redes_atualiza.php?perfil=cliente">Editar redes</a></span> -->


                    <span class="text-secondary"><a href="redes_insere.php?perfil=cliente">Inserir redes</a></span>


                  </li>

                </ul>

              </div>

            </div>



            <div class="col-md-9 mx-auto col-lg-7">

              <div class="card mb-3 shadow">

                <div class="card-body">

                    <div class="team-single-text padding-50px-left sm-no-padding-left">

                    <h2 class="text-lg-start titulo_projetos">Meus Projetos</h2>

                    




            <div class="col-12 px-md-1 mt-2">

                  <div class="list-group">

                   

                      <div class="list-group-item list-group-item-action">

                        <h4 class="text-lg-start">Não há projetos cadastrados no momento</h4>

                      </div>

                  </div>

              </div>



            

        <!-- <div class="col-12 px-md-1 mt-2">

                  <div class="list-group">

                   

                      <div class="list-group-item list-group-item-action">

                        <h4 class="text-lg-start">Título:</h4>

                          <p class="text-lg-start mt-3 mt-lg-0"><strong>Data:</strong> </p>

                          <p class="text-lg-start"><strong>Resumo do projeto: </strong> </p>

                          <div class="text-lg-end"><button class=" px-5 py-1 mt-2 botao_projetos rounded-3" type="button"><a href="./detalhes_do_projeto.php?id=">Visualizar projeto</a></button></div>

                      </div>

                  </div>

              </div> -->


                        <!-- <div class="contact-info-section margin-40px-tb">

                            <ul class="list-style9 no-margin">



                                <li> -->



                                    <!-- <div class="row">

                                        <div class="col-md-5 col-5">

                                            <i class="fas fa-mobile-alt text-purple"></i>

                                            <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>

                                        </div>

                                        <div class="col-md-7 col-7">

                                            <p>(+44) 123 456 789</p>

                                        </div>

                                    </div>



                                </li>

                                <li>

                                    <div class="row">

                                        <div class="col-md-5 col-5">

                                            <i class="fas fa-envelope text-pink"></i>

                                            <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>

                                        </div>

                                        <div class="col-md-7 col-7">

                                            <p><a href="javascript:void(0)">addyour@emailhere</a></p>

                                        </div> -->

                                    <!-- </div>

                                </li>

                            </ul>

                        </div> -->

                    </div>

                </div>

              </div>

          </div>



    </section>

</main>

@include('components.footer')
