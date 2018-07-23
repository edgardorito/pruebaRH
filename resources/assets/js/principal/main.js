'use strict'

let $main_table = $('#main_table'),
    $modalTitle = $('#modalTitle'),
    $newDebtorMaster = $('#newDebtorMaster');
    

$(document).ready(function () {
    dataTable();
    $('body').on('click', '.pagination a', function(e) {
      e.preventDefault();

      var url = $(this).attr('href');
      var page = $(this).attr('href').split('page=')[1]; 
      dataTable(page);

    });

});


$newDebtorMaster.on('click', function(){
    $modalTitle.html("NEW DEBTORMASTER");
});

function dataTable(){
    $.ajax({
      url: '/data.table',
      type: "POST",
      dateType: 'json',
    //   data: ({ sid: Math.random(), buscarPalabra: $("#idRC").val() })
    }).done(function (response) {
      if (response.status) {
        $main_table.html(response.html)
      }
    }).fail(function (jqXHR, textStatus, error) {
      console.log("Post error: " + error)
    })
}

function dataTable(page){
    $.ajax({
      url: '/data.table?page='+page,
      type: "POST",
      dateType: 'json',
    //   data: ({ sid: Math.random(), buscarPalabra: $("#idRC").val() })
    }).done(function (response) {
      if (response.status) {
        $main_table.html(response.html)
      }
    }).fail(function (jqXHR, textStatus, error) {
      console.log("Post error: " + error)
    })
}
  