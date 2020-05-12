<?php $title= 'WP Eatery - Home'; include'header.php'; include'menuItem.php' ?>

<div id="content" class="clearfix">
<aside>
	<h2><?php echo date("l"); ?>'s Specials</h2>
   <?php
   $MIArray = array();
   $i = 0;
   $star = "*";
   while($i<3){
	 $j = $i + 1;
	 if($i%2 == 0){
		 echo '<img src="images/burger_small.jpg" alt="Burger" title="Monday">';
  	 $MIArray[$i] = new menuItem("<h3>The WP Burger $star $j</h3>","Freshly made all-beef patty served up with homefries"," - $14");
} else{
	   echo '<img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">';
	   $MIArray[$i] = new menuItem("<h3>WP Kebab $star $j</h3>","Tender cuts of beef and chicken, served with your choice of side"," - $17");}
	echo $MIArray[$i]->getItemName();
	echo $MIArray[$i]->getDescription();
	echo $MIArray[$i]->getPrice();
	echo "<hr>";
	$i++;
	$star .= "*";
}
?>
</aside>
                <div class="main">
                  
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                   <p><h3 >"Now Open In Your Community"</h3> </p>
		 <p>WP Eatery is opening their doors, to serve you better!</p> 
		 <p>We are a Family Dining Restaurant, with a wide variety of lunch & dinner items.</p> 
		 <p>We also have a wide variety of delicious mouth watering desserts to offer.</p>
		 <p>We look forward to see you!</p>
         <h3>Great Food, Great Service</h3>
		 <br>
		 
		 </div>
                    <h2>Book your Birthday Party!</h2>
					 <img src="images/birthday.jpg" alt="birthday" title="book your birthday party" class="content_pic">
					 <p> Book your birthday party with us, you will have the best memory of the year!</p>
					<p>
               
                </div><!-- End Main -->
				
				
<br>
<br>

<?php include'footer.php';
?>






