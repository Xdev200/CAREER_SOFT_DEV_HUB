<!doctype HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Career Soft</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="shortcut icon" href="images/Favicon.png">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <style>
            .card{
            padding:0 0 0 0 !important;  
            margin: 0 0 0 0 !important;
            }
        </style>
    </head>
    <body> 
        <div class="container-fluid">
            <div class="row header" style="position:fixed;width:100%;z-index: 1000;">
                <div class="col l12 m12 s12 header_content" style="padding:0 0 0 0">
                    <h2 class="card center  white-text header_content_1" style="background: #56ccf2; 
                    background: -webkit-linear-gradient(to right, #56ccf2, #2f80ed); 
                    background: linear-gradient(to right, #56ccf2, #2f80ed);height: 68px">CAREER SOFT DEVELOPMENT HUB <br></h2>
                    
                </div>  
            </div>
            <br><br><br>
            <div class="row " style="text-align: justify;padding: 0 0 0 0">
                <div class="col s12  " style="position:fixed;width:100%;z-index: 100">
                  <ul class="tabs card" id="tabs-swipe-demo">
                    <li class="tab col s2"><a href="#home" class="active black-text card">Home</a></li>
                    <li class="tab col s2"><a href="#about" class="black-text card">About</a></li>
                    <li class="tab col s2"><a href="#service" class="black-text card">Service</a></li>
                    <li class="tab col s2"><a href="#course" class="black-text card">Course</a></li>
                    <li class="tab col s2"><a href="#register" class="black-text card">ENQUIRY</a></li>
                    <li class="tab col s2"><a href="#contact" class="black-text card">Contact</a></li>
                  </ul>
                   
                </div>
                <br><br><br><br>
                <div id="home" class="col s12 " >
                    <?php include "slider.php"; ?>
                </div>

                <div id="about" class="col s12 purple white-text" >
                    <p class="col l7 " style="text-align:justify;margin: 0 0 0 20%;font-size: 18px">
                        Career Soft Development Hub (CSDH) is an institute, which provide different kind of education 
                        & training, under one single arena.
                        In todays competative days we use to guide our students through easy and logical way by our dedicated 
                        faculties. Theoritical and practicle education are the two base of successful career and our insititue 
                        mainly focuses in these two fields.<br><br>
                        We provide various facilities those are:-<br>
                        
                        1) Digital Audio Visual classes ( To Make education more understandable, Convenient and interesting).<br>
                        2) Industrial training (To provide practicle training).<br>
                        3) Tution classes for secondary and higher Secondary level (To give special education for school students by dedicated faculties).<br>
                        4) Basic training for beginners and aged people (To give education for various age groups).<br>
                        5) Government Service preparation (to prepare for various govt. exams like Bank,LIC, GIC, SSC etc.)<br>
                        6) Special Classes related to computer ( To make computer and its features more understandable).
                        
                    </p>
                </div>

                <div id="service" class="col s12" >

                </div>

                <div id="course" class="col s12" >

                </div>

                <div id="register" class="col s12"  >
                    <?php include "enquiry.php"; ?>
                </div>

                <div id="contact" class="col s12" >
                    <?php include "contact.php"; ?>
                </div>
        
            </div>
            <div class="row">
                <!--<br><br><br><br><br><br><br><br><br>-->
               
            </div>
            <div class="row">
                <?php include "footer.php"; ?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.27&key=AIzaSyChLfGdvanvbVoh-TWQ0QP9fdDcykVoTOs'></script>
       <script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(22.8204087,86.1652679),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.8204087,86.1652679)});infowindow = new google.maps.InfoWindow({content:'<strong>CAREER SOFT DEVELOPMENT HUB</strong><br>139 KHUTADIH SONARI JAMSHEDPUR<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        
       
       <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
