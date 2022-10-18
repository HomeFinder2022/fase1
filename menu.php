<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HomeFinder - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.8.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Procurar Propriedade</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Pesquisar</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Tipo</label>
              <select class="form-control form-select form-control-a" id="Type" onchange="escolheTipo(this.value)">
                <option>Todos</option>
                <option>Arrendamento</option>
                <option>Compra</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">Cidade</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>Todas</option>
                <option>Abrantes</option>
                <option>Agualva-Cacém</option>
                <option>Águeda</option>
                <option>Albergaria</option>
                <option>Albufeira</option>
                <option>Alcacér do Sal</option>
                <option>Alcobaça</option>
                <option>Alfena</option>
                <option>Almada</option>
                <option>Almeirim</option>
                <option>Alverca do Ribatejo</option>
                <option>Amadora</option>
                <option>Amarante</option>
                <option>Amora</option>
                <option>Anadia</option>
                <option>Angra do Heroismo</option>
                <option>Aveiro</option>
                <option>Barcelos</option>
                <option>Barreiro</option>
                <option>Beja</option>
                <option>Borba</option>
                <option>Braga</option>
                <option>Bragança</option>
                <option>Caldas da Rainha</option>
                <option>Câmara de Lobos</option>
                <option>Caniço</option>
                <option>Cantanhede</option>
                <option>Cartaxo</option>
                <option>Castelo Branco</option>
                <option>Chaves</option>
                <option>Coimbra</option>
                <option>Costa da Caparica</option>
                <option>Covilhã</option>
                <option>Elvas</option>
                <option>Entrocamento</option>
                <option>Emesinde</option>
                <option>Esmoriz</option>
                <option>Espinho</option>
                <option>Esposende</option>
                <option>Estarreja</option>
                <option>Évora</option>
                <option>Fafe</option>
                <option>Faro</option>
                <option>Fátima</option>
                <option>Felgueiras</option>
                <option>Figueira da Foz</option>
                <option>Fiães</option>
                <option>Freamunde</option>
                <option>Funchal</option>
                <option>Fundão</option>
                <option>Gafanha da Nazaré</option>
                <option>Gandra</option>
                <option>Gondomar</option>
                <option>Gouveia</option>
                <option>Guarda</option>
                <option>Guimarães</option>
                <option>Horta</option>
                <option>Ílhavo</option>
                <option>Lagoa,Açores</option>
                <option>Lagoa,Algarve</option>
                <option>Lagos</option>
                <option>Lamego</option>
                <option>Leiria</option>
                <option>Lisboa</option>
                <option>Lixa</option>
                <option>Loulé</option>
                <option>Loures</option>
                <option>Lourosa</option>
                <option>Macedo de Cavaleiros</option>
                <option>Machico</option>
                <option>Maia</option>
                <option>Mangualde</option>
                <option>Marco de Canaveses</option>
                <option>Marinha Grande</option>
                <option>Matosinhos</option>
                <option>Mealhada</option>
                <option>Mêda</option>
                <option>Miranda do Douro</option>
                <option>Mirandela</option>
                <option>Montemor-o-Novo</option>
                <option>Montijo</option>
                <option>Moura</option>
                <option>Odivelas</option>
                <option>Olhão</option>
                <option>Oliveira de Azeméis</option>
                <option>Oliveira do Bairro</option>
                <option>Oliveira do Hospital</option>
                <option>Ourém</option>
                <option>Ovar</option>
                <option>Paços de Ferreira</option>
                <option>Paredes</option>
                <option>Penafiel</option>
                <option>Peniche</option>
                <option>Peso da Régua</option>
                <option>Pinhel</option>
                <option>Pombal</option>
                <option>Ponta Delgada</option>
                <option>Ponte de Sor</option>
                <option>Portalegre</option>
                <option>Portimão</option>
                <option>Porto</option>
                <option>Póvoa de Santa Iria</option>
                <option>Póvoa de Varzim</option>
                <option>Praia da Vitória</option>
                <option>Quarteira</option>
                <option>Queluz</option>
                <option>Rebordosa</option>
                <option>Reguengos de Monsaraz</option>
                <option>Ribeira Grande</option>
                <option>Rio Maior</option>
                <option>Rio Tinto</option>
                <option>Sabugal</option>
                <option>Sacavém</option>
                <option>Samora Correia</option>
                <option>Santa Comba Dão</option>
                <option>Santa Cruz</option>
                <option>Santa Maria da Feira</option>
                <option>Santana</option>
                <option>Santarém</option>
                <option>Santiago do Cacém</option>
                <option>Santo Tirso</option>
                <option>São João da Madeira</option>
                <option>São Mamede de Infesta</option>
                <option>São Pedro do Sul</option>
                <option>Lordelo</option>
                <option>Seia</option>
                <option>Seixal</option>
                <option>Senhora da Horta</option>
                <option>Senhora da Hra</option>
                <option>Serpa</option>
                <option>Setúbal</option>
                <option>Silves</option>
                <option>Sines</option>
                <option>Tarouca</option>
                <option>Tavira</option>
                <option>Tomar</option>
                <option>Tondela</option>
                <option>Torres Novas</option>
                <option>Torres Vedras</option>
                <option>Trancoso</option>
                <option>Trofa</option>
                <option>Valbom</option>
                <option>Vale de Cambra</option>
                <option>Valença</option>
                <option>Valongo</option>
                <option>Valpaços</option>
                <option>Vendas Novas</option>
                <option>Viana do Castelo</option>
                <option>Vila Badeira</option>
                <option>Vila do Conde</option>
                <option>Vila Franca de Xira</option>
                <option>Vila Nova de Famalição</option>
                <option>Vila Nova da Foz Côa</option>
                <option>Vila Nova de Gaia</option>
                <option>Vila Nova de Santo André</option>
                <option>Vila Real</option>
                <option>Vila Real de Santo António</option>
                <option>Viseu</option>
                <option>Vizela</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Quartos</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Qualquer</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garagem</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Qualquer</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Casas de Banho</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Qualquer</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Preço Minimo</label>
                <input type="number" class="form-control" id="precoMin" >
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Preço Maximo</label>
                <input type="number" class="form-control" id="precoMAx" >
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Procurar Propriedade</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><img class ="logo-menu" src="assets/img/logo3.png" alt="logo"></a>


      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.html">Sobre</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="property-grid.html">Propriedades</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">Noticias</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Páginas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.html">Página com uma propriedade</a>
              <a class="dropdown-item " href="blog-single.html">Noticia</a>
              <a class="dropdown-item " href="agents-grid.html">Agentes Imobiliários</a>
              <a class="dropdown-item " href="agent-single.html">Agente Imobiliário</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contatos</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->
  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->