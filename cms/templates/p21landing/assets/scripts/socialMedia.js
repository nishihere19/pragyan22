let socialMedia = document.querySelector('.social-media');
let fab =  document.querySelector('.p21-fab');

$('.p21-fab').on('click', ()=>{
    console.log("wtf")
    toggleClass(socialMedia, "sm-down")
    $(".social-media").slideToggle("slow");
    
})

const toggleClass = (element, stringClass) => {
    if (element.classList.contains(stringClass))
        element.classList.remove(stringClass);
    else
        element.classList.add(stringClass);
}