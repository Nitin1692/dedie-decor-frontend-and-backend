<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dédié Décor</title>
    <!--<link rel="stylesheet" href="{{url('resources/css/app.css')}}" />-->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@300&family=Nuosu+SIL&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nuosu+SIL&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Nuosu+SIL&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playball&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Joan&family=Playball&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nuosu+SIL&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Charis+SIL:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Tai+Heritage+Pro:wght@700&display=swap');
*, *::before, *::after{
    box-sizing: border-box;
}
.logo >img{
    width: 100px;
    align-content: inherit;
    align-items: flex-start;
    padding: 10px;
    height: 60px;
    clip-path: circle(50% at 50% 50%);
    margin-top: 13px;
    margin-left: 200px;
}
 
nav{
    width: 1110px;
    position: absolute;
    background: transparent;
    z-index: 1;
    display: inline;
    margin-left: 200px;
}

.logo{

   
    margin-top: 13px;
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
    color: #fff;
    text-decoration: none;
    align-items: flex-end;

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
    
}

.fa-instagram {
  background: transparent;
  color: white;
}  

#tet{
    background: transparent;
    color: white;
}

.fa-twitter {
    background: transparent;
    color: white;
  }  
.fa-facebook {
    background: transparent;
    color: white;
  } 

  .fa-right-to-bracket {
    background: transparent;
    color: white;
  }   

.fa-bell {
    background: transparent;
    color: white;
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

.carousel{
    width: 100vw;
    height: 100vh;
    position: relative;
}

.slide{
    position: absolute;
    inset: 0;
    opacity: 0;
}

.slide[data-active]{
    opacity: 1; 
}

.slide > img{
    display: block;
    width: 100%; 
    height: 100%;
    object-fit: cover;
    object-position: center;
    overflow: hidden;
}

.carousel-button{
    position:absolute;
    background: transparent;
    z-index: 2;
    transform: translateY(-50%);
    border: none;
    font-size: 2em;
    text-decoration: none;
    background-color: rgba(0,0,0, .1);
    border-radius: .25rem;
    cursor: pointer;
    padding: 0 .5rem;
    background: transparent;
    top:50%;

}

.carousel > ul{
    margin: 0;
    padding: 0;
    list-style: none;
}

.carousel-button:hover,
.carousel-button:focus{
     background-color: transparent;
}

.carousel-button:focus{
    background-color: transparent;
}


.carousel-button.prev{
    left: 1rem;
}

.carousel-button.next{
    right: 1rem;
}

.About{
    margin-top: 50px;
    text-align: center;
    font-size: 3rem;
    font-family: 'Dancing Script', cursive;
}

.aboutImage{
    position:absolute;
    justify-content: right;
    align-items: right;
    width: 700px;
    height: 450px;
    padding-right: 100px;
    transition: transform .2s;
    left: 200px;
    margin-top: 65px;
}

.aboutImage:hover{
    transform: translate3d(42px, -62px, -135px);
}

.carousel-button:focus,
.carousel-button:hover{
    color: white;
    background-color: rgba(0, 0, 0, .2);
}


.Statement{
    text-align: justify;
    justify-content: right;
    line-height: 25px;
    float: left;
    position: absolute;
    padding-left: 400px;
    margin-top: 170px;
    margin-left: 140px;
    font-family: 'Playball', cursive;
    font-size: 22px;
}




.section-padding {
    padding: 150px 0;
    padding-top: 550px;
    padding-right: 0px;
    padding-bottom: 120px;
    padding-left: 0px;
}



.playfont{
    padding: 150px 0;
    padding-top: 550px;
    padding-right: 0px;
    padding-bottom: 120px;
    padding-left: 0px;
    font-family: 'Dancing Script', cursive;
    font-size: 3rem;
    margin-top: 50px;
}

.item-bx1:hover{
   background-image: url('Img/12.jpg');
}

.item-bx1{
    height: 450px;
    width: 400px;
    border: 1px solid #E5E5E5;
}

.item-bx2{
    height: 450px;
    border: 1px solid #E5E5E5 ;
}

.item-bx3{
    height: 450px;
    width: 400px;
    border: 1px solid #E5E5E5;    ;
}



#olj{
    width: 350px; 
}

.pkl{
    padding-left: 1350px;
}

.item-bx2:hover{
    background-image: url('Img/b4.jpg'); 
}


.item-bx3:hover{
    background-image: url('Img/h35.jpg');
}

.fp{
    padding-left: 150px;
}

.Arch{
    font-family: 'Joan', serif;
}

.mod{
    font-family: 'Courgette', cursive;
    font-size: 20px;
}

.Inter{
    font-family: 'Courgette', cursive;
    font-size: 20px;
}

.fie{
    font-family: 'Oswald', sans-serif;
    font-size: 30px;
}

.pie{
    font-family: 'Oswald', sans-serif;
    font-size: 30px;
}

.hola{
    font-family: 'Oswald', sans-serif;
    font-size: 30px;
}

.Experts{
    padding: 150px 0;
    padding-top: 70px;
    padding-right: 0px;
    padding-bottom: 120px;
    padding-left: 0px;
    font-family: 'Dancing Script', cursive;
    font-size: 3rem;
    margin-top: 20px;
    text-align: center;
}

.expertssection{
   position: relative;
}


.item-bx4{
    height: 400px;
    width: 250px;
    border: 1px solid #E5E5E5; 
}

#nm{
   padding-top: 100px;
}

#nm{
    font-family: 'Monoton', cursive;
}



.insta {
    background: transparent;
    color: black;
  }  
  
  .face {
      background: transparent;
      color: black;
    }  
  

#nilesh{
        padding-top: 25px;
        position: relative;
        right: -20px;
 }    

 #exp1{
    padding-top: 25px;
    font-family: 'Courgette', cursive;
    font-size: 20px;
 }

 .saw{
    position: relative;
    right: -60px;
 }

 .item-bx5{
    height: 400px;
    width: 250px;
    border: 1px solid #E5E5E5; 
}

.item-bx6{
    height: 400px;
    width: 250px;
    border: 1px solid #E5E5E5; 
}

.item-bx7{
    height: 400px;
    width: 50px;
    border: 1px solid #E5E5E5; 
}

.item-bx4{
    height: 400px;
    width: 250px;
    border: 1px solid #E5E5E5;
}

#read{
    padding-left: 1350px;
}

.rt{
    position: relative;
    top: -200px;
    right: -5px;
}

.um{
    position: relative;
    top: -200px;
}

.hol{
    position: relative;
    right: -90px;
}

.mint{
    position: relative;
    right: -100px;
}

.pyq{
    position: relative;
    right: -100px;
}

#Face{
    position: relative;
     right: -100px;
     margin: 6.5px;
}

#Insta{
    right: -100px;
    position: relative;
     
}

.insta{
    position: relative;
    right: -140px;
}



#img1{
    clip-path: circle(50% at 50% 50%);
    width: 250px;
    height: 230px;
    margin: 2px;
}

#img2{
    clip-path: circle(50% at 50% 50%);
    width: 250px;
    height: 230px;
    
}

#img3{
    clip-path: circle(50% at 50% 50%);
    width: 250px;
    height: 230px;
}

#img4{
    clip-path: circle(50% at 50% 50%);
    width: 250px;
    height: 230px;
}

#img5{
    clip-path: circle(50% at 50% 50%);
    width: 250px;
    height: 230px;
}

.Develop{
    text-align: center;
    font-family: 'Dancing Script', cursive;
    font-size: 50px;
    margin-top: 100px;
}

.box{
    margin-top: 75px;
}

#Front{
    padding-left: 290px;
    position: relative;
    top: -33px;
    right: -15px;
    font-family: 'Crimson Text', serif;
}

.Fsa{
    position: relative;
    right: -35px;
    bottom: -15px;
    font-family: 'Crimson Text', serif;
}

.Pbv{
    padding-left: 545px;
    position: relative;
    top: -82px;
    right: -15px;
    font-family: 'Crimson Text', serif;
}

.olp{
    padding-left: 795px;
    position: relative;
    top: -132px;
    right: -10px;
    font-family: 'Crimson Text', serif;
}

.mnu{
    padding-left: 1045px;
    position: relative;
    top: -183px;
    right: -20px;
    font-family: 'Crimson Text', serif;
}

.fa-linkedin{
    background: transparent;
    color: black;
}

.swq{
    position: relative;
    top: -155px;
    right: -35px;
    left: -3px;
}

.dsa{
    position: relative;
    top: -210px;
    right: -35px;
    left: -35px;
    padding-left: 300px;
}

.back{
    padding-left: 600px;
    position: relative;
    top: -259px; 
    left: -95px;   
}

.mit{
    padding-left: 770px;
    position: relative;
    top: -315px;
    left: -10px;
}

.mlit{
    padding-left: 1050px;
    position: relative;
    top: -370px;
    left: -33px;
}



.img1::before{
    content:attr(title);
    visibility: hidden;
    opacity: 0;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;

}

.img1:hover{
    opacity: 1;
    visibility: visible;
}

.img2::before{
    content:attr(title);
    visibility: hidden;
    opacity: 0;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;
}

.img2:hover{
    opacity: 1;
    visibility: visible;
}

.img3::before{
    content:attr(title);
    visibility: hidden;
    opacity: 0;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;
}

.img3:hover{
    opacity: 1;
    visibility: visible;
}

.img4::before{
    content:attr(title);
    visibility: hidden;
    opacity: 0;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;
}

.img4:hover{
    opacity: 1;
    visibility: visible;
}

.img5::before{
    content:attr(title);
    visibility: hidden;
    opacity: 0;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;
}

.img5:hover{
    opacity: 1;
    visibility: visible;
}

.fn{
    padding-left: 35px;
    
}

#item15{
    width: 300px;
    height: 410px;
    border: 1px solid #E5E5E5;
    margin-right: 15px;
}

#item16{
    width: 300px;
    height: 410px;
    border: 1px solid #E5E5E5;
    margin-right: 15px;
}

#item17{
    width: 300px;
    height: 410px;
    border: 1px solid #E5E5E5;
    margin-right: 15px;
}

#item18{
    width: 300px;
    height: 410px;
    border: 1px solid #E5E5E5;
    margin-right: 15px;
}



.living{
    font-family: 'Charis SIL', serif;
    font-size: 20px;
    text-align: center;
}

.Dining{
    font-family: 'Charis SIL', serif;
    font-size: 20px;
    text-align: center;
}

.Kitchen{
    font-family: 'Charis SIL', serif;
    font-size: 20px;
    text-align: center;
}

.Balcony{
    font-family: 'Charis SIL', serif;
    font-size: 20px;
    text-align: center;
}

.wall{
    text-align: center;
    font-size: 20px;
    margin-top: 5px;
}

.Room{
    position: relative;
    right: -10px;
}

.Table{
    position: relative;
    right: -10px; 
}

.Lamp{
    position: relative;
    right: -10px;
}

.lamp{
    text-align: center;
    font-size: 20px;
    margin-top: 5px;
}

.grass{
    position: relative;
    right: -10px;
}

#write{
    padding-left: 1300px;
}

#write{
    position: relative;
    top: -210px;
}

.nvc::before{
    content:attr(title);
    visibility: visible;
    opacity: 1;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;
}

.nvc:hover{
    opacity: 1;
    visibility: visible;
}

.rt::before{
    content:attr(title);
    visibility: visible;
    opacity: 1;
    background-color: black;
    text-align: center;
    transition: opacity 1s ease-in-out;
    position: absolute;
    z-index: 1;
    top: 100%;
}

.rt:hover{
    opacity: 1;
    visibility: visible; 
}


.footer-basic {
    padding:40px 0;
    background-color: #339476;
    color:#339476;
  }
  
  .footer-basic ul {
    padding:0;
    list-style:none;
    text-align:center;
    font-size:18px;
    line-height:1.6;
    margin-bottom:0;
  }
  
  .footer-basic li {
    padding:0 10px;
  }
  
  .footer-basic ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.8;
  }
  
  .footer-basic ul a:hover {
    opacity:1;
  }
  
  .footer-basic .social {
    text-align:center;
    padding-bottom:25px;
  }
  
  .footer-basic .social > a {
    font-size:24px;
    width:40px;
    height:40px;
    line-height:40px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    border:1px solid #ccc;
    margin:0 8px;
    color:inherit;
    opacity:0.75;
  }
  
  .footer-basic .social > a:hover {
    opacity:0.9;
  }
  
  .footer-basic .copyright {
    margin-top:15px;
    text-align:center;
    font-size:15px;
    color: #ccc;
    margin-bottom:0;
    font-family: 'Tai Heritage Pro', serif;
  }

  .list-inline-item{
    color: #ccc;
    font-family: 'Tai Heritage Pro', serif;
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
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>



  </head>
  <body>
  <section class="header" aria-label="Newest Photos">
     
     <nav>
       <a href="{{ url('/') }}"><img src="Img/Logo (2).png" class="logo" height="70px" width="150px" marigin-top="13px" alt="" /></a>
       <ul>
         <a href="{{ url('/login') }} ">login</a>
         <a href="#"><i class="fa-solid fa-bell"></i></a>
         <a href="#"><i class="fa-brands fa-facebook"></i></a>
         <a href="#"><i class="fa-brands fa-instagram"></i></a>
         <ul>
           <a href="{{ url('/experts') }}" id="Home">Experts</a>
         </ul>
         <ul>
           <a href="{{ url('/product') }} " id="Products">Products</a>
         </ul>
         <ul>
           <a class="active" href="{{ url('/') }}" id="Experts">Home</a>
         </ul>
       </ul>
     </nav>
     <div class="carousel">
       <button class="carousel-button prev" onclick="nextslide(-1)"><i class="fa fa-chevron-left"></i></button>
       <button class="carousel-button next" onclick="nextSlide(1)" ><i class="fa fa-chevron-right"></i></button>
       <ul data-slides>
         <li class="slide" data-active>
           <img src="Img/p1.jpg" alt="" srcset="">
         </li>
         <li class="slide" data-active>
           <img src="Img/li1.png" alt="" srcset="">
         </li>
         <li class="slide" data-active>
           <img src="Img/ro1.jpg" alt="" srcset="">
         </li>
         <li class="slide" data-active>
           <img src="Img/p7.jpg" alt="" srcset="">
         </li>
         <li class="slide" data-active>
           <img src="Img/p1.jpg" alt="" srcset="">
         </li>
       </ul>
     </div>
   </section>
    <div class="container">
       <h6 class="About">About Us</h6>
       <div class="container col-lg-7">
         <img class="aboutImage" src="Img/ba1.jpg" alt="" srcset="" >
         <p class="Statement">
             ____ We aspire to bring upto our readers a
             <br>
            set of resources that will help them to <br> 
            visualize create and maintain home design. <br> Our focus is to showcase visuals 
            that motivate you. <br> We cover architectural 
            innovation, products, designs for rooms, <br>
            Living room, Kitchens and Balcony. <br> We hope to become your one stop solution for home design.
         </p>
       </div>
     </div>

     <div class="container">
       <div class="section-head text-center">
           <div class="row justify-content-center">
               <div class="col-lg-6 col-md-8 col-sm-10">
                   <h4 class="playfont wow flipInX" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">Our Services</h4>
               </div>
           </div>
       </div>
       <div class="row bord-box bg-img wow fp fadeInUp">
   
           <div class="col-lg-3 col-md-6 col-ml-3 item-bx1" id="olj">
               <h2 class="custom-font numb" id="nm">01</h2>
               <h6 class="mb-20 hola">Architecture</h6>
               <p class="Inter">The future of architecture is in your hands</p>
               <a href="#0" class="more custom-font mt-30">Read More</a>
           </div>
   
           <div class="col-lg-3 col-md-6 col-ml-3 item-bx2" id="olj">
               <h2 class="custom-font numb" id="nm">02</h2>
               <h6 class="mb-20 pie">Interior Design</h6>
               <p class="Inter">A design so unique, it was created for you.</p>
               <a href="#0" class="more custom-font mt-30">Read More</a>
           </div>
   
           <div class="col-lg-3 col-md-6 item-bx3 pkl" id="olj">
               <h2 class="custom-font numb" id="nm">03</h2>
               <h6 class="mb-20 fie">3D Modeling</h6>
               <p class="mod">Together, we build the future.</p>
               <a href="#0" class="more custom-font mt-30">Read More</a>
           </div>
       </div>
   </div>

   <div class="container">
     <div class="section-head text-center">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8 col-sm-10">
                 <h4 class="playfont wow flipInX Experts" data-wow-delay=".5s"  style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">Experts</h4>
             </div>
         </div>
     </div>
     <div class="row bord-box bg-img wow pi fadeInUp">
   
       <div class="col-lg-3 col-md-6 col-ml-3 item-bx4">
           <img src="Img/Nilesh Sawant.jpg" id="nilesh" alt="" width="250px" height="250px">
           <h6 class="mb-20 hol" id="exp1">Nilesh Sawant</h6>
           <a href="https://www.facebook.com/nileshsawant.architect/" ><i class="fa-brands fa-facebook fa-2xl  face" id="Face"></i></a>
           <a href="https://www.instagram.com/nileshsawant.architect/" ><i class="fa-brands fa-instagram fa-2xl insta" id="Insta"></i></a>
           
       </div>

       <div class="col-lg-3 col-md-6 col-ml-3 item-bx5">
           <img src="Img/Decor_miniz.jpg" id="nilesh" alt=""width="270px" height="250px">
           <h6 class="mb-20 mint" id="exp1">Decor Miniz</h6>
           <a href="https://instagram.com/decor_miniz?igshid=YmMyMTA2M2Y=" ><i class="fa-brands fa-instagram fa-2xl insta" id="Inst"></i></a>
       </div>

       <div class="col-lg-3 col-md-6 item-bx6">
           <img src="Img/Woods work club.png" id="nilesh" alt=""width="270px" height="250px">
           <h6 class="mb-20 saw" id="exp1">Woods Works Club</h6>
           <a href="https://www.facebook.com/woodworksclub/" ><i class="fa-brands fa-facebook fa-2xl face" id="Face"></i></a>
           <a href="https://www.instagram.com/woodworksclub/" ><i class="fa-brands fa-instagram fa-2xl insta" id="Insta"></i></a>
       </div>
       <div class="col-lg-3 col-md-6 item-bx7">
         <img src="Img/Crafty Soni.jpg" id="nilesh" alt="" width="270px" height="250px">
         <h6 class="mb-20 pyq" id="exp1">Crafty Soni</h6>
         <a href="https://youtube.com/c/SmitaK" ><i class="fa-brands fa-2xl fa-youtube face" id="Face"></i></a>
         <a href="https://instagram.com/craftysoni?igshid=YmMyMTA2M2Y=" ><i class="fa-brands fa-instagram  fa-2xl insta" id="Insta"></i></a>
     </div>
     <a href="#"><i class="fa-solid fa-arrow-right fa-2xl rt" id="read" title="See More"></i></a>
     
     
     
  
   </div>
     
 </div>

 <div class="container">
   <div class="container">
     <div class="section-head text-center">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8 col-sm-10">
                 <h4 class="playfont wow flipInX Experts" data-wow-delay=".5s"  style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">Products Glimpse</h4>
             </div>
         </div>
     </div>
     <div class="row bord-box bg-img wow fn fadeInUp">
   
       <div class="col-lg-3 col-md-6 col-ml-3 item-bx15" id="item15">
           <h6 class="mb-20 living">Living Room</h6>
           <img src="Img/Living Room.jpg" class="Room" alt="" srcset="" width="250px" height="230px" >
           <h6 class="custom-font numb wall">Wall Shelf</h6>
           <br>
           <h5>Flipkart: <a href=" https://dl.flipkart.com/s/oCcjpquuuN">View Product</a></h5>
           <h5>Amazon: <a href=" https://amzn.eu/d/dYSuWYr">View Product</a></h5>
       </div>

       <div class="col-lg-3 col-md-6 col-ml-3 item-bx16" id="item16">
           <h6 class="mb-20 Dining">Dining Room</h6>
           <img src="Img/table.jpg" class="Table" alt="" srcset="" width="250px" height="230px">
           <h6 class="custom-font numb wall">Dining Table</h6>
           <br>
           <h5>Flipkart: <a href="https://www.flipkart.com/modway-solid-wood-6-seater-dining-set/p/itmc4b6df7b8bc86?pid=DISFZAJA4Y2VTTFQ&cmpid=product.share.pp&_refId=PP.2e3050a5-fbed-4371-bc9d-b1d907868244.DISFZAJA4Y2VTTFQ&_appId=CL">View Product</a></h5>
           <h5>Amazon: <a href="https://www.amazon.in/dp/B09YYRWQ6T/ref=cm_sw_r_apa_i_27WVXDSS0XY6BY3J7HP5_0">View Product</a></h5>
       </div>

       <div class="col-lg-3 col-md-6 item-bx17" id="item17">
           <h6 class="mb-20 Kitchen">Bedroom</h6>
           <img src="Img/lamp.jpg" class="Lamp" alt="" srcset="" width="250px" height="230px">
           <h6 class="custom-font numb lamp">Lamp</h6>
           <br>
           <h5>Flipkart: <a href="https://www.flipkart.com/overseasmart-tripod-floor-lamp/p/itm74ecf5b968994?pid=FIOG2GX3VTUHDXHF&cmpid=product.share.pp&_refId=PP.d292553e-2e75-4f5e-8d9d-a4084acc511e.FIOG2GX3VTUHDXHF&_appId=CL">View Product</a></h5>
           <h5>Amazon: <a href="https://www.amazon.in/dp/B0B1LWHT32/ref=cm_sw_r_apa_i_MJDS8WSNDN562VQRG3MD_0">View Product</a></h5>
       </div>
       <div class="col-lg-3 col-md-6 item-bx18" id="item18">
         <h6 class="mb-20 Balcony">Balcony</h6>
         <img src="Img/balcony mat.jpg" class="grass" alt="" srcset="" width="250px" height="230px">
         <h6 class="custom-font numb lamp">Glass Door Mat</h6>
         <br>
         <h5>Flipkart: <a href="https://www.flipkart.com/homely-vibes-artificial-grass-door-mat/p/itmf6g7spdhwpzhw?pid=MATF6GR638QQ2VGQ&cmpid=product.share.pp&_refId=PP.d616a6ef-8046-4abc-8c9e-ea640f10b675.MATF6GR638QQ2VGQ&_appId=CL">View Product</a></h5>
         <h5>Amazon: <a href="https://www.amazon.in/dp/B07PV7SYJC/ref=cm_sw_r_apa_i_EZCTQTQGJ2JXNA754C0F_0?_encoding=UTF8&psc=1">View Product</a></h5>
     </div>
   </div>
 </div>
 <a href="#"><i class="fa-solid fa-arrow-right fa-2xl nvc" id="write" title="See More"></i></a>

 </div>

 <div class="container">
   <H1 class="Develop">Development Team</H1>
   <div class="container box">
     <img src="Img/Pritha Roy.jpg" alt="" id="img1" title="Pritha Roy Chowdhury">
     <img src="Img/Romit .jpeg" alt="" id="img2" title="Romit Khanra">
     <img src="Img/Bivabasu Majumdar.jpg" alt="" id="img3" title="Bivabasu Majumdar">
     <img src="Img/Sumana Khan.png" alt="" id="img4" title="Sumana Khan">
     <img src="Img/Nitin.jpg" alt="" id="img5" title="Nitin Jain">
     <div class="container">
       <h6 class="Fsa">Front-End Developer</h6>
       <a href="https://www.linkedin.com/in/pritha-roy-chowdhury/"><i class="fa-brands fa-linkedin fa-xl swq"></i></a>
     </div>
     <h6 id="Front">Front-End Developer</h6>
     <a href="https://www.linkedin.com/in/romit-khanra/"><i class="fa-brands fa-linkedin fa-xl dsa"></i></a>
     <div class="container">
       <h6 class="Pbv">Front-End Developer</h6>
       <a href="https://www.linkedin.com/in/bivabasu-majumdar/"><i class="fa-brands fa-linkedin fa-xl back"></i></a>
     </div>
     <div class="container">
       <h6 class="olp">Back-End Developer</h6>
       <a href="https://www.linkedin.com/in/sumana-khan-bca/"><i class="fa-brands fa-linkedin fa-xl mit"></i></a>
     </div>
     <div class="container">
       <h6 class="mnu">Back-End Developer</h6>
       <a href="https://www.linkedin.com/in/nitinbca/"><i class="fa-brands fa-linkedin fa-xl mlit"></i></a>
     </div>
   </div>
 </div>

 <div class="footer-basic">
   <footer>
       <div class="social"><a href="#"><i class="fa-brands fa-facebook"></i></a><a href="#"><i class="fa-brands fa-instagram"></i></a><a href="#"><i class="fa-brands fa-twitter"></i></a><a href="#"><i class="fa-brands fa-linkedin" id="tet"></i></a></div>
       <ul class="list-inline">
           <li class="list-inline-item"><a href="#">Home</a></li>
           <li class="list-inline-item"><a href="#">Services</a></li>
           <li class="list-inline-item"><a href="#">About</a></li>
           <li class="list-inline-item"><a href="#">Terms</a></li>
           <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
       </ul>
       <p class="copyright">Dedie Decor 2022</p>
   </footer>
</div>
 

<div id="cursor"></div>
<div id="cursor2"></div>

 
    
  
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<!--<script src="{{url('js/script.js')}}"></script>-->
<script>
  var slide_index = 1;
displaySlides(slide_index);
function nextSlide(n) {
    displaySlides(slide_index += n);
}
function currentSlide(n) {
    displaySlides(slide_index = n);
}
function displaySlides(n) {
    var i;
    var slides = document.getElementsByClassName('slide');
    if(n > slides.length){
        slide_index = 1;
    }
    if(n < 1){
        slide_index = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slide_index - 1].style.display = "block"
}

var cursor = document.getElementById('cursor');
var cursor2 = document.getElementById('cursor2');
document.addEventListener('mousemove', function(e){
   cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;"
});
</script>
<script type="module">
  import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper();
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
