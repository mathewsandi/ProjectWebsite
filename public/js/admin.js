$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

});

function disable_user(id){
    $.get("/newadmin/disable-user/"+id, function(data){
        if(data=="OK"){
            $(""+id).addClass("enable");
            window.location.reload(true);
        }

    });
}
function enable_user(id){
    $.get("/newadmin/enable-user/"+id, function(data) {
        if(data=="OK") {
            $("" + id).addClass("disable");
            window.location.reload(true);
        }
    });
}