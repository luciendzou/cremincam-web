
$("#forms").hide();
$("#show").hide();
$(document).ready(function () {


    $("#hide").click(function () {
        $("#sd-menus").hide();
        $("#forms").show();
        $("#show").show();
        $("#hide").hide();
    });

    $("#show").click(function () {
        $("#sd-menus").show();
        $("#forms").hide();
        $("#hide").show();
        $("#show").hide();
    });
});