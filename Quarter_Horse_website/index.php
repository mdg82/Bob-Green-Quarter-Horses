<!DOCTYPE html>
<html>
<head>
	<title>Bob Green Quarter Horses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slideshow.css">
	<link rel="stylesheet" href="https://use.typekit.net/gfr2nmg.css">
	<script src='https://kit.fontawesome.com/818a045d75.js'></script>
</head>
<body>
	<div class="page-wrapper">
 <div class="nav-wrapper">
  <div class="info-bar">
		<ul>
			<li>
				<i class='fas fa-phone' style='font-size:20px'> (816)465-0295</i>
			</li>
			<li>
				<i class='far fa-envelope' style='font-size:20px'> bobgreen35@hotmail.com</i>
			</li>
			<li class="facebook">
				<a href="https://www.w3schools.com/howto/howto_css_navbar_icon.asp"><i class='fab fa-facebook-f' style='font-size:20px'></i></a>
			</li>
		</ul>
  </div>
  <nav class="navbar">
		<img src="images/logo.png" alt="logo">
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
		<ul class="nav no-search">
			<li class="nav-item dropdown"><a href="#">Horses</a>
			<div class="dropdown-content">
			<a href="#">Studs</a>
			<a href="#">Mares</a>
			<a href="#">For Sale</a>
		</div></li>
      <li class="nav-item"><a href="#">About</a></li>
      <li class="nav-item"><a href="#">Careers</a></li>
      <li class="nav-item"><a href="#">Contact Us</a></li>
    </ul>
  </nav>
  </div>
<section class="headline">
	<div class="slideshow">
  <div class="slideshow-image" style="background-image: url('images/horse_001.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('images/horse_003-web.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('images/horse_004.jpg')"></div>
  <div class="slideshow-image" style="background-image: url('images/horse_006-web2.jpg')"></div>
</div>
  </section>
  <!--<section class="features">
    <div class="feature-container">
      <img src="https://cdn-images-1.medium.com/max/2000/1*HFAEJvVOq4AwFuBivNu_OQ.png" alt="Flexbox Feature">
      <h2>Flexbox Featured</h2>
      <p>This pen contains use of flexbox for the headline and feature section! We use it in our mobile navbar and show the power of mixing css grid and flexbox.</p>
    </div>
    <div class="feature-container">
      <img src="https://blog.webix.com/wp-content/uploads/2017/06/20170621-CSS-Grid-Layout-710x355-tiny.png" alt="Flexbox Feature">
      <h2>CSS Grid Navigation</h2>
      <p>While flexbox is used for the the mobile navbar, CSS grid is used for the desktop navbar showing many ways we can use both.</p>
    </div>
    <div class="feature-container">
      <img src="https://blog.edx.org/wp-content/uploads/2015/09/null-1.jpg" alt="Flexbox Feature">
      <h2>Basic HTML5</h2>
      <p>This pen contains basic html to setup the page to display the responsive navbar.</p>
    </div>
  </section>-->
	<section class="welcome">
		<h1>Welcome to Bob Green Quarter Horses!</h1>
		<p>Introductory text.  Dramatically engage seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing.
		Dramatically engage seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing.
	Dramatically engage seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing.</p>
	</section>
	<section class="cards">
  <article class="card">
    <img src='images/horse_004.jpg' alt="Studs">
    <div class="text">
      <h3>Studs</h3>
      <p>Intro info about studs.</p>
      <button>Our studs</button>
    </div>
  </article>
  <article class="card">
    <img src='images/horse_004.jpg' alt="Mares">
    <div class="text">
      <h3>Mares</h3>
      <p>Intro info about mares.</p>
      <button>Our Mares</button>
    </div>
  </article>
  <article class="card">
    <img src='images/horse_004.jpg' alt="For Sale">
    <div class="text">
      <h3>For Sale</h3>
      <p>Intro info about for sale.</p>
      <button>For Sale</button>
    </div>
  </article>
</section>
<section class="contact">
	<h1>Contact</h1>
		<section class="contact-info">
			<div class="info">
				<form action="/action_page.php">
	        <label for="fname">Name</label>
	        <input type="text" id="name" name="name" placeholder="Your name">
	        <label for="lname">Email</label>
	        <input type="text" id="email" name="email" placeholder="Email">
	        <label for="subject">Questions/Comments</label>
	        <textarea id="subject" name="subject" placeholder="Questions/Comments" style="height:170px"></textarea>
	        <input type="submit" value="Submit">
	      </form>
			</div>
			<div class="info map-responsive">
				<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=37166%20West%20Highway%20D,%20Polo,%20MO%2064671+(Bob%20Green%20Quarter%20Horses)&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
			</div>
		</section>
</section>
<footer>
	<div class="footerText">
		<p>Owner: Bob Green</p>
		<p>37166 West Highway D &#8900; Polo, MO 64671</p>
		<p>816-465-0295</p>
</div>
<div class="footerText">
	<p>&copy; <?php echo date("Y");?></p>
	<p>37166 West Highway D<br>Polo, MO 64671</p>
</div>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
