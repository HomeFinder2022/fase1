function pesquisaranuncios(){
  
    let dados = new FormData();
  
    let concelho = $('#listaConcelhos3').val();
    let tipneg = $('#tipoNegocImovel3').val();
    let tipimovel = $('#tipoImovel3').val();
    // let tipologia = $('#tipologiaVenda3').val();
    
    let precomin = $('#precomin').val();
    let precomax = $('#precomax').val();
    let estado = $('#estadoImovel3').val();
    

    dados.append("concelho",concelho);
    dados.append("tipneg",tipneg);
    dados.append("tipimovel",tipimovel);
    // dados.append("tipologia",tipologia);
    dados.append("precomin",precomin);
    dados.append("precomax",precomax);
    dados.append("estado",estado);
  
    dados.append("op",1);
  
    $.ajax({
        url: "assets/model/modelpesquisa.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache:false,
        contentType:false,
        processData:false
      })
       
      .done(function (resposta) {
        $("#infoImovel").html(resposta);
        


        })
       
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
  
    
  }

 

      function sucesso(msg){
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: msg,
          showConfirmButton: false,
          timer: 1500
        })
      }
      

      function error(msg){
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: msg,
          showConfirmButton: false,
          timer: 1500
        })
      }



      function pesquisarAnu(){
  
        let dados = new FormData();
      
        let concelho1 = $('#listaConcelhos4').val();
        let tipneg1 = $('#tipoNegocImovel4').val();
        let tipimovel1 = $('#tipoImovel4').val();
        let precomin1 = $('#estadoImovel4').val();
        let precomax1 = $('#precoMin').val();
        let estado1 = $('#precoMAx').val();
        
    
        dados.append("concelho1",concelho1);
        dados.append("tipneg1",tipneg1);
        dados.append("tipimovel1",tipimovel1);
        // dados.append("tipologia",tipologia);
        dados.append("precomin1",precomin1);
        dados.append("precomax1",precomax1);
        dados.append("estado1",estado1);
      
        dados.append("op",2);
      
        $.ajax({
            url: "assets/model/modelpesquisa.php",
            method: "POST",
            data: dados,
            dataType: "html",
            cache:false,
            contentType:false,
            processData:false
          })

    
           
          .done(function (resposta) {
            $("#infoImovel1").html(resposta);
            setTimeout(function(){ 
              window.location.assign('anuncios.php')
              
           }, 1000);
           
    
            })
           
          .fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
          });
      
        
      }



$(function() {

    
  

  });