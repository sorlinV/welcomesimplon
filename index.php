<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorlin Valentin</title>
</head>
<body>
    <?php
        $projets = scandir(".");
        foreach ($projets as $projet) {
            if (is_dir($projet) && is_dir($projet . "/.git") && file_exists($projet . "/.git/config")) {
                $config = explode ("\n", file_get_contents($projet . "/.git/config"));
                echo '<a href="' . substr($config[6], 6) . '">' .
                substr($config[6], 6) . '</a></br>';
            }
        }
    ?>
</body>
</html>