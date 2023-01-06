<?php  session_start();?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HomeFinder</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon_homefinder.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/datatables.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/loginstyle.css" rel="stylesheet">
  <link href="assets/css/prettycheckbox.css" rel="stylesheet">
  <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->



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
              <input type="text" class="form-control form-control-lg form-control-a">
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
              <input type="number" class="form-control" id="precoMin">
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Preço Maximo</label>
              <input type="number" class="form-control" id="precoMAx">
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
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand ms-1" href="index.php"><img class="logo-menu" src="assets/img/logo3.png"
          alt="logo"></a>


      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="sobre.php">Sobre</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="servicos.php">Serviços</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Anúncios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="anuncios.php">Anúncios</a>
              <a class="dropdown-item " href="criarAnuncio.php">Criar Anúncio</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="../dashboard/HomeFinder Dashboard/html/index.php">Gestão</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="noticias.php">Noticias</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link " href="precos.php">Subscrição</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contactos.php">Contactos</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>



    </div>
    <!-- Button trigger modal -->
    <?php
    if(!isset($_SESSION['nomeUser'])){
      ?>
    <button type="button" class="btn btn-success me-4" onclick="openmodal()">Login</button>
    <?php
    }
    ?>

    <?php


if(isset($_SESSION['nomeUser'])){ ?>
    <!-- User -->


    <div class="ms-3 me-3">

      <li class="button" type="button" data-toggle="left-top">
        <a class="nav-link dropdown-toggle " href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="avatar avatar-online">
            <img id="fotoperfil1" alt="" class="w-px-40 h-auto rounded-circle">
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropleft">
          <li>
            <a class="dropdown-item" href="pages-account-settings-account.html">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <!-- ajustar imagem em round  -->
                    <img id="fotoperfil" alt="" class="w-px-40 h-auto rounded-circle">
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block" id="nomeUser1"></span>
                  <small class="text-muted" id="tipoUser" ></small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="perfil.php">
              <i class="bx bx-user me-2"></i>
              <span class="align-middle">Meu perfil</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#">
              <i class="bx bx-cog me-2"></i>
              <span class="align-middle">Settings</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#">
              <span class="d-flex align-items-center align-middle">
                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                <span class="flex-grow-1 align-middle">Billing</span>
                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
              </span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="contactos.php">
              <i class="bx bx-support me-2"></i>
              <span class="align-middle">Help</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="sobre.php">
              <i class="bx bx-help-circle me-2"></i>
              <span class="align-middle">FAQ</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="precos.php">
              <i class="bx bx-dollar me-2"></i>
              <span class="align-middle">Subscrição</span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <button class="dropdown-item" onclick="logout()">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>

          </li>
        </ul>
      </li>

    </div>





    <?php

} ?>




  </nav><!-- End Header/Navbar -->

 

  <!-- Modal -->
  
   <div class="modal fade" id="modalOpenlogin" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content"> 
      

        <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up">
    
    <label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="email" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<!-- <div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div> -->
				<div class="group">
					<input type="submit" class="button" onclick="login()" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">


					<a href="resetPass.php">Esqueceu-se da password?</a><br>
          <a href="registro.php">Quero registar me?</a>
				</div>
			</div>
			<!-- <div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>


  






        </div>
      </div>
    </div>


 


