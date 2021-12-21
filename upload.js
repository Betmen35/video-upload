$(document).on("submit","form",function() {
   

var data= new FormData(this);

$.ajax({

type: 'POST',
url: 'ajax.php',
data: data,
contentType:false,
processData: false,
success: function(x){



$('#sonuc').html(x);






}

});

});


