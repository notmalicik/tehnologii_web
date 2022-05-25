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
                    <li><a href="register.php">Înregistrare</a></li>
                    <li><a class="contact" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </center>
    </header>
    <center>
        <a href="/img/primaria.jpg"><img class="cimg" src="/img/primaria.jpg" alt="Primăria"></a>
    </center>
    <section>
        <div id="response">

        </div>
 <form method="get" id="contact" action="/PhP/action.php">
        <p>
            <label for="name">Numele</label>
            <input id="nume" type="text" name="nume" placeholder="Nume">
        </p>
        <p>
            <label for="email">Emailul</label>
            <input id="email" type="text" id="email" name="email" placeholder="E-mailul">
        </p>
        <p>
            <label for="comment">Mesajul dvs.</label>
            <textarea id="comment" name="comment" placeholder="Comentariu" rows="4" cols="50"></textarea>
        </p>
         <input type="submit" id="submit" name="submit" value="Trimite">
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
    <script src="/javascript/validate.js"></script>
</body>

</html>