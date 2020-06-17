window.onload = function() {
    var elm = document.querySelector('.moon');

    elm.addEventListener('animationend', function(e) {
        // $(".stage-1").addClass('sunset-background');
        $(".fire").addClass('show-animate');
        $(".plant1, .plant2, .plant3").addClass('hide-animate');

    });


}
