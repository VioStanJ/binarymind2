$(document).ready(function () {
    var op = false;

    $('.drawer').click(function () {
        $('.drawer').toggleClass('active');
        if (op) {
            $('.overlay').width('0%');
            $('body').css('overflow', 'auto');
            op = false;
        } else {
            $('.overlay').width('100%');
            $('body').css('overflow', 'hidden');
            op = true;
        }
    });

    $('.dwcl').on('click', function () {
        $('.overlay').width('0%');
        $('body').css('overflow', 'auto');
        op = false;
        $('.drawer').toggleClass('active');
    });
});

window.onload = function () {
    var logo = document.getElementById("logo");
    TweenMax.to('#bm', 3, { opacity: 1, ease: Elastic.easeOut.config(1, 1), x: 100, delay: 1 });
    TweenMax.to('#sl', 3.5, { opacity: 1, ease: Elastic.easeOut.config(1, 1), y: 30, delay: 1.6 });
    TweenMax.to('#minicontent>div:nth-child(2)', 5, { opacity: 1, scale: 1, ease: Elastic.easeOut.config(1, 0.3), delay: 1.3 });
}
window.onscroll = function () { myFunction() };

var navbar = document.getElementById("menu");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add("fix_stick");
        $('#menu>div>ul').addClass('list2');
    } else {
        navbar.classList.remove("fix_stick");
        $('#menu>div>ul').removeClass('list2');
    }
}

var flD = false;
var fls = document.getElementById('flash');

fls.addEventListener('mouseover', function (e) {
    openFlash();
    flD = true;
})

fls.addEventListener('mouseout', function (e) {
    flD = false;
});

document.getElementById('fls_cont').addEventListener('mouseleave', function (e) {
    setTimeout(function(){
        if(flD == false){
            closeFlash();
        }
    },5000);
});

var openFlash = function () {
    TweenLite.to("#sh", 1, { width: "50px", right: "0px", ease: Elastic.easeOut.config(1, 0.3) });
    TweenLite.to("#sh>a", 2, { opacity: 1, delay: 0.1 });

    TweenLite.to("#fk", 1, { width: "80px", ease: Elastic.easeOut.config(1, 0.3), delay: 0.3 });
    TweenLite.to("#fk>a", 2, { opacity: 1, delay: 0.2 });

    TweenLite.to("#whs", 1, { width: "50px", right: "0px", ease: Elastic.easeOut.config(1, 0.3), delay: 0.5 });
    TweenLite.to("#whs>a", 2, { opacity: 1, delay: 0.6 });
}

var closeFlash = function () {
    TweenLite.to("#sh", 0.2, { width: "0px", right: "20px", delay: 0.2 });
    TweenLite.to("#sh>a", 0.2, { opacity: 0, delay: 0.1 });

    TweenLite.to("#fk", 0.4, { width: "0px", delay: 0.3 });
    TweenLite.to("#fk>a", 0.4, { opacity: 0, delay: 0.2 });

    TweenLite.to("#whs", 0.5, { width: "0px", right: "20px", delay: 0.3 });
    TweenLite.to("#whs>a", 0.5, { opacity: 0, delay: 0.1 });
}