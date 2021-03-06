<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.orange-amber.min.css" />
    <link rel="stylesheet" href="styles/main.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- Material Design icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  </head>
  <body>
    <!-- Add your site or app content here -->

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header demo-layout-transparent">
      <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title" id="urlTitle"></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="./threat.php">threat</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span><img class="cl-logo" src="./images/logo.png"></span>
        <nav class="mdl-navigation sideBarNav" id="systemInfo">

        <h3>Looking for something?</h3>
        
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>

        <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>

        <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
        
          <!-- sidebar content here -->

        </nav>

      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
        <!-- Your content goes here -->

        <div class="mdl-grid">
          
          <div class="mdl-cell mdl-cell--8-col mainContent">
            
            <!-- img src="http://placehold.it/720x150?text=..." -->
            
            <h2>The Cookie replied</h2>

            <p>...when suddenly they came to another gulf across the road.  But this one was so broad and deep that the Lion knew at once he could not leap across it.</p>

            <p>So they sat down to consider what they should do, and after serious thought the Scarecrow said:</p>

            <p>"Here is a great tree, standing close to the ditch.  If the Tin Woodman can chop it down, so that it will fall to the other side, we can walk across it easily."</p>

            <p>"That is a first-rate idea," said the Lion.  "One would almost suspect you had brains in your head, instead of straw."</p>

            <p>The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through.  Then the Lion put his strong front legs against the tree and pushed with all his might, and slowly the big tree tipped and fell with a crash across the ditch, with its top branches on the other side.</p>

            <p>They had just started to cross this queer bridge when a sharp growl made them all look up, and to their horror they saw running toward them two great beasts with bodies like bears and heads like tigers.</p>

            <p>"They are the Kalidahs!" said the Cowardly Lion, beginning to tremble.</p>

            <p>"Quick!" cried the Scarecrow.  "Let us cross over."</p>

            <p>So Dorothy went first, holding Toto in her arms, the Tin Woodman followed, and the Scarecrow came next.  The Lion, although he was certainly afraid, turned to face the Kalidahs, and then he gave so loud and terrible a roar that Dorothy screamed and the Scarecrow fell over backward, while even the fierce beasts stopped short and looked at him in surprise.</p>

            <p>But, seeing they were bigger than the Lion, and remembering that there were two of them and only one of him, the Kalidahs again rushed forward, and the Lion crossed over the tree and turned to see what they would do next.  Without stopping an instant the fierce beasts also began to cross the tree.</p>

          </div>

          <div class="mdl-cell mdl-cell--4-col">
            <div class="demo-card-wide mdl-card mdl-shadow--2dp">

                <div class="mdl-card__title moosePic">
                  <h2 class="mdl-card__title-text">Login</h2>
                </div>

                <div class="mdl-card__supporting-text">
                  <?php 
                    $action=$_REQUEST['action']; 
                    if ($action=="")    /* display the contact form */ 
                        { 
                        ?>
                        <form  action="" method="POST" enctype="multipart/form-data"> 

                        <input type="hidden" name="action" value="submit">


                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="fName" name="first_name">
                          <label class="mdl-textfield__label" for="fName">Name</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="email" id="email" name="user_email">
                          <label class="mdl-textfield__label" for="email">Email</label>
                        </div>

                        <button onclick="setCookie()" class="mdl-button mdl-js-button mdl-button--raised" type="submit">
                          Submit
                        </button>

                        </form> 

                        <script type="text/javascript">
                          function setCookie() {
                            document.cookie = "CSRFToken=Example1; max-age=600";  
                          }
                        </script>
                        
                        <?php
  
                            }  
                        else                /* send the submitted data */ 
                            { 
                            $name=$_REQUEST['first_name']; 
                            $email=$_REQUEST['user_email'];
                            if (($name=="")||($email=="")) 
                                { 
                                echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
                                } 
                            else{         
                                $from="From: $name<$email>\r\nReturn-path: $email"; 
                                $subject="Message sent using your contact form"; 
                                mail("youremail@yoursite.com", $subject, $message, $from); 
                                echo "Welcome back ", "<b>",$name,"!</b> <br /><br />", " We have your email address listed as: <b>",$email,"</b>"; 
                                } 
                            }   
                        ?> 
                </div>

            </div><!-- /ends demo-card-wide -->
          </div>
  
        </div>  

        </div><!-- /page-content -->

        <footer class="mdl-mini-footer">
            <div class="mdl-logo"></div>
            <ul class="mdl-mini-footer__link-list fa-ul">
              <li><a href="https://twitter.com/cloudflare"><i class="fa fa-twitter-square fa-3x"></i></a></li>
              <li><a href="https://www.facebook.com/CloudFlare"><i class="fa fa-facebook-square fa-3x"></i></a></li>
            </ul>
        </footer> 
      </main>
    </div>

    <script src="https://storage.googleapis.com/code.getmdl.io/1.1.1/material.min.js"></script>
    <!-- build:js(app/) ../../scripts/main.min.js -->

    <script src="scripts/main.js"></script>
    <script type="text/javascript">
      document.getElementById('urlTitle').innerHTML = window.location.host;
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
