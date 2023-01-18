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
                <a href="index.php">Home</a>
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
    <!-- <div class="container"> -->
      <div class="row">



        <section id="aa-advance-search">

          <div class="container">
            <div class="aa-advance-search-area">
              <div class="card-header d-flex align-items-center justify-content-center">
                <h2 class="mb-0 tabelaTitulos">Procure o Imóvel dos seus sonhos!</h2>
              </div>

              <br><br>




              <div class="form">
                <div class="aa-advance-search-top">




                  <div class="row">


                    <div class="col-5">
                      <div class="input-group">
                        <span class="input-group-text">Concelho</span>
                        <select class="form-select" onchange="filtroConcelho(this.value)" id="listaConcelhos3">
                        </select>
                      </div>
                    </div>


                    <div class="col-5">
                      <div class="input-group">
                        <span class="input-group-text">Tipo de Negócio</span>
                        <select class="form-select" onchange="filtroImovel(this.value)" id="tipoNegocImovel3"></select>
                      </div>
                    </div>

                    <br><br><br>

                    <div class="col-5">
                      <div class="input-group">
                        <span class="input-group-text">Tipo de Imóvel</span>
                        <select class="form-select" onchange="filtroTipologia(this.value)" id="tipoImovel3"></select>
                      </div>
                    </div>

                    
                    <div class="col-4">
                      <div class="input-group">
                        <span class="input-group-text">Estado</span>
                        <select class="form-select"  id="estadoImovel3"></select>
                      </div>
                    </div>


                    <br><br><br>


                <div class="col-4">
                  <label for="precomin" class="form-label">Preco Min.</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="precomin">
                    <span class="input-group-text fw-bold">€</span>
                  </div>
                </div>
  

                <div class="col-4">
                  <label for="precomax" class="form-label">Preco Máx</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="precomax">
                    <span class="input-group-text fw-bold">€</span>
                  </div>
                </div>



  

                  </div>



                  </div>

                  <br>





                  <div class="row">
                    <div class="row justify-content-md-end ">
                      <div class="col-md-2 ">
                        <div class="aa-single-advance-search">
                          <!-- <button class="aa-search-btn" type="button" value="Procurar" > -->
                          <button class="btn btn-homefinder subtitulo" onclick="pesquisaranuncios()" type="button">Pesquisar</button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                        </div>
                      </div>
                    </div>
                  </div>


                </div>



              </div>
            </div>
        </section>
        <!-- / Advance Search -->


        <!-- Lista Imoveis -->
        <section>
          <br><br><br>
          <div class="container">
            <div>
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


<script src="assets/js/scriptPreco.js"></script>
<script src="assets/js/pesquisa.js"></script>




</html>