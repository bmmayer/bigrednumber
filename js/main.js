function augment(){

  var rand = "e";

  $.ajax({
    url: "php/augment.php",
    type: "POST",
    dataType: "json",
    data: {
      key: rand
    }
  }).done(function(data){
    $("#number").html(data.number);
  });

}