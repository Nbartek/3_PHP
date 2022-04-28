var color1 = document.querySelector("#Indigo");
var color2 = document.querySelector("#SteelBlue");
var color3 = document.querySelector("#Olive");
var font = document.querySelector("#font");
var fontSizee = document.querySelector("#font-size");
var border = document.querySelector("#ifborder");
//var OL = document.querySelector(".lista");
console.log(document.querySelector('input[type = radio]:checked').checked.value);

var kolory = ['white','blue','green','yellow'];

color1.addEventListener("click", () => { changeBackground(color1.value) });
color2.addEventListener("click", () => { changeBackground(color2.value) });
color3.addEventListener("click", () => { changeBackground(color3.value) });
font.addEventListener('change', changeFont);
fontSizee.addEventListener('focusout', ()=>{changeFontSize(fontSizee.value)});
border.addEventListener('change', ()=>{changeBorder(border.checked)});
document.querySelector('input[type = radio]:checked').addEventListener('change',()=>{changeOL(document.querySelector('input[type = radio]:checked')).value})
addColors(kolory);
function changeBackground(color) {
    document.querySelector(".right").style.backgroundColor = color;
}
function changeFont() {
    document.querySelector(".right").style.color = font.value;
}
function changeFontSize(){
    document.querySelector(".right").style.fontSize = fontSizee.value+'%';
    console.log(fontSizee.value+'%');
    console.log(fontSizee.value);
}
function changeBorder(checked){
    if(checked == true){
        document.querySelector("#dababy").style.border = "solid 1px white";
    }else if(checked == false)
    document.querySelector("#dababy").style.border = "0";
}
function changeOL(radioValue){
    if(radioValue = "disc" ){
        document.querySelectorAll(".qwe").style.listStyleType = "disc";
    }else if(radioValue = "square"){
        document.querySelectorAll(".qwe").style.listStyleType = "square";
    }else{
        document.querySelectorAll(".qwe").style.listStyleType = "circle";
    }
}
function addColors(colors){
    for(color of colors){
       var z = document.createElement("button");
       z.id = ''+color+'';
       z.style.backgroundColor = ''+color+'';
       z.innerHTML = ''+color+'';
        document.querySelector("#for4").appendChild(z);
    }
}