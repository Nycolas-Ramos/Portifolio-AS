const elements = document.querySelectorAll('[data-anima]')
const animationClass = 'animate'

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight*3) / 4) + 85
    console.log(window.pageYOffset)
    
    elements.forEach(function(element) {
        if (windowTop > element.offsetTop)
            element.classList.add(animationClass)
        else
            element.classList.remove(animationClass)
    })
}


window.addEventListener('scroll', function(){
    animeScroll()
})