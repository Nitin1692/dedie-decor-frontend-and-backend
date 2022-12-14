<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dédié Décor</title>
   <style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 480px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: rgba( 255, 255, 255, 0.25 );
  box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 4px );
  -webkit-backdrop-filter: blur( 4px );
  border-radius: 10px;
  border: 1px solid rgba( 255, 255, 255, 0.18 );
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  border-radius: 5px;
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
  background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
  width: 70%;
  border-radius: 5px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
}
.form .message {
  margin: 15px 0 0;
  color: #070707;
  font-size: 14px;
}
.form .message a {
  color: #fc0202;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  /* background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%); */
  background-image: url("backgrpund.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

@import url('https://fonts.googleapis.com/css2?family=Charis+SIL&family=Poppins:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Charis+SIL&family=Poppins:wght@500&display=swap');
*, *::before, *::after{
    box-sizing: border-box;
}

.miniz{
    padding-top: 50px;
}

.miniz{
    position: relative;
    top: -650px;
}

.Expert1{
    padding-left: 450px;
    position: relative;
    top: -905px;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    right: -75px;
    left: -20px;
}


 
nav{
    width: 1110px;
    position: absolute;
    background: transparent;
    z-index: 1;
    display: inline;
    margin-left: 200px;
}




nav ul{
   text-align: right;
   display: inline;
   align-content: right;
}

ul a{
    float: right;
    padding: 5px 10px;
    margin-top: 15px;
    margin-right: 15px;
    font-size: 22px;
    color: black;
    text-decoration: none;
    align-items: flex-end;

}
.logo >img{
    align-content: inherit;
    align-items: flex-start;
    padding: 10px;
    clip-path: circle(50% at 50% 50%);
    margin-top: 13px;
    margin-left: 200px;
}


.logo{

   
margin-top: 13px;
}


nav ul a:hover{
    color: #FF9677;
}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
    align-content: right;
    float: right;
    margin-right: 25px;
    margin-top: 10px;
    position: relative;
	bottom: -px;
}

.fa-instagram {
  background: transparent;
  color: black;
  position: relative;
  bottom: -6px;
}

.fa-facebook {
    background: transparent;
    color: black;
    position: relative;
    bottom: -6px;
  } 
  
 

 


.fa-bell {
    background: transparent;
    color: black;
    position: relative;
    bottom: -6px;
}  


nav ul a::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #5e9387;
    display: block;
    margin: auto;
    transition: 0.5s;
}

nav ul a:hover::after{
    width: 100%;
    
}

.header{
    min-height: 100vh;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
        
}
body{

    margin: 0;
    height: 100vh;
    overflow-x: hidden;
}

.login-page{
    position: relative;
    top: -610px;
}

#cursor{
  position: fixed;
  width: 50px;
  height: 50px;
  border: 1px solid white;
  border-radius: 50%;
  left: 0;
  right: 0;
  pointer-events: none;
  transform: translate(-50%, -50%);
  transition: .1s;
}  

#cursor2{
  position: fixed;
  width: 40px;
  height: 40px;
  background-color: wheat;
  border-radius: 50%;
  left: 0;
  right: 0;
  pointer-events: none;
  transform: translate(-50%, -50%);
  transition: .15s;
}
   </style>
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
  crossorigin="anonymous"
/>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
/>
</head>
<body>
    <section class="header" aria-label="Newest Photos">
     
        <nav>
          <a href="{{url('/')}}"><img src="Img/Experts Logo.png" class="logo" height="70px" width="150px" marigin-top="13px" alt="" /></a>
          <ul>
            
            <a href="#"><i class="fa-solid fa-bell"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </ul>
        </nav>
      </section>
<div class="login-page">
 

  <div class="form">
    <form action="/login" method="POST" class="register-form">
      @csrf
      <input type="text" name="Fullname" placeholder="name"/>
      <input type="password" name="Password" placeholder="password"/>
      <input type="text" name="email" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action="/authenticate" method="POST" class="login-form">
      @csrf
      <input type="email" name="email" placeholder="username"/>
      <input type="password" name="Password" placeholder="password"/>
      <button class= "Login">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>


<div id="cursor"></div>
<div id="cursor2"></div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  

</body>


<script>
   $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });
  var cursor = document.getElementById('cursor');
var cursor2 = document.getElementById('cursor2');
document.addEventListener('mousemove', function(e){
   cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;"
});
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/4393a238ab.js" crossorigin="anonymous"></script>
</html>
