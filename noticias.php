


<?php require_once 'menu.php'; ?>

<main id="main">







    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Noticias</h1>
              <!-- <span class="color-text-a">Noticias</span> -->
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Noticias
                </li>
              </ol>
            </nav>
          </div>
        </div>
  
  <br><br>
             
<?php

// $url = 'https://newsapi.org/v2/top-headlines?country=pt&category=business&apiKey=f3b6a39ac5a54486bcb8750ec85243dc';
// $response = file_get_contents($url);
// $NewsData = json_decode($response);

$url = 'https://newsapi.org/v2/top-headlines?country=pt&category=business&apiKey=f3b6a39ac5a54486bcb8750ec85243dc';

$headers =array();

$headers[] = 'X-Authorization-Token:fgfdg4545hKUertefgdds';

$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL,$url);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


$results=curl_exec($ch);

curl_close($ch);




$results = json_decode($results, true);



?>



<div class = "container-fluid-noticias">

<?php

foreach($results['articles'] as $News){


?>


 <!-- ======= Agent Single ======= -->
 <section class="agent-single">

      <div class="container">
        <div class="row newsGrind">
          <div class="col-sm-12">
            <div class="row">
            
              <div class="col-md-4">
            
                <div class="agent-avatar-box">
                  <img src="<?php echo  $News['urlToImage'] ?>" alt="" class="img-noticias img-fluid">
                </div>
              </div>
              <div class="col-md-8 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                  <br>
                    <div class="title-box-d">
                      <h3 class="title-d"  style="font-size: 25px" > <?php echo $News['title']?>
                   
                      </h3>
                    </div>
                  </div>

                  <div class="agent-content mb-8">
                    <p class="color-text-a">
                    <?php echo $News['description']?>
                    </p>

                    <div class="info-agents color-a">
                      <p>
                        <strong>Autor: </strong>
                        <span class="color-text-a"> <?php echo $News['author']?> </span>
                      </p>
                      
                  
                      <p>
                        <strong>Publicado por: </strong>
                        <span class="color-text-a"><?php echo $News['publishedAt']?></span>
                      </p>
                    </div>
                  </div>




                </div>
              </div>
            </div>
          </div>
     

        </div>
      </div>








<?php
}
?>








</div>
    </section><!-- End Intro Single-->








  
    





  </main><!-- End #main -->


 </body>

<?php require_once 'footer.php'; ?>

    <script src="noticias.js"></script>

</html>