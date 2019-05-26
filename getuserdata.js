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

$.ajax({
    url: 'getuserdata.php',
    method: 'POST',
    success: function(data) {
    var githubuser = data.github;
    
    const client_id = "Iv1.bdbb999f6089796d";
    const client_secret = "4b11f98dd4e67f3bf44a3bce22be6d6a57f274b9";

    const fetchUsers = async (user) => {
    const api_call = await fetch(`https://api.github.com/users/${user}?client_id=${client_id}&client_secret=${client_secret}`);
    const data = await api_call.json();
    return { data }
    };

    const showData = () => {
    fetchUsers(githubuser).then((res) => {
        console.log(res.data);
        percentage = ((res.data.public_repos / 25) * 100).toFixed(2);
        console.log(percentage);
        $("#homecontainer").append(`<div class="col-sm-4 text-center">
        <img src=${res.data.avatar_url} class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> <br>
        </div>
        <div class="col-sm-8">
            <p>Naam: ${res.data.name}</p>
            <p>GitHub: ${res.data.login}</p>
            <p>Followers: ${res.data.followers}</p>
            <p>Following: ${res.data.following}</p>
            <p>Repositories: ${res.data.public_repos}/25</p>
            <p>Commits: </p>
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="${percentage}"
          aria-valuemin="0" aria-valuemax="100" style="width:${percentage}%">
          ${percentage}%
          </div>
        </div>`);
    })
    };

    showData();



var repos = [];
var commits = 0;

const fetchRepos = async (user) => {
    const api_call = await fetch(`https://api.github.com/users/${user}/repos?client_id=${client_id}&client_secret=${client_secret}`);
    const data = await api_call.json();
    return { data }
};


const showDataRepo = () => {
    fetchRepos(githubuser).then((res) => {
        var count = res.data.length;
        for(var i = 0; i < count; i++) {
            repos.push(res.data[i].name);
        }
    })
};

showDataRepo();

setTimeout(function countCommits() {
    for(let i = 0; i < repos.length; i++){
        console.log(repos[i]);
        $.ajax({
            url: `https://api.github.com/repos/${githubuser}/${repos[i]}/contributors?client_id=${client_id}&client_secret=${client_secret}`,
            method: 'GET',
            success: function (data) {
                commits += data[0].contributions;
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
  }, 1000)

  setTimeout(function showCommits(){
    $("#homecontainer").append(commits);
  }, 2000)

        
    },
    error: function (error) {
        console.log(error);
    }
});
