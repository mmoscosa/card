
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}

$(function(){
    var textfield = $("input[name=user]");
    $('button[type="submit"]').click(function(e) {
        e.preventDefault();
        var email = textfield.val();
        if (email !== "") {
            if (isValidEmailAddress(email)) {
                $('button[type="submit"]').removeClass('btn-info').addClass("disabled btn-default").html('Redirecting you');
                $.ajax({
                  type: "POST",
                  url: "../controllers/validate.php",
                  data: { email: textfield.val() }
                }).success(function(response) {
                    var result = jQuery.parseJSON(response);
                    if(result.granted === true){
                        window.location.replace("/?code="+result.code);
                    }else{
                        $("#output").removeClass(' alert alert-success');
                        $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry I dont' seem to have you on my contacts.");        
                        $('button[type="submit"]').removeClass('disabled btn-default').addClass("btn-info").html('Proceed');
                    }
                });
            }else{
                $("#output").removeClass(' alert alert-success');
                $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter correct email ");    
            }
        } else {
            //remove success mesage replaced with error message
            $("#output").removeClass(' alert alert-success');
            $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter an email ");
        }
        //console.log(textfield.val());

    });

});
