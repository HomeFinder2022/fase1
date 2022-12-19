<?php require_once 'menu.php'; ?>



  <!-- =======Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Criar uma nova palavra-passe </h1>

          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Login</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Criar uma nova palavra-passe
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->


<div class="container">
    <section class="agents-grid grid">



      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0 tabelaTitulos">Criar uma nova palavra-passe</h5>
              <small class="text-muted float-end"></small>
            </div>
            <br>
            <div class="card-body">

              <form class="row g-3" >
                <div class="col-8">
                  <label for="emailedit" class="form-label">Insira o seu Email: </label>
                  <input type="text" class="form-control" id="emailedit">
                </div>


                <div class="col-8">
                  <label for="passnova" class="form-label">Insira a sua nova palavra-passe: </label>
                  <input type="password" class="form-control" id="passnova">
                </div>

              

                <div class="col-12 mt-3">
                  <button class="btn btn-success" type="button" onclick="btnEditPass()">Guardar</button>
                </div>



              
              </form>
            </div>
          </div>
        </div>


    </section> <!-- ======= Fim recuperar palavra passe ======= -->
  </div>








<?php require_once 'footer.php'; ?>
  
  <!-- Template Main JS File -->
  <script src="assets/js/recuperarPass.js"></script>


</html> -->