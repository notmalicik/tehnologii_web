<!DOCTYPE HTML>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Chișinău</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="icon" href="/img/icon.jpg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "/contact_mail.php",
		data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
		type: "POST",
		success:function(data){
		$("#mail-status").html(data);
		},
		error:function (){}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#userName").val()) {
		$("#userName-info").html("(required)");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("(invalid)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#subject").val()) {
		$("#subject-info").html("(required)");
		$("#subject").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content-info").html("(required)");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}
</script>
    </head>

<body>
    <header>
        <center>
            <nav id="fixed-header">
                <ul class="font" TYPE=none>
                    <li><a href="index.php"> Chișinău</a></li>
                    <li><a href="istorie.html"> Istorie</a></li>
                    <li><a href="demografie.html">Demografie</a></li>
                    <li><a href="cultura.html">Cultura</a></li>
                    <li><a href="arhitectura.html">Arhitectura</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </center>
    </header>
    <center>
        <a href="/img/primaria.jpg"><img class="cimg" src="/img/primaria.jpg" alt="Primăria"></a>
    </center>
    <center>
    <div id="frmContact">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top:20px;">Name</label><span id="userName-info" class="info"></span><br/>
        <input type="text" name="userName" id="userName" class="demoInputBox">
    </div>
    <div>
        <label>Email</label><span id="userEmail-info" class="info"></span><br/>
        <input type="text" name="userEmail" id="userEmail" class="demoInputBox">
    </div>
    <div>
        <label>Subject</label><span id="subject-info" class="info"></span><br/>
        <input type="text" name="subject" id="subject" class="demoInputBox">
    </div>
    <div>
        <label>Content</label><span id="content-info" class="info"></span><br/>
        <textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
    </div>
    <div>
        <button name="submit" class="btnAction" onClick="sendContact();">Send</button>
    </div>
</div>
</center>

    <button onclick="topFunction()" id="myBtn" title="ȘUȘ"><img class="buton" src="/img/arrow.png"></button>

    <div class="footer">
        <footer>
            <p>Site creat de <b>Dumitru Malicic</b> IA-211 &copy</p>
        </footer>
    </div>
    <script src="/javascript/ceas.js"></script>
    <script src="/javascript/top.js"></script>
</body>

</html>