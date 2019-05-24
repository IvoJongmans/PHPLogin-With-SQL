$("#usericon").click(function(){
    $("#dropdownicon").toggle();
    $("#dropdownmenu").hide();
});

$("#hamburger").click(function(){
    $(".toggle").hide();
    $("#dropdownmenu").toggle();
    // $("#dropdownicon").hide();
});

$("#ad").click(function(){
    $(".toggle").hide();
    $("#accdet").toggle();
});

$("#contact").click(function(){
    $(".toggle").hide();
    $("#contactcontainer").toggle();    
});

$("#chat").click(function(){
    $(".toggle").hide();
    $("#chatcontainer").toggle();    
});

