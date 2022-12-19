<?php require_once 'menu.php'; ?>


<body>
  

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


  <!-- ======= Adicionar Anuncio ======= -->
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

              <form class="row g-3">

                <div class="col-4">
                  <div class="input-group">
                    <span class="input-group-text">Tipo de Negócio</span>
                    <select class="form-select" onchange="filtroImovel(this.value)" id="tipoNegocImovel2">

                    </select>
                  </div>
                </div>

                <div class="col-4">
                  <div class="input-group">
                    <span class="input-group-text">Tipo de Imóvel</span>
                    <select class="form-select" onchange="filtroTipologia(this.value)" id="tipoImovel2">
                    
                    </select>
                  </div>
                </div>

                <div class="col-4" id="tipologiaVenda">
                  <!-- <div class="input-group"> -->
                  <!-- <span class='input-group-text'>Tipologia do Imóvel</span>
  <select class='form-select' id='tipologiaImovel'></select> -->
                  <!-- </div> -->
                </div>

                <div class="col-6" id="precoImovel2">
                  <div class="input-group">

                  </div>
                </div>


                <div class="col-8">
                  <label for="moradaImovel2" class="form-label">Morada</label>
                  <input type="text" class="form-control" id="moradaImovel2">
                </div>

                <div class="col-4">
                  <label for="postalImovel2" class="form-label">Código Postal</label>
                  <input type="text" placeholder="0000-000" class="form-control" id="postalImovel2">
                </div>



                <div class="col-4">
                  <div class="input-group">
                    <span class="input-group-text">Distrito</span>
                    <select class="form-select" onchange="filtroDistrito(this.value)" id="listaDistritos2">

                    </select>
                  </div>
                </div>



                <div class="col-4">
                  <div class="input-group">
                    <span class="input-group-text">Concelho</span>
                    <select class="form-select" onchange="filtroConcelho(this.value)" id="listaConcelhos2">
                    </select>
                  </div>
                </div>

                <div class="col-4">
                  <div class="input-group">
                    <span class="input-group-text">Freguesia</span>
                    <select class="form-select" id="listaFreguesias2">
                      <option selected>Sem localidades registadas</option>
                    </select>
                  </div>
                </div>


                <div class="col-3">
                  <label for="areaUtil2" class="form-label">Área Útil</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="areaUtil2">
                    <span class="input-group-text fw-bold">&#13217</span>
                  </div>
                </div>

                <div class="col-3">
                  <label for="areaBruta2" class="form-label">Área Bruta</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="areaBruta2">
                    <span class="input-group-text fw-bold">&#13217</span>
                  </div>
                </div>

                <div class="col-3">
                  <label for="numWcs2" class="form-label">Nº WC's</label>
                  <input type="number" class="form-control" id="numWcs2">
                </div>

                <div class="col-3">
                  <label for="anoImovel2" class="form-label">Ano Construção</label>
                  <input type="number" class="form-control" id="anoImovel2">
                </div>

                <div class="col-6">
                  <div class="input-group">
                    <span class="input-group-text">Certificado Energético</span>
                    <select class="form-select" id="certEnerg2">
                    </select>
                  </div>
                </div>

                <div class="col-6">
                  <div class="input-group">
                    <span class="input-group-text">Estado</span>
                    <select class="form-select" id="estadoImovel2">
                    </select>
                  </div>
                </div>



                <div class="col-12">
                  <label for="obsImovel" class="form-label">Caracteristicas</label>
                  <!-- <div class="input-group"> -->

                  <div class="form-check form-check-inline">

                    <div class="pretty p-icon p-round p-smooth">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Aquecimento Central</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Ar Condicionado</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Acessibilidade a pessoas com mobilidade condicionada</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Arrecadação</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Garagem</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Condominio</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>



                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Elevador</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Jardim</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>



                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Lareira</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Sistema de Segurança</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Estacionamento</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Alarme Incêndio</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Churrasqueira</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Piscina</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Suite</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Terraço</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Varanda</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>

                    <div class="pretty p-icon p-round p-smooth mt-3">
                      <input type="checkbox" />
                      <div class="state p-success">
                        <label>Sauna</label>
                        <i class="icon mdi mdi-check"></i>
                      </div>
                    </div>


                  </div>
                </div>

                <div class="col-12">
                  <label for="fotosImovel2" class="form-label">Fotografias do Imóvel</label>
                  <input class="form-control" type="file" id="fotosImovel2" multiple="multiple">
                </div>

                <div class="col-12">
                  <label for="obsImovel2" class="form-label">Observações</label>
                  <textarea class="form-control" aria-label="With textarea" id="obsImovel2"></textarea>
                </div>

                <div class="col-12 mt-3">
                  <button class="btn btn-homefinder subtitulo" onclick="registoImovel()" type="button">Registar Anúncio</button>
                </div>
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





              <table class="table align-middle mb-0 bg-white" id="tabelaImoveis2">
                <thead class="bg-light tabelaTitulos">
                  <tr>
                    <th>ID</th>
                    <th>Morada</th>
                    <th>Distrito</th>
                    <th>Concelho</th>
                    <th>Freguesia</th>
                    <th>Descricao</th>
                    <th>Tipologia</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody id="listaImoveis2">



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

</body>


<?php require_once 'footer.php'; ?>


<script src="assets/js/listaSelect.js"></script>
<script src="assets/js/imovel.js"></script>


</html>