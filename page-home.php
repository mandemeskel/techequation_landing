<?php
/**
 * The Home page template
 */
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TECH+EQUATION</title>
</head>

<style type="text/css">
	
	a {
		text-decoration: none;
		outline: none;
		color: #00c3c8;
		transform: 0.5s;
	}

	a:hover {
    border-bottom: 2px solid;
	}

	body {
		font-size: 12px;
    overflow-x: hidden;
    margin: 0;
    padding: 0;
	}

/*	@media (min-width: 1000px) {
		body {
			font-size: 16px;
		}
	}*/

	body * {
		max-width: 100%;
	}

	main {
		display: block;
		width: 100%;
	}

	nav {
		display: block;
		width: 95%;
		max-width: 1200px;
		margin: 0 auto;
	}

	ul {
		list-style: none;
		padding: 0;
	}

	li {
		display: inline-block;
		float: left;
    transition: 0.5s;
	}

	h1 {
		font-size: 1.8em;
	}

	p.list {
    white-space: pre-line;
    text-align: left;
    padding-left: 2em;
	}

	.clearfix::after { 
		content: " ";
		display: block; 
		height: 0; 
		clear: both;
	}

/*	li:last-child {

	}*/

	img {
		max-height: 100vh;
		max-width: auto;
		width: 100%;
    height: auto;
    margin: 0 auto;
	}


	/* navbar */
	nav {
		/*position: relative;*/
		padding-top: 50px;
	}

	nav ul {
		display: block;
		position: absolute;
		top: 0;
		right: 5px;
	}

	nav li {
    border: 2px dotted black;
    padding: 1em;
    margin: 2px;
	}

	nav li:hover {
		transform: scale( 0.9 );
	}

	section, footer {
		padding: 15px 5px;
	}


	/* header */
	.header {
		padding: 0;
	}

	/* content */
	.content {
		background-color:	#4473c5;
		color: white; 
		font-size: 14px;
	}
	@media (min-width: 1000px) {
		.content {
			font-size: 16px;
		}
	}

	/* services */
	.services {
	}

	.services ul {
		margin: 0 auto;
	}

	.services li {
    text-align: center;
    width: 47%;
    display: inline-grid;
    margin: 15px 5px;
    max-width: 200px;
    height: 200px;
    /*float: none;*/
    margin-bottom: 10px;
	}

	.services p {
		font-size: 1.25em;
	}


	/* footer */
	footer {
		display: block;
		background-color:	black;
		color: white; 
		font-size: 14px;
	}

	footer ul {
		margin: 0 auto;
    width: 240px;
	}

	footer li {
		text-align: center;
		padding: 5px;
		font-size: 1.4em;
		float: none;
	}


</style>

<body>

	<nav>

		<div>
			<h1>Tech+Equation</h1>
			<h2>Local Leader. Local Challanges. Local Solutions.</h2>
		</div>

		<div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>	
		</div>

	</nav>

	<main>

		<section class="header">
			<img src="/wp-content/uploads/2017/03/e_Logo_mock_v3_pg6_blue.jpg" />
			<img src="/wp-content/uploads/2015/03/techequation.png" />
		</section>
		
		<section class="content">
			<p>
				We are a non-profit startup focusing on after school programming. We believe that empowering our students with practical knowledge for career readiness is important for our community. Our programs are custom tailored to help aid students in the aspects of Science, Technology, Engineering, and Math, STEM.
			</p>
			<p>
				We are looking for schools, K-12, to introduce our program to. Please like our page and nominate your school by posting your school's name and the student that is interested in joining our FREE after school programming.
			</p>
			
			<strong>Some of the projects:</strong>
			<p class="list">
				Daily mentoring.
				Tutoring (homework help).
				Nutrition program (after school snack).
				Using microscopes.
				Electronics, microprocessors.
				Electronics, building computers.
				Low-voltage wiring, network cable technician.
				Rocket building.
				Mechanical Engineering, bridge building.
				Leadership and team-building.
				Technical life skills.
				Job readiness, developing a successful resume.
			</p>
		</section>

		<section class="services clearfix">
			<ul>
				<li href="#">
					<img src="/wp-content/uploads/2017/03/rocket.png" />
					<p>Customizable </br> After School </br> Programs</p>
				</li>
				<li href="#">
					<img src="/wp-content/uploads/2017/03/gears.png" />
					<p>Community </br> Out Reach </br> Free/Low Cost</p>
				</li>
				<li href="#">
					<img src="/wp-content/uploads/2017/03/handshake.png" />
					<p>+e </br> The Bridge</p>
				</li>
				<li href="#">
					<img src="/wp-content/uploads/2017/03/graph.png" />
					<p>Student </br> Mentor </br> Program</p>
				</li>
				<li href="#">
					<img src="/wp-content/uploads/2017/03/target.png" />
					<p>Professionals </br> in Applied </br> Sciences</p>
				</li>
			</ul>
		</section>

	</main>

	<footer>
		<div>
			<p>Copyright Tech+Equation 2017 </br> 
			Local Leader. Local Challanges. Local Solutions. </br> 
			Merced, CA 95358 </br> 
			<a href="mailto:mark@techequation.org">Contact us.</a>
			</p>	
		</div>

		<div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>	
		</div>
	</footer>

</body>

</html>