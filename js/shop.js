const images = document.querySelectorAll('.container a');
const container2 = document.getElementById('container2');
const container = document.getElementById ('container');
const closebtn = document.getElementById('close');
const body = document.getElementById('body');
const fullArrow= document.getElementById('fullar');
const maximum = document.getElementById("max-page");
const previmg = document.getElementById("prev-img");



  

images.forEach(image => {
  image.addEventListener('click', () => {
    container.style.transform = 'translateX(-5.5%)';
    container.classList.add('gap')
    event.preventDefault();
    container2.style.display = 'flex'; // Show container2
    container2.style.width = '370px'; // Fade in 
    maximum.style.display = "block";
    closebtn.style.display = "block";
    previmg.style.display = "block";


  });
});

closebtn.addEventListener('click' , () => {
    container2.style.width = '0px';
    container.style.transform = 'translateX(0%)';
    container.classList.remove('gap');
    container.style.width = '100vw';
    closebtn.style.display = 'none';
    
})

maximum.addEventListener('click' , () => {
  container2.style.width = '100vw';
  container2.classList.add('fullprev');
} )