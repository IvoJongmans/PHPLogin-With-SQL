$.post("getuserdata.php", function(data){
    $("#dataname").append("<li>" + data.name + "</li>-----<li></li>");
  });

  var ItemsVue = new Vue({
    el: '#accdet',
    data: {
        items: []
    },
    mounted: function () {
        var self = this;
        $.ajax({
            url: 'getuserdata.php',
            method: 'POST',
            success: function (data) {
                self.items = data;
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});

function leftright(value) {
    if((value % 2) == 0) {
        console.log("left");
        var kant = "left";
    }
    else {
        console.log("right");
        var kant = "right";
    }
    return kant;
}

$.ajax({
    url: 'getchat.php',
    method: 'POST',
    success: function (data) {
        console.log(data);
        $.each(data, function(index, value){
            console.log(value.username, value.message, value.date);
            leftright(value.messageid);
            $(".chatcontainer").append(`
            <div class="col-xs-12 messagebox${leftright(value.messageid)}">
            <p> 
                ${value.username} zei op ${value.date}: <br/><br/>
                ${value.message}
            </p>
            </div>`);
        });
    },
    error: function (error) {
        console.log(error);
    }
});
