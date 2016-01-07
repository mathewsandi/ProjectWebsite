$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

});

function disable_user(id){
    $.get("/admin/disable-user/"+id, function(data){
        if(data=="OK"){
            $(""+id).addClass("enable");
            window.location.reload(true);
        }

    });
}

function enable_user(id){
    $.get("/admin/enable-user/"+id, function(data) {
        if(data=="OK") {
            $("" + id).addClass("disable");
            window.location.reload(true);
        }
    });
}

function show_form(form_id){
    $("form").hide();

    $('#'+form_id).show("slow");
}

$('#roles_update').submit(function(event){
    e.preventDefault();

    var username = $('#user_name').val();
    var rolename = $('#role_name').val();

    if(username && rolename)
    {
        $.post("/admin/update-roles/", {username: username, rolename: rolename}).done(function(data){
            if(data=="OK"){
                window.location.reload(true);
            }
        });
    }else{
        alert("Please input data into both fields!")
    }
});


