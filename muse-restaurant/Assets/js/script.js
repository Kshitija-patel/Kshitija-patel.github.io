$(document).ready(function () {
    $('#logo-container').mouseover(() => {
        let time = 1000;
        $(".link").each((index, element) => {
            $(element).fadeOut(time -= 200);
        });
        $(".wrapper").animate({
            width: 'toggle'
        }, 1000);
        $('.logo').css('transform', 'scale(1.2)');
    });
    $('#logo-container').mouseout(() => {
        let time = 200;
        $(".wrapper").animate({
            width: 'toggle'
        }, 1000, () => {
            $(".link").each((index, element) => {
                $(element).fadeIn(time += 200);
            });

        });

        $('.logo').css('transform', 'scale(1)');
    });
    $('.banner-btn').mouseover((event) => {
        $(event.target).css('transform', 'scale(1.2)');
    })
    $('.banner-btn').mouseout((event) => {
        $(event.target).css('transform', 'scale(1)');
    })
    $('.food-icon').each((index, element) => {
        $(element).animate({
            marginTop: getSign() + Math.floor(Math.floor(Math.random() * 150)) + 'px',
            left: Math.floor(Math.random() * 90) + '%',
            fontSize: Math.floor((Math.random() + 2) * 2) + 'em'
        }, 1000, () => {
            setTimeout(() => {
                $(element).fadeIn();
                animateDiv(element);
            }, 1000);
        });
    })

    $('#book-table').click(()=>{
        window.location = 'book_table.html';
    })
})

function getSign() {
    return (Math.random() > 0.5) ? '' : '-';
}

function animateDiv(element) {
    $(element).css({'transform' : 'rotate('+  Math.floor(Math.floor(Math.random() * (100 - 0 + 1)) + 180) +'deg)'});
    $(element).animate({
        marginTop:  getSign() + Math.floor(Math.floor(Math.random() * 150)) + 'px',
        left: Math.floor(Math.random() * 90) + '%',
        fontSize: Math.floor((Math.random() + 1) * 2) + 'em'
    }, (Math.random() * 30000), () => {
        animateDiv(element);
    });
};
