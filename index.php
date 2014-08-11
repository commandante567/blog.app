<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
	<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" href="stylesheets/text.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
  <!--_____________HEADER__________________-->
    <div class="row header">
      <div class="large-3 columns">
        <h1>Вместо</h1>
      </div>
	  <div class="large-5 columns">
	 
        <form>
		  <div class="row collapse header-slot">
			<div class="small-10 columns hs-search">
			  <input type="text" placeholder="Hex Value">
			</div>
			<div class="small-2 columns hs-icons">
			  <a href="#" class="button postfix">Go</a>
			</div>
		  </div>
		</form>
		 
      </div>
	  <div class=" ">
	  <div class="large-4 columns">
		<h6 class="text-center">Мы в социальных сетях</h6>
		<ul class="inline-list hs-icons right">
			<li><a href=""><img src="img/social/1407767745_social_3.png" alt=""></a></li>
			<li><a href=""><img src="img/social/1407767784_social_4.png" alt=""></a></li>
			<li><a href=""><img src="img/social/1407767787_social_8.png" alt=""></a></li>
			<li><a href=""><img src="img/social/1407767791_google.png" alt=""></a></li>
			<li><a href=""><img src="img/social/1407767745_social_3.png" alt=""></a></li>
		</ul>
		</div>
      </div>
    </div>
	
	<!--__________________NAVIGATION___________________-->
	<div class="row">
      <div class="large-12 columns">

			<nav class="top-bar" data-topbar>
			
			<ul class="title-area">
				<li class="name">
				  <h1><a href="#">My Site</a></h1>
				</li>
				 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Меню</span></a></li>
			  </ul>

			 <section class="top-bar-section">
				  
				<!-- Left Nav Section -->
				<ul class="left">
				
				  <li><a href="#">Left Nav Button</a></li>
				  <li><a href="#">Left Nav Button</a></li>
				  <li><a href="#">Left Nav Button</a></li>
				  <li><a href="#">Left Nav Button</a></li>
				  <li><a href="#">Left Nav Button</a></li>
				</ul>
			  </section>
			</nav>
		</div>
    </div>
	
	<!--_____________ Posts_______________ -->
	<div class="row">
      <div class="large-12 columns">
	   <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 text-center">
		   <li><img src="img/340x252-1407257193.png" />
		   <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div>
		   </li> 
		   <li>
		   <div style="border:1px solid red">
			<img src="img/340x252-1407276360.png" />
		     
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407277935.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407257193.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407340628.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407354257.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407445448.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407508144.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407532456.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407602906.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407539664.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
		   <li><img src="img/340x252-1407257193.png" />
		     <div class="panel">
			  <h5>This is a regular panel.</h5>
			  <p>It has an easy to override visual style, and is appropriately subdued.</p>
			</div></li> 
 
		 
 
		</ul>
	</div>
	</div>
	
	<!--_____________ footer_______________ -->
    <div class="row">
		<div class="large-12 medium-12 columns">
			<h2>Footer</h2>
		
		</div>
	</div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
 