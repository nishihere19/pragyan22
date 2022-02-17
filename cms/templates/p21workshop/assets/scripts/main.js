const workshopList = document.querySelectorAll(".workshop-list > div");
let workshopImage = document.querySelector(".workshop-image > img");
workshopList.forEach(element => {
    element.addEventListener("mouseover", (e) => {
    workshopImage.setAttribute('src', element.getAttribute("img-attr"));
    });
})

$(document).ready(function () {
    if($(window).width() > 768){
        var $list = $(".workshop-list"),
            workshopsMargin = $list.css('margin-top') + ' ' + $list.css('margin-bottom'),
            workshopsPadding = $list.css('padding-top') + ' ' + $list.css('padding-bottom'),
            workshopsH = $list.outerHeight(true) - parseInt(workshopsPadding) - parseInt(workshopsMargin),
            workshopsSH = $list[0].scrollHeight,
            hDiff = (workshopsSH / workshopsH) - 1, // widths difference ratio
            mPadd = 60, // Mousemove Padding
            damp = 20, // Mousemove response softness
            mY = 0, // Real mouse position
            mY2 = 0, // Modified mouse position
            posY = 0,
            mmAA = workshopsH - (mPadd * 2), // The mousemove available area
            mmAAr = (workshopsH / mmAA); // get available mousemove fidderence ratio

            console.log(workshopsH, workshopsSH);
        if(window.innerWidth>768){
            $list.mousemove(function (e) {
            mY = e.pageY - $(this).parent().offset().top - this.offsetTop + 200;
            mY2 = Math.min(Math.max(0, mY - mPadd), mmAA) * mmAAr;
            });

            setInterval(function () {
            posY += (mY2 - posY) / damp; // zeno's paradox equation "catching delay"	
            $list.scrollTop(posY * hDiff);
            }, 10);
        }

        $('.workshop-list > div > a').hover(function() {
            $('.workshop-list > div > a').parent('div').css({'padding-left': '5%', 'opacity': 0.4, 'transition': 'all 0.2s ease-in', 'transform': 'scale(1)'});
            $('.workshop-list > div > a').css('color', '#d7c5ff');

            $(this).parent('div').css({'padding-left': '15%', 'opacity': 1, 'transform': 'scale(1.1)'});
            $(this).parent('div').next().css({'padding-left': '10%', 'transition': 'all 0.4s ease-in', 'transform': 'scale(1.02)'});
            $(this).parent('div').prev().css({'padding-left': '10%', 'transition': 'all 0.4s ease-in', 'transform': 'scale(1.02)'});
            $(this).css({'color': '#a27bf7'});
        }, function() {
        });
    } else {
        var list = document.querySelectorAll(".workshop-list > div");
        var imagesSrc = []
        list.forEach(element => {
            imagesSrc.push(element.getAttribute("img-attr"));
        });
        
        workshopImage.setAttribute('src', imagesSrc[0]);
        var index = 1;
        setInterval(function() {
            workshopImage.fadeOut
            workshopImage.setAttribute('src', imagesSrc[index]);
            index += 1;
            if(index === imagesSrc.length){
                index = 0;
            }
        }, 1000);
    }
});