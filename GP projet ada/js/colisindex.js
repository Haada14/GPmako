let formtag = document.getElementById("contactForm");
let kg = document.getElementById('kg');
let search = document.getElementById('rechercher');

formtag.addEventListener("submit", function(e){
    e.preventDefault();

    if(kg.value.length >50)
    {
        //message_error.push("Mot de passe trop court, veuillez saisir plus de 6 caracteres");
        alert("Désolé, mais nous ne transportons pas une telle quantite");
    }
    else{
        formtag.submit();
     }
 
});