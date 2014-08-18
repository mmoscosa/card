function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(
        /^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i
    );
    return pattern.test(emailAddress);
}
$(function() {
    var email, name, message;
    name = $("input[name=user]");
    email = $("input[name=email]");
    message = $('#message');
    $('button[type="submit"]').click(function(e) {
        e.preventDefault();
        name = name.val();
        email = email.val();
        message = message.val();
        if (email !== "" || name !== "") {
            if (!isValidEmailAddress(email)) {
                $("#output").removeClass(' alert alert-success');
                $("#output").addClass("alert alert-danger animated fadeInUp").html(
                    "sorry enter correct email ");
            } else {
                $.ajax({
                    type: "POST",
                    url: "../controllers/sendContact.php",
                    data: {
                        email: email,
                        name: name,
                        message: message
                    },
                    beforeSend: function() {
                        $('button[type="submit"]').removeClass(
                            'btn-info').addClass(
                            'disabled btn-default').html('Sending…');
                    },
                    success: function() {
                        $('button[type="submit"]').removeClass(
                            'disabled  btn-default').addClass(
                            'btn-info').html('Send');
                        $("input[name=user]").val("");
                        $("input[name=email]").val("");
                        $('#message').val("");
                    }
                });
            }
        } else {
            $("#output").removeClass(' alert alert-success');
            $("#output").addClass("alert alert-danger animated fadeInUp").html(
                "Please fill required fields");
        }
    });
});
