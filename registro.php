<?php session_destroy();
require_once 'menu.php'; ?>

<main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Registar</h1>

            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Registar
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

   

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
      
            <div class="container">
        <div class="row">
          <!-- Basic Layout -->
          <div class="col-xxl">
            <div class="card mt-3">
              <br>
              <br>

              <div
                class="card-header d-flex align-items-center justify-content-between">
                <h3 class="title-form">Novo Utilizador</h3>    
              </div>
              <div class="card-body">
              <form class="row g-3">


                          <div class="col-3">
                            <label for="nif" class="form-label">Nif</label>
                            <input type="number" class="form-control" id="nif">
                          </div>


                          

                          <div class="col-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome">
                          </div>

                          <div class="col-3">
                            <label for="apelido" class="form-label">Apelido</label>
                            <input type="text" class="form-control" id="apelido">
                          </div>
                          <div class="col-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passuti">
                          </div>

                          <div class="col-9">
                            <label for="morada" class="form-label">Morada</label>
                            <input type="text" class="form-control" id="morada">
                          </div>

                          <div class="col-3">
                            <label for="codpostal" class="form-label">Codigo-Postal</label>
                            <input type="text" class="form-control" id="codpostal" placeholder="0000-000">
                          </div>

                          

                          <div class="col-3">
                            <label for="idade" class="form-label">Idade</label>
                            <input type="number" class="form-control" id="idade">
                          </div>

                          <div class="col-3">
                            <label for="tel" class="form-label">Numero de Telemóvel</label>
                            <input type="number" class="form-control" id="tel">
                          </div>

                          <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email">
                          </div>


                          
<!-- 
                          <div class="col-6">
                            <div class="input-group">
                            <span class="input-group-text">Tipo de Utilizador</span>
                            <select class="form-select" id="tipoutilizador" >
                            </select>
                            </div>
                          </div> -->

                          <div class="col-6">
                            <div class="input-group">
                            <span class="input-group-text">País de Nascimento</span>
                            <select class="form-select" id="pnascimento">
                            </select>
                            </div>
                          </div>

                          <div class="col-12">
                            <label for="fotoUtilizador" class="form-label">Fotografia</label>
                            <input class="form-control" type="file" id="fotoUtilizador" >
                          </div>




                          <div class="col-12 mt-3">
                            <button class="btn btn-success" onclick="registoUtilizador()" type="button">Registar</button>
                          </div>
                        </form>
              </div>
            </div>
          </div>
        </div>
      </div>





</body>

<?php require_once 'footer.php'; ?>

<script src="assets/js/registo.js"></script>

</html>















     





