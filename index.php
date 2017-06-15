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
    <header>
        <img src="img/default.png" id="logo" alt="logo">
        <h1>Portfolio de SORLIN Valentin</h1>
    </header>
    <main>
    <?php
        $projets = scandir("..");
        if (isset($_GET['proj']) && $_GET['proj'] == "false") {
            echo "<h2>Le projet selectioné n'a pas de page d'accueil ou \n".
            "n'est pas un projet web merci de vous reférer au github du projet.</h2>";
        }
        class projet {
            public $name;
            public $git;
            public $img;
        }
        function verif_web($path) {
            if (file_exists($path."/index.php")) {
                return $path;
            } elseif (file_exists($path."/index.html")) {
                return $path;
            } else {
                return "?proj=false";
            }
            return ($path);
        }
        foreach ($projets as $projet) {
            $projet = "../".$projet;
            if (is_dir($projet) && is_dir($projet . "/.git")
                && file_exists($projet . "/.git/config")) {
                $proj = new projet;
                $proj->name = $projet;
                $config = explode ("\n", file_get_contents($projet . "/.git/config"));
                $proj->git = substr($config[6], 6);
                if (file_exists("img/".substr($projet, 3).".png")) {
                    $proj->img = "img/".substr($projet, 3).".png";
                } else {
                    $proj->img = "img/proj.png";
                }?>
                <article>
                    <a href="<?php verif_web($proj->name); ?>">
                        <h3><?php echo substr($proj->name, 3); ?></h3>
                    </a>
                    <a href="<?php echo verif_web($proj->name); ?>" class="img_proj">
                        <img src="<?php echo $proj->img; ?>" alt="visuel du projet:">
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
    <footer>
        <a href="simplonlyon.fr">simplonlyon.fr</a>
    </footer>
</body>
</html>