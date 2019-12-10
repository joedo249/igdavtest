<nav class="fixnavbar">
  <ul>
    <li><a href="index.php">Accueil</a></li>
    <li class="dropdown"><a href="expertise.php">Expertise</a>
      <div class="sousmenu">
        <a href="expertise.php#famille">Droit de la famille</a>
        <a href="expertise.php#travail">Droit du travail</a>      
      </div>
    </li>
    <li><a href="honoraires.php">Honoraires</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="form.html">Formulaire</a></li>
  </ul>  
</nav>

<!-- Identification de la page active -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>

<!-- Barre de menu fixe : "sticky nav bar" -->   

<script>
    // position du bloc par rapport au haut du site
    var header_height = $('header').offset().top;

    $(window).scroll(function () {
        // valeur du scroll vertical
        var y = $(this).scrollTop(); 
        
        //si cette valeur > à header_height on ajoute la class
        if (y >= header_height) {
            $('.fixnavbar').addClass('sticky');
        }
        else {
            // sinon, on l'enlève
            $('.fixnavbar').removeClass('sticky');
        }
    });
</script>