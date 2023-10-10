const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  
  hamburger.classList.toggle("active");
	navMenu.classList.toggle("active");
	
});

document.querySelectorAll(".nav-link").forEach((n) => n.addEventListener("click", () => {
		hamburger.classList.remove("active");
		navMenu.classList.remove("active");
	})
);


// SLIDE

const slide = [
    "oeufs.png",
    "cheesburger.png",
    "pizza-margherita.png",
    "spaghetti-legumes.png",
    "green-pizza.png"
]; 
let numero = 0;

function changeSlide(sens) {
    numero = numero + sens;
    if (numero > slide.length - 1)
        numero = 0;
    if (numero < 0)
        numero = slide.length - 1;

    document.getElementById("slide").src = "assets/img/img-plat-accueil/" + slide[numero];

}

setInterval("changeSlide(1)", 6000);



//FIL SLIDE
const container = document.querySelector('#div-plat-img');
                
let startY;
let startX;
let isDown;

container.addEventListener('mousedown',e => mouseIsDown(e));  
container.addEventListener('mouseup',e => mouseUp(e))
container.addEventListener('mouseleave',e=>mouseLeave(e));
container.addEventListener('mousemove',e=>mouseMove(e));

function mouseIsDown(e){
  isDown = true;
  startY = e.pageY - container.offsetTop;
  startX = e.pageX - container.offsetLeft;
  scrollLeft = container.scrollLeft;
  scrollTop = container.scrollTop; 
}
function mouseUp(e){
  isDown = false;
}
function mouseLeave(e){
  isDown = false;
}
function mouseMove(e){
  if(isDown){
    e.preventDefault();
    //Move vertcally
    const y = e.pageY - container.offsetTop;
    const walkY = y - startY;
    container.scrollTop = scrollTop - walkY;

    //Move Horizontally
    const x = e.pageX - container.offsetLeft;
    const walkX = x - startX;
    container.scrollLeft = scrollLeft - walkX;

  }
}


// SCREEN WIDTH TEST

