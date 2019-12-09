<!---------------------------------------------------Calling Header ------------------------------------------------------------------->
<?php

$title = "Log In";

include '../../includes/header.php';

?>
<!------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------Particular style for this page---------------------------------------------------->
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);
body {
	background-image: url('../../private/img/background.jpg');
}
.error{
    margin: 20px 0px; 
 
    color: #bc0000;
    
  }

#login {
  background: rgb(255,255,255);
background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(244,244,244,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(244,244,244,1)));
background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(244,244,244,1) 100%);
background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(244,244,244,1) 100%);
background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(244,244,244,1) 100%);
background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(244,244,244,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f4f4f4',GradientType=0 );

  width: 300px;
  height: 230px;
  position: fixed;
  top: 50%;
  left: 50%;
  margin-left: -100px;
  margin-top: -100px;
  color: #333;
  box-shadow: 0px 6px 8px rgba(0,0,0,0.5);
  
}
#login:before, #login:after {
  content: " ";
  display: block;
  background: rgba(0,0,0,0.1);
  position: absolute;
  width: 100px;
  height: 30px;
}
#login:before {
  margin-top: -12px;
  margin-left: -45px;
  -webkit-transform: rotate(-25deg);
  -moz-transform: rotate(-25deg);
  -o-transform: rotate(-25deg);
  transform: rotate(-25deg);
}
#login:after {
  margin-top: -230px;
  margin-left: 240px;
  -webkit-transform: rotate(32deg);
  -moz-transform: rotate(32deg);
  -o-transform: rotate(32deg);
  transform: rotate(32deg);
}

#login form {
  width: 70%;
  margin: 30px auto;
  text-align: center;
}

#login form h1 {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 20px;
}
#login form h1:before {
  display: inline-block;
  content: " ";
  margin-right: 15px;
  width: 60px;
  height: 6px;
  border-top: 1px solid #333;
}
#login form h1:after {
  display: inline-block;
  content: " ";
  margin-left: 15px;
  width: 60px;
  height: 6px;
  border-top: 1px solid #333;
}

#login form input {
  width: 100%;
  height: 25px;
  border-radius: 5px;
  border: 1px solid #e1e1e1;
  margin-bottom: 10px;
  text-indent: 10px;
  outline: none;
  -webkit-transition: box-shadow 1s;
  -moz-transition: box-shadow 1s;
  -o-transition: box-shadow 1s;
  transition: box-shadow 1s;
}
#login form input:focus {
  box-shadow: 0px 0px 3px 1px #a2d7fc;
}

#login form button {
  width: 100%;
  height: 30px;
  margin-top: 10px;
  border-radius: 5px;
  background: rgb(224,243,250);
background: -moz-linear-gradient(top,  rgba(224,243,250,1) 0%, rgba(216,240,252,1) 50%, rgba(184,226,246,1) 51%, rgba(182,223,253,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(224,243,250,1)), color-stop(50%,rgba(216,240,252,1)), color-stop(51%,rgba(184,226,246,1)), color-stop(100%,rgba(182,223,253,1)));
background: -webkit-linear-gradient(top,  rgba(224,243,250,1) 0%,rgba(216,240,252,1) 50%,rgba(184,226,246,1) 51%,rgba(182,223,253,1) 100%);
background: -o-linear-gradient(top,  rgba(224,243,250,1) 0%,rgba(216,240,252,1) 50%,rgba(184,226,246,1) 51%,rgba(182,223,253,1) 100%);
background: -ms-linear-gradient(top,  rgba(224,243,250,1) 0%,rgba(216,240,252,1) 50%,rgba(184,226,246,1) 51%,rgba(182,223,253,1) 100%);
background: linear-gradient(to bottom,  rgba(224,243,250,1) 0%,rgba(216,240,252,1) 50%,rgba(184,226,246,1) 51%,rgba(182,223,253,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0f3fa', endColorstr='#b6dffd',GradientType=0 );

  border: 1px solid #b6dffd;
  color: black;
  text-transform: uppercase;
  box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.7);
  text-shadow: 0px 1px 1px white;
  font-size: 12px;
}

#login form button:hover {
  text-shadow: 0px 0px 1px gray;
}
#login form button:active {
 background: rgb(162,215,252);
background: -moz-linear-gradient(top,  rgba(162,215,252,1) 0%, rgba(164,219,244,1) 49%, rgba(194,231,250,1) 50%, rgba(203,235,247,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(162,215,252,1)), color-stop(49%,rgba(164,219,244,1)), color-stop(50%,rgba(194,231,250,1)), color-stop(100%,rgba(203,235,247,1)));
background: -webkit-linear-gradient(top,  rgba(162,215,252,1) 0%,rgba(164,219,244,1) 49%,rgba(194,231,250,1) 50%,rgba(203,235,247,1) 100%);
background: -o-linear-gradient(top,  rgba(162,215,252,1) 0%,rgba(164,219,244,1) 49%,rgba(194,231,250,1) 50%,rgba(203,235,247,1) 100%);
background: -ms-linear-gradient(top,  rgba(162,215,252,1) 0%,rgba(164,219,244,1) 49%,rgba(194,231,250,1) 50%,rgba(203,235,247,1) 100%);
background: linear-gradient(to bottom,  rgba(162,215,252,1) 0%,rgba(164,219,244,1) 49%,rgba(194,231,250,1) 50%,rgba(203,235,247,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a2d7fc', endColorstr='#cbebf7',GradientType=0 );
  margin-top: 10px;
  box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.7) inset;
}
</style>
<!--------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------Form to Login---- ------------------------------------------------------------------->
        <div id="login">
                <form method="post" action="../../includes/loginValidator.php"> <!--sends information to loginValidator-->
                  <h1>Sign In</h1>
                  <?php
                    if(isset($_GET['userInvalid'])){
                      echo " <input type='text' id= 'username' name= 'username' placeholder='Username' value={$_GET['userInvalid']}>";
                    } else {
                      echo " <input type='text' id= 'username' name= 'username' placeholder='Username'>";
                    }
                  ?>
                  <input type="password" id="password" name= "password" placeholder="Password">
                  <button>Sign in</button>
                  <?php
                        if(isset($_GET['userInvalid'])){
                          echo " <Span class= 'error'>Username or Password Incorrect! Please try again!!</Span>";
                        }
                   ?>
                </form>
              </div>
<!--------------------------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------Calling Footer ---------------------------------------------------------------------> 
              <?php

include '../../includes/footer.php';

?>
<!-------------------------------------------------------------------------------------------------------------------------------------->