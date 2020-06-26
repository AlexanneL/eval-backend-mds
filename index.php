<html>
    <head><title>Bienvenue</title></head>
    <body>
        <h1>mon site internet</h1>
        <h2>Inscription</h2>
        <form name="inscription" method="post" action="saisie.php">
            <!--nom de mon formulaire--> 
            Entrez votre pseudo : <input type="text" alname="pseudo"/> <br/>
            Entrez votre ville : <input type="text" alnville="ville"/><br/>
            Entrez votre numero : <input type="text" alnum="numero"/><br/>
            Entrez votre email : <input type="text" almail="email"/><br/>
            <input type="submit" name="valider" value="OK"/>
             <!--echo permet de collecter les données issues du formulaire-->
            <?php echo "alname".$_GET[="pseudo"]."/> <br/>";
            ?php echo "alnville".$_GET[="ville"]."/> <br/>";
            ?php echo "alnum".$_GET[="numero"]."/> <br/>";
            ?php echo "almail".$_GET[="email"]."/> <br/>";
        </form>
    </body>
</html>
