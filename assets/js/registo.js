function registoUtilizador(){
  
    let dados = new FormData();
  
    let nif = $('#nif').val();
    let nome = $('#nome').val();
    let apelido = $('#apelido').val();
    let pass = $('#passuti').val();
    let morada = $('#morada').val();
    let codpostal = $('#codpostal').val();
    let idade = $('#idade').val();
    let tel = $('#tel').val();
    let email = $('#email').val();
    
    let pnascimento = $('#pnascimento').val();
   
    let img =  $('#fotoUtilizador').prop('files')[0]

    
  
  
  
    dados.append("nif",nif);
    dados.append("nome",nome);
    dados.append("apelido",apelido);
    dados.append("pass",pass);
    dados.append("morada",morada);
    dados.append("codpostal",codpostal);
    dados.append("idade",idade);
    dados.append("tel",tel);
    dados.append("email",email);
  
    dados.append("pnascimento",pnascimento);
    dados.append("img",img);
    dados.append("op",1);
  
    $.ajax({
        url: "assets/model/modelregisto.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache:false,
        contentType:false,
        processData:false
      })
       
      .done(function( resposta ) {
        sucesso(resposta);
        setTimeout(function(){ 
          window.location.assign('index.php')
       }, 2000);
 
      })
       
      .fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
  
    
  }

  function getTipoUtilizador(){
  
  $.ajax({
    url: "assets/model/modelregisto.php",
    method: "POST",
    data: { 
      op : 2
    },
    dataType: "html"
  })
   
  .done(function( resposta ) {
   
    $('#tipoutilizador').html(resposta);
    // $('#tipoProdutoEdit').html(resposta);
    
  })
   
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}

function getPais(){
  
    $.ajax({
      url: "assets/model/modelregisto.php",
      method: "POST",
      data: { 
        op : 3
      },
      dataType: "html"
    })
     
    .done(function( resposta ) {
     
      $('#pnascimento').html(resposta);
      $('#pais_id').html(resposta);
      

    //   $('#estadoProdutoEdit').html(resposta);
      
    
      
    
  
      
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }



// function tabProdutos(){

//   $.ajax({
//     url: "assets/model/modelProdutos.php",
//     method: "POST",
//     data: { 
//       op : 4
//     },
//     dataType: "html"
//   })
   
//   .done(function( resposta ) {

//     $('#listaProdutos').html(resposta);



//   })
   
//   .fail(function( jqXHR, textStatus ) {
//     alert( "Request failed: " + textStatus );
//   });

// }


// function removeProd(id){
//   let dados = new FormData();
  
//   dados.append("op",5);
//   dados.append("id",id);
  
//   $.ajax({
//       url: "assets/model/modelProdutos.php",
//       method: "POST",
//       data: dados,
//       dataType: "html",
//       cache:false,
//       contentType:false,
//       processData:false
//     })
     
//     .done(function( resposta ) {
//       sucesso(resposta)
//       tabProdutos();
      
      
//     })
     
//     .fail(function( jqXHR, textStatus ) {
//       alert( "Request failed: " + textStatus );
//     });
  
// }

function getDadosEditPerfil(){
  let dados = new FormData();
  dados.append('op',4);
  

  $.ajax({
    url: "assets/model/modelregisto.php",
    method: "POST",
    data: dados,
    cache:false,
    processData:false,
    contentType: false,
    dataType: "html"
  })
   
  .done(function( resposta ) {
    let obj = JSON.parse(resposta);

    // $('#fotoAtual').attr('src', obj.img);
    // $('#nifPerfilEdit').val(obj.nif);
    $('#nomePerfilEdit').val(obj.nome);
    $('#apelidoPerfilEdit').val(obj.apelido);

    $('#moradaPerfilEdit').val(obj.morada);
    $('#codigoPostalPerfilEdit').val(obj.codigopostal);
    $('#pais_id').val(obj.idpais);
    $('#idadePerfilEdit').val(obj.idade);
    $('#telemovelPerfilEdit').val(obj.telemovel);
    $('#emailPerfilEdit').val(obj.email);
    // ('#imagemPerfilEdit').val(obj.stock);

   

    $('#btnEditPerfil').attr('onclick', 'guardaEdit('+obj.nif+')');

    // $('#modalProdutosEdit').modal('show');

  })
   
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}

function guardaEdit(nif){

  // let nifperfil = $('#nifPerfilEdit').val();
  let nome = $('#nomePerfilEdit').val();
  let apelido = $('#apelidoPerfilEdit').val();
  let pass = $('#moradaPerfilEdit').val();
  let morada = $('#codigoPostalPerfilEdit').val();
  let codpostal = $('#pais_id').val();
  let idade = $('#idadePerfilEdit').val();
  let tel = $('#telemovelPerfilEdit').val();
  let email = $('#emailPerfilEdit').val();

  let img = $('#imagemPerfilEdit').prop('files')[0];
  


  let dados = new FormData();
  dados.append('op',5);
  // dados.append('nifperfil', nifperfil);
  dados.append('nome', nome);
  dados.append('apelido', apelido);
  dados.append('pass', pass);
  dados.append('morada', morada);
  dados.append('codpostal', codpostal);
  dados.append('idade', idade);
  dados.append('tel', tel);
  dados.append('email', email);

  dados.append('img', img);
  dados.append('oldnif',nif);

  $.ajax({
    url: "assets/model/modelregisto.php",
    method: "POST",
    data: dados,
    cache:false,
    processData:false,
    contentType: false,
    dataType: "html"
  })
   
  .done(function( resposta ) {
    sucesso(resposta);
    

    

  })
   
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}



function btnEditPassword(){

  // let nifperfil = $('#nifPerfilEdit').val();
  let passAtual = $('#passAtual').val();
  let passworda = $('#passworda').val();
  let confirm_password = $('#confirm_password').val();

  


  let dados = new FormData();
  dados.append('op',6);


  dados.append('passworda', passworda);
  dados.append('confirm_password', confirm_password);

  dados.append('oldpass',passAtual);

  $.ajax({
    url: "assets/model/modelregisto.php",
    method: "POST",
    data: dados,
    cache:false,
    processData:false,
    contentType: false,
    dataType: "html"
  })
   
  .done(function( resposta ) {
    if(passworda == confirm_password){
      sucesso(resposta);
    }else {
      error(resposta);
    }
    
    

  })
   
  .fail(function( jqXHR, textStatus ) {
    alert( "Request failed: " + textStatus );
  });

}

// function addStock (id){
//     let dados = new FormData();


//     dados.append('op',8);
//     dados.append('id', id);
  
//     $.ajax({
//       url: "assets/model/modelProdutos.php",
//       method: "POST",
//       data: dados,
//       cache:false,
//       processData:false,
//       contentType: false,
//       dataType: "html"
//     })
     
//     .done(function( resposta ) {
//       let obj = JSON.parse(resposta);

//       $('#updateStock').val(obj.stock);

//       $('#btnStock').attr('onclick', 'guardaStock('+id+')');

//       $('#modalStockEdit').modal('show');
  
//     })
     
//     .fail(function( jqXHR, textStatus ) {
//       alert( "Request failed: " + textStatus );
//     });



// }



// function guardaStock(id){

//     let qtd = $('#qtd').val();
  
//     let dados = new FormData();
//     dados.append('op',9);
//     dados.append('qtd', qtd);
//     dados.append('id', id);
  
//     $.ajax({
//       url: "assets/model/modelProdutos.php",
//       method: "POST",
//       data: dados,
//       cache:false,
//       processData:false,
//       contentType: false,
//       dataType: "html"
//     })
     
//     .done(function( resposta ) {
//       sucesso(resposta);

  
//       tabProdutos();
//       $('#modalStockEdit').modal('hide');
  
//     })
     
//     .fail(function( jqXHR, textStatus ) {
//       alert( "Request failed: " + textStatus );
//     });
  
//   }

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
    getTipoUtilizador();
    getPais();
    getDadosEditPerfil();
   
    
  

  });