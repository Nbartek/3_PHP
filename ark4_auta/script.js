import Site from "./MainClass.js";
const font = document.querySelector("#font");
const fontSizee = document.querySelector("#font-size");
const border = document.querySelector("#ifborder");
const ol = document.querySelectorAll(".qwe");

let obj = new Site(font,fontSizee,border,ol);


//console.log(document.querySelector('input[type = radio]:checked').checked.value);
//console.log(OL);
const kolory = ['Indigo','SteelBlue','Olive','white','blue','green','yellow','purple'];
obj.addColors(kolory);
obj.changeBorder();
obj.changeFontSize();
obj.changeFont();
obj.changeOLIcons()
//font.addEventListener('change', changeFont);
//fontSizee.addEventListener('focusout', ()=>{changeFontSize(fontSizee.value)});
//border.addEventListener('change', ()=>{changeBorder(border.checked)});
//for(li of OL){
  //  li.addEventListener('change',()=>{changeOL(li.value)}) ;
//}

//addColors(kolory);



// function changeBackground(color) {
//     document.querySelector(".right").style.backgroundColor = color;
// }
// function changeFont() {
//     document.querySelector(".right").style.color = font.value;
// }
// function changeFontSize(){
//     document.querySelector(".right").style.fontSize = fontSizee.value+'%';
//     console.log(fontSizee.value+'%');
//     console.log(fontSizee.value);
// }
// function changeBorder(checked){
//     if(checked == true){
//         document.querySelector("#dababy").style.border = "solid 1px white";
//     }else if(checked == false)
//     document.querySelector("#dababy").style.border = "0";
// }
// function changeOL(radioValue){
//     radio
//     if(radioValue = "disc" ){
//         document.querySelectorAll(".qwe").style.listStyleType = "disc";
//     }else if(radioValue = "square"){
//         document.querySelectorAll(".qwe").style.listStyleType = "square";
//     }else{
//         document.querySelectorAll(".qwe").style.listStyleType = "circle";
//     }
// }
// function addColors(colors){
    
//     for(color of colors){
//         //console.log(color);
//       const z =document.createElement("button");
//        z.id = ''+color+'';
//        z.type = 'button';
//        z.value = color;
//        z.className = 'colorBtn';
//        z.style.backgroundColor = ''+color+'';
//        z.innerHTML = ''+color+'';
//         //console.log(z);
//         document.querySelector("#for4").append(z);
//         z.addEventListener('click',(e)=>{
//             changeBackground(e.target.value);
//             console.log(e);
//         })
//     }
   
// }