<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="CSS/titre.css">
        <link rel="stylesheet" href="CSS/navbar.css">
        <link rel="stylesheet" href="CSS/header-footer.css">
        <link rel="stylesheet" href="CSS/accueil.css">
        <link rel="stylesheet" href="CSS/bouton.css">
        <link rel="stylesheet" href="CSS/responsive.css">
        <link rel="icon" type="image/png" href="Images/Cloudfree.png">
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="menu">
                    <!-- Utilisation d'une checkbox -->
                    <input type="checkbox" id="hamburger">
                    <!-- Label de la checkbox -->
                    <label id="hamburger-logo" for="hamburger">☰</label>
                    <nav class="nav">
                        <a href="index.php" class="link">ACCUEIL</a>
                        <a href="application.html" class="link">APPLICATION</a>
                        <a href="civisme.html" class="link">CIVISME</a>
                        <a href="communication.html" class="link">COMMUNICATION</a>
                        <a href="évènementiel.html" class="link">ÉVÈNEMENTIEL</a>
                        <a href="JV1.html" class="link">JEU VIDÉO 1</a>
                        <a href="JV2.html" class="link">JEU VIDÉO 2</a>
                        <a href="lab.html" class="link">LAB</a>
                        <a href="media-magazine.html" class="link">MÉDIA-MAGASINE</a>
                        <a href="start-up.html" class="link">START-UP</a>
                        <a href="vêtement.html" class="link">VÊTEMENT</a>
                        <a href="vidéos.html" class="link">VIDÉOS</a>
                        <a href="web.html" class="link">WEB</a>
                    </nav>
                </div>
                <div class="titre">
                    <img id="bannière" src="Images/Cloudfree_Fond.png">
                </div>
                <div class="réseaux">
                    <a class="item" src="" href="https://www.instagram.com/nyc.cloudfree/">
                        <img src="Images/Instagram.png">
                    </a>
                    <br>
                    <a class="item" src="" href="https://twitter.com/NYC_Cloudfree">
                        <img src="Images/Twitter.png">
                    </a>
                </div>
            </div> 
        </header>
        <br>
        <br>
        <p> Cloudfree est un projet d'hébergement crée dans l'optique de simplifier le stokage et le partage de donnés crée par Mr FACONNIER Pierre. </p>
        <br>
        <br>
        <form method="POST" action="mail.php" name="submit" data-toggle="validator">
            <h3>Formulaire d'inscription</h3>
            <div id="formulaire">
                <section id="infos">
                    <p>Nom</p>
                    <p>Prénom</p>
                    <p>Email</p>
                    <p>Projet</p>
                    <p>Description</p>
                </section>
                <section id="données">
                    <p><input type="text" id="nom"/></p>
                    <p><input type="text" id="prénom"/></p>
                    <p><input type="email" name="email" class="email"/></p>
                    <select name="projet" class="projet">
                        <option value=""> </option>
                        <optgroup label="Application">
                            <option value="A Themia">A Themia</option>
                            <option value="Jungle Poadcast">Jungle Poadcast</option>
                            <option value="Newstud">Newstud</option>
                            <option value="Repertoire Mangas">Repertoire Mangas</option>
                            <option value="Rees">Rees</option>
                        </optgroup>
                        <optgroup label="Jeux Vidéos 1">
                            <option value="Fuid Of Mana">Fuid Of Mana</option>
                            <option value="Be As One">Be As One</option>
                            <option value="Imposteur Mystere">Imposteur Mystere</option>
                            <option value="Labo Browser Game">Labo Browser Game</option>
                        </optgroup>
                        <optgroup label="Jeux Vidéos 2">
                            <option value="Land Of Denuo">Land Of Denuo</option>
                            <option value="LG Ultimate">LG Ultimate</option>
                            <option value="Loving Drop">Loving Drop</option>
                            <option value="Rise Of Colossus">Rise Of Colossus</option>
                        </optgroup>
                        <optgroup label="Lab">
                            <option value="CloudFree">CloudFree</option>
                            <option value="Grow Up">Grow Up</option>
                            <option value="Projexion">Projexion</option>
                            <option value="3D Student Work 1">3D Student Work 1</option>
                            <option value="3D Student Work 2">3D Student Work 2</option>
                        </optgroup>
                        <optgroup label="Site Web">
                            <option value="Panier Du Coin">Panier Du Coin</option>
                            <option value="Vison">Vison</option>
                            <option value="Cabane A Burger">Cabane A Burger</option>
                            <option value="Melodyon">Melodyon</option>
                            <option value="Odonats Group">Odonats Group</option>
                            <option value="Tadam Escape">Tadam Escape</option>
                            <option value="Y So Short">Y So Short</option>
                        </optgroup>
                        <optgroup label="Vidéos">
                            <option value="Nignt Tales">Nignt Tales</option>
                            <option value="Hive">Hive</option>
                            <option value="Deesse Saibogu">Deesse Saibogu</option>
                            <option value="Phobos">Phobos</option>
                            <option value="Stampede">Stampede</option>
                            <option value="Symbiosis">Symbiosis</option>
                            <option value="Black Tears">Black Tears</option>
                        </optgroup>
                        <optgroup label="Civisme">
                            <option value="DHM Care">DHM Care</option>
                            <option value="France Benevolat">France Benevolat</option>
                            <option value="Shelter">Shelter</option>
                            <option value="Taboobs">Taboobs</option>
                            <option value="Ymersion">Ymersion</option>
                            <option value="Orion">Orion</option>
                        </optgroup>
                        <optgroup label="Communication">
                            <option value="Sporty">Sporty</option>
                            <option value="Tara">Tara</option>
                            <option value="Tara 2">Tara 2</option>
                            <option value="West Record">West Record</option>
                            <option value="Nazaree">Nazaree</option>
                            <option value="Tara Studio">Tara Studio</option>
                        </optgroup>
                        <optgroup label="Évènement">
                            <option value="Réseau Solidaire">Réseau Solidaire</option>
                            <option value="Welfare">Welfare</option>
                            <option value="Festival Les Ekos">Festival Les Ekos</option>
                            <option value="Cybercare">Cybercare</option>
                            <option value="La Poste">La Poste</option>
                        </optgroup>
                        <optgroup label="Média et Magazine">
                            <option value="Hope">Hope</option>
                            <option value="Sead">Sead</option>
                            <option value="Illumine">Illumine</option>
                            <option value="Jetmag">Jetmag</option>
                            <option value="Le Repere">Le Repere</option>
                            <option value="Elefants">Elefants</option>
                        </optgroup>
                        <optgroup label="Start-Up">
                            <option value="Chef Finder">Chef Finder</option>
                            <option value="Dystraite">Dystraite</option>
                            <option value="Équiavenir">Équiavenir</option>
                            <option value="Go Safe">Go Safe</option>
                            <option value="Cocktail">Cocktail</option>
                            <option value="Biotopie">Biotopie</option>
                        </optgroup>
                        <optgroup label="Vêtements">
                            <option value="Capsule">Capsule</option>
                            <option value="Cenacle">Cenacle</option>
                            <option value="Egal">Egal</option>
                            <option value="Fashand">Fashand</option>
                            <option value="Findygo">Findygo</option>
                            <option value="Maison Dune">Maison Dune</option>
                            <option value="New Fashion Nantes">New Fashion Nantes</option>
                        </optgroup>
                    </select>
                    <p><textarea name="description" class="description"></textarea></p>
                </section>
            </div>
            <button type="submit" class="neon" name="envoi">Envoyer</button>
        </form>
    </body>
</html>