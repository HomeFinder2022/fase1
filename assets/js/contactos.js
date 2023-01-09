function btnEnviarMenagem() {

    let nomemensagem = $("#nomemensagem").val();
    let emailenviado = $("#emailenviado").val();
    let assuntoemail = $("#assuntoemail").val();
    let mensagemescrita = $("#mensagemescrita").val();


  
    let dados = new FormData();
    dados.append("op", 1);
    dados.append("nomemensagem", nomemensagem);
    dados.append("emailenviado", emailenviado);
    dados.append("assuntoemail", assuntoemail);
    dados.append("mensagemescrita", mensagemescrita);
  
    
  
    $.ajax({
      url: "assets/model/modelContacto.php",
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
  
  

//   function btnEditPass(){
//     let emailUtilizador = $('#emailedit').val();
//     let passutilizador = $('#passnova').val();
  
  
    
    
    
//       let dados = new FormData();
//       dados.append('op',4);
//       dados.append('emailUtilizador',emailUtilizador);
//       dados.append('passutilizador',passutilizador);
    
      
    
//       $.ajax({
//         url: "assets/model/modelResetPass.php",
//         method: "POST",
//         data: dados,
//         cache:false,
//         processData:false,
//         contentType: false,
//         dataType: "html"
//       })
       
//       .done(function( resposta ) {
//         sucesso(resposta);
//         // getCinemas();
        
        
//       })
       
//       .fail(function( jqXHR, textStatus ) {
//         erro( "Request failed: " + textStatus );
//       });
  
//   }
  
  
  
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