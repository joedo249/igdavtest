  <header>
    <div id="entete">
      <a href="index.php">
        <img
          src="img/logoIGD.svg"
          id="logoIGD"
          alt="logo"
          width="40"
          height="48"
        />
      </a>
      <div id="firme">
        <h3>Cabinet d'avocats</h3>
      </div>
    </div>

    <a href="en/aboutus.php">
      <img src="img/UK-flag-icon.png" alt="UK flag" class="flag" />
    </a>
    
  <!-- titre de l'onglet de la page
    https://www.youtube.com/watch?v=_WprUvG1mbs  vers 07:30 -->
    <title><?php if (isset($title)) {echo $title;} else {echo "IGD Avocats";} ?></title>

  </header>
