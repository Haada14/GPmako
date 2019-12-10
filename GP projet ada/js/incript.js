let formtag = document.getElementById("contact-form");
let input_fields = document.getElementById("input");
let error_div = document.getElementById("error");
let mdp1 = document.getElementById('mdp');
let mdp2 = document.getElementById('mdp2');
let send = document.getElementById('envoyer');



formtag.addEventListener("submit", function(e){
    e.preventDefault();

    /*let message_error =[];
    for(let i = 0; i < input_fields.length; i++)
    {
        if(input_fields[i].value == ""){
        
            message_error.push("Veuillez renseigner tous les champs du formulaire");
            
        break;
        }
    }
    if(text_message.value == "")
    {
        message_error.push("Veuillez ajouter votre message");
       /
    }
    if(document.getElementById(mdp).value.length <= 6)
    {
        message_error.push("Mot de passe trop court, veuillez saisir plus de 6 caracteres");
    }
    if(document.getElementById(mdp).value != (document.getElementById(mdp2).value))
    {
        message_error.push("Veuillez utiliser la meme adresse email pour la confirmation");
    }


    if(message_error.length > 0)
    {
    
    let msg_affichable ="";
    for(let i=0; i< message_error.length; i++)
    {
    msg_affichable += `<div class="alert alert-danger">${message_error[i]}</div>`;
    }
    error_div.innerHTML = msg_affichable;
    }
     else error_div.innerHTML =`<div class ="alert alert-succes"> Vos donnees sont enregistrees avec succes</div>`;
     */
    if(mdp1.value.length <= 6)
    {
        //message_error.push("Mot de passe trop court, veuillez saisir plus de 6 caracteres");
        alert("Mot de passe trop court, veuillez saisir plus de 6 caracteres");
    }
    else if(mdp1.value !=mdp2.value)
    {
       // message_error.push("Veuillez utiliser la meme adresse email pour la confirmation");
       alert("Veuillez utiliser la meme adresse email pour la confirmation");

    }
    else{
       formtag.submit();
    }
});

