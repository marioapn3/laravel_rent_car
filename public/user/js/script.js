// Carousel
const sliders = document.querySelectorAll(".slider");

sliders.forEach((slider, indx) => {
    slider.style.transform = `translateX(${indx * 100}%)`;
});

let curSlider = 0;
let maxSlider = sliders.length - 1;
let containerCarousel = document.querySelector(".rent-carousel");

// autoSlider
window.onload = function (){
    autoSlider = setInterval(function () {
        if (curSlider === maxSlider){
            curSlider = 0;
        } else {
            curSlider++;
        }

        dots.forEach(dot=>{
            dot.classList.remove("dot-active");
          });       
        dots[curSlider].classList.add("dot-active");
        sliders.forEach((slider, indx) => {
            slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
        });
    }, 5000);

    containerCarousel.addEventListener("mouseenter", pause);
    containerCarousel.addEventListener("mouseleave", resume);
};

pause = () => {
    clearInterval(autoSlider);
}

resume = () => {
    clearInterval(autoSlider);
    autoSlider = setInterval(function () {
        if (curSlider === maxSlider){
            curSlider = 0;
        } else {
            curSlider++;
        }

        dots.forEach(dot=>{
            dot.classList.remove("dot-active");
          });       
        dots[curSlider].classList.add("dot-active");
        sliders.forEach((slider, indx) => {
            slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
        });
    }, 5000);
}

// swipe
containerCarousel.addEventListener('touchstart', handleTouchStart, false);
containerCarousel.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;
var yDown = null;

function getTouches(evt) {
    return evt.touches ||
            evt.originalEvent.touches;
}

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
    if (! xDown || !yDown) {
        return;
    }

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) >  Math.abs( yDiff )) {
        if ( xDiff > 0 ) {
            // swipeRight
            if (curSlider === maxSlider){
                curSlider = 0;
            } else {
                curSlider++;
            }

            pause();
            setTimeout(resume, 3000);
        
            dots.forEach(dot=>{
                dot.classList.remove("dot-active");
              });       
            dots[curSlider].classList.add("dot-active");
        
            sliders.forEach((slider, indx) => {
                slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
            });
        } else {
            // leftSwipe
            if (curSlider === 0){
                curSlider = maxSlider;
            } else {
                curSlider--;
            }
        
            dots.forEach(dot=>{
                dot.classList.remove("dot-active");
              });       
              dots[curSlider].classList.add("dot-active");
            sliders.forEach((slider, indx) => {
                slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
            });
        }
    }
    // resetValue
    xDown = null;
    yDown = null;
}

// nextButton
const nextSlider = document.querySelector(".btn-next");
nextSlider.addEventListener("click", function(){
    if (curSlider === maxSlider){
        curSlider = 0;
    } else {
        curSlider++;
    }

    dots.forEach(dot=>{
        dot.classList.remove("dot-active");
      });       
    dots[curSlider].classList.add("dot-active");

    sliders.forEach((slider, indx) => {
        slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
    });
});

// prevButton
const prevSlider = document.querySelector(".btn-prev");
prevSlider.addEventListener("click", function(){
    if (curSlider === 0){
        curSlider = maxSlider;
    } else {
        curSlider--;
    }

    dots.forEach(dot=>{
        dot.classList.remove("dot-active");
      });       
      dots[curSlider].classList.add("dot-active");
    sliders.forEach((slider, indx) => {
        slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
    });
});

// dots
const dotContainer=document.querySelector('.dots');
sliders.forEach(slider => {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    dotContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dot");
dots[curSlider].classList.add("dot-active");
dots.forEach((dot, indx) => {
    dot.addEventListener("click", function(){
        curSlider = indx;
        pause();
        setTimeout(resume, 3000);
        sliders.forEach((slider, indx) => {
            slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
        });
        dots.forEach(dot=>{
            dot.classList.remove("dot-active");
        });
        dots[curSlider].classList.add("dot-active");
    })
});

// LOGIN
// Ambil elemen-elemen yang diperlukan
var loginContent = document.getElementsByClassName("login-content");
var registerContent = document.getElementsByClassName("register-content");
var loginLink = document.getElementById("forLogin");
var registerLink = document.getElementById("forRegist");

registerContent.style.display = "none"

function showLogin(){
    
}

// Sembunyikan form register saat halaman dimuat

// // Tambahkan event listener pada tautan Login
// loginLink.addEventListener("click", function() {
//     loginContent.style.display = "block";
//     registerContent.style.display = "none";
// });

// // Tambahkan event listener pada tautan Register
// registerLink.addEventListener("click", function() {
//     loginContent.style.display = "none";
//     registerContent.style.display = "block";
// });

// LOGIN END

// swipe
// sliders.addEventListener("mousedown", touch);
// sliders.addEventListener("mouseup", release);

// function touch() {
//     clearInterval(autoSlider);
//     sliders.addEventListener("mousemove", function() {
//         if (curSlider === maxSlider){
//             curSlider = 0;
//         } else {
//             curSlider++;
//         }
    
//         dots.forEach(dot=>{
//             dot.classList.remove("dot-active");
//           });       
//         dots[curSlider].classList.add("dot-active");
    
//         sliders.forEach((slider, indx) => {
//             slider.style.transform = `translateX(${100 * (indx - curSlider)}%)`;
//         });
//     });
// }

// function release() {
//     setTimeout(resume, 3000);
// }

// End Carousel