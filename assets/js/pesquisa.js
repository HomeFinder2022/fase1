function pesquisaranuncios(){
  
    let dados = new FormData();
  
    let concelho = $('#listaConcelhos3').val();
    let tipneg = $('#tipoNegocImovel3').val();
    let tipimovel = $('#tipoImovel3').val();
    let tipologia = $('#tipologiaVenda3').val();
    
    let precomin = $('#min-value').val();
    let precomax = $('#max-value').val();
    let estado = $('#estadoImovel3').val();


    dados.append("concelho",concelho);
    dados.append("tipneg",tipneg);
    dados.append("tipimovel",tipimovel);
    dados.append("tipologia",tipologia);
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
       
      .done(function( resposta ) {
        sucesso(resposta);

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



$(function() {

    
  

  });