





  <?php require_once 'menu.php'; ?>


  <main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Criar Anúncio </h1>

            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Criar Anúncio
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->


    <!-- ======= Adicrionar Anuncio ======= -->
    <div class="container">
      <section class="agents-grid grid">



        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
          <!-- Basic Layout -->
          <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 tabelaTitulos">Novo Anúncio</h5>
                <small class="text-muted float-end"></small>
              </div>
              <br>
              <div class="card-body">

                <form>


                  <div class="row mb-4">
                    <div class="input-group">

                      <label class="input-group-text col-sm-2 fontSelect" for="selectTipoAnuncio">Tipo de
                        Anúncio</label>

                      <div class="col-sm-3">
                        <select class="form-select" id="selectTipoAnuncio">


                        </select>
                      </div>
                    </div>
                  </div>




                  <div class="row align-items-start">

                    <div class="col-md-7">


                      <div class="row mb-4">
                        <label class="col-sm-2 col-form-label " for="basic-default-name">Morada</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name"
                            placeholder="Av.Sebastião da Gama nº 1 2ºD" />
                        </div>
                      </div>

                    </div>

                    <div class="col">



                      <div class="row mb-4">

                        <label class="col-sm-4 col-form-label" for="basic-default-company">Código Postal</label>

                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="basic-default-company"
                            placeholder="0000 - 000" />
                        </div>
                      </div>

                    </div>

                  </div>



                  <div class="row align-items-start">
                    <div class="col">

                      <div class="row mb-4">
                        <div class="input-group">

                          <label class="input-group-text col-sm-4 fontSelect" for="selectCidade">Concelho</label>

                          <div class="col-sm-8">
                            <select class="form-select" id="selectCidade">


                            </select>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col">


                      <div class="row mb-4">
                        <div class="input-group">

                          <label class="input-group-text col-sm-4 fontSelect" for="selectDistrito">Distrito</label>

                          <div class="col-sm-8">
                            <select class="form-select" id="selectDistrito">


                            </select>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="col">

                      <div class="row mb-4">
                        <div class="input-group">

                          <label class="input-group-text col-sm-4 fontSelect" for="selectFreguesia">Freguesia</label>

                          <div class="col-sm-8">
                            <select class="form-select" id="selectFreguesia">


                            </select>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="col">


                      <div class="row mb-4">
                        <div class="input-group">

                          <label class="input-group-text col-sm-4 fontSelect" for="selectTipoImovel">Tipo Imóvel</label>

                          <div class="col-sm-8">
                            <select class="form-select" id="selectTipoImovel">


                            </select>
                          </div>
                        </div>

                        
                      </div>

                    </div>
                  </div>


                  <div class="row align-items-start">

                    <div class="col">
                      <div class="row mb-4">
                        <label class="col-sm-4 col-form-label" for="basic-default-company">Área Útil</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="basic-default-company" placeholder="50 m2" />

                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="row mb-4">
                        <label class="col-sm-4 col-form-label" for="basic-default-company">Área Bruta</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="basic-default-company" placeholder="50 m2" />

                        </div>
                      </div>

                    </div>

                    <div class="col">
                      <div class="row mb-4">
                        <label class="col-sm-4 col-form-label " for="basic-default-company">Nº de WC</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="basic-default-company" placeholder="2" />

                        </div>
                      </div>
                    </div>

                    
                    <div class="col">


                      <div class="row mb-4">
                        <div class="input-group ">

                          <label class="input-group-text col-sm-4 fontSelect" for="selectCertificadoEnergetico">Certificado Energético</label>

                          <div class="col-sm-8">
                            <select class="form-select" id="selectCertificadoEnergetico">


                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>










                  <div class="row align-items-start">

                    <div class="col">
                      <div class="row mb-4">
                        <label class="col-sm-5 col-form-label" for="basic-default-company">Condições</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="basic-default-company"
                            placeholder="Novo/Usado/Remodelado" />

                        </div>
                      </div>
                    </div>

                    <div class="col">


                      <div class="row mb-4">
                        <label class="col-sm-5 col-form-label" for="basic-default-company">Ano de Construção</label>
                        <div class="col-sm-7">

                          <input type="date" class="form-control" id="basic-default-company" placeholder="1995" />

                        </div>
                      </div>

                    </div>

                    <div class="col">


                      <div class="row mb-4">
                        <label class="col-sm-5 col-form-label" for="basic-default-company">Preço</label>
                        <div class="col-sm-7">

                          <input type="number" class="form-control" id="basic-default-company" placeholder="100 000€" />

                        </div>
                      </div>

                    </div>





                  </div>




                  <div class="row mb-4">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Caracteristicas</label>
                    <div class="col-sm-10">

                      <input type="checkbox" id="caracteristicasImovel">

                    </div>
                  </div>







                  <div class="col-sm-5 mb-2 mb-sm-1">
                    <label for="imgImovel"
                      class="text-xs font-weight-bold titulosNovos text-uppercase mb-3">Fotografias</label>

                    <input class="form-control" type="file" id="imgImovel">
                  </div>


                  <br><br>









                </form>
              </div>
            </div>
          </div>


      </section> <!-- ======= Fim Adicrionar Anuncio ======= -->
    </div>



    <div class="container">
      <section class="agents-grid grid">



        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
          <!-- Basic Layout -->
          <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 tabelaTitulos">Anuncios</h5>
                <small class="text-muted float-end"></small>

              </div>
              <br>
              <div class="card-body">





                <table class="table align-middle mb-0 bg-white" id="#">
                  <thead class="bg-light tabelaTitulos">
                    <tr>
                      <th>Fotografias</th>
                      <th>Tipo de Anuncio</th>
                      <th>Morada</th>
                      <th>Concelho</th>
                      <th>Tipologia</th>
                      <th>Preço</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>




                  <tbody id="#">

                    <tr>
                      <td></td>

                      <td>Compra</td>
                      <td>Avenida Tomas de Alcaide</td>
                      <td>Estremoz</td>
                      <td>T1</td>
                      <td>100.000 €</td>

                      <td>
                        <button type="button" class="btn btn-light tabelaTitulos">Editar</button>
                      </td>

                      <td>
                        <button type="button" class="btn btn-outline-danger">Remover</button>
                      </td>

                    </tr>


                  </tbody>
                </table>




                <!-- ////// -->




                <!-- ///// -->

              </div>
            </div>
          </div>


      </section> <!-- ======= Fim Adicrionar Anuncio ======= -->
    </div>












  </main><!-- End #main -->


  <?php require_once 'footer.php'; ?>



  