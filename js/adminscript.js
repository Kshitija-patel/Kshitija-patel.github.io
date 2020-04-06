(function ($) {
    $(function () {
        $(".dropdown-trigger").dropdown();
        $('.sidenav').sidenav();

    }); // end of document ready
})(jQuery); // end of jQuery name space


// Or with jQuery
$(document).ready(function () {
    $('.datepicker').datepicker();
    $('select').formSelect();
    $('.tabs').tabs();
});

/**-----learning room js */
$('.modal').modal();

   $('#subject').change(function(){
        var id = $(this).val();
    $.ajax({
        type: "POST",
        data:{
            "id":id
        },
        url: "tutorAppointFetch.php",
        dataType: "html",
        async: false,
        success: function(response) {
        ///    var tutor_name = response;
          document.getElementById("show").innerHTML = response;
        }
    })
});