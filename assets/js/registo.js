function registoUtilizador(){
  
    let dados = new FormData();
  
    let nif = $('#nif').val();
    let nome = $('#nome').val();
    let apelido = $('#apelido').val();
    let pass = $('#pass').val();
    let morada = $('#morada').val();
    let codpostal = $('#codpostal').val();
    let idade = $('#idade').val();
    let tel = $('#tel').val();
    let email = $('#email').val();
    let tipoutilizador = $('#tipoutilizador').val();
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
    dados.append("tipoutilizador",tipoutilizador);
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

// function getDadosEditProdutos(id){
//   let dados = new FormData();
//   dados.append('op',6);
//   dados.append('id',id);

//   $.ajax({
//     url: "assets/model/modelProdutos.php",
//     method: "POST",
//     data: dados,
//     cache:false,
//     processData:false,
//     contentType: false,
//     dataType: "html"
//   })
   
//   .done(function( resposta ) {
//     let obj = JSON.parse(resposta);

//     $('#fotoAtual').attr('src', obj.img);
//     $('#descrProdEdit').val(obj.descricao);
//     $('#valorProdEdit').val(obj.valor);
//     $('#tipoProdutoEdit').val(obj.id_type);
//     // $('#imagemProdutoEdit').val(obj.img);
//     $('#estadoProdutoEdit').val(obj.id_estado);
//     $('#stockProdEdit').val(obj.stock);
   

//     $('#btnEditProduto').attr('onclick', 'guardaEdit('+id+')');

//     $('#modalProdutosEdit').modal('show');

//   })
   
//   .fail(function( jqXHR, textStatus ) {
//     alert( "Request failed: " + textStatus );
//   });

// }

// function guardaEdit(id){

//   let descrProd = $('#descrProdEdit').val();
//   let valorProd = $('#valorProdEdit').val();
//   let tipoProduto = $('#tipoProdutoEdit').val();
//   let estadoProduto = $('#estadoProdutoEdit').val();
//   let stockProd = $('#stockProdEdit').val();



//   let img = $('#imagemProdutoEdit').prop('files')[0];

//   let dados = new FormData();
//   dados.append('op',7);
//   dados.append('descrProd', descrProd);
//   dados.append('valorProd', valorProd);
//   dados.append('tipoProduto', tipoProduto);
//   dados.append('estadoProduto', estadoProduto);
//   dados.append('stockProd', stockProd);


//   dados.append('img', img);
//   dados.append('id', id);

//   $.ajax({
//     url: "assets/model/modelProdutos.php",
//     method: "POST",
//     data: dados,
//     cache:false,
//     processData:false,
//     contentType: false,
//     dataType: "html"
//   })
   
//   .done(function( resposta ) {
//     sucesso(resposta);
//     getTipoProdutos();
//     getEstadosProdutos();

//     tabProdutos();
//     $('#modalProdutosEdit').modal('hide');

//   })
   
//   .fail(function( jqXHR, textStatus ) {
//     alert( "Request failed: " + textStatus );
//   });

// }

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




$(function() {
    getTipoUtilizador();
    getPais();

   
    
  

  });