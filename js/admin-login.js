$(function(){
    $('button[type="submit"]').click(function(e) {
        e.preventDefault();
        var username = $("input[name=user]");
        var password = $("input[name=password]");
        username = username.val();
        password = password.val();
        if (username !== "") {
            $('button[type="submit"]').removeClass('btn-info').addClass("disabled btn-default").html('Redirecting you');

            $.ajax({
              type: "POST",
              url: "../controllers/validate-admin.php",
              data: { username: username, password: password }
            }).success(function(response) {
                if(response === "admin granted"){
                    window.location.replace("/admin/send.php");
                }else{
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("Wrong username/password");
                    $('button[type="submit"]').removeClass('disabled btn-default').addClass("btn-info").html('Login');
                }
            });

        }else {
            //remove success mesage replaced with error message
            $("#output").removeClass(' alert alert-success');
            $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username and/or password ");
        }
    });    
});
