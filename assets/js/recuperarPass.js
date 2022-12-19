function sendemailResetPass() {

  let email1 = $("#email1").val();
  let nome = $("#nome").val();


  let dados = new FormData();
  dados.append("op", 2);
  dados.append("email1", email1);
  dados.append("nome", nome);

  

  $.ajax({
    url: "assets/model/modelResetPass.php",
    method: "POST",
    data: dados,
    cache: false,
    processData: false,
    contentType: false,
    dataType: "html",
  })

    .done(function (resposta) {
      sucesso(resposta);
    })

    .fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
}


 
// function btnEditPass(nif){


//   let email1 = $("#emailedit").val();
//   let nome = $("#passnova").val();


//   dados.append("op", 3);
//   dados.append("email1", email1);
//   dados.append("nome", nome);
//   dados.append('nif',nif);

//   $.ajax({
//     url: "assets/model/modelResetPass.php",
//     method: "POST",
//     data: dados,
//     cache:false,
//     processData:false,
//     contentType: false,
//     dataType: "html"
//   })
   
//   .done(function( resposta ) {
    // let obj = JSON.parse(resposta);
    // $('#emailedit').val(obj.email);
    // $('#passnova').val(obj.pwd);
   



    // $('#btnEditPass').attr('onclick','guardaEdit('+nif+')')

    // $('#modalCinemas').modal('show');



//   })
   
//   .fail(function( jqXHR, textStatus ) {
//     erro( "Request failed: " + textStatus );
//   });

// }

function btnEditPass(){
  let emailUtilizador = $('#emailedit').val();
  let passutilizador = $('#passnova').val();


  
  
  
    let dados = new FormData();
    dados.append('op',4);
    dados.append('emailUtilizador',emailUtilizador);
    dados.append('passutilizador',passutilizador);
  
    
  
    $.ajax({
      url: "assets/model/modelResetPass.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      // getCinemas();
      
      
    })
     
    .fail(function( jqXHR, textStatus ) {
      erro( "Request failed: " + textStatus );
    });

}



function sucesso(msg) {
  Swal.fire({
    position: "center",
    icon: "success",
    title: msg,
    showConfirmButton: false,
    timer: 2000,
  });
}


function erro(msg){
  Swal.fire({
    position: 'center',
    icon: 'error',
    title: msg,
    showConfirmButton: false,
    timer: 2000
  })
}