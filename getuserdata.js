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

$.ajax({
    url: 'getchat.php',
    method: 'POST',
    success: function (data) {
        console.log(data);
    },
    error: function (error) {
        console.log(error);
    }
});