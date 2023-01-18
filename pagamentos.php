<link href="assets/css/pagamentos.css" rel="stylesheet">



<?php require_once 'menu.php'; ?>

<main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">

      <div class="container">

        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Pagamentos</h1>
            </div>
          </div>
          
          

          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Pagamentos
                </li>
              </ol>
            </nav>
          </div>
        </div>
<br>


<div class="container-pagamentos">
   <div class="card box2 shadow-sm">
     <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> 
      <span class="h5 fw-bold m-0 tituloPagamento">Métodos de Pagamento</span>
       <div class="btn btn-primary-pagamentos bar">
        <span class="fas fa-bars"></span>
      </div>
     </div>
      <ul class="nav nav-tabs mb-3 px-md-4 px-2">
         <li class="nav-item">
           <a class="nav-link px-2 active" aria-current="page" href="#">Cartão de  Crédtido</a> 
          </li> <li class="nav-item"> 
            <a class="nav-link px-2" href="#">Paypal</a> 
          </li>
          <li class="nav-item ms-auto">
             <a class="nav-link px-2" href="#">+ Mais</a> 
            </li>
          </ul> 
        <br>
              <form action=""> 
                <div class="row"> 
                  <div class="col-12"> 
                    <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                      <span>Cartão de Crédito</span> 
                      <div class="inputWithIcon">
                         <input class="form-control-pagamentos" type="number" placeholder="">
                          <span class=""> 
                            <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt="">
                          </span> 
                        </div>
                       </div> 
                      </div>
                       <div class="col-md-6"> 
                        <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4">
                           <span>Data de<span class="ps-1">Validade</span>
                          </span>
                          <div class="inputWithIcon"> 
                            <input type="date" class="form-control-pagamentos" placeholder=""> 
                            
                            <span class="fas fa-calendar-alt">

                            </span>
                           </div> 
                          </div> 
                        </div>
                         <div class="col-md-6"> 
                          <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> 
                            <span>Código CVV</span> 
                            <div class="inputWithIcon"> 
                              <input type="text" class="form-control-pagamentos" placeholder=""> 
                              <span class="fas fa-lock"></span>
                             </div>
                             </div> 
                            </div>


                             <div class="col-12"> 

                              <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                                <span>Nome</span>
                                 <div class="inputWithIcon"> 
                                  <input class="form-control-pagamentos text-uppercase" type="text" placeholder=""> 
                                  <span class="far fa-user">

                                  </span> 
                                </div>             
                  </div>
                             
                  <div class="col-12"> 
                              
                              <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                           
                    <span>Subscrição</span>
                    
                    <select class="form-select-pagamentos" id="listaSubscricoes">
                      <option selected></option>
                    </select>
                  </div>


                  <div class="col-12"> 
                              
                              <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                           
                    <span>Plano</span>
                    
                    <select class="form-select-pagamentos" id="">
                      <option selected> Escolha um plano</option>
                      <option>Anual</option>
                      <option>Mensal</option>
                    </select>
                  </div>

                                </div>
                
                </div>
                             <div class="col-12 px-md-5 px-4 mt-3">
                                 <div class="btn btn-primary-pagamentos w-100 subtitulo">Pagar

                                 </div>
                                 </div>
                                 </div>
                                 </form>
                                 </div>
                                 </div>
                                 </div>


    </section><!-- End Intro Single-->

   

      

  </main><!-- End #main -->

  
  </body>
  
  <?php require_once 'footer.php'; ?>
  
  <script src="assets/js/listaSelect.js"></script>


  </html>