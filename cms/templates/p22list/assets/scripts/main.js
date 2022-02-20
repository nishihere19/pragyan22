const eventData = {
    "manigma": ["dalal street", "ppl", "beer factory", "the ultimate manager", "marketing hub"],
    "conception": ["circuitrix", "unchained reaction"],
    "concreate": ["town trace"],
    "bytehoc": ["code wars", "pctf", "code character"],
    "roborex": ["aeroed"],
    "pandora's box": ["friendly feud", "we are swift"],
    "phronesis": ["m-decoder", "sherlocked", "labyrinth"],
    "ewitts": ["biz quiz", "how stuff works", "elits concoction"]
};

const pandorasBox = "pandoras_box";
const mdecoder = "m_decoder";

$(document).ready(function () {
    let clusterHTMLString = "";
    Object.keys(eventData).forEach( element => {
        let elementId;
        if(element === "pandora's box") elementId = "pandoras_box";
        else elementId = element;

        clusterHTMLString += `
        <div id="${elementId.toLowerCase()}">
            <a>${element.toUpperCase()}</a>
        </div>
        `;
    });
    $(".cluster-list").html(clusterHTMLString);
    let currentCluster = window.location.href.split("/events/")[1].split("/")[0].toLowerCase();
    let initial = true;

    if($(window).width() > 768){
        var $list = $(".cluster-list"),
            clusterMargin = $list.css('margin-top') + ' ' + $list.css('margin-bottom'),
            clusterPadding = $list.css('padding-top') + ' ' + $list.css('padding-bottom'),
            clusterH = $list.outerHeight(true) - parseInt(clusterPadding) - parseInt(clusterMargin),
            clusterSH = $list[0].scrollHeight,
            hDiff = (clusterSH / clusterH) - 1, // widths difference ratio
            mPadd = 60, // Mousemove Padding
            damp = 20, // Mousemove response softness
            mY = 0, // Real mouse position
            mY2 = 0, // Modified mouse position
            posY = 0,
            mmAA = clusterH - (mPadd * 2), // The mousemove available area
            mmAAr = (clusterH / mmAA); // get available mousemove fidderence ratio
        if(window.innerWidth>768){
            $list.mousemove(function (e) {
                mY = e.pageY - $(this).parent().offset().top - this.offsetTop + 200;
                mY2 = Math.min(Math.max(0, mY - mPadd), mmAA) * mmAAr;

                if(initial) {
                    setInterval(function () {
                        posY += (mY2 - posY) / damp; // zeno's paradox equation "catching delay"	
                        $list.scrollTop(posY * hDiff);
                    }, 10);
                    initial = false;
                }
            });
        }

        $('.cluster-list > div > a').hover(function() {
            $('.cluster-list > div > a').parent('div').css({'padding-left': '5%', 'opacity': 0.4, 'transition': 'all 0.2s ease-in', 'transform': 'scale(1)'});
            $('.cluster-list > div > a').css('color', '#d7c5ff');

            $(this).parent('div').css({'padding-left': '15%', 'opacity': 1, 'transform': 'scale(1.1)'});
            $(this).parent('div').next().css({'padding-left': '10%', 'transition': 'all 0.4s ease-in', 'transform': 'scale(1.02)'});
            $(this).parent('div').prev().css({'padding-left': '10%', 'transition': 'all 0.4s ease-in', 'transform': 'scale(1.02)'});
            $(this).css({'color': '#a27bf7'});

            var eventHTMLString = "";
            var clusterName = $(this).text().trim().toLowerCase();
            eventData[clusterName].forEach(event => {
                let eventLink = event.split(" ").join("_");
                if(clusterName === "pandora's box") clusterName = pandorasBox;
                if(eventLink === "m-decoder") eventLink = mdecoder; 
                eventHTMLString += `
                <div class="event-links">
                    <a href="https://www.pragyan.org/21/home/events/${clusterName}/${eventLink}">${event.toUpperCase()}</a>
                </div>
                `;
            });
            $('.event-list').html(eventHTMLString);
        }, function() {
        });

        if(currentCluster !== "") {
            var clusterElement = document.getElementById(`${currentCluster}`);
            var listElement = document.querySelector(".cluster-list");
            var elementPosition = clusterElement.getBoundingClientRect().top + clusterElement.clientHeight/2;
            var offsetPosition = elementPosition - listElement.clientHeight;
            listElement.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });

            clusterElement = $(`#${currentCluster} a`);
            clusterElement.parent('div').css({'padding-left': '15%', 'opacity': 1, 'transform': 'scale(1.1)'});
            clusterElement.parent('div').next().css({'padding-left': '10%', 'transition': 'all 0.4s ease-in', 'transform': 'scale(1.02)'});
            clusterElement.parent('div').prev().css({'padding-left': '10%', 'transition': 'all 0.4s ease-in', 'transform': 'scale(1.02)'});
            clusterElement.css({'color': '#a27bf7'});

            var eventHTMLString = "";
            if(currentCluster === "pandoras_box") currentCluster = "pandora's box";
            eventData[currentCluster].forEach(event => {
                let eventLink = event.split(" ").join("_");
                if(currentCluster === "pandora's box") currentCluster = pandorasBox;
                if(eventLink === "m-decoder") eventLink = mdecoder; 
                eventHTMLString += `
                <div class="event-links">
                    <a href="https://www.pragyan.org/21/home/events/${currentCluster}/${eventLink}">${event.toUpperCase()}</a>
                </div>
                `;
            });
            $('.event-list').html(eventHTMLString);
        }
    } else {
        $('.cluster-list > div').click(function() {
            $('.cluster-list > div').not(this).css({'padding-left': '5%', 'opacity': 0.4});
            // $(this).next().css('padding-left', '5%');
            // $(this).prev().css('padding-left', '5%');
            $('.cluster-list > div').not(this).children('a').css('color', '#d7c5ff');

            $(this).css({'padding-left': '15%', 'opacity': 1});
            // $(this).next().css('padding-left', '10%');
            // $(this).prev().css('padding-left', '10%');
            $(this).children('a').css('color', '#a27bf7');

            $('.cluster-list > div').children('div').remove();

            var eventHTMLString = `<div class="mobile-event-list">`;
            var clusterName = $(this).text().trim().toLowerCase();
            eventData[clusterName].forEach(event => {
                let eventLink = event.split(" ").join("_");
                if(clusterName === "pandora's box") clusterName = pandorasBox;
                if(eventLink === "m-decoder") eventLink = mdecoder; 
                eventHTMLString += `
                <div class="event-links">
                    <a href="https://www.pragyan.org/21/home/events/${clusterName}/${eventLink}">${event.toUpperCase()}</a>
                </div>
                `;
            });
            eventHTMLString += `</div>`;
            $(this).append(eventHTMLString);

            $('.mobile-event-list').css('opacity', 1);
        });

        if(currentCluster !== "") {
            let clusterElement = document.querySelector(`#${currentCluster}`);
            clusterElement.scrollIntoView();
            clusterElement.click();
        }
    }
});