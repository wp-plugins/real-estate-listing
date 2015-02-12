<div id="realEstateListing" style="background-color:<?php echo $background_color; ?>">
	<div id="title"><?php echo $title; ?></div>
	<?php
		if($main_image){
	?>
	<div id="mainImage"><img src="<?php echo $main_image ?>"/></div>
	<?php
		} //end if($main_image)
	?>
	<div id="description"><?php echo wpautop($description); ?></div>
	<div id="houseSize">House size: <?php echo $house_size; ?></div>
	<div id="numberOfRooms">No. of rooms: <?php echo $number_of_rooms; ?></div>
	<div id="lotSize">Lot size: <?php echo $lot_size; ?></div>
	<div id="schoolDistrict">School district: <?php echo $school_district; ?></div>
</div>
