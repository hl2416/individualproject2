<?php
	$path = './';
	$title = "mainpage";
	include $path.'assets/php/header.php';
 ?>

 <!-- The page with the content such as images with captions and the text -->
 <div class="page">
 	<p class="title"> New York City </p>
 	<figure class="img">
 		<img src="assets/media/NYC.jpg" alt="New York City" style="width: 360px; height: 250px">
 		<figcaption>
 			A picture of New York City near Battery Park with the World Trade Center slightly further back as the tallest building there. Source:
 			https://www.pods.com/blog/2019/03/nyc-moving-guide-the-new-york-city-boroughs-explained/
 		</figcaption>
 	</figure>
 	<p class="text">
 		New York City has been my home for the past 16 years since I came here from China. It is located in the Southeast border of New York State, bordering New Jersey and is made up
 		of 5 boroughs, each with their own history and attractions: Manhattan, Brooklyn, Bronx, Queens, and Staten Island. Some of the boroughs are separated by bodies of water on their
 		own piece of land as shown below on the map. These 5 boroughs came into existence in 1898 when counties with their own local governments joined together.
 	</p>
 	<p class="text">
 		Being the most populous city in the United States, it is also a major trading hub where the One World Trade Center building is located as seen from the image to the right and
 		possesses a multitude of tourist attractions such as the Statue of Liberty Monument and the Empire State Building. The United Nations Headquarters is also located here making it
 		an important political location as well.
 	</p>
 	<p class="text">
 		This website will only provide a bit of information about 3 of the 5 boroughs as I have really only had some experiences in these 3: Manhattan, Brooklyn, and the Bronx. I have
 		passed through the other 2 boroughs before but have not really explored them nor visited their attractions although I have heard of some. As such, I hope you are able to get a bit
 		of insight into the small part of NYC that I have been to.
 	</p>
 	<p class="text">
 		All of the images have their references in their caption after "Source:" and can all be found on this <a href="others/references.html">reference page</a>.
 	</p>
 	<figure class="NYCMap">
 		<img src="assets/media/NYCMap.JPG" alt="Map of NYC" style="width: 384.5px; height: 380.5px">
 		<figcaption>
 			A map of New York City which can be seen from the red line surrounding it. Some of the boroughs are separated by bodies of water such as the Harlem River between Manhattan
 			and Bronx, the East River between Manhattan and Brooklyn, and the Upper Bay between Staten Island and Brooklyn. Source:
 			https://www.google.com/maps/place/New+York,+NY/@40.6971494,-74.2598661,10z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728
 		</figcaption>
 	</figure>

<?php
	$path = './';
	include $path.'assets/php/footer.php';
 ?>
