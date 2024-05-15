const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");
const menuic = document.getElementById("menu")
const menu = document.getElementById("menu-bar")
const categoryic = document.getElementById("cateico");
const category = document.getElementById("category")
const profileDiv = document.getElementById("profile") 
const profileIcon = document.getElementById("profileico")

let isDragStart = false,
  isDragging = false,
  prevPageX,
  prevScrollLeft,
  positionDiff;

const showHideIcons = () => {
  // showing and hiding prev/next icon according to carousel scroll left value
  let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
  arrowIcons[0].style.display = carousel.scrollLeft === 0 ? "none" : "block";
  arrowIcons[1].style.display = carousel.scrollLeft === scrollWidth ? "none" : "block";
};

arrowIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
    // if clicked icon is left, reduce width value from the carousel scroll left else add to it
    carousel.scrollLeft += icon.id === "left" ? -firstImgWidth : firstImgWidth;
    setTimeout(() => showHideIcons(), 60); // calling showHideIcons2 after 60ms
  });
});

const autoSlide = () => {
  // if there is no image left to scroll then return from here
  if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0)
    return;

  positionDiff = Math.abs(positionDiff); // making positionDiff2 value positive
  let firstImgWidth = firstImg.clientWidth + 14;
  // getting difference value that needs to add or reduce from carousel2 left to take the middle img center
  let valDifference = firstImgWidth - positionDiff;

  if (carousel.scrollLeft > prevScrollLeft) {
    // if the user is scrolling to the right
    return (carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff);
  }

  // if the user is scrolling to the left
  carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
};

const dragStart = (e) => {
  // updating global variables value on mouse down event
  isDragStart = true;
  prevPageX = e.pageX || e.touches[0].pageX;
  prevScrollLeft = carousel.scrollLeft;
  e.preventDefault();
};

const dragging = (e) => {
  // scrolling images/carousel to the left according to the mouse pointer
  if (!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carousel.classList.add("dragging");
  positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
  carousel.scrollLeft = prevScrollLeft - positionDiff;
  showHideIcons();
};

const dragStop = () => {
  isDragStart = false;
  carousel.classList.remove("dragging");

  if (!isDragging) return;
  isDragging = false;
  autoSlide();
};



carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);








// carousel 2 


const carousel2 = document.querySelector(".carousel2");
const firstImg2 = carousel2.querySelectorAll("img")[0];
const arrowIcons2 = document.querySelectorAll(".wrapper2 i");

let isDragStart2 = false,
  isDragging2 = false,
  prevPageX2,
  prevScrollLeft2,
  positionDiff2;

const showHideIcons2 = () => {
  // showing and hiding prev/next icon according to carousel scroll left value
  let scrollWidth2 = carousel2.scrollWidth - carousel2.clientWidth; // getting max scrollable width
  arrowIcons2[0].style.display = carousel2.scrollLeft === 0 ? "none" : "block";
  arrowIcons2[1].style.display = carousel2.scrollLeft === scrollWidth2 ? "none" : "block";
};

arrowIcons2.forEach((icon) => {
  icon.addEventListener("click", () => {
    let firstImgWidth2 = firstImg2.clientWidth + 14; // getting first img width & adding 14 margin value
    // if clicked icon is left, reduce width value from the carousel scroll left else add to it
    carousel2.scrollLeft += icon.id === "left" ? -firstImgWidth2 : firstImgWidth2;
    setTimeout(() => showHideIcons2(), 60); // calling showHideIcons2 after 60ms
  });
});

const autoSlide2 = () => {
  // if there is no image left to scroll then return from here
  if (carousel2.scrollLeft - (carousel2.scrollWidth - carousel2.clientWidth) > -1 || carousel2.scrollLeft <= 0)
    return;

  positionDiff2 = Math.abs(positionDiff2); // making positionDiff2 value positive
  let firstImgWidth2 = firstImg2.clientWidth + 14;
  // getting difference value that needs to add or reduce from carousel2 left to take the middle img center
  let valDifference2 = firstImgWidth2 - positionDiff2;

  if (carousel2.scrollLeft > prevScrollLeft2) {
    // if the user is scrolling to the right
    return (carousel2.scrollLeft += positionDiff2 > firstImgWidth2 / 3 ? valDifference2 : -positionDiff2);
  }

  // if the user is scrolling to the left
  carousel2.scrollLeft -= positionDiff2 > firstImgWidth2 / 3 ? valDifference2 : -positionDiff2;
};

const dragStart2 = (e) => {
  // updating global variables value on mouse down event
  isDragStart2 = true;
  prevPageX2 = e.pageX || e.touches[0].pageX;
  prevScrollLeft2 = carousel2.scrollLeft;
  e.preventDefault();
};

const dragging2 = (e) => {
  // scrolling images/carousel to the left according to the mouse pointer
  if (!isDragStart2) return;
  e.preventDefault();
  isDragging2 = true;
  carousel2.classList.add("dragging2");
  positionDiff2 = (e.pageX || e.touches[0].pageX) - prevPageX2;
  carousel2.scrollLeft = prevScrollLeft2 - positionDiff2;
  showHideIcons2();
};

const dragStop2 = () => {
  isDragStart2 = false;
  carousel2.classList.remove("dragging2");

  if (!isDragging2) return;
  isDragging2 = false;
  autoSlide2();
};



carousel2.addEventListener("mousedown", dragStart2);
carousel2.addEventListener("touchstart", dragStart2);

document.addEventListener("mousemove", dragging2);
carousel2.addEventListener("touchmove", dragging2);

document.addEventListener("mouseup", dragStop2);
carousel2.addEventListener("touchend", dragStop2);





// Third Carousel





  const carousel3 = document.querySelector(".carousel3");
  const firstImg3 = carousel3.querySelectorAll("img")[0];
  const arrowIcons3 = document.querySelectorAll(".wrapper3 i");

  let isDragStart3 = false,
    isDragging3 = false,
    prevPageX3,
    prevScrollLeft3,
    positionDiff3;

  const showHideIcons3 = () => {
    let scrollWidth3 = carousel3.scrollWidth - carousel3.clientWidth;
    arrowIcons3[0].style.display = carousel3.scrollLeft === 0 ? "none" : "block";
    arrowIcons3[1].style.display = carousel3.scrollLeft === scrollWidth3 ? "none" : "block";
  };

  arrowIcons3.forEach((icon) => {
    icon.addEventListener("click", () => {
      let firstImgWidth3 = firstImg3.clientWidth + 14;
      carousel3.scrollLeft += icon.id === "left" ? -firstImgWidth3 : firstImgWidth3;
      setTimeout(() => showHideIcons3(), 60);
    });
  });

  const autoSlide3 = () => {
    if (carousel3.scrollLeft >= carousel3.scrollWidth - carousel3.clientWidth || carousel3.scrollLeft <= 0)
      return;

    positionDiff3 = Math.abs(positionDiff3);
    let firstImgWidth3 = firstImg3.clientWidth + 14;
    let valDifference3 = firstImgWidth3 - positionDiff3;

    if (carousel3.scrollLeft > prevScrollLeft3) {
      return (carousel3.scrollLeft += positionDiff3 > firstImgWidth3 / 3 ? valDifference3 : -positionDiff3);
    }

    carousel3.scrollLeft -= positionDiff3 > firstImgWidth3 / 3 ? valDifference3 : -positionDiff3;
  };

  const dragStart3 = (f) => {
    isDragStart3 = true;
    prevPageX3 = f.pageX || f.touches[0].pageX;
    prevScrollLeft3 = carousel3.scrollLeft;
    f.preventDefault();
  };

  const dragging3 = (f) => {
    if (!isDragStart3) return;
    f.preventDefault();
    isDragging3 = true;
    carousel3.classList.add("dragging3");
    positionDiff3 = (f.pageX || f.touches[0].pageX) - prevPageX3;
    carousel3.scrollLeft = prevScrollLeft3 - positionDiff3;
    showHideIcons3();
  };

  const dragStop3 = () => {
    isDragStart3 = false;
    carousel3.classList.remove("dragging3");
    if (!isDragging3) return;
    isDragging3 = false;
    autoSlide3();
  };

carousel3.addEventListener("mousedown", dragStart3);
carousel3.addEventListener("touchstart", dragStart3);

document.addEventListener("mousemove", dragging3);
carousel3.addEventListener("touchmove", dragging3);

document.addEventListener("mouseup", dragStop3);
carousel3.addEventListener("touchend", dragStop3);



var open = false
function openmenu() {
  if(open){
    menu.style.transform = 'translate(384px)';
    open = false
    
  }
  else {
    menu.style.transform = 'translate(0px)';
    open = true
  }
}

     
  

menuic.addEventListener('click', openmenu);


function toggleCategoryMenu() {
  if(category.style.height === '0px' || category.style.height ===''){
    category.style.height ='200px'
    category.style.opacity = '1'
    category.style.transition = 'width 2s ease'; 
   }
  else{
    category.style.height='0px'
    category.style.opacity='0'
    category.style.transition = 'width 2s ease';
    }
  
  }

  categoryic.addEventListener('click', toggleCategoryMenu)

  function togggleProfile(){
    if(profileDiv.style.opacity === '0' || profileDiv.style.opacity === '' ){
      profileDiv.style.opacity = 1
    }
    else{
      profileDiv.style.opacity = 0
    }
  }
  profileIcon.addEventListener('click' , togggleProfile)


