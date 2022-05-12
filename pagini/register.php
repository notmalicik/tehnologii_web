<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Chișinău</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="icon" href="/img/icon.jpg" type="image/x-icon">


</head>

<body>
    <header>
        <center>
            <nav id="fixed-header">
                <ul class="font" TYPE=none>
                    <li><a href="/index.php"> Chișinău</a></li>
                    <li><a href="istorie.html"> Istorie</a></li>
                    <li><a href="demografie.html">Demografie</a></li>
                    <li><a href="cultura.html">Cultura</a></li>
                    <li><a href="arhitectura.html">Arhitectura</a></li>
                    <li><a href="login.php">Logare</a></li>
                    <li><a class="reg" href="register.php">Înregistrare</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    
                </ul>
            </nav>
        </center>
    </header>
    <center>
        <a href="/img/primaria.jpg"><img class="cimg" src="/img/primaria.jpg" alt="Primăria"></a>
    </center>
    <section>
        <div id="response"></div>
 <form method="get" id="reg" action="">
        <p>
            <label for="email">Emailul</label>
            <input id="email" type="email" name="email" placeholder="Email">
        </p>
        <p>
            <label for="parola">Parola</label>
            <input id="parola" type="password" id="parola" name="parola" placeholder="Parola">
        </p>
        <p>
            <label for="parola_confirm">Confirmare parolă</label>
            <input id="parola_confirm" type="password" name="parola_confirm" placeholder="Confirmare parolă">
        </p>
         <input type="button" id="submit" name="submit" value="Înregistrează-te">
         <p>
         </p>
    </form>
</section>
    <br>
    <button onclick="topFunction()" id="myBtn" title="ȘUȘ"><img class="buton" src="/img/arrow.png"></button>

    <div class="footer">
        <footer>
            <p>Site creat de <b>Dumitru Malicic</b> IA-211 &copy</p>
        </footer>
    </div>
    <script src="/javascript/top.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="/javascript/validReg.js"></script>
</body>

</html>