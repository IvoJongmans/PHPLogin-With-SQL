$.post("getuserdata.php", function(data){
    console.log(data.name);
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
                console.log("vue.js data", data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});

$.post("chats.php", function(data){
    console.log(data);
  });