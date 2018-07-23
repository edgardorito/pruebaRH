'use strict'

let $btnSave = $('#btnSave'),
  $formAddDM = $('#form_add_DebtorMaster'),
  $divErros = $('#divErros'),
  $msgDeleteEdit = $('#msgDeleteEdit')
  
  

$(document).ready(function () {
  $formAddDM[0].reset();
});

$btnSave.on('click', function () {
  $.ajax({
    url: '/data.new_DebtorMaster',
    type: "POST",
    dateType: 'json',
    data: $formAddDM.serialize(),
    error: function(data){
      if(data.status === 422) {
        renderErrors(data)
      } else {
        var html = '<div class="alert alert-danger" role="danger"> <ul> <li> NO. DEBTOR IS DUPLICATE  </li> </ul> </div>';
        $divErros.html(html)    
      }
      dataTable()

    },
    success: function(){
      var html = '<div class="alert alert-success" role="success"> <ul> <li> ¡SAVE! </li> </ul> </div>';
      $divErros.html(html)  
      $formAddDM[0].reset()
      dataTable()

    }
  }).done(function () {
    var html = '<div class="alert alert-success" role="success"> <ul> <li> ¡SAVE! </li> </ul> </div>';
    $divErros.html(html)
    $formAddDM[0].reset();
    dataTable()

  })

});

function renderErrors(data) {

  var errors = data.responseJSON;
   
  $.ajax({
    url: '/errors.new_DebtorMaster',
    type: "POST",
    dateType: 'json',
    data: ({ errors: errors })
  }).done(function (response) {
    if (response.status) {
      $divErros.html(response.html)
    }
    
  }).fail(function (jqXHR, textStatus, error) {
    // console.log("Post error: " + error)
  })

}

function delete_row(debtorno) {
  $.ajax({
    url: '/data.delete_DebtorMaster/'+debtorno,
    type: "POST",
    dateType: 'json',
  }).done(function (deleteSucces) {
    var html ='';
    if (deleteSucces) {
      html = '<div class="alert alert-success"> <ul> <li> DELETE </li> </ul> </div>';
      
    }else{
      html = '<div class="alert alert-danger"> <ul> <li> ERROR </li> </ul> </div>';      
    }
    $msgDeleteEdit.html(html)
    dataTable()
    $('.alert').fadeOut( "slow" )
  }).fail(function (jqXHR, textStatus, error) {
    var html = '<div class="alert alert-danger"> <ul> <li> ERROR </li> </ul> </div>';   
    $msgDeleteEdit.html(html)
    dataTable()
    $('.alert').fadeOut( "slow" )

  })
}

// function dataTable(){
//     $.ajax({
//       url: '/data.table',
//       type: "POST",
//       dateType: 'json',
//     //   data: ({ sid: Math.random(), buscarPalabra: $("#idRC").val() })
//     }).done(function (response) {
//       if (response.status) {
//         $main_table.html(response.html)
//       }
//     }).fail(function (jqXHR, textStatus, error) {
//       console.log("Post error: " + error)
//     })
//   }
