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
            $(".chatcontainer").prepend(`
            <div class="col-xs-12 messagebox${leftright(value.messageid)}">
            <p> 
                ${value.username} zei op ${value.date}: <br/><br/>
                ${value.message}
            </p>
            <i class="fas fa-minus-circle"></i>
            </div>`);
        });
    },
    error: function (error) {
        console.log(error);
    }
});

const client_id = "Iv1.bdbb999f6089796d";
const client_secret = "4b11f98dd4e67f3bf44a3bce22be6d6a57f274b9";

const fetchUsers = async (user) => {
    const api_call = await fetch(`https://api.github.com/users/${user}?client_id=${client_id}&client_secret=${client_secret}`);
    const data = await api_call.json();
    return { data }
};

const showData = () => {
    fetchUsers("IvoJongmans").then((res) => {
        console.log(res);
    })
};

showData();
