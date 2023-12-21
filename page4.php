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
        <h2>Scolarité</h2>
        <?php
                require_once 'C:\xampp\htdocs\portfolioantho\YAML\yaml\vendor\autoload.php';
                use Symfony\Component\Yaml\Yaml;
                $fichier_yaml = 'yaml/page4.yaml';
                $donnees = Yaml::parseFile($fichier_yaml);
                
                if(isset($donnees['Scolarité'])) {
                    echo "<ul>";
                    foreach($donnees['Scolarité'] as $type => $etapes) {
                        echo "<li><strong>{$type}</strong>:<ul>";
                        foreach($etapes as $etape) {
                            echo "<li>{$etape}</li>";
                        }
                        echo "</ul></li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Aucune information sur la scolarité trouvée.</p>";
                }
            ?>
        </section>
        </div>
    <footer>
      &copy; 2023 Anthony Balogh
  </footer>
</body>
</html>

