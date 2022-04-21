var color1 = document.querySelector("#Indigo");
var color2 = document.querySelector("#SteelBlue");
var color3 = document.querySelector("#Olive");
console.log(color1.value);
function changeBackground(color) {
    document.querySelector(".right").style.backgroundColor = color;
}
color1.addEventListener("click", changeBackground(color1.value));
color2.addEventListener("click", changeBackground(color2.value));
color3.addEventListener("click", changeBackground(color3.value));