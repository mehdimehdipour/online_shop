const previewtab = document.getElementById("preview");
const shop = document.getElementById("shop");
const imge = document.querySelectorAll("#shop img");
const previtem = document.getElementById('one')
const closeprev =document.getElementById('closeprev')
const linkPage = document.getElementById('linkPage')

let prevopen = false;

function toggleprev() {
  const shop = document.getElementById("shop");
  const previewtab = document.getElementById("preview");

  if (prevopen) {
    // Close the preview tab
    shop.style.marginLeft = "12rem";
    previewtab.style.width = "0px";
    previtem.style.opacity= 0
    closeprev.style.opacity=0
    linkPage.style.opacity=0

    prevopen = false;
  } else {
    // Open the preview tab
    shop.style.marginLeft = "0px";
    previewtab.style.width = "24rem";
    previtem.style.opacity= 1
    closeprev.style.opacity=1
    linkPage.style.opacity=1


    prevopen = true;
  }
}
function closeprevtab(){
    shop.style.marginLeft = "12rem";
    previewtab.style.width = "0px";
    previtem.style.opacity= 0

    prevopen = false;
}
imge.forEach((image) => {
  image.addEventListener("click", toggleprev);
});
closeprev.addEventListener('click' , closeprevtab)
