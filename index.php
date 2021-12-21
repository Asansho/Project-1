<!DOCTYPE php>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mountain King - Bootstrap Template</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/theme.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/pushy.css">
        <link rel="stylesheet" href="assets/css/masonry.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
        <script>
        window.odometerOptions = {
          selector: '.odometer',
          format: '(,ddd)', // Change how digit groups are formatted, and how many digits are shown after the decimal point
          duration: 13000, // Change how long the javascript expects the CSS animation to take
          theme: 'default'
        };
        </script>
   </head>
    <body class="">
    <?php
      $menu = array("#home" => "Home",
      "#feat" => "Features",
      "#about" => "About me",
      "#news" => "My Blog",
      "Partner" => "my Partner",
      "#history" => "My History",
      "#photos" => "Look my Photos",
      "#contact" => "Get in Touch!",
      "http://www.themeinthebox.com/ourtheme/mountain-king-bootstrap-template/" =>"Download");
      ?>
      <nav class="pushy pushy-left">
      <ul class="list-unstyled">
          <?php foreach ($menu as $key => $value) {
              echo '<li><a href="'.$key.'">'.$value.'</a></li>';
          }
          ?>
          </ul>
        </nav>

     <!--  <nav class="pushy pushy-left">
        <ul class="list-unstyled">
            <li><a href="#home">home</a></li>
            <li><a href="#feat">Features</a></li>
            <li><a href="#about">About me</a></li>
            <li><a href="#news">My Blog</a></li>
            <li><a href="#history">My History</a></li>
            <li><a href="#photos">Look my Photos</a></li>
            <li><a href="#contact">Get in Touch!</a></li>
            <li><a href="http://www.themeinthebox.com/ourtheme/mountain-king-bootstrap-template/" target="_blank">Download</a></li>
        </ul> -->
      </nav>
      <!-- Site Overlay -->
      <div class="site-overlay"></div>

        <header id="home">
            <div class="container-fluid">
                <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-10">
                            <a href="#" class="thumbnail logo">
                                <img src="images/your_logo.png" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-1 col-md-offset-8 col-xs-2 text-center">
                          <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                        </div>
                    </div>
                    <div class="jumbotron">
                        <h1><small>In the Pamirs .</small></br>
						<strong>Mountain King</strong></h1>
                        <p>
                        <?php echo mb_substr("This is a simple hero unit, a simple jumbotron-style component for<br>
calling extra attention to featured content or information.</p>",0,40);'...'
						?>
                        </p>
                        <p><a class="btn btn-primary btn-lg" role="button">Learn more</a> <a target="_blank" href="http://www.themeinthebox.com/ourtheme/mountain-king-bootstrap-template/" class="btn btn-lg btn-danger" role="button">Download</a></p>
                    </div>
                </div>
            </div>
        </header>
        <section id="feat">
            <div class="container">
                <div class="row features">
                        <?php //Моки                        
                       $teaser = array (
                           array(
                               "icon" => 'typcn-pencil',
                               "title" => "Consectetur Risus",
                               "text" => "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit."
                           ),
                           
                           array(
                               "icon" => "typcn-camera-outline",
                               "title" => "Ultricies Aenean",
                               "text" => "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla."
                           ),

                           array(
                               "icon" => "typcn-bookmark",
                               "title" => "Cras Sollicitudin",
                               "text" => "Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum."
                           )
                        );
                       for ($row = 0; $row < 3; $row++){
                           echo '<div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                           <span class="typcn '.$teaser [$row] ["icon"].' x3">,</span>
                           <h4>'.$teaser [$row] ["title"].'</h4>
                           <p>'.$teaser [$row] ["text"].'</p>
                       </div>';
                       }
                   ?>
                       <!-- <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                         <span class="typcn typcn-pencil x3">,</span>
                        <h4>Consectetur Risus</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <span class="typcn typcn-camera-outline x3">,</span>
                        <h4>Ultricies Aenean</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                        <span class="typcn typcn-bookmark x3">,</span>
                        <h4>Cras Sollicitudin</h4>
                        <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum.</p>
                    </div> -->
            </div>
        </section>
        <section id="about" class="number wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .number .container-fluid [approximately row 102] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline col-md-offset-6">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>Ligula Mattis Ornare Ultricies</h3>
                                    <h5>Pellentesque Cursus Amet Parturient Etiam</h5>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <!-- set the numbers in assets/js/scripts.js  -->
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-6 wow fadeInUp">
                                    <h5>Ultricies</h5>
                                    <h3 class="odometer 01">00000</h3>
                                </div>
                                <div class="col-md-4 boxes col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-2 col-md-offset-2 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                                    <h5>Fermentum</h5>
                                    <h3 class="odometer 02">00000</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news" class="blog wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec sed odio dui. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.</p>
                        <a class="btn btn-danger btn-lg" href="#">Take a Look <i class="fa fa-arrow-circle-o-right"></i> </a>
                    </div>
                    <div class="col-md-5">
                        <a href="#">
                            <img src="https://unsplash.it/1200/1200?image=839" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="history" class="story wow fadeInUp" data-wow-delay="300ms">
            <!-- .container-fluid [approximately row 141] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 opaline">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <p class="lead"><i>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</i></p>
                                    <p><i>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</i></p>
                                    <h6 class="lead"> – Fermentum Dapibus</h6>
                                    <p><small>Nibh Etiam Risus Bibendum<br>
        Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="photos" class="gallery wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="masonry image-gallery">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="item item-width2">  
                        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrGYYv0Ii_OxQJtIj2cUKl6snt_ryTX_Ag0A&usqp=CAU?image=529">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrGYYv0Ii_OxQJtIj2cUKl6snt_ryTX_Ag0A&usqp=CAU?image=529" alt="" />
                            </a>
                            
                        </div>
                        <div class="item">
                            <a href="https://wikiway.com/upload/hl-photo/b1b/32f/gornyy-badakhshan_36.jpg?image=523">
                              <img src="https://wikiway.com/upload/hl-photo/b1b/32f/gornyy-badakhshan_36.jpg?image=523" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://i.ytimg.com/vi/4AghS-ohFDc/hqdefault.jpg?image=503">
                              <img src="https://i.ytimg.com/vi/4AghS-ohFDc/hqdefault.jpg?image=503" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX_AY15p7I0XD4wpUs7UAE1R6zTfRWDySF0LrKrilab501iWUnA9qorU8lcXRW2Ixw-WA&usqp=CAU?image=505">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX_AY15p7I0XD4wpUs7UAE1R6zTfRWDySF0LrKrilab501iWUnA9qorU8lcXRW2Ixw-WA&usqp=CAU?image=505" alt="" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://cdn.audiotrik.com/wp-content/thumbnail/200/%D0%B1%D0%B0%D0%B4%D0%B0%D1%85%D1%88%D0%B0%D0%BD-%D0%B0%D1%84%D0%B3%D0%B0%D0%BD%D0%B8%D1%81%D1%82%D0%B0%D0%BD.jpg?image=454">
                              <img src="https://cdn.audiotrik.com/wp-content/thumbnail/200/%D0%B1%D0%B0%D0%B4%D0%B0%D1%85%D1%88%D0%B0%D0%BD-%D0%B0%D1%84%D0%B3%D0%B0%D0%BD%D0%B8%D1%81%D1%82%D0%B0%D0%BD.jpg?image=454" alt="" />
                            </a>
                        </div>
                        <div class="item">
                        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaqna0ENa2rP2M2mRyWHZS59Gf0nHZErXBvA&usqp=CAU?.jpg?image=454">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaqna0ENa2rP2M2mRyWHZS59Gf0nHZErXBvA&usqp=CAU?" alt="" />
                            </a>                                         
                        </div>
                    </div>
                </div>
            </div>
            <?php
				$partners = array(
				"images/logo-sample-01"=>"jpg",

				"images/logo-sample-02"=>"jpg",

				"images/logo-sample-03"=>"png",

				"images/logo-sample-04"=>"jpg",

				"images/logo-sample-05"=>"jpg",

				"images/logo-sample-06"=>"png"
				);
				foreach($partners as $key=>$value){
					echo '<div class="col-md-2">
					<img src="'.$key.'.'.$value.'"class="img-responsive" />
					</div>';
				}
				?>
        </section>
        <section class="clients wow fadeInUp" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                   <!--  <div class="col-md-2">
                        <img src="images/logo-sample-01.jpg" class="img-responsive" />,
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-02.jpg" class="img-responsive" />,
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-03.png" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-04.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-05.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-2">
                        <img src="images/logo-sample-06.png" class="img-responsive" />
                    </div> -->
                </div>
            </div>
        </section>
        <section id="contact" class="prefooter wow fadeInUp" data-wow-delay="300ms">
            <!-- change the image in style.css to the class .prefooter .container-fluid [approximately row 154] -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Maecenas sed diam eget risus varius<br> blandit sit amet non magna.</h3>
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Email Here...">
                                    <br>
                                    <button type="button" class="btn btn-danger">Submit Newsletter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Your Logo</h3>
                                        
                    <p>© 2016-<?php echo  date('Y'); ?> Your Company. Designed and Developed by <a target="_blank" href="http://www.themeinthebox.com">ThemeintheBox.com</a></p>
                       
                    </div>
                    <div class="col-md-4">
                        <p class="text-right social"><i class="typcn typcn-social-facebook-circular"></i><i class="typcn typcn-social-twitter-circular"></i><i class="typcn typcn-social-tumbler-circular"></i><i class="typcn typcn-social-github-circular"></i><i class="typcn typcn-social-instagram-circular"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
        <script src="assets/js/masonry.js"></script>
        <script src="assets/js/pushy.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/odometer.js"></script>
    </body>
       </html>
