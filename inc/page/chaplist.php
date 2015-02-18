//list Chapters
//coded by:
//date:

//last update:

//
// New updates and fixes here
//

<?php
function viewChapters() {
	$query = "SELECT * FROM dpo_chapters";
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_array($result)) {
		$a = $row['chapters'];
		$b = $row['descriptions'];
		echo '<a href="chapters.php?c='.$a.'" target="_blank"><p class="chapters">'.$b.'</p></a>';
	}
}
?>