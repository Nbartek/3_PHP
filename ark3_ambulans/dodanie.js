var jeden = document.querySelector("#jeden");
var dwa = document.querySelector("#dwa");
var trzy = document.querySelector("#trzy");
var karetka = document.querySelector("#karetka");

document.querySelector("#ambulans").onsubmit = function() {
    console.log(isValidForm());
    AjaxTable();
    return isValidForm();
};
function isValidForm(){
    if(karetka.value.trim() == ""){
        karetka.style.backgroundColor = 'red'; 
        return false;
    }else{karetka.style.backgroundColor = 'white'; };
    if(jeden.value.trim() == ""){
        jeden.style.backgroundColor = 'red'; 
        return false;
    }else{jeden.style.backgroundColor = 'white'; };
    if(dwa.value.trim() == ""){
        dwa.style.backgroundColor = 'red'; 
        return false;
    }else{dwa.style.backgroundColor = 'white'; };
    if(trzy.value.trim() == ""){
        trzy.style.backgroundColor = 'red'; 
        return false;
    }else{trzy.style.backgroundColor = 'white'; };

    if(jeden.value.trim() !="" && dwa.value.trim()!=""&&trzy.value.trim()!=""&&karetka.value.trim()!=""){
        return true;
    }

}
function AjaxTable(){
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "dodanie.php");
    xhttp.send();


}