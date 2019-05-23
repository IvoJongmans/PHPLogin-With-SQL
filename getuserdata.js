$.post("getuserdata.php", function(data){
    console.log(data.name);
    $("#dataname").append("<li>" + data.name + "</li>-----<li></li>");
  });