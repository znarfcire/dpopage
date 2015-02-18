<!-- //Activities Query
//coded by:
//date:

//last update:

//
// New updates and fixes here
// -->

<?php

function activitiesPreview() {
    $sql = 'SELECT * FROM dpo_projects LIMIT 6';
    $result = mysql_query($sql);

    while($row = mysql_fetch_array($result)) {

        $title = $row['proj_title'];
        $image = $row['proj_image'];
        $content = $row['proj_content'];

        echo '<div class="col-lg-4">';

        echo '<div class="activity-thumbs snapshots" align="center"><img src="'.$image.'"><h4><strong>'.$title.'</strong></h4></div>';
        echo '</div>';

    }
    return;
}
?>