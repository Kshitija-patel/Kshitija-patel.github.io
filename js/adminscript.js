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

    // $('.modal').modal();


});

/**-----learning room js */
$('.modal').modal();
