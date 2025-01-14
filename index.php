<!DOCTYPE html>
<html>



    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ez|Care - Official website for KHMH appointment services </title>
        <link rel="icon" type="image/x-icon" href="/images/ezcarelogo.png">
        <link rel="stylesheet" href="style.css">

        <!-- CSS style for main Content -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/afa1737baf.js" crossorigin="anonymous"></script>

    </head>
    <body>




 <!----- Socail media Dock----->
        <section class="dock">
            <a href="tel:+501 6148496"><i class="fa-solid fa-phone" style="color:#006eff"></i>(+501) 614-8496</a>
            <a href="mailto:Ezcare@gmail.com"><i class="fa-solid fa-envelope" style="padding: 5px; color:#006eff"></i>Ezcare@gmail.com</a>
            <div class="dock-right">
                <a href=""><i class="fa-brands fa-twitter" style="padding-right: 15px; color: #006eff;"></i></a>
                <a href="https://www.instagram.com/kaden_obando/"  target="_blank"><i class="fa-brands fa-instagram" style="padding-right: 15px; color: #006eff"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100069392147817"  target="_blank"><i class="fa-brands fa-square-facebook" style="padding-right: 15px; color: #006eff"></i></a>
            </div>
        </section>


        <hr>
 <!-----Navigation links----->
        <section class="navigation">
            <div class="nav-links">
                <ul id="User-access" >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <!-- <li><a href="services.php">Services</a></li> -->
                    
                    <!--<li><a href="login.html">Create account</a></li>   href="Creation-page.html"   id="userEmailLink" target="_blank" -->

                    <!-- <li><div class ="User-icon"><a   id="userEmailLink"  >Login/Signup</a></div></li> -->
                    
                    <a href="index.php" ><img  src="images/ezCare.jpeg" style="max-width: 150px; float: left; margin: 7px 20px;"></a>
                </ul>
            </div>
        </section>





        
 <!-----body----->



<div class="parallax" style="padding-bottom: 100px;"></div>

<div class="text-box">

           <h1 style="color: #006eff;"><span style="color:#36f4ae ;">ez|</span>Care</h1>
           <p style=" font:bold;  color:white; " >When you are in need of care, you know where to go.</p>
           <a href="services.php" class="about-btn">Book an Appointment</a>

       </div> 




<section class = "main-page-section-2" >

<div class="main-page-contianer">

<div class= "main-page-div-1 reveal">

<h2 >Our Services</h2>

<p> Experienced general practitioners who have an eye for your care</p>

</div>

<div class="main-page-div-2 reveal">

        
     <div class="containers-main-page">
             <h3>Xray</h3>
                    <p>An X-ray is a quick and painless procedure commonly used to produce images of the inside of the body.
                       It's a very effective way of looking at the bones and can be used to help detect a range of conditions.
                      </p>

       </div>
            
        <div class="containers-main-page">
                    <h3>Cardiology</h3>
                    <p>Our experts cardiologists are well trained to deal with the heart and blood 
                      vessels — including heart rhythm disorders, coronary artery disease, heart attacks, heart defects and infections, and related disorders.</p>

        </div>

        <div class="containers-main-page">
                    <h3>Laboratory</h3>
                    <p>Our facility provides controlled conditions in which scientific or technological research, experiments, and measurement may be performed..</p>

        </div>

        <div class="containers-main-page">
                    <h3>General Surgery</h3>
                    <p>Expert level specialist with high discipline of surgery, having a central core of knowledge embracing anatomy, physiology, metabolism, immunology, 
                        nutrition, pathology, wound healing, and many more!.</p>

        </div>

        <div class="containers-main-page">
                    <h3>Cardiology</h3>
                    <p>Our experts cardiologists are well trained to deal with the heart and blood 
                      vessels — including heart rhythm disorders, coronary artery disease, heart attacks, heart defects and infections, and related disorders.</p>

        </div>


        <div class="containers-main-page">
                    <h3>Pediatrics</h3>
                    <p>Our pediatrics professionals are trained for everything that involves the medical care of infants, children, adolescents, and young adults.</p>

        </div>


        <div class="containers-main-page">
                    <h3>Medical Imaging</h3>
                    <p>Medical imaging, also known as radiology, is the field of medicine in which ez|Care medical professionals recreate various images of parts of the body for diagnostic or treatment purposes.</p>

        </div>

        <div class="containers-main-page">
                    <h3>Cardiology</h3>
                    <p>Our experts cardiologists are well trained to deal with the heart and blood 
                      vessels — including heart rhythm disorders, coronary artery disease, heart attacks, heart defects and infections, and related disorders.</p>

        </div>

        <!-- <div class="containers-main-page">
                    <h3>Obstetrics</h3>
                    <p>Obstetrics is the field of study concentrated on pregnancy, childbirth and the postpartum period.</p>

        </div>

        <div class="containers-main-page">
                    <h3>Physiotherapy</h3>
                    <p>Physiotherapy, is one of the allied health professions. It is provided by physical therapists who promote, maintain, or restore health through many physiotherapy efforts.</p>

        </div> -->

          

</div>
</div>

</section>








<script>
    window.addEventListener('scroll' ,reveal)

function reveal(){
  var reveals=document.querySelectorAll('.reveal')
  for(var i=0; i<reveals.length; i++){
    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top

    var revealpoint = 150;

    if(revealtop <windowheight -revealpoint) {
      reveals[i].classList.add('active1');
    }
    else{
      reveals[i].classList.remove('active1');
    }

  }

}
</script>
    


    
<div class="parallax" style="display: none;"></div>



        <section class="photoroll">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <img src="images/2.png" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/3.png" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                  <img src="images/4.png" style="width:100%">
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
                <script>
                let slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 4000); // Change image every 4 seconds
                }
                </script>
        </section> 

        <hr>


<!-----Information----->

        <section class="info">
            <h1>Aeon Technologies</h1>
            <p>We strive to offer easy and modern platforms to close the gap between technology and society.<br>ezCare allows for fast and hastle free appointment submittions, 
            and makes for a reliable portal for Karl Heusner Memorial Hospital.
            </p>
            <div class="row">
                <div class="info-col">
                    <h3>Micheal Scott<br>4.5/5 <i class="fa-solid fa-star" style="color:#FFD93D"></i></h3>
                    <P>I found ezCare to be very easy and useful for creating appointments, my grandmother approves of this service :)</P>
                </div>
                <div class="info-col">
                    <h3>James Fargoh<br>4.3/5 <i class="fa-solid fa-star" style="color:#FFD93D"></i></h3>
                    <P>Very reliable and easy to use, thumbs up for this website!</P>
                </div>
                <div class="info-col">
                    <h3>Nicole Anderson<br>5/5 <i class="fa-solid fa-star" style="color:#FFD93D"></i></h3>
                    <P>Love this service; had a medical emergency not too long ago, this service made it fast and easy to create and account and make an appointment, thank you! </P>
                </div>
            </div>
        </section>

        <hr>
        


        <section class="footer">
            <div class="container">
            <p>To access and use all the features of ez|Care, you must login or create an account before attempting to make an appointment or use other services. Create an account or login by clicking > Create account < on the top right corner, and follow all steps for easy setup.<br><br>
                Available for qualifying applicants in the country of Belize.<br><br>
                Ez|Care is issued by Aeon Inc, Belize City, Belize.<br><br>
                <!-- Learn more about ez|Care at yoh mamas house :)</p><br> -->
                <hr>
                <p>Copyright <i class="fa-regular fa-copyright"></i> 2023 Aeon Inc. All rights reserved.</p>
            </div>
        </section>
        
    </body>




    <script src="main.js"></script>
</html>