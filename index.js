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

$(function(){
    $(".more input").on("click", function(){
        $(this).next().slideToggle();
        $(this).toggleClass("open");
    });
});