<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Environment Build</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
/*Google font integration*/
@import url('https://fonts.googleapis.com/css?family=Roboto');
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
 body {
   background-color: red;
}
body { 
  background: url(aboutus.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.city {
    color: Black;
    text-shadow: 3px 2px green;
    font-size: 20px;
 
} 
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:silver;
    color: black;
    text-align: center;
}
.blink{
		font-size: 40px;
		color: Black;
		
		animation: blink 1s infinite;
	 }
	 
	 @keyframes blink{
		0%{opacity: 1;}
		75%{opacity: 1;}
		76%{ opacity: 0;}
		100%{opacity: 0;}
	 }

#contact{
    background-color:#f1f1f1;
    font-family: 'Roboto', sans-serif;
}

#contact .well{
    margin-top:30px;
    border-radius:0;
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}

@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    }
    
}
  </style>
<title> gurpreet's test</title>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index1.html">Test Environment Buid</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index1.html">Home</a></li>
      <li><a href="contactus.php">Contact us</a></li>
      <li><a href="aboutus.php">User Manual</a></li>
 <li><a href="abdhul.php">About Us</a></li>
    </ul>
  </div>
  </nav>
<div align="center">
<div align= "center">

<div align="center">

<p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;">Address:</p>
	<p>21 Kensington Avenue, Petone,wellington (newzealand)</p>
	<p>65 Dixon Street, Wellington, wellington (newzealand)</p>
	<p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;">Phone:</p>
	<p>Gurpreet  &#8211; +64 (022) 4476020, Abdhul &#8211; +64 (022) 5672873</p>
	<p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;">Email:</p>
	<p><a href="mailto:@gurpreet1161@gmail.com">contact@gurpreet1161@gmail.com</a></p>

</div>


<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.876104885833!2d174.88178405142588!3d-41.224470344416154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38abb93cd9291f%3A0x8c5c1500bbd28eea!2s21+Kensington+Ave%2C+Petone%2C+Lower+Hutt+5012!5e0!3m2!1sen!2snz!4v1539124398912" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="footer">
  <p>@copyright 2018  Test Enviornment Build Team</p>
</div>

</body>
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAX-TJ2Uyvv4HYbP4Klx6iZiuRveGWBS3g",
    authDomain: "test-environment-6fd44.firebaseapp.com",
    databaseURL: "https://test-environment-6fd44.firebaseio.com",
    projectId: "test-environment-6fd44",
    storageBucket: "test-environment-6fd44.appspot.com",
    messagingSenderId: "1033596135177"
  };
  firebase.initializeApp(config);
      var b = firebase.database().ref("messages");
        $("#newContact").submit(function(a) { $(this), console.log("Submit to Firebase");
        var c = $("#name").val(),
            d = $("#email").val(),
            f = { name: c, email: d};
        return b.push(f).then(function(a) { 
            $(".sucess").css("display", "block"), 
            $(".sucess-none").css("display", "none") }), !1 })   
}

</script>


</html>
