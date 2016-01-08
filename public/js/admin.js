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
        $('#'+form_id).toggle("slow");
    }

    $("document").ready(function() {
        $('#roles_update').submit(function(event) {
            event.preventDefault();

            var username = $('#username').val();
            var rolename = $('#rolename').val();

            if (username && rolename) {
                $.ajax({
                    url: "/admin/update-role",
                    method: 'POST',
                    data: {username: username, rolename: rolename},
                    success: function(data){
                        if(data=="DENIED"){
                            alert("You entered an invalid user or role!")
                        }else{
                            alert("You have updated the roles!")
                        }
                    }
                });
            } else {
                alert("Please input data into both fields!")
            }
        });
    });

    $("document").ready(function() {
        $('#roles_create').submit(function (e) {
            e.preventDefault();

            var rolename = $('#role_name').val();
            var display_name = $('#display_name').val();
            var description = $('#description').val();

            if (rolename && display_name && description) {
                $.ajax({
                    url: "/admin/create-role",
                    method: 'POST',
                    data: {rolename: rolename, display_name: display_name, description: description},
                    success: function(data){
                        alert("You created the role!")
                    }
                });
            } else {
                alert("Please put data in all fields!")
            }
        });
    });

    $("document").ready(function(){
        $('#perm_create').submit(function(event){
           event.preventDefault();

            var perm_name = $('#perm_name').val();
            var display = $('#display').val();
            var desc = $('#desc').val();

            if(perm_name && display && desc){
                $.ajax({
                    url: "/admin/create-perm",
                    method: 'POST',
                    data: {perm_name: perm_name, display: display, desc: desc},
                    success: function(data){
                        alert("You created the permission!")
                    }
                });
            } else {
                alert("Please put data in all fields!")
            }
        });
    });

    $("document").ready(function(){
        $('#roles_perms').submit(function(event){
            event.preventDefault();

            var perm = $('#perm').val();
            var role = $('#role').val();

            if (perm && role){
                $.ajax({
                    url: "/admin/update-perm",
                    method: 'POST',
                    data: {perm: perm, role: role},
                    success: function(data){
                        if(data=="DENIED"){
                            alert("You have entered an invalid permission or role!")
                        }else{
                            alert("You have updated the permissions!")
                        }
                    }
                });
            }else{
                alert("Please input data in all fields!")
            }
        });
    });

    $("document").ready(function(){
        $('#tag_create').submit(function(event){
            event.preventDefault();

            var tag = $('#tag_name').val();

            if(tag){
                $.ajax({
                    url: "/admin/create-tag",
                    method: 'POST',
                    data: {tag: tag},
                    success: function(data){
                        alert("You created the tag!")
                    }
                });
            }else{
                alert("Please input data in all fields!")
            }
        });
    });

    $(document).ready(function() {
        $('.enabled').mouseenter(function () {
            $(this).addClass("btn-danger");
            $(this).text("Disable");
        });

        $('.enabled').mouseleave(function(){
            $(this).removeClass("btn-danger");
            $(this).text("Enabled");
        })
    });

    $(document).ready(function() {
        $('.dis').mouseenter(function () {
            $(this).removeClass("btn-danger");
            $(this).addClass("btn-success");
            $(this).text("Enable");
        });

        $('.dis').mouseleave(function(){
            $(this).removeClass("btn-success");
            $(this).addClass("btn-danger");
            $(this).text("Disabled");
        })
    });

