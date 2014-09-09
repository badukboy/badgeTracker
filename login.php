<!DOCTYPE html>
<html>
<head>
<title>Badge Tracker</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id = "loginWrapper">
        <div class="header">
            <a href=".">
                <div class="logo"></div>
                <h2 class="title">138th Scout Group Badge Tracker</h2>
            </a>
    	</div>
    	<div class="content-wrapper">
            <div class="main-content">
             <div id = "login">
                 Please log in:
                 <form name = "login" action = "scripts/login.php" method = "post">
                    Username: <br />
                    <input type = "text" name = "user" class = "loginField"><br />
                    Password: <br />
                    <input type = "password" name ="password" class = "loginField"><br />
                    <br />
                   <input type = "submit" value = "login" id = "loginButton">
                </form>
             </div>
             
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class = "footer">
        </div>
    </div>
</body>

</html>
