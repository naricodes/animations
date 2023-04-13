
/*********animate********* */

const mySections = document.querySelectorAll('.animate__');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__fadeIn');
        } else {
            entry.target.classList.remove('animate__fadeIn');
        }
    });
}, {
    rootMargin: '100px'
});

mySections.forEach(section => {
    observer.observe(section);
});

const myHeadings = document.querySelectorAll('.animate__fadeh');


const observerH = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__fadeInUp');
        } else {
            entry.target.classList.remove('animate__fadeInUp');

        }
    });
});
myHeadings.forEach(section => {
    observerH.observe(section);
});

/*******mouvement des nuages******** */

let moveLeftElements = document.querySelectorAll('.move-left')

const observerMoveLeft = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        } else {
            entry.target.classList.remove('animate');
        }
    });
});

moveLeftElements.forEach(element => {
    observerMoveLeft.observe(element);
})


/*********flower scroll on ********** */

let logo = document.querySelector('.floating_logo')

let scrollInterval = null;

window.onscroll = function () {
    var positionY = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    logo.setAttribute("style", `top:${positionY}px`)

    let elements = document.querySelectorAll('.on-scroll-fast');

    for (element of elements) {
        element.classList.remove('slow');
        element.classList.add('fast');
    }

    clearTimeout(scrollInterval);

    scrollInterval = setTimeout(function () {

        let elements = document.querySelectorAll('.on-scroll-fast');

        for (element of elements) {
            element.classList.remove('fast');
            element.classList.add('slow');
        }


    }, 1000);

}
/**********hamburger*********** */

let hamburger = document.querySelector('#hamburger');
let menu = document.querySelector('.navbar');
let bod = document.querySelector('.container-1');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('isactive');
    menu.classList.toggle('active');
});

