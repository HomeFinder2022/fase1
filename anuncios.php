



<!-- Font awesome -->




<link href="assets/css/prettycheckbox.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<?php require_once 'menu.php'; ?>

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Qual o Imóvel que procura?</h1>
          
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Anúncios
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <br><br><br><br><br><br>


  </section><!-- End Intro Single-->












  <!-- ======= Property Grid ======= -->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">


        <!-- <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>Tudo</option>
                <option value="1">Novo para mais antigo</option>
                <option value="2">Para Venda</option>
                <option value="3">Para Arrendamento</option>
              </select>
            </form>
          </div>
        </div> -->



      
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        
      <div class="card-header d-flex align-items-center justify-content-center">
              <h2 class="mb-0 tabelaTitulos">Porcure o Imóvel dos seus sonhos!</h2>
            
            </div>

            <br><br>
        <div class="form">
         <div class="aa-advance-search-top">

            <div class="row">

           
              <div class="col-md-4">


                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Localização">
                </div>


              </div>


              <div class="col-md-3">
                <div class="aa-single-advance-search">
                  <select class="form-select" onchange="filtroImovel(this.value)" id="tipoNegocImovel3">
                   <option value="0" selected>Procuro</option>
             

                  </select>
                </div>
              </div>
              <div class="col-md-3">
                 <div class="aa-single-advance-search">
                  <select class="form-select" onchange="filtroTipologia(this.value)" id="tipoImovel3">

                  </select>
              </div>
              </div>


              <div class="col-md-2">
                 <div class="aa-single-advance-search " id = "tipologiaVenda3">
                  <select >


                  </select>
              </div>
              </div>



              </div>
              <br>
              <div class="row">

              
             
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Area Útil">
                </div>
              </div>


              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Preço Minimo">
                </div>
              </div>

              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Preço Máximo">
                </div>
              </div>
     
               
              <div class="col-md-3">
                 <div class="aa-single-advance-search">
                  <select id = "certEnerg3">
                 
                  </select>
              </div>
              </div>

              </div>
              <br>
              <div class="row justify-content-md-end ">

              <div class="col-md-2 ">

                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>

              </div>



              <div class="row">
              <div class="col-md-2">


              <label class="form-label" for="">Preco</label>
              <div class="range">
              <input type="range" class="form-range" min="0" max="1 000 000" id="" />
              </div>




              </div>
              </div>

            </div>
          </div>





         <!-- <div class="aa-advance-search-bottom">
           <div class="row">

            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>

            </div>

            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>

            </div>
          </div> 
         </div> -->



         

        </div>
      </div>
    </div>

    <br><br>

  </section>
  <!-- / Advance Search -->








<br><br><br>
  <!-- Lista Imoveis -->
  <section>
  <br><br><br>
  
  <div class="container">
       
   
  <div >
        
        <div class="row row gy-3 g-4 mb-5" id="infoImovel">




        </div>

        



        </div>
      </div>
        </section>
  <!-- /Lista Imoveis -->







      </div>
  </section><!-- End Property Grid Single-->

</main><!-- End #main -->



</body>

<?php require_once 'footer.php'; ?>

<script src="assets/js/imovel.js"></script>
<script src="assets/js/listaSelect.js"></script>



        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 





</html>
















<!-- 



          <div class="card-box-a card-shadow">

            <div class="img-box-a">
              <img id="fotoImovelInfo" src="assets/img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>


            <div class="card-overlay" >


              <div class="card-overlay-a-content">


                <div class="card-header-a">

                  <h2 class="card-title-a">

                    <a id="concelhoImovelInfo">
                      <br id="moradaImovelInfo" /> </a>

                  </h2>

                </div>

                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a" id="precoImovelInfo"> €</span>
                  </div>
                  <a href="infoImovel.php" class="link-a">Mais Informações
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
               
              
               
                <div class="card-footer-a">
                 
            
                <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Tipologia</h4>
                      <span id="tipologiaImovelInfo">

                      </span>
                    </li>
                    <li>

                  
                      <h4 class="card-info-title">WC's</h4>
                      <span id="numWcImovelInfo"></span>
                    </li>
                    <li>

                      <h4 class="card-info-title">Área Bruta</h4>
                      <span id="areaBrutaImovelInfo"></span>
                    </li>
                    <li>

                      <h4 class="card-info-title">Ano</h4>
                      <span id="anoImovelImovelInfo"></span>
                    </li>
                  </ul>
                </div>
            
             
              </div>
            </div>





          </div> -->
