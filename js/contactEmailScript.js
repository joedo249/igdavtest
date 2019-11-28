// Protection de l'adresse email
    var nom = 'info1'
    var pseudo = 'info'
    var domaine = 'igd-avocats';
    var extension = 'fr';
    var objet = 'demande de rendez-vous';
    var adresse_mail = nom+'@'+domaine+'.'+extension;    
    var adresse_email = pseudo+'@'+domaine+'.'+extension;
        
    var contactEmail = document.getElementById("contactEmail");
    contactEmail.innerHTML = adresse_email;
        
//définition styles CSS
    contactEmail.style.marginTop = "25px";
    contactEmail.style.overflow = "visible";
    contactEmail.style.textAlign = "center";
    contactEmail.style.color = "rgb(0,85,131)";
    contactEmail.style.fontSize = "1em";
    contactEmail.style.fontFamily = "Verdana";
    contactEmail.style.fontStyle = "normal";
    contactEmail.style.fontWeight = "bold";
    

//underline when mouse is hovering #contactEmail
    $(function() {
        $('#contactEmail').hover(
            function() {
                $(contactEmail).css('text-decoration','underline');
                $(contactEmail).css('cursor', 'pointer');
            },
            function() {
                $(contactEmail).css('text-decoration','none');
            });
        });
        
//envoi de l'email
   $(function() {
        $('#contactEmail').click(function() {
            location.href = 'mailto:' + adresse_mail + '?subject=' + 'demande%20d\'information';
        });
    });
