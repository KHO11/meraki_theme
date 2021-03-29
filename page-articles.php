<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package meraki_theme
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/page-articles.css">
	<main id="primary" class="site-main">

		<ul class="mainNavigation">
			<li><a class="liHome" href="#">HOME</a></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/Line.png"></li>
			<li><a class="liArticles" href="#">ARTICLES</a></li>
		</ul>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<img class="greyCircle" style="position:absolute;left:992px" src="<?php echo get_template_directory_uri(); ?>/greyCircle.png">

		<p class="belowHeading">A collection of stories about our people, our capabilities, our research,
		<br> and the ever-changing face of Meraki.
		</p>

		<div class="dropdown">
			  <button onclick="myFunction()" class="dropbtn">Browse All Posts<img class="down1" src="<?php echo get_template_directory_uri(); ?>/path4.png"></button>
  			<div id="myDropdown" class="dropdown-content">
    			<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    			<a href="#about">About</a>
  			</div>
		</div>

		<div class="dropdown2">
			  <button onclick="myFunction2()" class="dropbtn2">Browse by: 
			  <span style="position:absolute;left:110px;bottom:15px">Topic</span>
				  <img class="down2" src="<?php echo get_template_directory_uri(); ?>/path4.png"></button>
  			<div id="myDropdown2" class="dropdown-content2">
    			<input type="text" placeholder="Search.." id="myInput2" onkeyup="filterFunction2()">
    			<a href="#about">About</a>
  			</div>
		</div>

		<div class="dropdown3">
			  <button onclick="myFunction3()" class="dropbtn3">Date<img class="down3" src="<?php echo get_template_directory_uri(); ?>/path4.png"></button>
  			<div id="myDropdown3" class="dropdown-content3" style="width:100px">
    			<input type="text" placeholder="Search.." id="myInput3" onkeyup="filterFunction3()">
    			<a href="#about">About</a>
  			</div>
		</div>

		<section>
			<img class="flowers" src="<?php echo get_template_directory_uri(); ?>/flowers.png">
			<a class="heading2" href="#">SERVICES</a>
			<p class="flowersInfo">Cost optimisation is key
			<br>to sustainable EBITDA
			<br>improvement</p>
			<p class="june24">JUNE 24 2020 </p>
		</section>

		<section>
			<img class="towerWindow" src="<?php echo get_template_directory_uri(); ?>/towerWindow.png">
			<a class="heading3" href="#">FREE RESOURCES</a>
			<p class="towerInfo">How lockdown changed 
			<br>the norms of consumer
			<br>behaviour</p>
			<p class="june22">JUNE 22 2020</p>
		</section>

		<section>
			<img class="twoPeople" src="<?php echo get_template_directory_uri(); ?>/twoPeople.png">
			<a class="heading4" href="#">FREE RESOURCES</a>
			<p class="peopleInfo">Behind our work to support 
			<br>behaviour health amid
			<br>COVID-19
			</p>
			<p class="june15">JUNE 15 2020</p>
		</section>

		<section>
			<img class="handsLaptop" src="<?php echo get_template_directory_uri(); ?>/handsLaptop.png">
			<a class="heading5" href="#">SERVICES</a>
			<p class="laptopInfo">Six digital trends gaining
			<br>momentum</p>
			<p class="may18">MAY 18 2020</p>
		</section>

		<section>
			<img class="seagul" src="<?php echo get_template_directory_uri(); ?>/seagul.png">
			<a class="heading6" href="#">ASSURANCE</a>
			<p class="seagulInfo" href="#">The quantified case for
			<br>protecting the natural world</p>
			<p class="may22">MAY 22 2020</p>
		</section>

		<section>
			<img class="windowBuilding" src="<?php echo get_template_directory_uri(); ?>/windowBuilding.png">
			<a class="heading7" href="#">SERVICES</a>
			<p class="windowInfo">A new hub to learn, think
			<br>and collaborate
			</p>
			<p class="may19"> 
			MAY 19 2020</p>
		</section>

		<section>
			<img class="carImage" src="<?php echo get_template_directory_uri(); ?>/car.png">
			<a class="headingEight" href="#" >FREE RESOURCES</a>
			<p class="carInfo" >A global lockdown opens up
			<br>new manufacturing insights
			</p>
			<p class="may13">MAY 13 2020</p>
		</section>

		<section>
			<img class="bookImage" src="<?php echo get_template_directory_uri(); ?>/book.png">
			<a class="heading9" href="#">FREE RESOURCES</a>
			<p class="bookInfo">Transforming Aspirations at
			<br>Civil Service Learning
			</p>
			<p class="june24Part1">JUNE 24 2020</p>
		</section>

		<section>
			<img class="festivalImage" src="<?php echo get_template_directory_uri(); ?>/festival.png">
			<a class="heading10" href="#">FREE RESOURCES</a>
			<p class="festivalInfo">Transforming
			<br>Palaces in London
			</p>
			<p class="april12">APRIL 12 2020</p>
		</section>
	
			

		</div>
	

		<script>
			function myFunction() {
  				document.getElementById("myDropdown").classList.toggle("show");
			}

			function filterFunction() {
  				var input, filter, ul, li, a, i;
  				input = document.getElementById("myInput");
  				filter = input.value.toUpperCase();
  				div = document.getElementById("myDropdown");
  				a = div.getElementsByTagName("a");
  				for (i = 0; i < a.length; i++) {
    				txtValue = a[i].textContent || a[i].innerText;
    				if (txtValue.toUpperCase().indexOf(filter) > -1) {
      					a[i].style.display = "";
    				} else {
      					a[i].style.display = "none";
    				}
  				}
			}


			function myFunction2() {
  				document.getElementById("myDropdown2").classList.toggle("show2");
			}

			function filterFunction2() {
  				var input, filter, ul, li, a, i;
  				input = document.getElementById("myInput2");
  				filter = input.value.toUpperCase();
  				div = document.getElementById("myDropdown2");
  				a = div.getElementsByTagName("a");
  				for (i = 0; i < a.length; i++) {
    				txtValue = a[i].textContent || a[i].innerText;
    				if (txtValue.toUpperCase().indexOf(filter) > -1) {
      					a[i].style.display = "";
    				} else {
      					a[i].style.display = "none";
    				}
  				}
			}


			function myFunction3() {
  				document.getElementById("myDropdown3").classList.toggle("show3");
			}

			function filterFunction3() {
  				var input, filter, ul, li, a, i;
  				input = document.getElementById("myInput3");
  				filter = input.value.toUpperCase();
  				div = document.getElementById("myDropdown3");
  				a = div.getElementsByTagName("a");
  				for (i = 0; i < a.length; i++) {
    				txtValue = a[i].textContent || a[i].innerText;
    				if (txtValue.toUpperCase().indexOf(filter) > -1) {
      					a[i].style.display = "";
    				} else {
      					a[i].style.display = "none";
    				}
  				}
			}
		</script>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
