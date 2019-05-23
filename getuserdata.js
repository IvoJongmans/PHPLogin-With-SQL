$.post("getuserdata.php", function(data){
    console.log(data.name);
    $("#dataname").append("<li>" + data.name + "</li>-----<li></li>");
  });

$("#usericon").click(function(){
    $("#dropdownicon").toggle();
    $("#dropdownmenu").hide();
});

$("#hamburger").click(function(){
    $("#dropdownmenu").toggle();
    $("#dropdownicon").hide();
});