<?php
    include 'connection.php';
    if(isset($_POST['submit'])){

      $name=$_POST['name'];
      $email=$_POST['email'];
       $phone=$_POST['phone'];
      $password=$_POST['password'];

       $sql="insert into user(username,email,Phone_number,Password) values('$name','$email','$phone','$password')";
       $result=mysqli_query($mysql1,$sql);
       /*if($result){
        echo"The data is inseret.....!";
      }else{
          die(mysqli_error($conn));
      }*/
}
?>
<?php
     include "connection.php";
    if(isset($_POST['display'])){
      $name1=$_POST['name1'];
      $email1=$_POST['email1'];
      $message=$_POST['message'];
      $sql1="insert into contact(name,email,message) values ('$name1','$email1','$message')";
      $result=mysqli_query($mysql1,$sql1);
      if($result){
       echo"sucessfully data is inserted.....!";
     }else{
      die(mysqli_error($conn));
     }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>soil_testing</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery-v2.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Full-Video-Background-v2.css">
    <link rel="stylesheet" href="assets/css/Central-Aligned-Clear-Nav.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/ml-video-1.css">
    <link rel="stylesheet" href="assets/css/ml-video.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-7.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-9.css">
</head>

<body class="m-0">
    <div class="row m-0" id="nev_bar_main">
        <div class="col" id="nav_bar">
            <div class="row" id="search_input" style="display: none;">
                <div class="col-12" id="search_bar1"><input type="search" data-aos="zoom-in" data-aos-duration="100" data-aos-delay="100" class="w-100 pull- center my-2 center" style="height: 57px;/*position: absolute;*//*padding-left: 121px;*//*left: 131px;*/border-radius: 1px solid #eeeeee;">
                    <label
                        data-aos="fade-up" data-aos-delay="750" class="ml-4 mt-2" style="border-radius: 10px;background-color: #443222;height: 55px;/*margin: 23px;*/width: 75px;position: absolute;/*left: 1241px;*/bottom: 2px;padding: 0px;top: 1px;right: 12px;"><i class="icon ion-android-search" style="position: absolute;font-size: 38px;bottom: 2px;left: 22px;color: #fbf7f7;"></i></label>
                </div>
            </div>
            <div class="row" id="search_icon">
                <div class="col-2" style="height: 55px;"><i class="fa fa-search" style="position: absolute;left: 113px;bottom: 15px;font-size: 26px;" onclick="$(&quot;#search_input&quot;).toggle();"></i></div>
                <div class="col-8" style="height: 55px;"><img src="assets/img/Soil.png" style="position: absolute;/*font-size: 4px;*/height: 69px;left: 434px;/*padding-left: 401px;*//*padding-bottom: 25px;*/bottom: -14px;/*font-size: 159px;*/"></div>
                <div class="col-2" style="width: 190px;height: 55px;"><label class="col-form-label ml-4 mt-2" style="background-color: #443222;height: 42px;width: 124px;position: absolute;left: 59px;border-radius: 31px;"><a href="#" style="position: absolute;left: 47px;font-size: 18px;color: #fff;" onclick="$(&quot;#about&quot;).hide();$(&quot;#contact_us&quot;).hide();$(&quot;#video&quot;).hide();$(&quot;#products&quot;).hide();$(&quot;#reisiter11&quot;).hide();$(&quot;#login11&quot;).show();$(&quot;#bg-black&quot;).show();$(&quot;#first_page&quot;).show();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();">login&nbsp;</a></label></div>
            </div>
            <div class="row" id="Nav_Bar">
                <div class="col-12">
                    <nav class="navbar navbar-light navbar-expand-md nav-main-wrapper">
                        <div class="container-fluid">
                            <div><a class="navbar-brand" href="#" style="color: #eeeeee;">Soil Testing</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                            <div
                                class="collapse navbar-collapse" id="navcol-1">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: #eeeeee;" onclick="$(&quot;#about&quot;).hide();$(&quot;#contact_us&quot;).hide();$(&quot;#video&quot;).hide();$(&quot;#products&quot;).hide();$(&quot;#reisiter11&quot;).hide();$(&quot;#login11&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).show();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #eeeeee;" onclick="$(&quot;#about&quot;).show();$(&quot;#contact_us&quot;).hide();$(&quot;#video&quot;).hide();$(&quot;#products&quot;).hide();$(&quot;#reisiter11&quot;).hide();$(&quot;#login11&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).hide();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();">About Us</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #eeeeee;" onclick="$(&quot;#about&quot;).hide();$(&quot;#contact_us&quot;).hide();$(&quot;#video&quot;).hide();$(&quot;#products&quot;).show();$(&quot;#reisiter11&quot;).hide();$(&quot;#login11&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).hide();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();">SENSORS&nbsp;&amp; Info&nbsp;</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #eeeeee;" onclick="$(&quot;#about&quot;).hide();$(&quot;#contact_us&quot;).hide();$(&quot;#video&quot;).show();$(&quot;#products&quot;).hide();$(&quot;#reisiter11&quot;).hide();$(&quot;#login11&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).hide();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();">VIDEO&nbsp;</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #eeeeee;" onclick="$(&quot;#about&quot;).hide();$(&quot;#contact_us&quot;).show();$(&quot;#video&quot;).hide();$(&quot;#products&quot;).hide();$(&quot;#reisiter11&quot;).hide();$(&quot;#login11&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).hide();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();">Contact us</a></li>
                                </ul>
                        </div>
                </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <div class="row m-0" id="first_page" style="/*display: none;*/">
        <div class="col-12 offset-0 m-0"><!-- Paradise Slider -->
	<div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#fw_al_001" data-slide-to="0" class="active"></li>
			<li data-target="#fw_al_001" data-slide-to="1"></li>
			<li data-target="#fw_al_001" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">

				<!-- Slide Background -->
				<img src="assets/img/ten.jpg" alt="fw_al_001_01">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">WELCOME</h3>
					<h1 data-animation="animated fadeInUp">SOIL TESING & MANEGMENT</h1>
					<p data-animation="animated fadeInUp">ENHANCING GROWTH, ONE SOIL TEST AT A TIME</p>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/eleven.jpg" alt="fw_al_001_02">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h1 data-animation="animated fadeInUp">OUR MISSION</h1>
					<p data-animation="animated fadeInUp"> "HEALTHY SOIL IS THE FOUNDATION OF LIFE, 
                        NURTURING BOTH CROPS AND ECOSYSTEMS
						ITS SIGNIFICANCE LIES IN SUSTAINING THE PRESENT AND SECURING THE FUTURE."</p>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Third Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/seven.jpg" alt="fw_al_001_03">

				<!-- Slide Text Layer -->
				<div class="fw_al_001_slide">
					<h3 data-animation="animated fadeInUp">ONE EARTH ONE FAMILY</h3>
					<h1 data-animation="animated fadeInUp">SAVE SOIL SAVE EARTH </h1>
					<p data-animation="animated fadeInUp">"EARTH'S FOUNDATION AND LIFE'S SUSTENANCE LIE WITHIN THE SOIL'S EMBRACE, 
                        MAKING ITS HEALTH VITAL FOR OUR FUTURE GROWTH AND PROSPERITY."</p>
				</div>
			</div>
			<!-- End of Slide -->

		</div><!-- End of Wrapper For Slides -->

	</div> <!-- End Paradise Slider -->

	


 <!-- End --></div>
        <div class="col-12 m-0" style="width: 73px;">
            <h1 class="text-center text-secondary border rounded-0 shadow-lg" data-bs-hover-animate="wobble" style="font-style: italic;text-shadow: initial;/*color: rgb(10,2,2);*/font-family: Arbutus, cursive;">About Soil Testing&nbsp;</h1><label class="text-center bounce animated infinite"><br>A soil test can determine fertility, or the expected growth potential of the soil which indicates nutrient deficiencies, potential toxicities from excessive fertility and inhibitions from the presence of non-essential trace minerals. The test is used to mimic the function of roots to assimilate minerals.<br>Soil test may refer to one or more of a wide variety of soil analysis conducted for one of several possible reasons. Possibly the most widely conducted soil tests are those done to estimate the plant-available concentrations of plant nutrients, in order to determine fertilizer recommendations in agriculture.<br><br><br></label>
            <a
                class="text-center" href="#" style="position: absolute;left: 713px;bottom: 21px;">Read More +</a>
        </div>
        <div class="col-12" style="width: 1377px;">
            <div class="row" style="height: 435px;">
                <div class="col" style="height: 0px;">
                    <h1 class="flash animated infinite" style="color: #211916;font-family: Cookie, cursive;height: 80px;width: 451px;">Types Of Soil..</h1>
                </div><div class="accordian" style="width: 1318px;">
    <ul>
        <li><a class="image_title" href="#">Sandy Soil</a><a href="#"><img src="assets/img/sandy%20soil.jpg" /></a></li>
        <li><a class="image_title" href="#">Clay Soil</a><a href="#"><img src="assets/img/cray.jpg" /></a></li>
        <li><a class="image_title" href="#">Loam Soil</a><a href="#"><img src="assets/img/Loam.jpg" /></a></li>
        <li><a class="image_title" href="#">Silt Soil</a><a href="#"><img src="assets/img/Silty.jpg" /></a></li>
        <li><a class="image_title" href="#">Black Soil</a><a href="#"><img src="assets/img/Black.jpg" /></a></li>
        <li><a class="image_title" href="#">Red Soil</a><a href="#"><img src="assets/img/Red.jpg" /></a></li>
    </ul>
</div></div>
        </div>
    </div>
    <div class="row m-0" id="products" style="display: none;">
        <div class="col">
            <div class="row">
                <div class="col-2 shadow" style="height: 285px;"><img class="m-3" src="assets/img/nodeMCU.jpg" style="/*font-size: 48px;*/height: 203px;"><label class="center dip" style="/*position: absolute;*//*left: 50px;*/font-family: Aldrich, sans-serif;"><strong>Nodemcu esp8266</strong></label></div>
                <div
                    class="col-10">
                    <p class="shadow" style="font-family: Aleo, serif;"><br><strong>NodeMCU"&nbsp;refers to the firmware rather than the associated development kits. Both the firmware and prototyping board designs are open source. The firmware uses the Lua scripting language. The firmware is based on the eLua project, and built on the Espressif Non-OS SDK for ESP8266.</strong><br><strong>NodeMCU is a low-cost open source IoT platform. It initially included firmware which runs on the ESP8266 Wi-Fi SoC from Espressif Systems, and hardware which was based on the ESP-12 module. Later, support for the ESP32 32-bit MCU was added.</strong><br><strong>The NodeMCU is available in various package styles. Common to all the designs is the base ESP8266 core. Designs based on the architecture have maintained the standard 30-pin layout. Some designs use the more common narrow (0.9″) footprint, while others use a wide (1.1″) footprint – an important consideration to be aware of.The most common models of the NodeMCU are the Amica (based on the standard narrow pin-spacing) and the LoLin which has the wider pin spacing and larger board. The open-source design of the base ESP8266 enables the market to design new variants of the NodeMCU continually.</strong><br><br><br><br></p>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow" style="height: 285px;"><img class="m-3" src="assets/img/weather_%20iot.jpg" style="/*font-size: 48px;*/height: 220px;width: 181px;/*position: absolute;*/"><label class="dip" style="font-family: Aldrich, sans-serif;"><strong>DHT11 Sensors</strong></label></div>
            <div class="col-10">
                <p class="shadow border-dark" style="font-family: Aleo, serif;height: 292px;"><br><strong>The sensors DHT11 and BMP-280 collect the data in real-time. That data is then converted into electrical signals. These signals are then sent to the Arduino board. Arduino board compiles these signals.</strong><br><strong>The weather station comprises of three parts: collecting the real-time weather data, processing the data in the Arduino board, showing the data to the user on the LCD.The sensors DHT11 and BMP-280 collect the data in real-time. That data is then converted into electrical signals. These signals are then sent to the Arduino board.&nbsp;Arduino board compiles these signals. Then sends the appropriate data in the form of electrical signals to the TFT LCD.&nbsp;The LCD then shows the final output to the user.All these processes happen in real-time. So the data also gets updated in real time.&nbsp;You can 3D print a case to fit all the components as per your needs.&nbsp;</strong><br><strong>The DHT11 is a temperature and humidity sensor. This sensor is very common in robotics projects as this gives out great performance and is very economical.&nbsp;This sensor consist of three main components. They consist of a humidity sensing component, a thermistor and an integrated chip.&nbsp;There is a humidity sensing component which is used to measure the moisture. The humidity sensing component consists of two electrodes with a humidity sensing substrate in between them.</strong>&nbsp;<br><br><br></p>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow" style="height: 269px;"><img class="m-3" src="assets/img/Soil%20moisture.jpg" style="/*font-size: 48px;*/height: 203px;width: 185px;"><label class="dip" style="font-family: Aldrich, sans-serif;"><strong>Soil Moisture Sensors</strong></label></div>
            <div class="col-10">
                <p class="shadow border-dark" style="font-family: Aleo, serif;"><br><strong>soil moisture sensors are commonly used with Arduino for various projects related to gardening, agriculture, or automated plant care. These sensors measure the moisture content in the soil, allowing you to determine when to water your plants.There are different types of soil moisture sensors, but the most commonly used one with Arduino is the FC-28 or similar modules. They usually work on the principle of measuring the resistance between two electrodes, which changes based on the moisture level in the soil.</strong><br><strong> The sensor measures the resistance between its probes. When the soil is moist, it conducts electricity better, resulting in lower resistance. Conversely, dry soil increases resistance.The sensor typically has three pins - VCC (power), GND (ground), and an analog or digital pin for data. You connect VCC and GND to the appropriate Arduino pins and the data pin to an analog or digital pin based on the sensor type.</strong><br><br><br><br></p>
            </div>
        </div>
        <div class="row">
            <div class="col-2 shadow" style="height: 285px;"><img class="m-3" src="assets/img/male_female.jpg" style="/*font-size: 48px;*/height: 203px;"><label class="dip" style="font-family: Aldrich, sans-serif;"><strong>Male-Female wire connector</strong></label></div>
            <div class="col-10">
                <p class="shadow" style="font-family: Aleo, serif;height: 292px;"><br><strong>One popular use for these jumper wires is with microcontrollers such as the Arduino. These boards have a series of pins that control various components and sensors, and&nbsp;with the help of male to female jumper wires, these pins can easily be connected to other components on a breadboard or in a circuit.</strong><br><strong>These are male to female jumper wires used in&nbsp;connecting the female header pin of any development board to other development boards having a male connector. They are simple wires that have connector pins at each end allowing them to be used to connect two points to each other.</strong><br><strong>A male connector is commonly referred to as a plug and has a solid pin for a center conductor. A female connector is commonly referred to as a jack and has a center conductor with a hole in it to accept the male pin.Jumper wires are used for&nbsp;making connections between items on your breadboard and your Arduino's header pins. Use them to wire up all your circuits!</strong><br><br><br><br><br><br></p>
            </div>
        </div>
    </div>
    </div>
    <div class="row m-0" id="video" style="display: none;">
        <div class="col-12">
            <div class="row">
                <div class="col-12" style="height: 611px;"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/wkGkjYXGse4" class="m-3" width="560" height="315" style="width: 1471px;height: 583px;"></iframe></div>
            </div>
        </div>
    </div>
    <div class="row m-0" id="contact_us" style="display: none;">
        <div class="col-12" style="height: 570px;">
            <section class="getintouch">
                <div class="container modern-form">
                    <div class="text-center">
                        <h4 style="color: #212529;font-size: 45px;">Get in touch</h4>
                    </div>
                    <hr class="modern-form__hr">
                    <div class="modern-form__form-container">
                        <form method ="post">
                            <div class="form-row">
                                <div class="col col-contact">
                                    <div class="form-group modern-form__form-group--padding-r">
                                        <input class="form-control input input-tr" type="text" placeholder="First Name" name="name1">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-contact">
                                    <div class="form-group modern-form__form-group--padding-l">
                                        <input class="form-control input input-tr" type="text" placeholder="Email" name="email1">
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group modern-form__form-group--padding-t">
                                        <textarea class="form-control input modern-form__form-control--textarea" placeholder="Message" name="message"></textarea>
                                        <div class="line-box">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col text-center">
                                    <button class="btn btn-primary submit-now" type="submit" name="display">Submit Now</button></div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-12" style="height: 418px;"><label style="color: #8619f3;font-size: 25px;">Google Map:</label><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4fKgEY0bfACRlPyh8bkbFvoNuHLTXbmA&amp;q=Padmabhooshan+Vasantraodada+Patil+Institute+of+Technology%2C+Sangli+-+Tasgaon+Rd%2C+Budhgaon%2C+Maharashtra+416304&amp;zoom=11"
                width="100%" height="400"></iframe></div>
    </div>
    <div class="row full-screen light m-0" id="bg-black" style="width: 1803px;height: 1000px;display: none;">
        <div class="col-4" id="login11" style="/*height: 41px;*/padding: 6px;padding-right: 24px;padding-bottom: 134px;margin: 132px;width: 45px;height: 572px;position: absolute;width: 506px;left: 329px;display: none;">
            <div class="d-flex flex-column justify-content-center" id="login-box">
                <div class="login-box-header">
                    <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Login</h4>
                </div>
                <div class="login-box-content">
                    <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" href="#"><i class="fa fa-facebook" style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>Login with Facebook</a></div>
                    <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" style="margin-bottom:10px;" href="#"><i class="fa fa-google" style="color:rgb(255,255,255);width:56px;"></i>Login with Google+</a></div>
                </div>
                <div class="d-flex flex-row align-items-center login-box-seperator-container">
                    <div class="login-box-seperator"></div>
                    <div class="login-box-seperator-text">
                        <p style="margin-bottom:0px;padding-left:10px;padding-right:10px;font-weight:400;color:rgb(201,201,201);">or</p>
                    </div>
                    <div class="login-box-seperator"></div>
                </div>
                <div class="email-login" style="background-color:#ffffff;"><input type="email" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email" minlength="6"><input type="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password"
                        minlength="6"></div>
                <div class="submit-row" style="margin-bottom:8px;padding-top:0px;"><button class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit">Login</button>
                    <div class="d-flex justify-content-between">
                        <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label></div>
                        <a
                            id="forgot-password-link" href="#">Forgot Password?</a>
                    </div>
                </div>
                <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                    <p style="margin-bottom:0px;">Don't you have an account?<a id="register-link" href="#" onclick="$(&quot;#first_page&quot;).show();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();$(&quot;#login11&quot;).hide();$(&quot;#reisiter11&quot;).show();$(&quot;#bg-black&quot;).show();">Sign Up!</a></p>
                </div>
            </div><i class="fa fa-remove" style="position: absolute;right: 12px;top: 12px;font-size: 22px;/*width: 12px;*/color: #fff;" onclick="$(&quot;#video&quot;).hide();$(&quot;#products&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).show();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();$(&quot;#login11&quot;).hide();"></i></div>
        <div class="col-4" id="reisiter11" style="/*height: 41px;*/padding: 6px;padding-right: 24px;padding-bottom: 134px;margin: 132px;width: 45px;height: 660px;position: absolute;width: 532px;left: 329px;top: -71px;display: none;">
            <div class="d-flex flex-column justify-content-center" id="login-box">
                <div class="login-box-header">
                    <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Register</h4>
                </div>
                <div class="login-box-content">
                <form method="post">
                    <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" href="#"><i class="fa fa-facebook" style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>Login with Facebook</a></div>
                    <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" style="margin-bottom:10px;" href="#"><i class="fa fa-google" style="color:rgb(255,255,255);width:56px;"></i>Login with Google+</a></div>
                </div>
                <div class="d-flex flex-row align-items-center login-box-seperator-container">
                    <div class="login-box-seperator"></div>
                    <div class="login-box-seperator-text">
                        <p style="margin-bottom:0px;padding-left:10px;padding-right:10px;font-weight:400;color:rgb(201,201,201);">or</p>
                    </div>
                    <div class="login-box-seperator"></div>
                </div>
                <div class="email-login" style="background-color:#ffffff;">
                    <input type="text" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Username" minlength="6" name="name">
                    <input type="email" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Email" minlength="6" name="email">
                    <input type="number" class="email-imput form-control" style="margin-top:10px;" required="" placeholder="Phone_number" minlength="6" name="phone">
                    <input type="password" class="password-input form-control" style="margin-top:10px;" required="" placeholder="Password" minlength="6" name="password">
                </div>
                <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
                <button class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit" name="submit">Register Now</button>
                    <div class="d-flex justify-content-between">
                        <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label class="form-check-label" for="formCheck-1"><span class="label-text">Remember Me</span></label></div>
                    </div>
                </div>
                <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                    <p style="margin-bottom:0px;">Already hava a account?<a id="register-link" href="#" onclick="$(&quot;#video&quot;).hide();$(&quot;#first_page&quot;).show();$(&quot;#resister&quot;).hide();$(&quot;#login11&quot;).show();$(&quot;#reisiter11&quot;).hide();">Login!</a></p>
                </div>
            </div><i class="fa fa-remove" style="position: absolute;right: 12px;top: 12px;font-size: 22px;/*width: 12px;*/color: #fff;" onclick="$(&quot;#video&quot;).hide();$(&quot;#products&quot;).hide();$(&quot;#bg-black&quot;).hide();$(&quot;#first_page&quot;).show();$(&quot;#resister&quot;).hide();$(&quot;#login&quot;).hide();$(&quot;#login11&quot;).hide();"></i></div>
    </div>
        </form>
    <div class="row m-0" data-aos="fade" id="about" style="display: none;">
        <div class="col m-0">
            <div class="row m-0" style="/*display: none;*/">
                <div class="col-12" id="abouthead" style="/*display: none;*/">
                    <h1 class="text-center" data-aos="fade-down" style="font-family: Aladin, cursive;"><br>Soil Testing &amp; Mangement<br><br></h1>
                </div>
            </div>
            <div class="row w-100 m-0" style="background-repeat: no-repeat;/*display: none;*/">
                <div class="col-12 shadow-lg mb-5 my-3"><label class="col-form-label my-2" data-aos="zoom-in-left" data-aos-delay="500"><br>Soil testing provides useful information to help people manage their land. A farmer or home gardener might have his/her soil tested to determine how much lime or fertilizer is needed to grow plants and/or avoid over-applying nutrient sources like manure. Parents might test the soil in their yard to see if hazardous amounts of&nbsp;lead&nbsp;or&nbsp;arsenic&nbsp;are present before installing a backyard playset for their children, or before beginning a new vegetable garden. Archeologists use soil testing to learn about past land use at historical sites. Scientists test soil to monitor the effects of new management practices on soil properties and environmental conditions.&nbsp;Measuring soil moisture content can be done in several different ways, such as&nbsp;the alcohol method, the radiation method, the sand bath method, the Pycnometer method, the torsion balance method, the calcium carbide, and the oven-drying method.&nbsp;In agriculture, a soil test commonly refers to&nbsp;the analysis of a soil sample to determine nutrient content, composition, and other characteristics such as the acidity or pH level.&nbsp;<br>Soil testing is a process used to analyze the composition and quality of soil. It provides valuable information for various purposes, such as agriculture, construction, environmental studies, and landscaping. Here are some key aspects of soil testing.&nbsp;<br>Soil testing involves collecting soil samples from different parts of a field or garden, which are then sent to a laboratory for analysis. The laboratory tests the samples for key parameters such as&nbsp;microbial activity, disease risks, pH, nutrient levels, organic matter content, and more.<br></label></div>
                <div
                    class="col-10 offset-1 align-self-center shadow-lg" data-aos="fade" data-aos-delay="400">
                    <h1 class="text-center" data-aos="fade" data-aos-delay="350" style="font-family: Aladin, cursive;">Project Made by</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-left">
                                    <th><br>Basic Information<br></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left"><br>Rohan Bhopale</td>
                                    <td class="text-left"><br>T.Y (CS(AI&amp;DS))</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Aniruddha Sawant</td>
                                    <td class="text-left">T.Y (CS(AI&amp;DS))<br></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Sourabh Kurna</td>
                                    <td class="text-left">T.Y (CS(AI&amp;DS))<br></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Prathmesh Patil</td>
                                    <td class="text-left">T.Y (CS(AI&amp;DS))<br></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="col-10 offset-1 shadow-lg mb-5" data-aos="fade-up-right" data-aos-delay="350"><i class="fa fa-star" style="position: absolute;left: 22px;bottom: 423px;font-size: 8px;"></i>
                <h1 class="text-left" data-aos="fade" style="font-size: 30px;font-family: Aladin, cursive;"><br><strong>Memberships / Affiliations</strong><br></h1><label class="text-left w-100">The company has been certified with&nbsp; in the year 2022.<br><br></label>
                <h1 class="text-left mb-5" data-bs-hover-animate="bounce" style="height: 9px;font-size: 30px;font-family: Aladin, cursive;"><strong>Our Motto</strong><label></label><br></h1><label class="text-left w-100" style="/*width: 313px;*/height: 115px;left: 0;padding: 3px;">&nbsp; &nbsp; &nbsp;Gunvatta &amp; Suvidha - Ability &amp; Convinience&nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp;Service Ability<br>&nbsp; &nbsp; &nbsp;Quality<br>&nbsp; &nbsp; &nbsp;Prosperity<br>&nbsp; &nbsp; &nbsp;Reliability with Excellence<br><br></label>
                <h1
                    class="text-left p" style="font-family: Aladin, cursive;font-size: 30px;"><strong>Our Vision</strong><br></h1><label class="text-left w-100" style="height: 127px;">&nbsp; &nbsp; &nbsp;We believe that the customer is the very purpose of our existence.<br>&nbsp; &nbsp; &nbsp;We work as a team to achieve quality and excellence in all our activities leading to continuous growth.<br>&nbsp; &nbsp; &nbsp;We ought to continuously improve employee satisfaction as well as customer satisfaction, to be better than the best&nbsp;<br>&nbsp; &nbsp; &nbsp;We assure to provide quality products &amp; services to customers.<br>&nbsp; &nbsp; &nbsp;We will continue to make deeper inroads in maintaining good relations with the existing customer &amp; to create it with new ones.<br><br><br>.<br><br><br></label>
                    <i
                        class="fa fa-circle icon_circle" style="position: absolute;left: 22px;bottom: 423px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 399px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 374px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 353px;font-size: 8px;"></i>
                        <i
                            class="fa fa-circle" style="position: absolute;left: 22px;bottom: 327px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 226px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 200px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 177px;font-size: 8px;"></i>
                            <i
                                class="fa fa-circle" style="position: absolute;left: 22px;bottom: 153px;font-size: 8px;"></i><i class="fa fa-circle" style="position: absolute;left: 22px;bottom: 128px;font-size: 8px;"></i></div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Groupmember Photo:</h1>
                <div class="container">
                    <div class="row fbox3">
                        <div class="col-sm-4 d-flex justify-content-center align-items-center"><a data-fancybox="gallery" data-caption="Prathmesh Patil" href="assets/img/Screenshot_20231127_204657_Instagram.jpg"><img class="img-fluid" src="assets/img/Screenshot_20231127_204657_Instagram.jpg" alt="Prathmesh Patil"><label style="padding-left: 112px;">Prathmesh Patil</label></a></div>
                        <div class="col-sm-4 d-flex justify-content-center align-items-center"><a data-fancybox="gallery" data-caption="Rohan Bhopale" href="assets/img/Screenshot_20231127_195816_Instagram.jpg"><img class="img-fluid" src="assets/img/Screenshot_20231127_195816_Instagram.jpg" alt="Rohan Bhople"><label style="padding-left: 114px;">Rohan Bhopale</label></a></div>
                        <div class="col-sm-4 d-flex justify-content-center align-items-center"><a data-fancybox="gallery" data-caption="Sourabha Kurna" href="assets/img/Screenshot_20231127_205107_Instagram.jpg"><img class="img-fluid" src="assets/img/Screenshot_20231127_205107_Instagram.jpg" alt="Hero Image Nature"><label style="padd\padding: 114px;">Sourabh Kurna</label></a></div>
                        <div class="col-sm-4 d-flex justify-content-center align-items-center"><a data-fancybox="gallery" data-caption="Aniruddha Sawant" href="assets/img/Screenshot_20231127_205057_Instagram.jpg"><img class="img-fluid" src="assets/img/Screenshot_20231127_205057_Instagram.jpg" alt="Aniruddha sawant"><label>Aniruddha sawant</label></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="m-0 ml-0 mt-4">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Soil<span>&nbsp;Testing&nbsp;</span>&nbsp;</a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@company.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    <script src="assets/js/ml-video.js"></script>
    <script src="assets/js/Swipe-Slider-9.js"></script>
</body>
</html>