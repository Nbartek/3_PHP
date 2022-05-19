import Site from "./MainClass.js";
const font = document.querySelector("#font");
const fontSizee = document.querySelector("#font-size");
const border = document.querySelector("#ifborder");
const ol = document.querySelectorAll(".qwe");

let obj = new Site(font,fontSizee,border,ol);


const kolory = ['Indigo','SteelBlue','Olive','white','blue','green','yellow','purple'];
obj.addColors(kolory);
obj.changeBorder();
obj.changeFontSize();
obj.changeFont();
obj.changeOLIcons()