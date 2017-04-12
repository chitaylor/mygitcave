<?php
$name = "General Tso";
$location = "Tempe, AZ";
$full_name = "General Tso Good";
$name = $full_name;
?>




<!doctype html>
<html lang="en">

<head>
<title>All About Penguins</title>
<meta charset="utf-8">
<meta name="description" content="All About Penguins">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/styles.css">


</head>

<body>

<header >All About Penguins</header>

<div class="menu-wrap">
		<nav class="menu">
			<ul class="clearfix">
				<li><a href="history.html">History</a></li>
				<li>
					<a href="#">Habitat<span class="arrow">&#9660;</span></a>

					<ul class="sub-menu">
						<li><a href="americas.html">Americas</a></li>
						<li><a href="europe.html">Europe</a></li>
						<li><a href="#">North Pole</a></li>
						<li><a href="#">Antarctica</a></li>
					</ul>
				</li>
				<li><a href="diet.html">Diet</a></li>
				<li><a href="predators.html">Predators</a></li>
				<li><a href="https://en.wikipedia.org/wiki/Penguin">More</a></li>
			</ul>
		</nav>
	</div><br><br>

	<main>

<div class="float-left-area">
<div class="inner-left">

<p><img src="images\emperor.jpg" alt="Emperor Penguin" style="float:left;
  		padding: 15px;"></p>

<p><span style="bold; padding: 0;font-size: 25px;">P</span>enguins (order Sphenisciformes, family Spheniscidae) are a group of aquatic, flightless birds. They live almost exclusively in the Southern Hemisphere, with only one species, the Galapagos penguin, found north of the equator. Highly adapted for life in the water, penguins have countershaded dark and white plumage, and their wings have evolved into flippers. Most penguins feed on krill, fish, squid and other forms of sealife caught while swimming underwater. They spend about half of their lives on land and half in the oceans.The word penguin first appears in the 16th century as a synonym for great auk.[1] When European explorers discovered what are today known as penguins in the Southern Hemisphere, they noticed their similar appearance to the great auk of the Northern Hemisphere, and named them after this bird, although they are not closely related[2]. These were not restricted to Antarctic regions; on the contrary, subantarctic regions harboured high diversity, and at least one giant penguin occurred in a region around 2,000 km south of the equator 35 mya, in a climate decidedly warmer than today.The etymology of the word penguin is still debated. The English word is not apparently of French,[1] Breton[3] or Spanish[4] origin (the latter two are attributed to the French word pingouin "auk"), but first appears in English or Dutch.[1]</p>
  

  <p>Although almost all penguin species are native to the Southern Hemisphere, they are not found only in cold climates, such as Antarctica. In fact, only a few species of penguin live so far south. Several species are found in the temperate zone, and one species, the Galápagos penguin, lives near the equator.The largest living species is the emperor penguin (Aptenodytes forsteri): on average adults are about 1.1 m (3 ft 7 in) tall and weigh 35 kg (77 lb) or more. The smallest penguin species is the little blue penguin (Eudyptula minor), also known as the fairy penguin, which stands around 40 cm (16 in) tall and weighs 1 kg (2.2 lb). Among extant penguins, larger penguins inhabit colder regions, while smaller penguins are generally found in temperate or even tropical climates (see also Bergmann's rule). Some prehistoric species attained enormous sizes, becoming as tall or as heavy as an adult human.</p>




</div>
</div>

<div class="float-right-area">
<div class="inner-right">

<p><img src="images\walker.jpg" alt="Emperor Penguin" width="80px" height="120px"style="float:right; padding: 15px;"></p>
<p>Some dictionaries suggest a derivation from Welsh pen, "head" and gwyn, "white",[5] including the Oxford English Dictionary, the American Heritage Dictionary,[6] the Century Dictionary[6] and Merriam-Webster,[7] on the basis that the name was originally applied to the great auk, either because it was found on White Head Island (Welsh Pen Gwyn) in Newfoundland, or because it had white circles around its eyes (though the head was black).

An alternative etymology links the word to Latin pinguis, which means "fat" or "oil".[8] Support for this etymology can be found in the alternative Germanic word for penguin, fettgans or "fat-goose", and the related Dutch word vetgans. </p>

</div>
</div>

<div class="clear-floated"></div>


  
  
  
  <div>
  </div>

  <p><?php echo $name ?></p>
  <p><?php echo $location ?></p>

  <p><a href="https://en.wikipedia.org/wiki/Penguin">More about Penguins</a></p>


</main>



<?php include 'footer.php';?>



</body>
</html>



