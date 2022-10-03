if(typeof jQuery=="undefined") {
    alert("jQuery is undefined");
}

$(document).ready(function(){
    $("#header").load("../includes/header.html");
    $("#footer").load("../includes/footer.html");
    $('[data-toggle="tooltip"]').tooltip();   
  });

