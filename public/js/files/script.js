$(document).ready(function(){
    $("#searchTable").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".user-content-table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });