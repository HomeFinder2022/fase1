<?php require_once 'menu.php'; ?>

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Qual o Imóvel que procura?</h1>
              <span class="color-text-a">Anúnicos de Imóveis</span>
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
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
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
          </div>






          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img id="fotoImovelInfo"src="assets/img/property-1.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#" id="concelhoImovelInfo">
                        <br id="moradaImovelInfo" /> </a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a" id="precoImovelInfo"> €</span>
                    </div>
                    <a href="infoImovel.php" class="link-a" style="font-size:8vw>
                      <span class="bi bi-chevron-right"> Ver mais Informações</span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title" >Tipologia</h4>
                        <span id="tipologiaImovelInfo">
                        
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">WC's</h4>
                        <span id="numWcImovelInfo"></span>
                      </li>
                      <li>
                        <h4 class="card-info-title" >Área Bruta</h4>
                        <span id="areaBrutaImovelInfo"></span>
                      </li>
                      <li>
                        <h4 class="card-info-title" >Ano</h4>
                        <span id="anoImovelImovelInfo"></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>




          
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

  
    
  </body>
  
  <?php require_once 'footer.php'; ?>

  <script src="assets/js/imovel.js"></script>
  
  </html>