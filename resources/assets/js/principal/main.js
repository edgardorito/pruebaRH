'use strict'

let $main_table = $('#main_table');

$(document).ready(function () {
    dataTable();
    
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
  