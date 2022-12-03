function openmodal(){

$('#modalOpenlogin').modal('show');

}


function login(){

    let emailutl = $('#emailutl').val();
    let passuti = $('#passuti').val();

    let dados = new FormData();

    dados.append('op',1);
    dados.append('emailutl',emailutl);
    dados.append('passuti',passuti);
  
    $.ajax({
      url: "assets/model/modelLogin.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
        let obj = JSON.parse(resposta);
        if(obj.flag){
            sucesso(obj.msg);
   
            setTimeout(function(){ 
                window.location.assign('teste1logout.php')
             }, 2000);
        }else{
            erro(obj.msg);
        }
        
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function logout(){
 
    let dados = new FormData();

    dados.append('op',2);
  
    $.ajax({
      url: "assets/model/modelLogin.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
        sucesso(resposta)
        setTimeout(function(){ 
          window.location.assign('teste1logout.php')
       }, 2000);
        
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
      timer: 2000
    })
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