<!-- //Activities Query
//coded by:
//date:

//last update:

//
// New updates and fixes here
// -->
<?php
function annivCountdown(){

	$sql = 'SELECT * FROM dpo_upcoming_event ORDER BY event_date DESC LIMIT 1';
    $result = mysql_query($sql);
                           
    while($row = mysql_fetch_array($result)) {

        $event_day = $row['day'];
        $event_month = $row['month'];
        $event_year = $row['year'];
        $event_description = $row['content'];
        $title = $row['title'];

    }
       
    $target = mktime(0, 0, 0, $event_month, $event_day, $event_year);
    $today = time();
    $difference = ( $target - $today );
    $days = (int) ($difference/86400);
    
    $currentHour = date('H');
    $currentMinute = date('i');
    $currentSecond = date('s');
    
    $hours = ( 24 - $currentHour );
    $minutes = ( 60 - $currentMinute );
    $seconds = ( 60 - $currentSecond );

    echo "<br/>";
    echo "<h1>$days DAYS LEFT</h1>";
    echo "<br/>";   
    echo "<h4>$hours HRS | $minutes MIN | $seconds SEC</h4>";
    echo '<p class="media_content">';
    echo "<h3>$title</h3>$event_description</p>";       
}
?>