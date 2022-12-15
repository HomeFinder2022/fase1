function registoImovel() {
  let tipoImovel = $("#tipoImovel2").val();
  let tipologiaImovel = $("#tipologiaImovel2").val();
  let moradaImovel = $("#moradaImovel2").val();
  let postalImovel = $("#postalImovel2").val();
  let listaDistritos = $("#listaDistritos2").val();
  let listaConcelhos = $("#listaConcelhos2").val();
  let listaFreguesias = $("#listaFreguesias2").val();
  let areaUtil = $("#areaUtil2").val();
  let areaBruta = $("#areaBruta2").val();
  let numWcs = $("#numWcs2").val();
  let anoImovel = $("#anoImovel2").val();
  let certEnerg = $("#certEnerg2").val();
  let estadoImovel = $("#estadoImovel2").val();
  let tipoNegocImovel = $("#tipoNegocImovel2").val();
  let obsImovel = $("#obsImovel2").val();
  let pImovel = $("#pImovel2").val();
  let rendaImovel = $("#rendaImovel2").val();
  let precoNoite = $("#precoNoite2").val();
  
  // faltam as checkboxes
  

  let fotosImovel = $('#fotosImovel2').prop('files')[0];

  let dados = new FormData();
  dados.append("op", 1);
  dados.append("tipoImovel", tipoImovel);
  dados.append("tipologiaImovel", tipologiaImovel);
  dados.append("moradaImovel", moradaImovel);
  dados.append("postalImovel", postalImovel);
  dados.append("listaDistritos", listaDistritos);
  dados.append("listaConcelhos", listaConcelhos);
  dados.append("listaFreguesias", listaFreguesias);
  dados.append("areaUtil", areaUtil);
  dados.append("areaBruta", areaBruta);
  dados.append("numWcs", numWcs);
  dados.append("anoImovel", anoImovel);
  dados.append("certEnerg", certEnerg);
  dados.append("estadoImovel", estadoImovel);
  dados.append("tipoNegocImovel", tipoNegocImovel);
  dados.append("obsImovel", obsImovel);
  dados.append("pImovel", pImovel);
  dados.append("rendaImovel", rendaImovel);
  dados.append("precoNoite", precoNoite);

  dados.append("fotosImovel", fotosImovel);

  $.ajax({
    url: "assets/model/modelImovel.php",
    method: "POST",
    data: dados,
    cache: false,
    processData: false,
    contentType: false,
    dataType: "html",
  })

    .done(function (resposta) {
      sucesso(resposta);
     
      tabelaImoveis();



    })



    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}


function tabelaImoveis(){

  let dados = new FormData();

  dados.append("op", 2);

  $.ajax({
      url: "assets/model/modelImovel.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false
  })
   
  .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#tabelaImoveis2')) {
        $('#tabelaImoveis2').dataTable().fnDestroy();
    }
      $('#listaImoveis2').html(resposta);
      $('#tabelaImoveis2').DataTable();
  })
   
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}




function desativarImovel(idimovel){

  let dados = new FormData();

  dados.append("op",3);
  dados.append("idimovel",idimovel);

  $.ajax({
      url: "assets/model/modelImovel.php",
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




function infoImovel(){
  let dados = new FormData();
  dados.append('op',4);


  $.ajax({
    url: "assets/model/modelImovel.php",
    method: "POST",
    data: dados,
    cache:false,
    processData:false,
    contentType: false,
    dataType: "html"
  })
   
  .done(function( resposta ) {
    $('#infoImovel').html(resposta);
    

  })
   
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}




// function imovelInfo(idimovel){
//   let dados = new FormData();
//   dados.append('op',3);
//   dados.append('idimovel',idimovel);

//   $.ajax({
//     url: "assets/model/modelImovel.php",
//     method: "POST",
//     data: dados,
//     cache:false,
//     processData:false,
//     contentType: false,
//     dataType: "html"
//   })
   
//   .done(function( resposta ) {
//     let obj = JSON.parse(resposta);

//     $('#fotoImovelInfo').attr('src',obj.fotos);
//     $('#concelhoImovelInfo').val(obj.iddistrito);
//     $('#moradaImovelInfo').val(obj.morada);
//     $('#precoImovelInfo').val(obj.precovenda);
//     $('#tipologiaImovelInfo').val(obj.idtipologia);

//     $('#numWcImovelInfo').val(obj.numwc);

//     $('#areaBrutaImovelInfo').val(obj.areabruta);

//     $('#anoImovelImovelInfo').val(obj.anocontrucao);

 
    
    
    
   

 

//   })
   
//   .fail(function( jqXHR, textStatus ) {
//     alert( "Request failed: " + textStatus );
//   });

// }




  function sucesso(msg) {
  Swal.fire({
    position: "center",
    icon: "success",
    title: msg,
    showConfirmButton: false,
    timer: 2000,
  });
}

$(function () {
 
  tabelaImoveis();
});
