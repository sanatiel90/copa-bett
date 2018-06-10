@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <p style="font-size: 1.1rem">Bem vindo, <strong>{{ Auth::user()->name }} </strong>! Você até agora acumulou um total de <strong style="font-size: 1.6rem">40</strong> pontos!</p>                   

                
                  <!-- -->

  <!-- card com os jogos do dia -->
                  <div class="card" style="margin-top: 10px">
                       <div class="card-header">Jogos de hoje - <?php echo date('d/m/Y') ?></div>   
                       <div class="card-body">
                          <div class="row justify-content-center"> 
                           
                           

                           <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">09:00 - Grupo A</p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">Fase de Grupos - Rodada 1</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong>  Vitória Casa</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                 <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">09:00 - Grupo A</p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">Fase de Grupos - Rodada 1</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong>  Vitória Casa</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">09:00 - Grupo A</p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">Fase de Grupos - Rodada 1</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong>  Vitória Casa</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                              <div class="col-xs-12">
                                    <p class="card-text text-center"  style="font-size: 0.8rem; font-weight: bolder;">09:00 - Grupo A</p>
                                   </div>
                                   <div class="col-xs-12">
                                    <p class="card-text text-center" style="font-size: 0.8rem; font-weight: bolder;">Fase de Grupos - Rodada 1</p>
                                   </div>
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Status:</strong>  Vitória Casa</div>
                                   </div>

                                   <div class="row justify-content-center " >
                                     <div class="col-xs" style="width: 100%;"><a href="#" class="btn btn-success btn-md btn-block"><strong>Aposte nesse jogo!</strong> </a></div>
                                   </div>    
                                  
                               </div>
                           </div> <!-- card -->
                           </div> <!-- col-sm -->
                           

                         </div> <!-- row main --> 

                         <div class="row justify-content-end ">
                           <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-primary">Ver todos os jogos</a></div>
                         </div>

                       </div> <!-- card-body main -->
                  </div> <!-- card jogos dia -->



                    <!-- card com as últimas apostas realizadas-->
                  <div class="card" style="margin-top: 10px">
                       <div class="card-header">Suas apostas mais recentes</div>   
                       <div class="card-body">
                          <div class="row justify-content-center"> 
                           
                           

                           <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                   <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Melhor da partida:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Lionel Messi</strong></div>
                                   </div>

                                  <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Primeiro a marcar:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Dí Maria</strong></div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Status:<strong>Em aberto</strong> </div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Total de pontos obtidos: <strong>-</strong> </div>
                                   </div>   

                                   <div class="row justify-content-end">
                                     <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-sm btn-primary">Detalhar</a></div>
                                   </div>
                                  
                               </div>  <!-- card-body -->
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                 <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Melhor da partida:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Lionel Messi</strong></div>
                                   </div>

                                  <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Primeiro a marcar:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Dí Maria</strong></div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Status:<strong>Em aberto</strong> </div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Total de pontos obtidos: <strong>-</strong> </div>
                                   </div>   

                                   <div class="row justify-content-end">
                                     <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-sm btn-primary">Detalhar</a></div>
                                   </div>
                                  
                               </div>
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                                <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Melhor da partida:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Lionel Messi</strong></div>
                                   </div>

                                  <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Primeiro a marcar:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Dí Maria</strong></div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Status:<strong>Em aberto</strong> </div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Total de pontos obtidos: <strong>-</strong> </div>
                                   </div>   

                                   <div class="row justify-content-end">
                                     <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-sm btn-primary">Detalhar</a></div>
                                   </div>
                                  
                                  
                               </div>
                           </div> <!-- card -->
                           </div> <!-- col-sm -->

                          <div class="col-sm"> 
                           <div class="card">   
                               <div class="card-body">
                                 
                              <!-- row -->
                                   <div class="row justify-content-center"  >
                                   <!-- time casa -->
                                    <div class="col-xs"  style=" padding: 2px;">
                                      <span style="font-size: 1.1rem; ">ARG</span>
                                    </div>
                                    <div class="col-xs"  style=" padding: 2px;">
                                       <img src="/img/flags/argentina.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <!-- placar -->
                                    <div class="col-xs" style=" padding: 2px; margin-left: 1px; margin-right: 1px">
                                      <span style="font-size: 1.3rem; font-weight: bolder">3</span>
                                      <span style="font-size: 1.1rem; font-weight: bolder">x</span>
                                      <span style="font-size: 1.3rem; font-weight: bolder">2</span>
                                    </div>
                                    <!-- time fora -->
                                    <div class="col-xs"  style="padding: 2px;">
                                      <img src="/img/flags/espanha.png" class="img-responsive" height="28rem" width="40rem">
                                    </div>
                                    <div class="col-xs"  style="padding: 2px;">
                                    <span style="font-size: 1.1rem; ">ESP</span>
                                    </div> 
                                   
                                   </div> <!-- row -->

                                   <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Melhor da partida:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Lionel Messi</strong></div>
                                   </div>

                                  <div class="col-xs">
                                    <p class="card-text text-center" style="font-size: 0.9rem; font-weight: bolder;">Primeiro a marcar:</p>      
                                   </div>
                                   <div class="row justify-content-center " style="background-color: #FFF8DC; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" ><strong>Dí Maria</strong></div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Status:<strong>Em aberto</strong> </div>
                                   </div>

                                   <div class="row justify-content-center " style="background-color: #ADD8E6; margin-top: 5px; margin-bottom: 5px; border: solid 0.5px;">
                                     <div class="col-xs" >Total de pontos obtidos: <strong>-</strong> </div>
                                   </div>   

                                   <div class="row justify-content-end">
                                     <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-sm btn-primary">Detalhar</a></div>
                                   </div>
                                  
                                  
                               </div>
                           </div> <!-- card -->
                           </div> <!-- col-sm -->
                           

                         </div> <!-- row main --> 

                         <div class="row justify-content-end ">
                           <div class="col-xs" style="margin-top: 10px;"><a href="#" class="btn btn-primary">Ver todas as apostas</a></div>
                         </div>

                       </div> <!-- card-body main -->
                  </div> <!-- card-ultimas apostas -->



                  <!-- vencedores e pontuacao -->

                <div class="row justify-content-center" style="margin-top: 10px">   <!--  row 1-->
                  <div class="col-md">
                  <div class="card">
                       <div class="card-header">Vencedores por rodada</div>   
                       <div class="card-body">
                          <div class="row justify-content-start border">
                              <div class="col-md">Fase de Grupos - Rodada 1</div>
                              <div class="col-md">João Lucas venceu com 14 pontos!</div>
                              <div class="col-md">Você fez 25 pontos</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Fase de Grupos - Rodada 2</div>
                              <div class="col-md">João Lucas e Marcelo Moreira, com 14 pontos!</div>
                              <div class="col-md">Você fez 25 pontos</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Fase de Grupos - Rodada 3</div>
                              <div class="col-md">João Lucas venceu com 14 pontos!</div>
                              <div class="col-md">Você fez 25 pontos</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Oitavas de Final</div>
                              <div class="col-md">João Lucas venceu com 14 pontos!</div>
                              <div class="col-md">Você fez 25 pontos</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Quartas de Final</div>
                              <div class="col-md">João Lucas venceu com 14 pontos!</div>
                              <div class="col-md">Você fez 25 pontos</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Semi-finais</div>
                              <div class="col-md">João Lucas venceu com 14 pontos!</div>
                              <div class="col-md">Você fez 25 pontos</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Disputa 3º lugar</div>
                              <div class="col-md">A definir</div>
                              <div class="col-md">A definir</div>
                          </div>
                          <div class="row justify-content-start border">
                              <div class="col-md">Final</div>
                              <div class="col-md">A definir</div>
                              <div class="col-md">A definir</div>
                          </div>
                       </div>        
                  </div>
                  </div>

                  

                  <div class="col-md-3 text-center">
                  <div class="card">
                       <div class="card-header">Maiores pontuadores no geral</div>   
                       <div class="card-body">
                          <div class="row justify-content-center">
                              <div class="col-md ">
                              <table class="table table-responsive">
                                <tr>
                                  <td>Pos.</td>
                                  <td>Nome</td>
                                  <td>Pontos</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>João Lucas</td>
                                  <td>39</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Marcelo</td>
                                  <td>36</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Kaio Mendes</td>
                                  <td>28</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Elias Moreira</td>
                                  <td>27</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Hugo</td>
                                  <td>12</td>
                                </tr>
                              </table>
                              </div> 
                          </div>
                       </div>        
                  </div>
                  </div>
                </div>  <!--  row 1-->

                  <!-- vencedores e pontuacao -->

                


                    <!-- estatisticas -->

                <div class="row justify-content-center" style="margin-top: 10px">   <!--  row 2-->
                  <div class="col-md">
                  <div class="card">
                       <div class="card-header">Estatísticas</div>   
                       <div class="card-body">
                          <div class="row justify-content-start border">
                              
                            <div class="col-md-8">
                              <div class="media">
                                  <img class="align-self-center mr-3" src="/img/flags/espanha.png" height="28rem" width="40rem">
                                  <div class="media-body">
                                  <h5 class="mt-0">Espanha</h5>
                                  <p>A Espanha é a seleção mais apontada como campeã da copa</p>
                                  </div>
                              </div> <!-- media --> 
                            </div>  
                            <div class="col-md-4">
                              <div class="media">
                                  <img class="align-self-center mr-3" src="/img/flags/argentina.png" height="28rem" width="40rem">
                                  <div class="media-body">
                                  <h5 class="mt-0">Sua Aposta</h5>
                                  <p>Argentina</p>
                                  </div>
                              </div> <!-- media --> 
                            </div>  

                          </div> <!-- row -->

                          <div class="row justify-content-start border">
                             <div class="col-md-8">
                              <div class="media">
                                  <img class="align-self-center mr-3" src="/img/flags/espanha.png" height="28rem" width="40rem">
                                  <div class="media-body">
                                  <h5 class="mt-0">Iniesta</h5>
                                  <p>Iniesta é o jogador mais apontado como melhor da copa</p>
                                  </div>
                              </div> <!-- media --> 
                            </div>  
                            <div class="col-md-4">
                              <div class="media">
                                  <img class="align-self-center mr-3" src="/img/flags/espanha.png" height="28rem" width="40rem">
                                  <div class="media-body">
                                  <h5 class="mt-0">Sua Aposta</h5>
                                  <p>Sergio Ramos</p>
                                  </div>
                              </div> <!-- media --> 
                            </div>  


                          </div> <!-- row -->


                          <div class="row justify-content-start border">
                             <div class="col-md-8">
                              <div class="media">
                                  <img class="align-self-center mr-3" src="/img/flags/argentina.png" height="28rem" width="40rem">
                                  <div class="media-body">
                                  <h5 class="mt-0">Lionel Messi</h5>
                                  <p>Lionel Messi é o jogador mais apontado como artilheiro da copa</p>
                                  </div>
                              </div> <!-- media --> 
                            </div>  
                            <div class="col-md-4">
                              <div class="media">
                                  <img class="align-self-center mr-3" src="/img/flags/servia.png" height="28rem" width="40rem">
                                  <div class="media-body">
                                  <h5 class="mt-0">Sua Aposta</h5>
                                  <p>Savic</p>
                                  </div>
                              </div> <!-- media --> 
                            </div>  

                          </div> <!-- row -->

                       </div> <!-- card-body -->        
                  </div>
                  </div>

                  

                  <div class="col-md-3 text-center">
                  <div class="card">
                       <div class="card-header">Maiores pontuadores no geral</div>   
                       <div class="card-body">
                          <div class="row justify-content-center">
                              <div class="col-md ">
                              <table class="table table-responsive">
                                <tr>
                                  <td>Pos.</td>
                                  <td>Nome</td>
                                  <td>Pontos</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>João Lucas</td>
                                  <td>39</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Marcelo</td>
                                  <td>36</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Kaio Mendes</td>
                                  <td>28</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Elias Moreira</td>
                                  <td>27</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Hugo</td>
                                  <td>12</td>
                                </tr>
                              </table>
                              </div> 
                          </div>
                       </div>        
                  </div>
                  </div>
                </div>  <!--  row 2-->


                <!-- estaisticas -->


                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
