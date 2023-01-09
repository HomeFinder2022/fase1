<?php

require_once 'connection.php';

class InfoImovel{


                function infoImovelPagina(){

                  global $conn;
                  
                
                  $sql = "SELECT imovel.idimovel, utilizador.nome AS nomeProprietario, utilizador.email, listafotos.fotos, imovel.morada, distrito.nome AS distrito,
                  concelho.nome AS concelho, imovel.areabruta, imovel.numwc, 
                  imovel.anoconstrucao,imovel.descricao, tiponegocio.descricao AS tiponegocio, 
                  imoveisvenda.precovenda
                  
                    
                    FROM imovel, listafotos, utilizador, distrito, concelho, tiponegocio, imoveisvenda
                  
                   
                    WHERE imovel.nifutilizador = utilizador.nif AND
                    listafotos.idimovel = imovel.idimovel AND
                    imovel.iddistrito = distrito.iddistrito AND
                    imovel.idconcelho = concelho.idconcelho AND
                    imovel.idtiponegocio = tiponegocio.idtiponegocio AND
                    imovel.idimovel = imoveisvenda.idimovel ";
                
                
                  $result = $conn->query($sql);
                  
                
                  $msg = "";
                
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                
                
              

                        $msg .= "<br>";
 
                        $msg .= " <section class='intro-single'>";
                        $msg .= "  <div class='container'>";
                        $msg .= " <div class='row'>";

                        $msg .= "<div class='col-md-12 col-lg-8'>";
                        $msg .= " <div class='title-single-box'>";
                        $msg .= " <h1 class='title-single'>" .$row['morada']. "</h1>";
                        
              $msg .= "<span class='color-text-a'>" .$row['concelho']. "</span>";
           $msg .= " </div>";
          $msg .= "</div>";

          $msg .= "<div class='col-md-12 col-lg-4'>";
            $msg .= "<nav aria-label='breadcrumb' class='breadcrumb-box d-flex justify-content-lg-end'>";
              $msg .= "<ol class='breadcrumb'>";
                $msg .= "<li class='breadcrumb-item'>";
                  $msg .= "<a href='index.html'>Home</a>";
                $msg .= "</li>";
               $msg .= " <li class='breadcrumb-item'>";
                  $msg .= "<a href='property-grid.html'>Imóveis</a>";
                $msg .= "</li>";
               $msg .= " <li class='breadcrumb-item active' aria-current='page'>" .$row['concelho']. "</li>";
               $msg .= "</ol>";
               $msg .= "  </nav>";
               $msg .= "  </div>";
               $msg .= " </div>";
               $msg .= "</div>";
               $msg .= " </section>";

               $msg .= "<section class='property-single nav-arrow-b'>";
               $msg .= " <div class='container'>";
               $msg .= " <div class='row justify-content-center'>";
               $msg .= "<div class='col-lg-8'>";
               $msg .= " <div id='property-single-carousel' class='swiper'>";
               $msg .= "  <div class='swiper-wrapper'>";


                $msg .= " <div class='carousel-item-b swiper-slide'>";
                $msg .= "<img src='".$row['fotos']."' class = 'img-fluid-infoImovel'>";
                $msg .= " </div>";


                // $msg .= "<div class='carousel-item-b swiper-slide'>";
                // $msg .= "<img src='".$row['fotos']."' alt=''>";
                // $msg .= "</div>";

                $msg .= " </div>";
                $msg .= " </div>";
                $msg .= "<div class='property-single-carousel-pagination carousel-pagination'>";
                $msg .= "</div>";
                $msg .= "</div>";
                $msg .= " </div>";
                $msg .= " <br> <br>";
                $msg .= "<div class='row'>";
                $msg .= "<div class='col-sm-12'>";

                $msg .= " <div class='row justify-content-between'>";
                $msg .= " <div class='col-md-5 col-lg-4'>";
                $msg .= "<div class='property-price d-flex justify-content-center foo'>";
                $msg .= "  <div class='card-header-c d-flex'>";
                $msg .= "   <div class='card-box-ico'>";
                $msg .= "  <span class='bi bi-cash'>€</span>";
                $msg .= "  </div>";



                $msg .= " <div class='card-title-c align-self-center'>";
                $msg .= "<h5 class='title-c'>" .$row['precovenda']. "</h5>";
                $msg .= " </div>";

                $msg .= " </div>";
                $msg .= " </div>";


                $msg .= " <div class='property-summary'>";
                 $msg .= " <div class='row'>";
                   $msg .= " <div class='col-sm-12'>";
                      $msg .= "<div class='title-box-d section-t4'>";
                        $msg .= "<h3 class='title-d'>Resumo</h3>";
                     $msg .= " </div>";
                   $msg .= " </div>";
                  $msg .= "</div>";

                 $msg .= " <div class='summary-list'>";
                    
                    $msg .= "<ul class='list'>";

                  $msg .= "  <li class='d-flex justify-content-between'>";

                       $msg .= " <strong>Tipo de Negócio:</strong>";
                      $msg .= "  <span>" .$row['tiponegocio']. "</span>";

                     $msg .= " </li>";

                   $msg .= " <li class='d-flex justify-content-between'>";

                     $msg .= "   <strong>Proprietário:</strong>";
                     $msg .= "   <span>" .$row['nomeProprietario']. "</span>";

                    $msg .= "  </li>";



                     $msg .= " <li class='d-flex justify-content-between'>";

                       $msg .= " <strong>Morada:</strong>";
                       $msg .= " <span>" .$row['morada']. "</span>";

                     $msg .= " </li>";


                     $msg .= " <li class='d-flex justify-content-between'>";
                      $msg .= "  <strong>Distrito :</strong>";
                        $msg .= "<span>" .$row['distrito']. "</span>";
                     $msg .= " </li>";


                     $msg .= " <li class='d-flex justify-content-between'>";
                      $msg .= "  <strong>Concelho</strong>";
                      $msg .= "  <span>" .$row['concelho']. "</span>";
                     $msg .= " </li>";


                     $msg .= " <li class='d-flex justify-content-between'>";
                     $msg .= "   <strong>Area:</strong>";
                     $msg .= "   <span>" .$row['areabruta']. "<sup>2</sup></span> ";
                    $msg .= "  </li>";


                     $msg .= " <li class='d-flex justify-content-between'>";
                       $msg .= " <strong>Wc:</strong>";
                       $msg .= " <span>" .$row['numwc']. "</span>";
                    $msg .= "  </li>";

                      
                    $msg .= "  <li class='d-flex justify-content-between'>";
                      $msg .= "  <strong>Ano:</strong>";
                       $msg .= " <span>" .$row['anoconstrucao']. "</span>";
                    $msg .= "  </li>";

                     
                      $msg .= "<li class='d-flex justify-content-between'>";
                       $msg .= " <strong>Contacto:</strong>";
                       $msg .= " <span>" .$row['email']. "</span>";
                     $msg .= " </li>";

                     
               $msg .= "</ul>";


                 $msg .= " </div>";
               $msg .= " </div>";
             $msg .= " </div>";




             $msg .= " <div class='col-md-7 col-lg-7 section-md-t3'>";

                $msg .= "<div class='row'>";

                 $msg .= " <div class='col-sm-12'>";
                   $msg .= " <div class='title-box-d'>";
                    $msg .= "  <h3 class='title-d'>Descrição do Imóvel</h3>";
                   $msg .= " </div>";
                 $msg .= " </div>";


                $msg .= "</div>";
               $msg .= "<div class='property-description'>";

                $msg .= "  <p class='description color-text-a'> " .$row['descricao']. "</p>";

                 
               $msg .= " </div>";




               $msg .= " <div class='row section-t3'>";
                 $msg .= " <div class='col-sm-12'>";
                   $msg .= " <div class='title-box-d'>";
                     $msg .= " <h3 class='title-d'>Caracteristicas</h3>";
                  $msg .= "  </div>";
                  $msg .= "</div>";
              $msg .= "  </div>";
                $msg .= "<div class='amenities-list color-text-a'>";
                 $msg .= " <ul class='list-a no-margin'>";
                    $msg .= "<li>Balcony</li>";
                    $msg .= "<li>Outdoor Kitchen</li>";
                    $msg .= "<li>Cable Tv</li>";
                   $msg .= " <li>Deck</li>";
                    $msg .= "<li>Tennis Courts</li>";
                    $msg .= "<li>Internet</li>";
                    $msg .= "<li>Parking</li>";
                   $msg .= " <li>Sun Room</li>";
                   $msg .= " <li>Concrete Flooring</li>";
                 $msg .= " </ul>";
              $msg .= "  </div>";






                
             $msg .= " </div>";




           $msg .= " </div>";
       $msg .= "   </div>";



      

     
   $msg .= " </section>";

          
                        
                        }
                          
                
                        }
                
                  $conn->close();
                  return $msg;
                }
                
                












}









 































        