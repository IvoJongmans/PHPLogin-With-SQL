$.post("getuserdata.php", function(data){
    console.log(data.name);
    $("#dataname").append(data.name);
  });

$("#usericon").click(function(){
    $("#dropdownicon").toggle();
});