$(document).ready(function(){ 
  
  //click button update
  $("#update").click( function() {
    $('#map').fadeOut('slow');
    $.get($(this).data().url,
      {}, 
      function(html){
        $('#map').html(html);
        $('#map').fadeIn('slow');
      }
      ,'html'
    );
  });
  
});
