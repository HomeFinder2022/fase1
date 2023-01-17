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
  <link rel="icon" type="image" href="../dashboard/HomeFinder Dashboard/assets/img/icon-homefinder.png"/>
  <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->

  
  <!-- <script src="assets/js/listaSelect.js"></script> -->



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
          <!-- <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Pesquisar</label>
              <input type="text" class="form-control form-control-lg form-control-a">
            </div>
          </div> -->

          <!-- <div class="col-6">
            <div class="col-9">
              <label for="apelido" class="form-label">sasas</label>
              <input type="text" class="form-control" id="apelido">
            </div>
          </div> -->



          <div class="col-md-6">
            <div class="mb-3">
              <label for="listaConcelhos4" class="form-label">Concelho</label>
              <select class="form-select"  id="listaConcelhos4">
              <option selected>Sem concelhos registados</option>
              </select>
            </div>
          </div>



          <div class="col-md-6">
            <div class="mb-3">
              <label for="tipoNegocImovel4" class="form-label">Tipo de Negócio</label>
              <select class="form-select"  id="tipoNegocImovel4">
              <option selected>Sem tipos registados</option>
              </select>
            </div>
          </div>





          <div class="col-md-6">
            <div class="mb-3">
              <label for="tipoImovel4" class="form-label">Tipo de Imóvel</label>
              <select class="form-select"  id="tipoImovel4">
              <option selected>Sem imóveis registados</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="tipoImovel4" class="form-label">Estado</label>
              <select class="form-select" id="estadoImovel4">
              <option selected>Sem estados registados</option>
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

          <br>
          <br>

          <div class="col-md-12">
            <button class="btn btn-b" onclick="pesquisarAnu()" type="button">Procurar Propriedade</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- End Property Search Section -->>

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
              <span class="align-middle">Definições</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#">
              <span class="d-flex align-items-center align-middle">
                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                <span class="flex-grow-1 align-middle">Pagamentos</span>
                <!-- <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span> -->
              </span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="contactos.php">
              <i class="bx bx-support me-2"></i>
              <span class="align-middle">Contactos</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="sobre.php">
              <i class="bx bx-help-circle me-2"></i>
              <span class="align-middle">Sobre</span>
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


    <!-- <script src="assets/js/listaSelect.js"></script>
    <script src="assets/js/pesquisa.js"></script> -->

