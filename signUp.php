<?php
include_once 'header.php';
?>


<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #333;

  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #333;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #EA80FC;
  background-image: url(images/uwp2529892.jpeg);
  background-image: no-repeat;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


</style>







  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Sign UP</h3>
            <p>Please enter your credentials to sign up.</p>
          </div>
        </div>

        <div class="login-form">
        <form action= "includes/signUp.inc.php" method="post">
          <input type="text" name ="name" placeholder="fullname"/>
          <input type="text" name ="email" placeholder="email" >
          <input type="text" name ="uid" placeholder="username" >
          <input type="password" name="pwd" placeholder="password"/>
          <input type="password" name ="pwdrepeat" placeholder="Repeat password" >
          <button type= "submit" name= "submit">Sign Up</button>
         
        </form>
      </div>
    </div>
    </div>





</body>
</body>
</html>