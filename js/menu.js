const mediumBp = matchMedia('(min-width: 1199px)');
const changesize = mql => {
    if (mql.matches) {
        $(window).scroll(function () {
            if ($("#menu").offset().top > 500) {
                $(".navbar-brand").css('height','60px');
            } else {
                $(".navbar-brand").css('height','70px');
            }
        });
    }else{

    }
}
mediumBp.addListener(changesize);
changesize(mediumBp);