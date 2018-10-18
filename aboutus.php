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


<div align="left"><section>
 <p>

<p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;" align ="center"><a href ="https://gitlab.com/Rupinder1161/clang-integration-linux"> Click here  to  check the GITLAB Repository </a></p><hr/>
<p style="font-size: 30px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;" align ="center">Introduction</p>

The Clang Compiler is an open-source compiler for the C family of programming languages, aiming to be the best in class implementation of these languages. Clang builds on the LLVM optimizer and code generator, allowing it to provide high-quality optimization and code generation support for many targets. For more general information, please see the Clang Web Site or the LLVM Web Site.
This document describes important notes about using Clang as a compiler for an end-user, documenting the supported features, command line options, etc. This website is tool using Clang  that processes code,it uses the <a href="https://clang-analyzer.llvm.org/">clang analyser tool</a>
Clang is one component in a complete toolchain for C family languages. A separate document describes the other pieces necessary to assemble a complete toolchain.
Clang is designed to support the C family of programming languages, which includes C, Objective-C, C++, and Objective-C++ as well as many dialects of those. For language-specific information, please see the corresponding language specific section:
 <p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;" align ="center">Language Support</p>
    <p style="font-size: 20px; font-weight: bolder; color: Green; margin-bottom: 0;">• C Language</p> 
  <p style="font-size: 20px; font-weight: bolder; color: green; margin-bottom: 0;"> • C++ Language</p>
In addition to these base languages and their dialects, Clang supports a broad variety of language extensions, which are documented in the corresponding language section. These extensions are provided to be compatible with the GCC, Microsoft, and other popular compilers as well as to improve functionality through Clang-specific features. The Clang driver and language features are intentionally designed to be as compatible with the GNU GCC compiler as reasonably possible, easing migration from GCC to Clang. In most cases, code “just works”. Clang also provides an alternative driver, clang-cl, that is designed to be compatible with the Visual C++ compiler, cl.exe.
In addition to language specific features, Clang has a variety of features that depend on what CPU architecture or operating system is being compiled for. Please see the Target-Specific Features and Limitations section for more details.
The rest of the introduction introduces some basic compiler terminology that is used throughout this manual and contains a basic introduction to using Clangas a command line compiler.
<p style="font-size: 40px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">Get Started</p>
This website provides you a great experience to test your C, C++ and C# codes.
<p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;" align ="center">Opportunities available on website</p>

 <p style="font-size: 20px; font-weight: bolder; color: Green; margin-bottom: 0;">Test C language codes</p> 
  <p style="font-size: 20px; font-weight: bolder; color: green; margin-bottom: 0;">Test C++ language codes</p>
 <p style="font-size: 20px; font-weight: bolder; color: green; margin-bottom: 0;">Test C# language codes</p>

<p style="font-size: 20px; font-weight: bolder; color: #0cb9e7; margin-bottom: 0;" align ="center">How to check your codes.</p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">Test C language Click on “Test C Language” option.</p><br/>
 <p align="center"><img src="how.png" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>

<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">It will ask you to upload a file with your C language codes </p>
 <p align="center"><img src="2_1.jpg" alt="Girl in a jacket" style="width:700px;height:500px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
Select the file from your directory. Then click on submit button</p>
<p align="center"><img src="3_1.jpg" alt="Girl in a jacket" style="width:700px;height:500px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
After selecting file, click on submit option.</p>
<p align="center"><img src="image(1).jpg" alt="Girl in a jacket" style="width:700px;height:500px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
Then you need to click on the link as shown below in order to analyze your codes</p>
<p align="center"><img src="4_1.jpg" alt="Girl in a jacket" style="width:700px;height:500px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
It will show you the scan build results. If you click on view report option it will show you the all report</p>
<p align="center"><img src="5(1).jpg" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
At the end it will show bug Summary page</p>
<p align="center"><img src="6.jpg" alt="Girl in a jacket" style="width:700px;height:500px;" align="center"> </p>
<br/>
<p style="font-size: 40px; font-weight: bolder; color:#0cb9e7; margin-bottom: 0;" align ="center">
Test C++ language
Click on “Test C++ Language” option.</p>
<p align="center"><img src="Capture.JPG" alt="Girl in a jacket" style="width:700px;height:300px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
It will ask you to upload a file with your C++ language codes</p>
<p align="center"><img src="image.ccpng.png" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
Select the file from your directory. Then click on submit button</p>
<p align="center"><img src="3.jpg" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
Hit Submit button after selecting the file from your directory</P>
<p align="center"><img src="4.jpg" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
Then you need to click on the link as shown below in order to analyze your codes.</p>
<p align="center"><img src="123.png" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>
<br/>
<p style="font-size: 20px; font-weight: bolder; color: black; margin-bottom: 0;" align ="center">
  The  results will be shown by the system</p>
<p align="center"><img src="sfgfsg.jpg" alt="Girl in a jacket" style="width:700px;height:400px;" align="center"> </p>
</p></section>
</div>








<div class="footer">
  <p>@copyright 2018  Test Enviornment Build Team</p>
</div>

</body>


</html>
