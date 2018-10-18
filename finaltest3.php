<html>

<head>

<title>Final result file</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test Environment Build</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
 body {
   background-color: red;
}
body { 
  background: url(love.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.city {
    color: white;
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
		color: green;
		animation: blink 1s infinite;
	 }
	 
	 @keyframes blink{
		0%{opacity: 1;}
		75%{opacity: 1;}
		76%{ opacity: 0;}
		100%{opacity: 0;}
	 }
a {

   color: red;

}


h2{
   color : red;
   font-size: 40px;
   

}
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index1.html">Test Environment Buid</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index1.html">Home</a></li>
      <li><a href=" contactus.php">Contact Us</a></li>
      <li><a href="aboutus.php">User Manual</a></li>
    </ul>
  </div>
  </nav>
<div align= "center">
<h2 class ="blink" align="center">Click the link below to check your bug report </h2>
<br/><br/><br/><br/><br/>
</div>

<div  align="center">
<h1>

<?php
//if (isset($_FILES['file'])){
	   
	 //  $file = $_FILES['file'];
	   // file properties
	  // $filename = $file['name'];
	   //$filename = "gurpreet";
	   //$file_tmp = $file ['tmp_name'];
	   // $file_size = $file['size'];
		//$fileerror = $file['error'];
		$extension = strtolower(substr($name,strpos($name,'.')+1));
		// file extension
	   // $filext = explode('.',$filename);
		//$filext = strtolower(end($filext));
		//$allowed =array('c');
		// if (in_array($filext,$allowed)){
			 
				// $file_name_new  = "gurpreet" . '.' . $filext; 
				//  $file_destination ='/var/www/html'.$file_name_new;
				 //if (move_uploaded_file($file_tmp,$file_destination)){
					 
					//echo 'Your file  '. $filename . "  analyzed <br/> <br/> ";
                                        
                         
			   //   } 

                 
			// }

		// }

$filename = $_FILES['file']['name'];
 $size = $_FILES['file']['size'];
 $type = $_FILES['file']['type'];
  $tmp_name = $_FILES['file']['tmp_name'];
  $extension = strtolower(substr($filename,strpos($filename,'.')+1));
if(isset($filename)){
	  if (!empty($filename)){   
		$location ='/var/www/html'; 
        if (($extension=='cs')){ 
 
                $filext = explode('.',$filename);
		$filext = strtolower(end($filext));
                $file_name_new  = "gurpreet" . '.' . $filext;
                    
		  if ( move_uploaded_file($tmp_name,$location.$file_name_new)){
			  
			 echo 'Your file  '. $filename . "  analyzed <br/> <br/> ";
                              $result = shell_exec('/var/www/html/scan35.sh');

                             echo $result;

                                
                               
                               
		  }
		}else{
			
			echo '<h2>file must be cs format</h2>';
		}
	  }
	  else{
		 echo '<h2>Must Need To Select a Cs File</h2>';   
	  }
	  
  }


           /*  $dir = "csharp";

if (is_dir_empty($dir)) {
  echo 'Your code is good'; 
}else{
                             $dir;
                               $love = opendir($dir.'/');
                             while(($entry = readdir($love)) !== FALSE ){					 
                            //echo '<a href="'. $dir.'/'. $entry . '">' .$entry. '</a><br/>';
                           if ($entry!='.' && $entry!='..'){
    
                               echo '<a href="'. $dir.'/'.$entry . '">' .$entry. '</a><br/>';

                                        } 						 
							 }
}

function is_dir_empty($dir) {
  if (!is_readable($dir)) return NULL; 
  return (count(scandir($dir)) == 2);
}*/

  /*  $dir = 'csharp';

                             if (dir_is_empty($dir)) {
                                         echo 'NO ERROR FOUND'; 
                                  }else{
                              echo  $dir;
                               $love = opendir($dir.'/');
                             while(($entry = readdir($love)) !== FALSE ){					 
                            //echo '<a href="'. $dir.'/'. $entry . '">' .$entry. '</a><br/>';
                           if ($entry!='.' && $entry!='..'){
    
                               echo '<a href="'. $dir.'/'.$entry . '">' .$entry. '</a><br/>';

                                        } 						 
							 }
                                         }

                       function dir_is_empty($dir) {
                                     $handle = opendir($dir);
                            while (false !== ($entry = readdir($handle))) {
                               if ($entry != "." && $entry != "..") {
                                    return FALSE;
                                                  }
                                          }
                            return TRUE;
                              }*/



    
?>

<?php 

//$result = shell_exec('/var/www/html/scan33.sh');

   //  echo $result;
//$directory = 'reports';
                              // $resource = opendir($directory.'/');
                             //while(($entry = readdir($resource)) !== FALSE){



                           // # echo '<a href="'. $directory.'/'. $entry . '">' .$entry. '</a><br/>';
                           //if ($entry!='.' && $entry!='..'){
    
                              // echo '<a href="'. $directory.'/'.$entry . '">' .$entry. '</a><br/>';

                                        //}
     
                                   // }



//?>


</h1>


</div>


<div class="footer">
  <p>@copyright 2018  Test Enviornment Build Team</p>
</div>
</body>

</body>


</html>
