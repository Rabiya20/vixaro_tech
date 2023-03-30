(function ($) {
    "use strict";

    var words = ["Certifications", "Bootcamps", "Learning"]
    var colors = ["#F58020" , "#F58020", "#F58020"]
    
    var counter = 0;
    var currentIndex = getRandomInt(0, words.length - 1);
    
    var text = document.getElementById("text2");
    
    var stepInterval = setInterval(() => { step(); }, 200);
    var delInterval = null;
    var delTimeout = null;
    
    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    
    function delIntervalCallback(){
        delInterval = setInterval(() => { del(); }, 100);
        clearTimeout(delTimeout);
    }
    
    function del(){
        if(counter == 0){
            let newIndex = getRandomInt(0, words.length - 1);
            while(newIndex == currentIndex){
                newIndex = getRandomInt(0, words.length -1 );
            }
            currentIndex = newIndex;
            clearInterval(delInterval);
            stepInterval = setInterval(() => { step(); }, 200);
        }
        else{
            text.textContent = text.textContent.slice(0, -1)
            counter--;
        }
    }
    
    function step(){
        if(counter >= words[currentIndex].length){
            clearInterval(stepInterval);
            delTimeout = setTimeout(() => { delIntervalCallback(); }, 2000);
        }
        else{
            text.textContent += words[currentIndex][counter];
            text.style.color = colors[currentIndex];
            counter++;
        }
    }

    $(document).ready(function () {
        var silder = $(".owl-carousel");
        silder.owlCarousel({
            autoPlay: false,
            items: 1,
            center: false,
            nav: true,
            margin: 40,
            dots: false,
            loop: true,
            navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                575: { items: 1 },
                768: { items: 2 },
                // 991: { items: 3 },
                // 1200: { items: 4 }
            }
        });
    });
})(jQuery);