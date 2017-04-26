		
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 30) {
        $('.header').addClass('shadow');
    } else {
        $('.header').removeClass('shadow');
    }

	});

