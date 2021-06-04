 <!DOCTYPE html>
<!-- DECLARE LANGUAGE OF THE WEB PAGE -->
<html lang = "en">
    <head>
        <meta charset="UTF-8">
<!-- FOR MOBILE DEVICES -->
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>ELITE Autoglass | Vitres d'autos ELITE</title>
        <link rel="stylesheet" type = "text/css"
        href="css/autoelite.css">
    </head>

<body>
<!-- BODY BORDER LINE -->
<div id="body_elm">


<section id = "s0">
    <!-- PHP action page -->
    <div id="alertMessage">
    <!-- Alert Message -->
<!--       <p>test</p>-->
        <?php include('php/action_page.php'); ?>
    </div>
</section>


<!-- NAVIGATION -->
    <nav id="n1">
        <a class="tl" href="tel:5146343548">tel: (514) 634-3548</a>
        <a class = "wh" href="">work hours: mon-fr 8am-5pm</a>
        <a class = "fb" href="https://www.facebook.com/EliteDorval" target="_blank">facebook</a>
        <a href = "index.php" class="current">EN</a>
        <a href = "index_fr.php">FR</a>
    </nav>

<!-- BODY -->

<!-- SECTION SCROLL TO TOP -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<!-- END OF SCROLL GO TO TOP -->


<!-- SECTION S1 FOOTER -->
<section id = "s1">
<figure class = "container">
  <picture>
    <!-- change main img on cell phone -->
    <source media = "(max-width: 599px)" srcset = "images/header/c6z6_vette_and_subaru.jpg">
    <img src = "images/header/C6_Z06_Vette.jpg" 
    alt = "car-footer">
  </picture>
</figure>
</section>
<!-- END OF SECTION S1 FOOTER -->


<!-- SECTIONS S2 SERVICES -->
<section id = "s2">
        <hgroup>
            <h2>ELITE Autoglass</h2>
            <h3>Services:</h3>       
        </hgroup>

        <article class="serv">
            <p id = "sc1">Professional auto glass repair</p>
            <hr>
        </article>
        <article class="serv">
            <p id = "sc2">Replacement services approved by insura</p>
            <hr>
        </article>
        <article class="serv">
            <p id = "sc3">At vero eos et accusamus et iusto odio dignissimos</p>
            <hr>
        </article>
        <article class="serv">
            <p id = "sc4">Duis aute irure dolor in reprehenderit</p>
            <hr>
        </article>
        <article class="serv">
            <p id = "sc5">Neque porro quisquam est</p>
            <hr>            
        </article>
</section>
<!-- END OF SECTIONS S2 SERVICES -->


<!-- SECTION S3 ELITE AUTOGLASS / VITRES D'AUTOS ELITE PHOTOS -->
<section id = "s3">
    <!-- Container for the image gallery -->
    <div class="container">

      <!-- Full-width images with number text -->
      <div class="mySlides">
        <div class="numbertext">1 / 12</div>
          <img src="images/slideShowGallery/BMW_E36_M3_in_for_a_brand_new_windshield.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 12</div>
          <img src="images/slideShowGallery/Mercedes_Benz_S550_tires_balancing_brakes_service.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 12</div>
          <img src="images/slideShowGallery/Beautiful_built_C6_Z06_Vette_in_for_some_work.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 12</div>
          <img src="images/slideShowGallery/Mercedes_Benz_CLA45_AMG_in_for_new_windshield.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 12</div>
          <img src="images/slideShowGallery/Supercharged_Shelby_GT500.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 12</div>
          <img src="images/slideShowGallery/BMW_E92_M3_in_for_new_tires.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">7 / 12</div>
          <img src="images/slideShowGallery/Audi_RS3.jpg" style="width:100%">
      </div>  

      <div class="mySlides">
        <div class="numbertext">8 / 12</div>
          <img src="images/slideShowGallery/Porsche_991_Turbo_S_chipr_repair.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">9 / 12</div>
          <img src="images/slideShowGallery/Subaru_WRX_timing_belt_and_tensionner_replacement.jpg" style="width:100%">
      </div>  

      <div class="mySlides">
        <div class="numbertext">10 / 12</div>
          <img src="images/slideShowGallery/Mercedes_Benz_SL63_AMG_in_for_electronical_addons.jpg" style="width:100%">
      </div>  
      
      <div class="mySlides">
        <div class="numbertext">11 / 12</div>
          <img src="images/slideShowGallery/elite_autoglass.jpg" style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">12 / 12</div>
          <img src="images/slideShowGallery/office.jpg" style="width:100%">
      </div>  

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <!-- Image text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <!-- Thumbnail images -->
      <div class="row">
        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/BMW_E36_M3_in_for_a_brand_new_windshield.jpg" style="width:100%" onclick="currentSlide(1)" alt="BMW E36 M3 in for a brand new windshield">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Mercedes_Benz_S550_tires_balancing_brakes_service.jpg" style="width:100%" onclick="currentSlide(2)" alt="Mercedes Benz S550 tires, balancing, brakes service">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Beautiful_built_C6_Z06_Vette_in_for_some_work.jpg" style="width:100%" onclick="currentSlide(3)" alt="Beautiful built C6 Z06 Vette in for some work">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Mercedes_Benz_CLA45_AMG_in_for_new_windshield.jpg" style="width:100%" onclick="currentSlide(4)" alt="Mercedes Benz CLA45 AMG in for new windshield">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Supercharged_Shelby_GT500.jpg" style="width:100%" onclick="currentSlide(5)" alt="Supercharged Shelby GT500 in for some work">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/BMW_E92_M3_in_for_new_tires.jpg" style="width:100%" onclick="currentSlide(6)" alt="BMW E92 M3 in for new tires">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Audi_RS3.jpg" style="width:100%" onclick="currentSlide(7)" alt="Audi RS3 in for some work">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Porsche_991_Turbo_S_chipr_repair.jpg" style="width:100%" onclick="currentSlide(8)" alt="Porsche 991 Turbo S chip repair">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Subaru_WRX_timing_belt_and_tensionner_replacement.jpg" style="width:100%" onclick="currentSlide(9)" alt="Subaru WRX timing belt and tensionner replacement">
        </div>

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/Mercedes_Benz_SL63_AMG_in_for_electronical_addons.jpg" style="width:100%" onclick="currentSlide(10)" alt="Mercedes Benz SL63 AMG in for electronical addons">
        </div>
        
        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/elite_autoglass.jpg" style="width:100%" onclick="currentSlide(11)" alt="ELITE Autoglass">
        </div> 

        <div class="column">
          <img class="demo cursor" src="images/slideShowGallery/office.jpg" style="width:100%" onclick="currentSlide(12)" alt="Our office">
        </div>             

      </div>
    </div> 
</section>
<!-- END OF SECTION S3 ELITE AUTOGLASS / VITRES D'AUTOS ELITE PHOTOS -->


<!-- SECTION S4 WARRANTY -->
<section id = "s4">
    <hgroup>
        <h3>Warranty</h3>
    </hgroup>

    <article>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        &nbsp;
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
    </article>
</section>
<!-- END OF SECTION S4 WARRANTY -->


<!-- SECTION S5 ADDRESS AND MAP -->
<section id = "s5">
    <div class="flex-container">
        <div class="flex-item-left-address">
            <hgroup>
                <h3>Address:</h3>
            </hgroup>
            <article>
                <p>733 Avenue Meloche</p>
                <p>Dorval, QC H9P 2S4</p>
                &nbsp;
                <p>Tel: (514) 634-3548</p>
                &nbsp;
                <p>Work hours: mon-fr 8am-5pm</p>
            </article>
        </div>
        <div class="flex-item-right-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.6154449677483!2d-73.73022015007652!3d45.45740487899831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91798895605c5%3A0xb42a94b8971496ec!2sElite%20Auto%20glass!5e0!3m2!1sen!2sca!4v1618154300194!5m2!1sen!2sca" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!-- END OF SECTION S5 ADDRESS AND MAP -->


<!-- SECTION 6 CONTACT US -->
<section id = "s6">
    <!-- Header Contact Us -->
    <hgroup>
        <h3>Countact Us</h3>
    </hgroup> 


    <!-- Contact Form -->
    <form action="" name="contactForm" id = "contactForm" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">

    
     <!-- Responsive FlexBox for Contact Form -->
     <div class = "flex-contactForm">
     
      <div class="CF_FirstName">
        <!-- <label>First Name</label> -->
        <input type="text" class="form-control" name="f_name" id="f_name"
        onclick="clearFirstName();"
        placeholder="First Name.."
        maxlength="20"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error first name-->
        <!-- set max length 20 -->
        <p id="error_fn"></p>
      </div>
      
      <div class="CF_LastName">
        <!-- <label>Last Name</label> -->
        <input type="text" class="form-control" name="l_name" id="l_name"
        onclick="clearLastName();" 
        placeholder="Last Name.."
        maxlength="20"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error last name-->
        <!-- set max length 20 -->
        <p id="error_ln"></p>
      </div>      

      <div class="CF_Email">
        <!-- <label>Email</label> -->
        <input type="text" class="form-control" name="email" id="email"
        onclick="clearEmail();" 
        placeholder="Email.."
        maxlength="40"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error email-->
        <!-- set max length 40 -->
        <p id="error_email"></p>        
      </div>

      <div class="CF_Phone">
        <!-- <label>Phone</label> -->
        <input type="text" class="form-control" name="phone" id="phone"
        onclick="clearPhone();"
        placeholder="Phone Number.."
        maxlength="15"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error phone-->
        <!-- set max length 15 -->
        <p id="error_phone"></p>
      </div>
      
      <div class="CF_Car">
        <!-- <label>Car Make</label> -->
        <input type="text" class="form-control" name="car" id="car"
        onclick="clearCar();"
        placeholder="Car Make.."
        maxlength="20"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error car-->
        <!-- set max length 20 -->
        <p id="error_car"></p>
      </div>
      
      <div class="CF_CarModel">
        <!-- <label>Car Model</label> -->
        <input type="text" class="form-control" name="model" id="model"
        onclick="clearModel();"
        placeholder="Car Model.."
        maxlength="20"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error model-->
        <!-- set max length 20 -->
        <p id="error_model"></p>
      </div>
      
      <div class="CF_ModelYear">
        <!-- <label>Model Year</label> -->
        <input type="text" class="form-control" name="year" id="year"
        onclick="clearYear();"
        placeholder="Model Year.."
        maxlength="5" 
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error year-->
        <!-- set max length 5 -->
        <p id="error_year"></p>
      </div>

      <div class="CF_Subject">
        <!-- <label>Subject</label> -->
        <input type="text" class="form-control" name="subject" id="subject"
        onclick="clearSubject();"
        placeholder="Subject.."
        maxlength="40"
        >
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error subject-->
        <!-- set max length 40 -->
        <p id="error_subject"></p>
      </div>

      <div class="CF_Message">
        <!-- <label>Message</label> -->
        <textarea class="form-control" name="message" id="message" rows="4"
        onclick="clearMessage();"
        placeholder="Message.."
        ></textarea>
        <!-- use onclick event to catch an error message -->
        <!-- use id for the error message-->
        <p id="error_message"></p>        
      </div>
      
      
      <!-- End of Responsive FlexBox for Contact Form -->
      </div> 

      <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
    </form>
  
</section>
<!-- END OF SECTION 6 CONTACT US -->


<!-- SECTION 7 PARTNERS AND CLIENTS -->
<section id = "s7">
    <hgroup>
        <h3>Partners and Clients</h3>
    </hgroup>
    
    <div class = "flex-cont-part-clients">
       <div class = "abrisocorp">
            <!-- link to Abrasicorp -->
            <a href="http://www.abrasicorp.ca/" target="_blank">
                <!-- abrasicorp logo -->
                <img src="images/PartnersClientsLogo/abrisocorp/abrasicorp.png" alt="" id="abriso_corp">
            </a>
       </div>
       <div class = "smart_start_ca">
            <!-- link to smart Start Canada -->
            <a href="https://www.smartstartcanada.ca" target="_blank">
                <!-- smart Start Canada logo -->
                <img src="images/PartnersClientsLogo/smartStartCanada/smartStartCanada.png" alt="" id="sm_st_ca">
            </a>
       </div>
       <div class = "globe">
            <!-- link to Globe -->
            <a href="https://globefire.com" target="_blank">
                <!-- Globe logo -->
                <img src="images/PartnersClientsLogo/globe/globe.png" alt="">
            </a>
       </div>
       <div class = "mko">
            <!-- link to MKO -->
            <a href="https://www.mkocanada.com" target="_blank">
                <!-- MKO logo -->
                <img src="images/PartnersClientsLogo/mko/mko.png" alt="" id="mko_ca">
            </a>
       </div>
    </div>
</section>
<!-- END OF SECTION 7 PARTNERS AND CLIENTS -->


<!-- FOOTER -->
<footer>
    <p>Designed by Yuriy Kashpirenko, 2021 &copy;</p>
</footer>


<!-- JAVA SCRIPTS -->
<script src="js/jscripts.js"></script>
<script src="js/c_form.js"></script>

<!-- END OF BODY BORDER LINE -->
</div>

</body>
</html> 
