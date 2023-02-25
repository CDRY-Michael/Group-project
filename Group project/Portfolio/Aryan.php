<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Portfolio</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/7b03f8a8c4.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		
		<nav class="navbar">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="#skill">Skills</a></li>
				<li><a href="#hobbies">Hobbies</a></li>
				<li><a href="#Contact">Contact</a></li>
				<li><a class="active" href="home.php">Log out</a></li>
			</ul>
		</nav>
		
	</header>
	<section id="bio">
		<img src="profile.png" alt="" id="profile">
		<h1>Hi. I'm Aryan.<span>A student</span></h1>
		<p>of National School Of Sciences</p>
		<p>Running +2 batch of 2022</p>
    
	</section>

	<section id="skill">
		<div class="wrapper">
		<h3>Skills</h3>
		<ul>
		<li>I'm good at collaborative work like group project and volunteer work.</li>
		<li>I'm is easily able to adjust to changing situation and conditions.</li>
		</ul>
		</div>
	</section>
	
	<section id="hobbies">
		<div class="wrapper wave">
		<h3>Hobbies</h3>
		<p>Football is my hobby.</p>
		<p>I also like to read some novels.</p>
		</div>
	</section>
	<section id="Contact">
		<p>You can reach out to me through:</p>
		<div class="boxes"> 	
			<i class="fa-brands fa-facebook"></i> <a href="">facebook</a>
			<i class="fa-brands fa-twitter"></i><a href="https://twitter.com/BagOFBEANs9009">Twitter</a>
		</div>
	
		<div class="edit">
		<a href="edit.php">Edit</a>
		</div>
		<div class="delete">
			<a href="delete.php">Delete</a>
		</div>
		<h3 class="credit"> Created by <span> Our Team </span> | All rights reserved! </h3>
	</section>

	<style>
	:root{
  --gradient:linear-gradient(to right,#FF0096,#8e7cc3,#eeeeee);
  --waves: @import url('C:\xampp\htdocs\Group project\svg\layered-waves-haikei.svg');
}
@font-face {
  font-family: 'dense_lettersregular';
 
  src: url('assets\Font\denseletters-nrgdo-webfont.woff2') format(woff2),
        url('assets\Font\denseletters-nrgdo-webfont.woff') format(woff);
}

*::before,*::after{
  box-sizing: border-box;
}
html{
  color-scheme: dark light;
}

body {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
  }
  
  a {
    text-decoration: none;
    color: #333;
  }
  
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  /* Header styles */
  
  header {
    background:var(--gradient);
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
  }
  
  section{
   padding-block: 5rem;
  }
  .navbar li {
    display: inline-block;
    margin: 0 1rem;
  }
  
  .navbar li a {
    color: #fff;
  }
  
  .active
  {
    display:flex;
    position: relative;
    align-items:right;
  }
  
  /* Bio section styles */
  
  #bio {
    padding: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  #bio h1{
    font-family: 'dense_lettersregular';
    font-size: 48px;
    font-weight:700;
  }

  #bio span{
    font-family: 'dense_lettersregular';
    font-size: 48px;
    font-weight:700;
  }
  #bio .container{
    float: left;
    border: 30vh;
    margin-inline: auto;
    padding-inline: auto;
  }
  
  #profile {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
 
  }
  
  h1 {
    font-size: 2rem;
    margin-bottom: 0;
  }
  
  h1 span {
    display: block;
    text-align: center;
    font-size: 1.5rem;
    font-weight: normal;
  }
  
  p {
    margin: 0;
    font-size: 1.2rem;
  }
  
  /* Skills section styles */
  .wrapper
  {
    max-width: 50rem;
  
    margin-inline: auto ;
    padding-top: auto;
    padding-bottom: auto;
    padding-left: auto;
    padding-right: 20rem;
    
  }
  .wrapper h3{
    font-size: 3rem;
  }
  .wrapper li{
    font-size: 1.5rem;
  }

  #skill {
    position: relative;
    isolation: isolate;
    padding: 2rem;
  }
  #skill::after{
    content: '';
    background-image:linear-gradient(45deg,#1573e5,#a390da,#f64f59);;
    position:absolute;
    z-index: -5;
    inset: 0;
    transform: skewY(-3deg);

  }
  
  h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }
  
  ul li {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
  }
  
  /* Hobbies section styles */
 
  #hobbies {
    margin-top: 1rem;
    background: linear-gradient(to top,#FA7268,#C62368,#121212);
      --mask:
        radial-gradient(68.73px at 50% 96.80px,#000 99%,#0000 101%) calc(50% - 88px) 0/176px 51% repeat-x,
        radial-gradient(68.73px at 50% -52.8px,#0000 99%,#000 101%) 50% 44px/176px calc(51% - 44px) repeat-x,
        radial-gradient(68.73px at 50% calc(100% - 96.80px),#000 99%,#0000 101%) calc(50% - 88px) 100%/176px 51% repeat-x,
        radial-gradient(68.73px at 50% calc(100% + 52.80px),#0000 99%,#000 101%) 50% calc(100% - 44px)/176px calc(51% - 44px) repeat-x;
      -webkit-mask: var(--mask);
              mask: var(--mask);
  }

  #hobbies h3{
    font-size: 3rem;
    
  }
  
  #hobbies p{
    font-size: 1.5rem;
  }
  
  /* Contact section styles */
  
  #contact {
    background-color: #001220;
    opacity: 100%;
    color: #fff;
    padding: 2rem;
    margin-inline:auto;
    display: flex;
    justify-content: space-between;
  
  }
  
  #contact p {
    margin: 0;
    font-size: 1.2rem;
  }
  
  #contact a {
    font-family:Ford Script; 
    color: #fff;
    justify-content: space-between;

    margin-right: 1rem;
  }

 .boxes
 {
    display: block;
    font-size: 1.5rem;
    padding:.7rem 0;
    color:#eee;
 }
.boxes a{
  color: white;
}
 .boxes i
 {
    font-size: 2rem;
    color-scheme:dark light;
    cursor: pointer;
    margin-right: 1rem;
    margin-left: 1rem;;
 }
 .boxes i:hover,a:hover
 {
    box-shadow: 0 1rem 1rem rgba(66, 66, 66, 0.689);
   
  }
  
  .edit a
  {
    float:right;
    padding: 0.5rem 2rem;
    margin-inline: 1rem;
    border: 1px solid #C62368;
    border-radius: 5px;
    color:white;
    font-size: 1.2rem;
    text-align: center;
    text-transform: uppercase;
    cursor: pointer;
  }
  .delete a {
    float:right;
    padding: 0.5rem 1.5rem;
    border: 1px solid #C62368;
    border-radius: 5px;
    color: white;
    font-size: 1.2rem;
    text-align: center;
    text-transform: uppercase;
    cursor: pointer;
  }
  
  .edit a:hover,
  .delete a:hover {
    background-color: #C62368;
    color: #333;
    box-shadow: 3px 2px #f2b6cf;
}

/* @media screen {
aspect-ratio : 16/4;  
} */
</style>



</body>
</html>
</body>
</html>