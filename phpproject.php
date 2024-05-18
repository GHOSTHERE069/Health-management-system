<!DOCTYPE html> 
<html> 
<head> 
 <title>Hospital management system</title> 
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font
awesome/6.5.1/css/all.min.css"> 
 <style type="text/css"> 
  *{ 
   padding: 0px; 
   margin:0px; 
   box-sizing: border-box; 
   font-family: sans-serif; 
  } 
  /*top-section*/ 
  .top{ 
   display: flex; 
   justify-content: space-between; 
   align-items: center; 
   padding:10px; 
   background: #0ddbac; 
   position: fixed; 
   z-index: 1; 
   width: 100%; 
   height: 50px; 
  } 
  .top .top-content{ 
   display: flex; 
   padding-left: 60px; 
   position: relative; 
 
  } 
  .top .top-content p{ 
   margin-left: 10px; 
  } 
  p section{ 
   font-weight: bold; 
   font-size: 25px; 
    
  } 
  .top-button{ 
   display: flex; 
   justify-content: space-between; 
   padding-right: 100px; 
  } 
  .top-button a{ 
   color: black; 
   text-decoration: none; 
   text-transform: capitalize; 
   padding-left: 20px; 
   font-size: 20px; 
   transition:0.4s linear; 
   cursor:pointer; 
  } 
  .top-button a:hover{ 
   color:red; 
  } 
  /*home -section*/ 
  #home,.appointment-login{ 
   display: flex; 
   position: relative; 
   padding: 100px 0px 0px 40px; 
    
  } 
  #home{background: #f1f0f1;} 
  .home-content,.about-content{ 
   position: relative; 
     top: 70px; 
     padding-left: 50px; 
  } 
   .home-content h3,.about-content h3 { 
   
    word-wrap: break-word; 
    line-height: 80px; 
    width: 80%; 
    font-weight: 900; 
    font-size: 40px; 
    text-transform: capitalize; 
    word-spacing: 10px; 
    text-shadow: 5px 2px 2px  rgba(0,0, 0, 0.3); 
    color: black; 
    letter-spacing: 2px; 
 
} 
.home-content p,.about-content p{ 
 line-height: 30px; 
 width: 80%; 
 word-spacing: 3px; 
 font-size: 16px; 
 text-transform: capitalize; 
 margin:20px 0px; 
} 
 button{ 
 color: #0ddbac; 
 padding: 3px 15px; 
 word-spacing: 3px; 
 border:2px solid #0ddbac; 
 border-radius: 5px; 
 width: auto; 
 font-size: 20px; 
 margin-top: 20px; 
 height: 50px; 
 background:white; 
 box-shadow: 0px 0px 1px 2px rgba(0,0,0,0.1); 
} 
 button:hover{ 
 background:#0ddbac; 
 color: white; 
} 
button .right{ 
 width: 35px; 
 height: 32px; 
 background:#0ddbac; 
 color: white; 
 border-radius: 5px; 
 float: right; 
 padding:5px ; 
 text-align: center; 
 margin-left: 10px; 
} 
/* home-info*/ 
.home-info{ 
 display: flex; 
  
 justify-content: flex-start; 
} 
.home-info-box,.service-grid .service-box,.doctor-box{ 
display: flex; 
f
 lex-direction: column; 
justify-content: center; 
align-items: center; 
row-gap:15px; 
border: 2px solid #0ddbac; 
width: 300px; 
height: auto; 
border-radius: 5px; 
box-shadow: 1px 1px 1px 2px rgba(0,0,0,0.2); 
padding: 30px; 
} 
.home-info-box{ 
margin:50px; 
padding: 20px; 
} 
.home-info-box h2{ 
text-shadow: 3px 2px 2px rgba(0,0,0,0.3); 
letter-spacing: 1px; 
font-size: 40px; 
font-weight:900; 
} 
.home-info-box i{ 
font-size: 30px; 
color: green; 
} 
/*about*/ 
#about,#review{ 
padding: 30px; 
background: #f1f0f1; 
height: auto; 
} 
.about-img{ 
display: flex; 
column-gap: 30px; 
position: relative; 
padding:100px 0px;  
} 
#about h1,#services h1,#doctor h1,#appointment h1,#review h1,#blogs h1{ 
text-align: center; 
font-size: 40px; 
font-weight: 900; 
text-transform: uppercase; 
text-shadow: 2px 3px 1px rgba(0,0,0,0.2); 
letter-spacing: 3px; 
margin: 20px 0px; 
} 
/*service-section*/ 
#services{ 
position: relative; 
top: 40px; 
padding-top: 50px; 
} 
.service-grid{ 
display: grid; 
grid-template-columns: 300px 300px 300px 300px; 
grid-gap: 10px; 
margin-left: 90px; 
} 
.i i{ 
} 
h4{ 
} 
font-size: 35px; 
color:green; 
text-transform: capitalize; 
font-size: 20px; 
font-weight: 600; 
.service-box p{ 
line-height: 30px; 
} 
/*doctor-section*/ 
#doctor{ 
background:  #f1f0f1; 
position: relative; 
top: 100px; 
padding-top: 50px; 
} 
.doctor-grid{ 
display: grid; 
grid-template-columns:350px 350px 350px; 
grid-gap: 20px;  
margin-left: 100px; 
padding-bottom: 30px; 
} 
.doctor-box img{ 
width: 150px; 
height: 150px; 
border: 2px solid green; 
border-radius: 5px; 
} 
.doctor-box{ 
width: 350px; 
} 
.social-media i{ 
width: 35px; 
height: 30px; 
border: 2px solid green; 
color: green; 
text-align: center; 
padding: 5px 0px; 
position: relative; 
border-radius: 3px; 
margin: 7px 4px ; 
} 
.social-media i:hover{ 
color: white; 
background:green; 
} 
#appointment{ 
position: relative; 
top: 100px; 
padding-top: 40px; 
} 
/*appointment-section*/ 
.appointment-login{ 
display: flex; 
margin-left: 20%; 
} 
 .form form { 
   width: 500px; 
   height: auto; 
   padding: 20px; 
   border:2px solid green; 
   border-radius: 5px; 
   margin-left: 60%; 
  } 
  input{ 
   border:2px solid green; 
   padding:3px 5px; 
   margin-top: 15px; 
   width: 98%; 
   border-radius: 5px; 
   height: 30px; 
   font-size:20px; 
 
  } 
  input:focus{ 
   background: #f1f0f1; 
    
  } 
  input[type='submit']{ 
   border: 2px solid green; 
   background:white; 
   width: 50%; 
   margin-left: 20%; 
   height: 30px; 
   transition: 0.2s ease-in-out; 
  } 
  input[type='submit']:hover{ 
   background:green; 
   color: white; 
  } 
  /*review section*/ 
  #review{ 
   margin-top: 150px; 
  } 
  .review-section{ 
   display: flex; 
   margin: 30px 20%; 
   column-gap: 30px; 
 
  } 
  .review-box{ 
   width: 300px; 
   height: auto; 
   padding-bottom: 10px; 
   border-radius: 5px; 
   border:2px solid #1d7d58; 
   line-height: 20px; 
  } 
  .review-box-image{ 
   height: 155px; 
   background:#1d7d58; 
   border-radius: 0px 0px 46% 46%; 
   color: white; 
   font-size: 20px; 
   font-weight: 500; 
   padding: 15px 20%; 
   text-align: center; 
 
  } 
  .review-box-image img{ 
   width: 100px; 
   height: 100px; 
   border-radius: 50%; 
   background: white; 
   padding-top: 5px; 
  } 
  .review-box p{ 
   padding: 5px 10px; 
   text-align: center; 
  } 
 
  /*blogs*/ 
  #blogs{ 
margin-top: 50px; 
line-height: 40px; 
padding-top:40px; 
  } 
   .doctor-box1{ 
   
   
 width: 350px; 
 height:auto; 
 border:2px solid green; 
 border-radius: 5px; 
 padding: 25px 10px 10px; 
}.doctor-box1 img{ 
 width: 320px; 
 height: 250px; 
 transition: transform 0.5s ease-in-out; 
border-radius: 5px; 
margin-left: 1px; 
} 
.doctor-box1 img:hover{ 
transform: scale(1.05); 
}  
.doctor-box1 h3{ 
font-size: 27px; 
font-weight: 600; 
} 
.nav{ 
} 
display: flex; 
justify-content: space-between; 
.image-hover { 
position: relative; 
width: 300px; /* Set your desired width */ 
height: 200px; /* Set your desired height */ 
overflow: hidden; 
} 
.image-hover:hover img{ 
transform: scale(1.1); 
} 
/*bottom-section*/ 
.bottom{ 
background:#E5E7E9; 
display:flex; 
column-gap:40px; 
padding-left: 150px; 
  padding-top: 30px; 
  } 
   
  ul{ 
  list-style:none; 
  } 
  ul li i{ 
  color:green; 
  padding-right:5px;  
} 
 li{ 
  display: flex; 
  padding-bottom: 20px; 
 } 
 nav{ 
  margin-left: 10px; 
  transition: translateX(20px) 0.4s ease-in-out; 
 } 
 
  ul li{ 
  text-transform:capitalize; 
   } 
  nav:hover{ 
  transform: translateX(20px);  
} 
 .creator{ 
   padding: 20px 0px; 
   margin-top: 5px; 
   width: 40%; 
   margin-left: 30%; 
  } 
 </style> 
</head> 
<body> 
 <div class="top"> 
  <div class="top-content"> 
   <img src="heart.png" width="30px" height="30px"> 
   <p><h3>WC</h3>medical</p> 
  </div> 
  <div class="top-button"> 
   <a href="#home"> home</a> 
   <a href="#about">about</a> 
   <a href="#services">services</a> 
   <a href="#doctor">Doctor</a> 
   <a href="#appointment">appointmnet</a> 
   <a href="#review">review</a> 
   <a href="#blogs">blog</a> 
  </div> 
 </div> 
 <div class="move"> 
 <div id="home"> 
  <img src="home.webp"> 
  <div class="home-content"> 
   <h3>we take care of your healthy life</h3> 
   <p>A person who has good physical healthis likey to have bodily function 
and processes working at their peak.</p> 
   <button>Appointment Us<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
 
 </div> 
 <div class="home-info"> 
  <div class="home-info-box"> 
   <i class="fa fa-user-md" aria-hidden="true"></i> 
   <h2>150+</h2> 
   <p>Doctors At Work</p> 
  </div> 
  <div class="home-info-box"> 
   <i class="fa fa-users" aria-hidden="true"></i> 
   <h2>1030+</h2> 
   <p>Satisfied Patients</p> 
  </div> 
  <div class="home-info-box"> 
   <i class="fa-solid fa-bed-pulse"></i> 
   <h2>490+</h2> 
   <p>Bed Facility</p> 
  </div> 
  <div class="home-info-box"> 
   <i class="fa-solid fa-hospital"></i> 
   <h2>70+</h2> 
   <p>Available Hospitals</p> 
  </div>  
 </div> 
 <div id="about"> 
  <h1><font color="#0ddbac">About</font> us</h1> 
  <div class="about-img"> 
   <img src="staff.png" height="500px"> 
   <div class="about-content"> 
    <h3>take the world's best quality treatment</h3> 
    <p>There are many variations of passages of Lorem Ipsum available, 
but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don't look even slightly believable. </p> 
    <p>There are many variations of passages of Lorem Ipsum available, 
but the majority have suffered alteration in some form, by injected humour, or randomised words 
which don't look even slightly believable. </p> 
    <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
 
   </div> 
  </div></div> 
  <div id="services"> 
   <h1>our <font color="#0ddbac">services</font></h1> 
   <div class="service-grid"> 
    <div class="service-box"> 
     <div class="i"> 
     <i class="fa-solid fa-clipboard"></i></div> 
     <h4>free checkups</h4> 
     <p>There are many variations of passages of Lorem Ipsum 
available.</p> 
    <button>learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div></button> 
    </div> 
    <div class="service-box"> 
     <div class="i"> 
     <i class="fa-solid fa-hospital"></i></div> 
     <h4>24/7 ambulance</h4> 
     <p>There are many variations of passages of Lorem Ipsum 
available.</p> 
    <button>learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div></button> 
    </div> 
    <div class="service-box"> 
     <div class="i"> 
     <i class="fa fa-user-md" aria-hidden="true"></i></div> 
     <h4>expert doctors</h4> 
     <p>There are many variations of passages of Lorem Ipsum 
available.</p> 
    <button>learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div></button> 
    </div> 
    <div class="service-box"> 
     <div class="i"> 
     <i class="fa-solid fa-pills"></i> </div> 
     <h4>medicines</h4> 
     <p>There are many variations of passages of Lorem Ipsum 
available.</p> 
    <button>learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div></button> 
    </div> 
    <div class="service-box"> 
     <div class="i"> 
     <i class="fa-solid fa-bed-pulse"></i></div> 
     <h4>bed facility</h4> 
     <p>There are many variations of passages of Lorem Ipsum 
available.</p> 
    <button>learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div></button> 
    </div> 
    <div class="service-box"> 
     <div class="i"> 
    <i class="fa-solid fa-heart-pulse"></i></div> 
     <h4>total care</h4> 
     <p>There are many variations of passages of Lorem Ipsum 
available.</p> 
    <button>learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div></button> 
    </div> 
   </div> 
  </div> 
 
  <div id="doctor"> 
  <h1>our <font color="#0ddbac">doctors</font></h1> 
   <div class="doctor-grid"> 
    <div class="doctor-box"> 
     <img src="doctor1.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor2.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor3.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor4.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor5.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor6.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor7.jpg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div> 
    <div class="doctor-box"> 
     <img src="doctor8.jpeg" width="100px" height="100px"> 
     <h4>win coder</h4> 
     <p>expert doctor</p> 
     <div class="social-media"> 
      <i class="fa-brands fa-facebook-f"></i>  
      <i class="fa-brands fa-twitter"></i>  
      <i class="fa-brands fa-instagram"></i>  
      <i class="fa-brands fa-linkedin"></i>  
     </div> 
    </div>  
   </div>    
  </div> 
 
  <div id="appointment"> 
   <h1><font color="#0ddbac">Appointment</font> now</h1> 
   <div class="appointment-login"> 
    <img src="appointment.png" width="10%" height="400px"> 
    <div class="form"> 
     <form method='POST' action="backend.php"> 
      
        <h3 style="text-align: center;text
transform: capitalize;font-size: 25px;">make appointment</h3> 
        <input type="text" name="yname" 
placeholder="Your name"><br> 
        <input type="text" name="Pno" 
placeholder="your number"><br> 
        <input type="email" name="mail" 
placeholder="your email"><br> 
        <input type="date" name="dob"> 
        <input type="submit" name="send" 
value="Appointment now"> 
      
     </form> 
    </div> 
   </div> 
  </div> 
 
  <div id="review"> 
  <h1>client's <font color="#0ddbac">review</font></h1> 
  <div class="review-section"> 
   <div class="review-box"> 
    <div class="review-box-image"> 
     <img src="user1.png"> 
     <h5>win coder</h5> 
    </div> 
    <p>Lorem Ipsum is simply dummy text of the printing and 
typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when 
an unknown printer took a galley of type </p> 
   </div> 
   <div class="review-box"> 
    <div class="review-box-image"> 
     <img src="user1.png"> 
     <h5>win coder</h5> 
    </div> 
    <p>Lorem Ipsum is simply dummy text of the printing and 
typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when 
an unknown printer took a galley of type </p> 
   </div> 
   <div class="review-box"> 
    <div class="review-box-image"> 
     <img src="user1.png"> 
     <h5>win coder</h> 
    </div> 
    <p>Lorem Ipsum is simply dummy text of the printing and 
typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when 
an unknown printer took a galley of type </p> 
   </div> 
  </div> 
 </div> 
 <div id="blogs"> 
  <h1>our <font color="#0ddbac">services</font></h1> 
 <div class="doctor-grid"> 
 
 <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora1.webp" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora2.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora3.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora4.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora5.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora6.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora7.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora8.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
  <div class="doctor-box1"> 
     <div class="image-hover"> 
     <img src="doctora9.jpeg" width="100px" 
height="100px"></div> 
     <div class="nav"> 
      <span><i class="fa-solid fa-calendar-week"></i> 
       21 November ,2022</span> 
      <span><i class="fa-solid fa-user"></i> By G3 Group 
      </span> 
     </div> 
     <h3>Blog Title Win Coder Goes Here</h3> 
     <p>It is a long established fact that a reader will be 
distracted by the readable content of a page</p> 
     <button>Learn more<div class="right"> 
    <i class="fa fa-chevron-right" aria-hidden="true"></i> 
   </div> 
  </button> 
  </div> 
 </div> 
 <div class="bottom"> 
  <div class="contact"> 
   <h2 style="text-transform:capitalize; word-spacing:5px;font
weight:900;margin:20px 25px;"> quick links</h2> 
  <ul> 
   <li><i class="fa-solid fa-greater-than"></i><nav> home</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> about</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> service</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> doctors</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> appointment</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> review</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> blogs</nav></li> 
    
  </ul> 
  </div> 
   
  <div class="contact"> 
   <h2 style="text-transform:capitalize; word-spacing:5px;font
weight:900;margin:20px 25px;"> our services</h2> 
  <ul> 
   <li><i class="fa-solid fa-greater-than"></i><nav> dental core</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> massage 
therapy</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> cardioloty</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> diagnosis</nav></li> 
   <li><i class="fa-solid fa-greater-than"></i><nav> ambulance 
service</nav></li> 
    
  </ul> 
  </div> 
  <div class="contact"> 
   <h2 style="text-transform:capitalize; word-spacing:5px;font
weight:900;margin:20px 25px;"> appointment info</h2> 
  <ul> 
   <li><i class="fa-solid fa-phone-flip"></i><nav> +8050125436</nav></li> 
   <li><i class="fa-solid fa-phone-flip"></i><nav> +8098457632</nav></li> 
   <li><i class="fa-solid fa-envelope"></i><nav> 
pardeep@gmail.com</nav></li> 
   <li><i class="fa-solid fa-envelope"></i><nav> karan@gmail.com</nav></li> 
   <li><i class="fa-solid fa-location-dot"></i><nav> Max hospital, shalimar 
bagh</nav></li> 
    
  </ul> 
  </div> 
  <div class="contact"> 
   <h2 style="text-transform:capitalize; word-spacing:5px;font
weight:900;margin:20px 25px;"> follow us</h2> 
  <ul> 
   <li>faceappointment</li> 
   <li><i class="fa-brands fa-twitter"></i><nav> twitter</nav></li> 
   <li><i class="fa-brands fa-twitter"></i><nav> twitter</nav></li> 
   <li><i class="fa-brands fa-instagram"></i><nav> instagram</nav></li> 
   <li><i class="fa-brands fa-linkedin"></i><nav> linkedin</nav></li> 
   <li><i class="fa-brands fa-pinterest"></i><nav> pinterest</nav></li> 
    
  </ul> 
  </div> 
 </div> 
 
 <div class="creator"> 
 <section>Created by<font color="#0ddbac"> Karan,Pankaj,Lakshay,Anshu , Jai & Pardeep 
</font>| All Rights Reserve</section> 
 </div> 
   
  
  
 <script type="text/javascript"> 
 document.addEventListener("DOMContentLoaded", () => { 
    let btn = document.querySelectorAll('button'); 
    let img = document.querySelector('#home img'); 
     
    let translateYValue = 3; 
     
    setInterval(() => { 
        img.style.transition = "transform 0.4s linear"; 
        img.style.transform = `translateY(${translateYValue}px)`; 
        translateYValue = -translateYValue; 
    }, 700); 
 
    btn.forEach((val) => { 
        val.addEventListener('mouseover', () => { 
            val.firstElementChild.style.background = 'white'; 
            val.firstElementChild.firstElementChild.style.color = '#0ddbac'; 
            val.style.transition = "0.4s"; 
            val.firstElementChild.style.transition = "0.4s"; 
            val.firstElementChild.firstElementChild.style.transition = "0.4s"; 
        }); 
 
        val.addEventListener('mouseout', () => { 
            val.firstElementChild.style.background = '#0ddbac'; 
            val.firstElementChild.firstElementChild.style.color = 'white'; 
        }); 
    }); 
    
 
}); 
 
 </script> 
 
</body> 
</html>