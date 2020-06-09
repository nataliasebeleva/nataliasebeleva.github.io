const contents = document.querySelectorAll(".container-in-hide-content"),
btns = document.querySelectorAll(".button-showHide"),
clicks = [false, false]   

btns.forEach((elem, index) => {
  elem.addEventListener('click', () => {
    contents[index].classList.toggle('hidden')
    clicks[index] = !clicks[index]
  })
})


button1.onclick = function() {
 var x = document.getElementById("iframe1");
 x.classList.toggle('transform');   
};
button2.onclick = function() {
 var x = document.getElementById("iframe2");
 x.classList.toggle('transform');   
};

