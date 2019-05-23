$.post("getuserdata.php", function(data){
    console.log(data);
    $.each(data, function(i ,item){
        // console.log(item);
        $("#userres").append(item + "<br/>");
    });
  });