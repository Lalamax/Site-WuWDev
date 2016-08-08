<!DOCTYPE html>

<html>
  <head>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link type="text/css" rel="stylesheet" href="CSS/style-font.css">
    <link type="text/css" rel="stylesheet" href="CSS/style.css">
    <link type="text/css" rel="stylesheet" href="CSS/style-index.css">
    <meta charset="utf-8" />
    <meta lang="fr" />
    <meta name="description" content="Groupe de développeurs C/C++, Java, Linux, HTML/CSS, PHP." />
    <meta name="keywords" content="Programmation, Developpeur, C, C++, Java, Linux, HTML, CSS, PHP, code" />
    <meta name="author" content="Rhylionn" />
    <title>WuWDev => Accueil</title>
  </head>
  <body>
    <header>
      <img class="header__logo" src="images/logo.png" alt="Logo WuWDev" />
      <nav>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Commander</a></li>
          <li><a href="#">Information</a></li>
          <li><a href="#">Dons</a></li>
          <li><a href="#">Commentaire</a></li>
        </ul>
      </nav>
    </header>
    <div class="img__cmd">
      <p class="text__title">WuWDev</p><br />
      <p class="text__subtitle">Groupe de développeurs C/C++, Java, Linux, HTML/CSS, PHP</p>
      <input type="submit" class="button_command" OnClick="javascript:document.location='/test.php'" value="Commander"/>
    </div>
    <center>
      <div class="wuwdev__news">
        <marquee direction="left" behavior="scroll" scrollamount="14" class="text__news">Ceci est un message provisoir des nouveauté qu'il pourrait y avoir sur WuWDev ou le recrutement</marquee></center>
      </div>
    <div class="middle__page">
      <p class="description__title">Qu’est ce que WuWDev ?</p><br />
      <p class="wuwdev__description">WuWDev est un groupe de développeurs créé par Arth0s.
Vous pouvez demander à ce que l'on vous réalise un site web (sois à partir d'une template,
sois à partir d'une maquette) un programme ou un serveur (à préciser) gratuitement.
 En effet, nous nous sommes engagés à réaliser du contenu gratuit.
 Votre commande sera prise en charge le plus rapidement possible par notre équipe de développeurs.
 Notre équipe compte actuellement 7 développeurs. plus d'informations <u><a href="https://www.pixelads.fr/wuwdev-groupe-de-developpeurs-gratuit-9064">Ici</a></u><br />
</p>
    </div>
    <div class="bloc__team">
      <center><p class="title__team">Une équipe compétante</p></center><br />
      <center><p class="subtitle__team">Les développeurs de WuWDev ont tous envie d'apprendre et de s'améliorer.</p><br /></center>

        <center><p class="text__title__fondateur">Fondateurs :</p><br /></center>
      <div class="team__fondateur">
        <img src="team/images/dyprix" class="img__team" title="Fondateur de WuWDev / Developpeur HTML/CSS/PHP: DypriX" />
        <img src="team/images/adlor" class="img__team" title="Fondateur de WuWDev / Developpeur Java: Adlor" />
        <img src="team/images/arth0s" class="img__team" title="Fondateur de WuWDev / SysAdmin Linux: Arth0s" />
      </div>
        <center><p class="text__title__developper">Developpeurs :</p><br /></center>
      <div class="team__developper">
        <img src="team/images/rhylionn" class="img__team" title="Developpeur HTML/CSS/PHP: Rhylionn" />
        <img src="team/images/bende" class="img__team" title="Developpeur ????: Lalama" />
        <img src="team/images/antoinelive" class="img__team" title="Developpeur ????: ????????" />
      </div>
    </div>
    <div class="contact__us">
      <p class="title__contactus">Nous contacter</p><br />
      <p class="subtitle__contactus">Vous souhaitez nous contacter? Envoyez-nous un message!<br /> Vous pouvez aussi nous contacter via Skype: "darkbuild10" ou "wuwdev"</p><br />
      <form action="/index.php" method="post">
        <input type="text" class="textarea__contactus1" name="name" placeholder="Nom ou Pseudo" />
        <input type="email" class="textarea__contactus1" name="email" placeholder="Mail" /><br />
        <textarea name="message" rows="6" class="textarea__message__contactus" placeholder="Message"></textarea><br />
        <input type="submit" class="submit__contactus" value="Envoyer le message" />
      </form>
    </div>
    <footer>
      <p class="footer__text">© WuWDev. All rights reserved.</p>
      <div class="social__network">
        <img src="images/twitter.png" class="footer__sn" OnClick="javascript:document.location='#'" />
        <img src="images/facebook.png" class="footer__sn" OnClick="javascript:document.location='#'" />
        <img src="images/google+.png" class="footer__sn" OnClick="javascript:document.location='#'" />
      </div>
    </footer>
  </body>
</html>
