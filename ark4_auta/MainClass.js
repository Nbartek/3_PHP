export default class Site {
    constructor(font, fontSize, border, ol) {
        this.font = font;
        this.fontSize = fontSize;
        this.border = border;
        this.ol = ol;
    }

    static changeBorder(checked) {
        this.border.addEventListener('change', () => {
            if (checked == true) {
                document.querySelector("#dababy").style.border = "solid 1px white";
            } else if (checked == false)
                document.querySelector("#dababy").style.border = "0";
        })
    }
    static changeFontSize(fontSizee) {
        this.fontSize.addEventListener('focusout', () => {
            document.querySelector(".right").style.fontSize = fontSizee.value + '%';
            console.log(fontSizee.value + '%');
            console.log(fontSizee.value);
        })
    }
    static changeFont() {
        this.font.addEventListener('change',()=>{
            document.querySelector(".right").style.color = font.value;
        })
    }
    changeBackground(color) {
        document.querySelector(".right").style.backgroundColor = color;
    }
    static addColors(colors){
        for(color of colors){
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
                changeBackground(e.target.value);
                console.log(e);
            })
        }
    }
}