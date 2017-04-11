$(document).ready(function() {
        e.preventDefault();
            $.ajax({
                url:'/',
                type:'get',
              
                success: function(json){
                    //var jsons = JSON.parse(json);
                    console.log(json);
                },
                error: function(json) {
                    faireNotif('Erreur..', 'error');
                }
            });
        }
    });
    