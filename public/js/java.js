let formtag = document.getElementById("message_form");
let text_message = document.getElementById("message");
let input_fields = document.getElementsByTagName("input");
let error_div = document.getElementById("error");

formtag.addEventListener("submit", function(e){
    e.preventDefault();
    let message_error =[];
    for(let i = 0; i < input_fields.length; i++)
    {
        if(input_fields[i].value == ""){
        
            message_error.push("Veuillez renseigner tous les champs du formulaire");
            /*
        error_div.innerHTML = `<div class="alert alert-danger">
            Veuillez renseigner tous les champs du formulaire
        </div>`;*/
        break;
        }
    }
    if(text_message.value == "")
    {
        message_error.push("Veuillez ajouter votre message");
       /* error_div.innerHTML = `<div class="alert alert-danger">
        Veuillez ajouter votre message
    </div>`;
    */
    }

    if(input_fields[1].value != input_fields[2].value)
    {
        message_error.push("Veuillez utiliser la meme adresse email pour la confirmation");
    }

    if(text_message.value.length <= 3)
    {
        message_error.push("Message trop court, veuillez saisir plus de 3 caracteres");
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
    
});