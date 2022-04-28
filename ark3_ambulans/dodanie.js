var jeden = document.querySelector("#jeden");
var dwa = document.querySelector("#dwa");
var trzy = document.querySelector("#trzy");
var karetka = document.querySelector("#karetka");
console.log("dzaila");
document.querySelector("#submit").addEventListener("click",function() {
    console.log(isValidForm());
    $.ajax({
        type: "POST",
        url: "dodanie.php",
        data: { 'action': true }
    }).done(function( msg ) {
        console.log( "Data Saved: " + msg );
    });
    $.ajax({url:'display.php', success: function(dsfsd,sdfsdf,xml){
        console.log(xml.responseText);
        var temp = document.querySelector("#tabela").innerHTML;
        document.querySelector("#tabela").innerHTML =xml.responseText;
        }

    })
    return isValidForm();
});
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