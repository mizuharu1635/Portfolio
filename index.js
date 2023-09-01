// const returnTop =
// document.querySelector('return_top');
// window.addEventListener('scroll', () => {
//     let scroll_Y = window.scrollY;
//     if(scroll_Y > 100) {
//         returnTop.classList.add('active');
//     } else {
//         returnTop.classList.remove('active');
//     }

// });

// ==========animate関数==========
$(".line").animate({"width":"100%"},1500,function(){
    $(".line").css("right","0")
    $(".line").animate({"width":"0%"},function(){
        $(".up").animate({"height":"0%"});
        $(".down").animate({"height":"0%"});
    });
})

// ==========moreボタン==========
$(function(){
    $(".more input").on("click", function(){
        $(this).next().slideToggle();
        $(this).toggleClass("open");
    });
});