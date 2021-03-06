<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sorlin Valentin</title>
</head>
<body>
    <div class="black">
        <header>
            <main>
                <a href="index.php" id="logo"><img src="img/default.png" alt="logo"></a>
                <section>
                    <h1>Portfolio de SORLIN Valentin</h1>
                    <p>Je suis Développeur web spécialisé en php et je suis situé a Lyon et Saint-Etienne</p>
                </section>        
            </main>
            <p>Vous voulez en savoir plus:</p>
        </header>
    </div>
    <a href="contact.php" id="contact"><p>Contactez moi</p></a>
    <main>
    <?php
        $projets = scandir("..");
        if (isset($_GET['proj'])) {
            ?>
            <div>
                <h2>Le projet selectioné n&acute;a pas de page d&acute;accueil ou
                n&acute;est pas un projet web merci de vous reférer au Github du projet.
                <a href="http://github.com/sorlinV/<?php echo $_GET['proj']?>">ICI</a>                
                </h2>
            </div>
            <?php
        }
        class projet {
            public $name;
            public $git;
            public $img;
        }
        function verif_web($proj) {
            if (file_exists($proj->name."/index.php")) {
                return $proj->name;
            } elseif (file_exists($proj->name."/index.html")) {
                return $proj->name;
            } else {
                return "?proj=".substr($proj->name, 3);
            }
            return ("?proj=".substr($proj->name, 3));
        }
        foreach ($projets as $proj) {
            $projet = "../".$proj;
            if (is_dir($projet) && $proj[0] != '.') {
                $proj = new projet;
                $proj->name = $projet;
                $proj->git = "http://github.com/sorlinV/" . substr($projet, 3);
                if (file_exists("img/".substr($projet, 3).".png")) {
                    $proj->img = "img/".substr($projet, 3).".png";
                } else {
                    $proj->img = "img/proj.png";
                }
                ?>
                <article>
                    <a href="<?php verif_web($proj); ?>">
                        <h3><?php echo substr($proj->name, 3); ?></h3>
                    </a>
                    <a href="<?php echo verif_web($proj); ?>" class="img_proj">
                        <img src="<?php echo $proj->img; ?>" alt="visuel du projet:<?php echo substr($proj->name, 3); ?>">
                    </a>
                    <a href="<?php echo $proj->git; ?>"  class="img_github" >
                        <img src="img/github.png" alt="logo github">
                    </a>
                </article>
                <?php
            }
        }
    ?>
    </main>
</body>
</html>