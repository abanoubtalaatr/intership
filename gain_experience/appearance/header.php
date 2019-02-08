<!DOCTYPE html>
<html>
<head>
	<title></title>
     <link 
          rel="stylesheet"
          type="text/css"
          href="<?php echo url_of_site() . "\style\bootstrap.min.css"?>">

	<link 
		rel="stylesheet"
		type="text/css"
		href="<?php echo url_of_site() . "\style\main_style_ar.css"?>">
     

</head>
<body>
	<div class="gain_navbar">
	<div class="gain_container">
		<div class="gain_brand"><h4><a href="/">gain experience</a></h4></div>
	    <div class="gain_aims">
			<ul class="unlist_style float-right">
				<li><a href="/news">news</a> </li>
				<li><a href="/projects">projects </a></li>
				<li> <a href="about">about us</a></li>
				<li> <a href="contact">contact us</a></li>
				<li id = 'log_in'> join us</li> <!-- This li to click it to appear form -->
			</ul>
	    </div><!--  End class gain_aims -->
	</div><!--  End class gain_container -->
</div><!--  End class gain_navbar -->
<div class="gain_container form">
       <div class="contain-inst-form">
          <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Enter a valid email address
</div>

          <div class="instruction">
               <p>after you sumbit in this form you will receive the test on your email and all details </p>
          </div>
               
          <div class="contain-form">
          
               <form>
                    <div class="contain-input">
                         <input type="text" name="" placeholder="First name">
                    </div>

                    <div class="contain-input">
                         <input type="text" name="" placeholder="Last Name">
                    </div>

                    <div class="contain-input">
                         <input type="email" name="" placeholder="Email">
                    </div>
                    
               <div class="contain-select">
                    <label>choose your field</label>
                    <select>
                         <option>here</option>
                         <option>web design </option>
                         <option>web devolopment</option>
                         <option><ins>mobile</ins></option>
                    </select>
               </div>
                    <div class="contain-button">
                         <button type="submit">submit</button>
                    </div>
                    
               </form>
          </div> <!-- End class contain-form -->
       </div> <!-- End class contain-inst-form -->

</div> <!-- End class form  -->
 <div class="cover" id= 'cover'></div><!--  this class using to hidden contect of the page when the user click on join to focus only on the form  -->