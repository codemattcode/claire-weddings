<!-- ********************************* -->
<!-- ****** CONTACT FORM SERVER SIDE SCRIPTING ******* -->
<!-- ********************************* -->

<?php
  if(empty($_POST) === false ) {
    $errors = array();

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

      if (empty($errors) === true) {
        mail('test@srrc.com', 'Client-Name-Domain : Contact Form Message', $message, 'From: ' . $email);
        header('Location: index.php?sent');
      }

    }
?>

<!-- ********************************* -->
<!-- ****** /CONTACT FORM ******* -->
<!-- ********************************* -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Claire Ambler Weddings</title>
    <meta name="description" content="I am an enthusiastic and energetic individual who loves weddings and organisation, and specialise in weddings and events offering a personal service and great attention to detail with a smile. 
">
    <link rel="shortcut icon" href="img/favicon.ico">

<!-- ********************************* -->
<!-- ****** VENDOR STYLESHEETS ******* -->
<!-- ********************************* -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
   <link rel="stylesheet" href="css/animate.css">
    
   <link rel="stylesheet" href="css/lightbox.css"> 
<!-- ********************************* -->
<!-- ****** PROJECT STYLESHEET ******* -->
<!-- ********************************* -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modest-grid.css">
<!--[if lt IE 9]>
  <script src="js/polyfill/html5-shiv.js"></script>
<![endif]-->
  </head>
  <body><a name="top"></a>
<!--[if IE]>
  <div class="browserupgrade"><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p></div>
<![endif]-->
<!-- ********************************* -->
<!-- ******LET THERE BE JUSTICE******* -->
<!-- ********************************* -->


<!-- ********************************* -->
<!-- ****** NAVIGATION         ******* -->
<!-- ********************************* -->
<nav>
  <div class="container">
    <div class="row">
      <div class="col-12 center">
    <ul>
      <li><a id="home" href="#top"><img id="logo-sm" alt="Claire Ambler Logo" src="img/logo-sm.png"></a></li>
      <li class="hide"><a href="#welcome">Welcome</a></li>
      <li class="hide"><a href="#about">About</a></li>
      <li class="hide"><a href="#testimonials">Testimonials</a></li>
      <li class="hide"><a href="#gallery">Gallery</a></li>
      <li class="hide cta"><a id="cta-link" href="#contact">Contact</a></li>
      <li id="menu"><a href="#">Menu</a></li>
    </ul>
      </div>
    </div>
  </div>
</nav>

<!-- ********************************* -->
<!-- ****** HERO               ******* -->
<!-- ********************************* -->
<header>
  <div class="container">
    <div class="row">
      <div class="col-12 center">
  <img id="logo" alt="Claire Ambler Logo" src="img/logo-full-lg.png">
      </div>
    </div>
  </div>
</header>


<!-- ********************************* -->
<!-- ****** WELCOME            ******* -->
<!-- ********************************* -->
<div class="welcome">
  <div class="container">
    <div class="row">
    <div class="col-12 pull"><a name="welcome"></a><h1>Welcome</h1></div>

    <div class="col-6">
      <p>I offer a professional, friendly and discreet service to wedding couples. My attention to detail and my own high standards ensure that your wedding day runs smoothly. My key role is to relieve you of the stresses in the planning process and to leave you free to enjoy your day.</p>
    </div>

    <div class="col-6">
      <p>My aim is to ensure you have as much involvement as you wish and let me take care of the rest. After all this is your wedding day, my role is an advisory one and not to take over. I would love to hear from you if you think I can be of assistance. </p>
    </div>
    </div>

    <div class="row">  
    <div class="col-6">
      <p>I am lucky enough to work with a host of like minded experts in their own field who assist me in providing all the elements needed to bring your wedding day together. I will be with you every step of the way from the initial consultation to ascertain what level of involvement you require.</p>
    </div>

    <div class="col-6">
      <p>Your first step would be to contact me so we can arrange a free no obligation consultation wherever you would like to meet. In my experience, the synergy between the Wedding Coordinator, the Bride and her Fiance is key to successful wedding planning.
      After all, its months of planning together.</p>
    </div>
    </div>
    </div>
</div>



<!-- ********************************* -->
<!-- ****** ABOUT              ******* -->
<!-- ********************************* -->
<div class="about">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <a name="about"></a><h1>About Me</h1>
    </div>
    </div>

    <div class="row">
    <div class="col-3 center">
    <img alt="Claire Ambler profile picture" id="claire" src="img/about/claire-profile.jpg">
    </div>
    <div class="col-9">
    <p>
      I am an experienced Wedding and Events Consultant with over 25 years experience. I've realised over the years that I have the ability to put people at ease and help them to achieve their ultimate dreams. My aim is to ensure that couples have a fantastic and memorable day. Whether I am planning the entire wedding or just applying the finishing touches, I am professional and committed.
    </p>
    </div>
    </div>
    </div>

<!-- ********************************* -->
<!-- ****** CARDS              ******* -->
<!-- ********************************* -->

<!-- row of 2 -->
    <div class="container">
    <div class="row">
    <div class="col-6 card">
    <div class="card-bg c-bg-1">
    <img alt="A decorative icon" class="icon" src="img/icons/1.png"></div>
    <p>
      My knowledge and expertise means that you can rely on my advice as I work closely with couples to deliver their dream day but never taking over. My business stands for quality and perfection at an affordable cost. Your wedding is one of the biggest days of your life and you want it to be perfect.
    </p>
    </div>

    <div class="col-6 card">
    <div class="card-bg c-bg-2"><img alt="A decorative icon" class="icon" src="img/icons/2.png"></div>
    <p>
      Perhaps at first glance hiring me to plan your wedding with you may seem a little extravagant but in the long term it will save you time, money and of course stress!
    </p>

    </div>
    </div>
    

<!-- row of 3 -->
    <div class="row">
    <div class="col-4 card">
    <div class="card-bg c-bg-3"><img alt="A decorative icon" class="icon" src="img/icons/3.png"></div>
    <p>
      I am an enthusiastic and energetic person who just loves everything weddings! I can guarantee us a personal and fun journey together with a smile.</p> 
    </div>

    <div class="col-4 card">
    <div class="card-bg c-bg-4"><img alt="A decorative icon" class="icon" src="img/icons/4.png"></div>
    <p>
      My fees are based on a daily rate. You can always assume about 10-15% of your total wedding budget will be spent in the planning. An average wedding in 2016 is in the region of 21k with around 250 to 300 hours depending on the complexity of the wedding. 
    </p>
    </div>

    <div class="col-4 card">
    <div class="card-bg c-bg-5"><img alt="A decorative icon" class="icon" src="img/icons/5.png"></div>
    <p>
      During wedding planning you can have as many as fifteen different suppliers to coordinate. I work with loyal local suppliers who are reliable and cost effective.
    </p>
    </div>
    </div>
    
    <div class="row">
    <div class="col-4 card">
    <div class="card-bg c-bg-6"><img alt="A decorative icon" class="icon" src="img/icons/6.png"></div>
    <p>
      I am all about cost saving and being efficient and can help avoid unnecessary spend and huge markups. I can work with you as much as you like from total wedding management, 8 weeks leading up towards the wedding or just 'on the day management', the choice is yours.  
    </p>
    </div>

    <div class="col-4 card">
    <div class="card-bg c-bg-7"><img alt="A decorative icon" class="icon" src="img/icons/7.png"></div>
    <p>
      I offer a free of charge no obligation consultation to meet with you to decide if you think we can work together, after all, hiring a Wedding Coordinator is all about the relationship and trust. 
      
    </p>
    </div>

    <div class="col-4 card">
    <div class="card-bg c-bg-8"><img alt="A decorative icon" class="icon" src="img/icons/8.png"></div>
    <p>
      I always pride myself in offering you 100% commitment and support from the outset to build your dream wedding day. I am here to relieve you of the stress and anxiety of all the planning, allowing you to concentrate on the fun elements of your wedding day.
    </p>
    </div>
    </div>
    </div>


<!-- END CARDS -->

    <div class="container">
    <div class="row">
    <div class="col-12">
    <p id="cta-txt"><a id="cta-2" href="#contact">Contact me</a> using the form or links below and let's have a chat. 
    </p>
    </div>
    </div>
    </div>
</div>



<!-- ********************************* -->
<!-- ****** TESTIMONIALS       ******* -->
<!-- ********************************* -->
<div class="testimonials">
  <div class="container">
  <div class="row">
  <div class="col-12">
    <a name="testimonials"></a><h1>Testimonials</h1>
  </div>
  </div>
  </div>
<!-- images and text -->
  <div class="container">
  <div class="row">
  <div class="col-1"></div>
  <div class="col-3 five80"><img alt="A photo of a weddings" id="testimonials-img" src="img/testimonials/3.jpg">
  </div>
  <div class="col-8">
  <p>
    Claire was wonderful and understood exactly what we wanted to achieve and everything was beyond our expectations. The day was seamless and if there were any issues we were not aware of them.</p>
  </div>
  </div>

  <div class="row">
  <div class="col-4"> 
  <p>
    Claire is a great wedding planner and made sure everything went without a hiccup!</p>
  </div>
  <div class="col-4 five80">
  <img alt="A photo of a weddings" id="testimonials-img" src="img/testimonials/5.jpg">
  </div>
  <div class="col-4"><p>
    You offered us fantastic support and were brilliant on the day, we are so glad we choose you.</p>
  </div>
  </div>
  
  
  <div class="row">
  <div class="col-6"> 
  <p>
    Thank you for being so approachable and helpful and to replying to my numerous emails straight away! The whole day ran so smoothly and we thank you for all your hard work behind the scenes, which meant the day, was perfect from start to finish.</p>
  </div>
  <div class="col-6"> 
  <p>
    Thank you so much for all of your help and support prior to and on our wedding day. Everyone commented on how well the day was organised and how smoothly everything went, which we feel, was down to you and your efficient calmness.</p>
  </div>
  </div>

  <div class="row">
  <div class="col-4">
  <p>
    We could not have asked for anything more your friendliness and professionalism was fantastic. We loved every minute of our day, thank you.</p>
  </div>
  <div class="col-4 five80">
  <img alt="A photo of a weddings" id="testimonials-img" src="img/testimonials/14.jpg">
  </div>
  <div class="col-4">
  <p>
    Thank you Claire, you did an amazing job and we had a beautiful day.</p>  
  </div>
  </div>

  <div class="row">
  <div class="col-6">
  <p>
    We just wanted to say a massive thank you for coordinating our day, you made it stress-free for us. You made sure everything was thought of and kept an eye on everything ensuring they were running smoothly whilst we simply relaxed and enjoyed ourselves. We never imagined we could be so relaxed on our wedding day.</p>
  </div>
  <div class="col-6">
  <p>
    You and your team were outstanding. We can honestly say that there is nothing that we would have wanted to change. Your help was immense before and after the wedding. Thank you for the lovely photos too!</p>
  </div>
  </div>

  <div class="row">
  <div class="col-4">
  <p>
    Our wedding day far surpassed all of our expectations and thank you for being so accommodating of everything we wanted to achieve. Your enthusiasm for our ideas and amazing organization skills meant we could relax in safe hands and we were so thrilled to see our vision come to life making a totally magical day.</p>
  </div>
  <div class="col-4 five80">
  <img alt="A photo of a weddings" id="testimonials-img" src="img/testimonials/25.jpg">
  </div>
  <div class="col-4">
  <p>
    Wow – what an amazing day, what can we say, your support and guidance has been un-measurable, you really made our day! Having you there on the day felt so special and you really felt like one of our guests. Your kindness and support throughout the last six months was fantastic and nothing was too much trouble.</p>
  </div>
  </div>
  <div class="row">
  <div class="col-12">
  <p>
    Thank your for helping us to organise such a wonderful and memorable day. Your commitment and enthusiasm are so clear to see and your ideas you shared were greatly appreciated. We would certainly recommend you to any of our friends.</p>
  </div>
  </div>
  </div>
</div>



<!-- ********************************* -->
<!-- ****** GALLERY            ******* -->
<!-- ********************************* -->
<div class="gallery">
<div class="container">
  <div class="row">
  <div class="col-12 center">
    <a name="gallery"></a>
    
      <a alt="A photo of a Wedding Day" href="img/gallery/1.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/1.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/2.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/2.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/3.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/3.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/4.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/4.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/5.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/5.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/6.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/6.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/7.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/7.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/8.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/8.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/9.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/9.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/10.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/10.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/11.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/11.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/12.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/12.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/13.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/13.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/14.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/14.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/15.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/15.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/16.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/16.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/17.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/17.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/18.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/18.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/19.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/19.jpg" /></a>

      <a alt="A photo of a Wedding Day" href="img/gallery/20.jpg" data-lightbox="gallery1"><img class="thumb" src="img/gallery/20.jpg" /></a>
  </div>
  </div>
  </div>  
</div>



<!-- ********************************* -->
<!-- ****** CONTACT            ******* -->
<!-- ********************************* -->
<div class="contact">
  <div class="container">
  <div class="row">
  <div class="col-12 center">
    <a name="contact"></a>

<div class="contact-sheet">
  <div class="form-hide">
    <h1>Contact</h1>
    <p>If you would like a free consulation, a chat about your wedding or have any questions, please use the form or any of the social links below. Alternatively call me on 07766706782</p>
  </div>  
    <form id="contactForm" action="index.php" Method="POST">
  <div class="form-hide">
      <p> 
      <input type="text" name="name" placeholder="Your Name" required>
      </p>
      
      <p>
      <input type="text" name="date" placeholder="Wedding Date"></p>

      <p>
      <input type="email" name="email" placeholder="Your Email Address"  required>
      </p>
      
      <p>
      <input type="number" name="telephone" placeholder="Telephone Number">
      </p>

      <p>
      <textarea id="message" name="message" placeholder="Your Requirements" required></textarea>
      </p>
  </div><!-- /form-hide -->
      <p>
      <input type="submit" name="submit" value="submit">
      </p>
    </form>
    
</div>

</div>
</div>
</div>
   
    

  
</div><!-- /contact -->


<!-- ********************************* -->
<!-- ****** SOCIAL LINKS       ******* -->
<!-- ********************************* -->
<footer>
  <div class="container">
  <div class="row">
  <div class="col-12">
    <ul>
      <li><a href="https://www.instagram.com/monkeyplum/"><i class="fa fa-instagram"></i></a></li>
      <li><a href="https://twitter.com/amblerevents"><i class="fa fa-twitter"></i></a></li>
      <li><a href="https://www.facebook.com/Claire-Ambler-Wedding-Consultant-230790266954292/"><i class="fa fa-facebook"></i></a></li>
      <li><a href="mailto:claire@claireamblerevents.com"><i class="fa fa-envelope"></i></a></li>
    </ul>
  </div>
  </div>
  </div>
</footer>


<!-- ********************************* -->
<!-- ****** CODEMATTCODE       ******* -->
<!-- ********************************* -->
<div class="signoff">
  <div class="container">
  <div class="row">
  <div class="col-12">
    <h6>Designed and Built by <a href="mailto:work@mattperkins.com">@codemattcode</a></h6>
  </div>
  </div>
  </div>
</div>
<!-- ********************************* -->
<!-- ******LET THERE BE LIGHT******* -->
<!-- ********************************* -->
<!--[if lt IE 9]>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="js/polyfill/ie-love.js"></script>
<![endif]-->
<!--[if gt IE 8]><!-->
<!-- ********************************* -->
<!-- ****** EXTERNAL SCRIPTS    ****** -->
<!-- ********************************* -->
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="js/libs/lightbox.min.js"></script>
<!-- ********************************* -->
<!-- ****** CONTACT FORM JS/JQ  ****** -->
<!-- ********************************* -->
<script>
     $("#contactForm").submit(function(event) 
     {
         /* stop form from submitting normally */
         event.preventDefault();

         /* get some values from elements on the page: */
         var $form = $( this ),
             $submit = $form.find( 'button[type="submit"]' ),
             name_value = $form.find( 'input[name="name"]' ).val(),
             email_value = $form.find( 'input[name="email"]' ).val(),
             message_value = $form.find( 'textarea[name="message"]' ).val(),
             url = $form.attr('action');

         /* Send the data using post */
         var posting = $.post( url, { 
                           name: name_value, 
                           email: email_value, 
                           message: message_value 
                       });

         posting.done(function( data )
         {
             /* hide the form fields on submit */
             $('.form-hide').text('I aim to reply to all email within 48 hours');

             /* Change the button text. */
             $submit.text('Sent, Thank you');

             /* Disable the button. */
             $submit.attr("disabled", true);
         });
    });
</script>
  </body>
</html>
<!-- ********************************* -->
<!-- ****** made by @codemattcode ******* -->
<!-- ********************************* -->
