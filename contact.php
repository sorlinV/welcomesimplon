<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
        </header>
    </div>
    <form action="mailto:valentin.sorlin@hotmail.com?subject=SITE;CC=valentin.sorlin@hotmail.com" method="post" enctype="text/plain">
        <p>Par Téléphone au: 0770952130</p>
        <p>Ou par mail ici :</p>
        <label for="name">Nom :</label>
        <input type="text" name="name">
        <label for="email">Email :</label>
        <input type="text" name="email">
        <label for="telephone">Telephone (facultatif) :</label>
        <input type="text" name="telephone">
        <label for="text">Text :</label>
        <textarea name="text" cols="30" rows="10"></textarea>
        <input type="submit" value="Envoyer">
    </form>    
</body>
</html>