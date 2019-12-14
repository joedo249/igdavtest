<!-- Bouton retour haut de page -->
<img src="../img/retour-haut-bleu.png" alt="Retour haut" class="returnTop" id="returnOnTop">

<script>
    $(document).ready(function() {
        // Add return on top button
        $('body').append('<div type="button" class="returnTop" title="Retour haut">&nbsp;</div>');

        // On button click, scroll up to top
        $('.returnTop').click(function() {
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        });
    });

    $(window).scroll(function() {
        // If on top fade the bouton out, else fade it in
        if ($(window).scrollTop() < 200)
            $('.returnTop').fadeOut();
        else
            $('.returnTop').fadeIn();
    });
</script>

<!-- Pied de la page -->
<footer>
    <div class="navfooter">
        <ul>
            <li>
                <a href="aboutus.php">Home</a>
            </li>
            <li>
                <a id="boxsitemap" data-fancybox data-src="#modal" href="javascript:;">Sitemap</a>
            </li>
            <li>
                <a id="boxml" data-fancybox data-animation-duration="700" data-src="#animatedModal" href="javascript:;">Legal notice</a>
            </li>
        </ul>
    </div>
</footer>

<link rel="stylesheet" type="text/css" href="../fancybox-master/dist/jquery.fancybox.min.css">

<!-- Animated fancyBox 
            ================= -->
<!-- source du code : https://codepen.io/fancyapps/pen/mqEqgr?editors=1010 -->
<!--  inline content window -->

<!-- Sitemap -->

<div style="display: none;" id="modal">

    <h2>Sitemap</h2>
    <h3><a href="aboutus.php">About us</a></h3>
    <h4><a href="team.php">Our team</a></h4>
    <h3><a href="expert.php">Expertise</a></h3>
    <h4><a href="expert.php#family">Family Law</a></h4>
    <h4><a href="expert.php#labor">Labor Law</a></h4>
    <h3><a href="fees.php">Fees</a></h3>
    <h3><a href="contactus.php">Contact Us</a></h3>
</div>

<!-- FancyBox "Sitemap" -->
<script src="../fancybox-master/dist/jquery.fancybox.min.js" async>
    $("#boxsitemap").on('click', function() {
        $.fancybox.open({
            src: '#modal',
            type: 'inline',

        });
    });
</script>

<!-- FancyBox "Legal notice" -->
<div style="display: none;" id="animatedModal" class="animated-modal">

    <h2>Legal notice in French</h2>
    <h3>Conditions d'utilisation</h3>
    <p>Le Site web du cabinet IGD Avocats, désigné ci-après par le terme "le Site", vous est proposé sous certaines conditions d'utilisation, définissant l'ensemble des relations entre vous et le Site.</p>
    <p>Ces conditions d'utilisation sont définies ci-dessous et la simple utilisation et/ou consultation de ce Site implique, de façon automatique et inconditionnelle, votre acceptation pleine et entière de l'ensemble de ces conditions d'utilisation.</p>
    <h3>Données personnelles</h3>
    <p>Le cabinet IGD Avocats est susceptible de recueillir certaines informations nominatives vous concernant. Aucune des ces informations ne sera transmise à des tiers. L'utilisateur dispose d'un droit d'accès, de modification, de rectification et de suppression des données qui le concernent (article 34 de la loi "Informatique et Libertés"). Pour cela, l'utilisateur peut s'adresser au Cabinet.</p>
    <h3>Propriété intellectuelle</h3>
    <p>L'utilisation du Site ne vous confère aucun droit. Ces droits restent la propriété exclusive du cabinet IGD Avocats. Tous les textes, photos, données, logos, marques et autres éléments reproduits sur le Site sont réservés et protégés par le droit de la propriété intellectuelle, notamment droits d'auteur, droits voisins, droits des marques.<br><br>
        A ce titre et conformément au Code de la Propriété Intellectuelle seule l'utilisation pour un usage privé dans un cercle de famille est autorisée et toute autre utilisation est constitutive de contrefaçon et/ou d'atteinte aux droits voisins, sanctionnées par ledit Code.</p>
    <p>En conséquence, vous ne pouvez en aucun cas et d'aucune manière, reproduire, représenter, diffuser, commercialiser, modifier, concéder tout ou partie de l'un quelconque des éléments reproduits sur le Site et tout ou partie du Site en général, sans l'accord préalable et express du cabinet IGD. Toute utilisation illicite de tout ou partie du Site (piratage, contrefaçon, etc.) pourra donner lieu à des poursuites.</p>
    <h3>Liens hypertextes</h3>
    <p>Le Site peut contenir des liens hypertextes donnant accès à d'autres sites web édités et gérés par des tiers. et non par le cabinet IGD. Il ne pourra être tenu responsable directement ou indirectement dans le cas où lesdits sites tiers ne respecteraient pas les dispositions légales et réglementaires tant françaises qu'européennes en vigueur ou à venir, ainsi que des conséquences de ce non-respect.</p>
    <h3>Autres dispositions</h3>
    <p>Le Site est réservé à l'usage privé de chaque Utilisateur.</p>
    <p>Le Site et les données, informations et documents qu'il fournit n'ont qu'une vocation d'information générale sur le Cabinet et la profession d'avocats et ne peuvent en aucun cas être considérés comme constituant un acte de conseil juridique, un démarchage, une sollicitation et/ou une offre de services.</p>
    <p>Chaque Utilisateur est seul responsable de l'usage qu'il fait des informations fournies à partir du Site et le Cabinet ne pourra en aucun cas être tenu responsable de tous dommages directs ou indirects découlant de l'utilisation de ces informations par l'Utilisateur.</p>
    <p>Les sites web de tiers, leur contenu et/ou les documents accessibles à partir des liens hypertextes publiés sur le Site ou dans les documents téléchargeables à partir de ce dernier sont la responsabilité exclusive de leur(s) auteur(s) et ne sauraient engager la responsabilité du Cabinet.</p>
    <p>Les Utilisateurs ne sont pas autorisés à créer un lien hypertexte vers le Site et/ou une page quelconque du Site et/ou d'un fichier s'y trouvant sans l'accord préalable et exprès du Cabinet.</p>
    <h3>Garanties</h3>
    <p>Sous réserve des dispositions réglementaires applicables, vous reconnaissez et acceptez expressément que le Site vous est fourni en l'état, accessible en fonction de sa disponibilité et sans aucune garantie expresse ou implicite de la part du cabinet IGD et que son utilisation se fait à vos risques et périls, sous votre entière responsabilité.<br>
        <p>Le cabinet IGD Avocats ne garantit pas que:<br>
            1 - le Site, les contenus et les prestations proposés répondront parfaitement à vos attentes,<br>
            2 - le Site sera ininterrompu et dépourvu de toutes erreurs, que ces interruptions ou erreurs seront corrigées.<br><br>
            Aucun conseil et aucune information obtenus par vous lors de l'utilisation du Site ne sont susceptibles de créer une quelconque garantie non expressément prévue aux présentes conditions.<br></p>
        <p><span style="text-decoration: underline;">Propriétaire et responsable du site :</span><br>
            Cabinet IGD Avocats<br>
            19 avenue Victor Hugo<br>
            75116 PARIS<br>
            Téléphone: 01 43 18 10 25<br>
            Télécopie : 01 47 64 99 75<br>

            Adresse URL du Site Internet:<br>
            http://www.igd-avocats.fr/<br>
            <p>Ce site a été réalisé par Joel Dousset<br>
                ©2014 - Tous droits réservés</p>

            <!-- bouton Close of Legal Notice -->
            <p><button data-fancybox-close class="btn">Close</button></p>
</div>

<!-- FancyBox "Legal notice" -->
<script src="../fancybox-master/dist/jquery.fancybox.min.js" async>
    $("#boxml").on('click', function() {
        $.fancybox.open({
            src: '#animatedModal',
            type: 'inline',
        });
    });
</script>

</div><!-- end wrapper -->
</body>