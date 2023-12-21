<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Votre Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <img src="img/moi.png" alt="">
        <h1>Anthony Balogh</h1>
        <p>Étudiant en informatique</p>
    </header>
    <nav>
     <a href="page1.php"><img class="home" src="img\icons8-home-50.png"></a>
     <a href="page2.php">Compétence</a>
     <a href="page3.php">Expérience professionnel</a>
     <a href="page4.php">Scolarité</a> 
     <a href="page5.php">Pièce jointe</a>
     <a href="page6.php">Contact</a> 
    </nav>
    <div class="container">
        <section id="portfolio">
        <h2>Contact</h2>
     <form method="post" action="captcha.php">
      <input type="text" name="sujet" placeholder="Sujet"><br><br>
      <textarea name="message" placeholder="Message"></textarea><br><br>
      <input type="email" name="email" placeholder="Votre e-mail"><br><br>
      <div class="g-recaptcha" data-sitekey="6Le8ujgpAAAAAOArJb-iwmQeWXY68HuBuJQk_GAg"></div><br><br>
      <input type="submit" value="Envoyer">
      </form>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </section>
    </div>
    <footer>
      &copy; 2023 Anthony Balogh
  </footer>
</body>
</html>
