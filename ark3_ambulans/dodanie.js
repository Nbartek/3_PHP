var jeden = document.querySelector("#jeden");
var dwa = document.querySelector("#dwa");
var trzy = document.querySelector("#trzy");
var karetka = document.querySelector("#karetka");
console.log('halo');
$('form').on('submit',function(event) {
console.log("dzaila");
    if(isValidForm()==true){
        var formData = {
            jeden: jeden.val(),
            dwa: dwa.val(),
            trzy:trzy.val(),
            karetka:karetka.val()
        };
        //var formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "dodanie.php",
            data: formData
        }).done(function( data ) {
        //document.querySelector("#tabela").ajax.reload();//tylko to było potrzebne
console.log(data);
        });

        console.log(isValidForm());

    }
    event.preventDefault();
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