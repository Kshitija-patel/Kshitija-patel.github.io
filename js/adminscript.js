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
// $('.modal-trigger').on('click', function(e) {
//     //  $('#demo-modal').find('input[name="nom"]').val($(this).data('nom'))
//     // $('#demo-modal').
//     $(".delete-btn-learningRoom").html("<a href='LearningRoomList.php?action=delete&id='>click</a>");
//   })
