$(document).ready(function () {
    $(".cleditor").cleditor();
    $("#merchantsOpt").change(function() {
        if ($("#merchantsOpt").val() == "new") {
            $('#merchant_create_inputs').fadeIn();
        } else {
            $('#merchant_create_inputs').fadeOut();
        }
    })
});
