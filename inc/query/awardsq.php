<!-- //Awards Query
//coded by:
//date:

//last update:

//
// New updates and fixes here
// -->

<?php

function awardsView($a, $b, $c) {
	
	// a is title, b is image, c is content
	
	$sql = 'SELECT * FROM dpo_awards LIMIT 7';
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)) {

		$title = $row['accmp_title'];
		$image = $row['accmp_image'];
		$content = $row['accmp_content'];
		
		if ( $a != '0' ) {
			
			echo '<li>'.$title.'</li>';
			
		} elseif ( $b != '0' ) {
			
			echo '<li>'.$image.'</li>';
		
		} elseif ( $c != '0' ) {
			
			echo '<li>'.$content.'</li>';
			
		} else {
			
			echo '<h4 class="awards-title">'.$title.'</h4>';

			echo '<div class="img-award-holder"><img src="assets/accomplishments/images/'.$image.'" /></div>';
			echo '<div class="award-text-content"><p>'.$content.'</p></div>';
			echo '</div></div>';
		}
	}
}
?>