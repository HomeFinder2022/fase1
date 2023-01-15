


<!-- Font awesome -->




<link href="assets/css/prettycheckbox.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">


<?php require_once 'menu.php'; ?>


<?php


if(isset($_SESSION['nomeUser'])){ ?>

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

    <br><br><br><br><br><br>


  </section><!-- End Intro Single-->












  <!-- ======= Property Grid ======= -->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">


        <!-- <div class="col-sm-12">
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
        </div> -->



      
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

           
            <div class="col-3">
                  <div class="input-group">
                    <span class="input-group-text">Concelho</span>
                    <select class="form-select" id="listaConcelhos3">
                    </select>
                  </div>
                </div>


              <div class="col-3">
                  <div class="input-group">
                    <span class="input-group-text">Tipo de Negócio</span>
                    <select class="form-select" id="tipoNegocImovel3">

                    </select>
                  </div>
                </div>

                <div class="col-3">
                  <div class="input-group">
                    <span class="input-group-text">Tipo de Imóvel</span>
                    <select class="form-select"  id="tipoImovel3">
                    
                    </select>
                  </div>
                </div>

                <div class="col-3" id="tipologiaVenda3">
                  <!-- <div class="input-group"> -->
                  <!-- <span class='input-group-text'>Tipologia do Imóvel</span>
  <select class='form-select' id='tipologiaImovel'></select> -->
                  <!-- </div> -->
                </div>


              </div>

              <br>




              <div class="row">
              <div class="column">

              <div class="col-3">
              <span class="input-group-text">Preço</span>



              </div>

              </div>



              <div class="column">
              <div class="col-3">
              <div class="priceSlider">



<div class="min-max">
 <div class="min">
     <label>Min €</label><span id="min-value"></span>
 </div>
 <div class="max">
     <label>Max €</label><span id="max-value"></span>
 </div>     
</div> 
    
<div class="min-max-range">
<input type="range" min="0" max="500000" value="200000" class="range" id="min">
<input type="range" min="500001" max="1000000" value="800000" class="range" id="max">      
</div>    
    
<div style="clear: both;"></div>    
</div> 


</div>

 </div>


    
    
                  </div>
    
           


<!--                
              <div class="col-md-3">
                 <div class="aa-single-advance-search">
                  <select id = "certEnerg3">
                 
                  </select>
              </div>
              </div> -->

             
              
              <div class="row justify-content-md-end ">

              <div class="col-md-2 ">

                <div class="aa-single-advance-search">
                  <!-- <button class="aa-search-btn" type="button" value="Procurar" > -->
                  <button class="aa-search-btn" onclick="pesquisaranuncios()" type="button" value="Procurar">Pesquisar</button>
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

    <br><br>

  </section>
  <!-- / Advance Search -->


































<br><br><br>
  <!-- Lista Imoveis -->
  <section>
  <br><br><br>
  
  <div class="container">
       
   
  <div >
        
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
<?php


}else{

  require_once 'error.php';
} ?>

<?php require_once 'footer.php'; ?>

<script src="assets/js/imovel.js"></script>
<script src="assets/js/listaSelect.js"></script>



        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  
  <script src="assets/js/scriptPreco.js"></script> 
  <script src="assets/js/pesquisa.js"></script> 




</html>
















<!-- 



          <div class="card-box-a card-shadow">

            <div class="img-box-a">
              <img id="fotoImovelInfo" src="assets/img/property-1.jpg" alt="" class="img-a img-fluid">
            </div>


            <div class="card-overlay" >


              <div class="card-overlay-a-content">


                <div class="card-header-a">

                  <h2 class="card-title-a">

                    <a id="concelhoImovelInfo">
                      <br id="moradaImovelInfo" /> </a>

                  </h2>

                </div>

                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a" id="precoImovelInfo"> €</span>
                  </div>
                  <a href="infoImovel.php" class="link-a">Mais Informações
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
               
              
               
                <div class="card-footer-a">
                 
            
                <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Tipologia</h4>
                      <span id="tipologiaImovelInfo">

                      </span>
                    </li>
                    <li>

                  
                      <h4 class="card-info-title">WC's</h4>
                      <span id="numWcImovelInfo"></span>
                    </li>
                    <li>

                      <h4 class="card-info-title">Área Bruta</h4>
                      <span id="areaBrutaImovelInfo"></span>
                    </li>
                    <li>

                      <h4 class="card-info-title">Ano</h4>
                      <span id="anoImovelImovelInfo"></span>
                    </li>
                  </ul>
                </div>
            
             
              </div>
            </div>





          </div> -->
