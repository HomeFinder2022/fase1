
    

<?php require_once 'menu.php'; ?>
<?php


if(isset($_SESSION['nomeUser'])){ ?>







<main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="main.php">Home</a></li>
          <li class="breadcrumb-item active">Perfil do Utilizador</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img id="fotoperfil2" class="w-px-40 rounded-circle">
              <h2 id="nomeUser2"></h2>
              <h3 id="tipoUser1"></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Informações</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Alterar Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Sobre</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="container">
                      <div class="row">
                                        <!-- <div class="col-md-3">
                                            <div class="mb-2">
                                                <label for="nifPerfilEdit" class="form-label">Nif</label>
                                                <input type="text" class="form-control" id="nifPerfilEdit">
                                            </div>
                                        </div> -->

                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="nomePerfilEdit" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="nomePerfilEdit">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="apelidoPerfilEdit" class="form-label">Apelidos</label>
                                                <input type="text" class="form-control" id="apelidoPerfilEdit">
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <label for="moradaPerfilEdit" class="form-label">Morada</label>
                                                <input type="text" class="form-control" id="moradaPerfilEdit">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="codigoPostalPerfilEdit" class="form-label">Codigo Postal</label>
                                                <input type="text" class="form-control" id="codigoPostalPerfilEdit">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                          <div class="mb-3">
                                              <label for="pais_id" class="form-label">Pais de nascimento</label>
                                              <select class="form-select" id="pais_id">
                                                  <option selected>Sem paises registados</option>
                                              </select>
                                          </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label for="idadePerfilEdit" class="form-label">Idade</label>
                                                <input type="number" class="form-control" id="idadePerfilEdit">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="telemovelPerfilEdit" class="form-label">Contacto</label>
                                                <input type="number" class="form-control" id="telemovelPerfilEdit">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="emailPerfilEdit" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="emailPerfilEdit">
                                            </div>
                                        </div>


                                                                          
                                        <div class="col-md-6">
                                          <div class="mb-3">
                                            <label for="formFile" class="form-label">Default file input example</label>
                                            <input class="form-control" type="file" id="imagemPerfilEdit">
                                          </div>
                                        </div>



                    <div class="text-center">
                    <button type="button" class="btn btn-success"  id="btnEditPerfil">Guardar</button>
                    </div>

                      </div>
                    </div>
                                        
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password Atual</label>
                      <div class="col-md-4 col-lg-4">
                        <input name="password" type="password" class="form-control" id="passAtual">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="passworda" class="col-md-4 col-lg-3 col-form-label">Nova Password</label>
                      <div class="col-md-8 col-lg-4">
                        <input name="passworda" type="password" class="form-control" id="passworda">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="confirm_password" class="col-md-4 col-lg-3 col-form-label">Repete a Password</label>
                      <div class="col-md-8 col-lg-4">
                        <input name="confirm_password" type="password" class="form-control" id="confirm_password">
                      </div>
                    </div>



                    <div class="text-center">
                    <button type="button" class="btn btn-success" onclick="btnEditPassword()">Guardar</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->
  </body>
 
























<?php


}else{

  require_once 'error.php';
} ?>

<?php require_once 'footer.php'; ?>


<script src="assets/js/listaSelect.js"></script>
<script src="assets/js/imovel.js"></script>
<script src="assets/js/registo.js"></script>


</html>
