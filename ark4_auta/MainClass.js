export default class Site {
    constructor(font, fontSize, border, ol) {
        this.font = font;
        this.fontSize = fontSize;
        this.border = border;
        this.ol = ol;
    }
    changeOLIcons(){
        this.ol.forEach((e)=>{
            e.addEventListener('click',()=>{
                console.log(this.ol.value);
                if(this.ol.value === "disc" ){
                    e.style.listStyleType = "disc";
                }else if(this.ol.value === "square"){
                    e.style.listStyleType = "square";
                }else{
                    e.style.listStyleType = "circle";
                }
        })

        })

    }
     changeBorder() {
        this.border.addEventListener('change', () => {
            console.log(this.border.checked);
            if (this.border.checked === true) {
                document.querySelector("#dababy").style.border = "solid 1px white";
            } else if (this.border.checked === false)
                document.querySelector("#dababy").style.border = "0";
        })
    }
     changeFontSize() {
        console.log(this.fontSize.value);
        this.fontSize.addEventListener('focusout', () => {
            document.querySelector(".right").style.fontSize = this.fontSize.value + '%';
            console.log(this.fontSize.value + '%');
        })
    }
    changeFont() {
        this.font.addEventListener('change',()=>{
            document.querySelector(".right").style.color = this.font.value;
        })
    }
    static changeBackground(color) {
        document.querySelector(".right").style.backgroundColor = color;
    }
    addColors(colors){
        for(let color of colors){
            //console.log(color);
          const z =document.createElement("button");
           z.id = ''+color+'';
           z.type = 'button';
           z.value = color;
           z.className = 'colorBtn';
           z.style.backgroundColor = ''+color+'';
           z.innerHTML = ''+color+'';
            //console.log(z);
            document.querySelector("#for4").append(z);
            z.addEventListener('click',(e)=>{
                Site.changeBackground(e.target.value);
                console.log(e);
            })
        }
    }
}
