
<?php 
	$calendar = calendar(page('calendar')->calendar()->yaml());
    $events = $calendar->getAllEvents(); 
    $tmpDate = getdate(0);
    $currentDate = getdate();
    if ($limit != '') {
    	$limit = 30;
    };
?>

<ul class="media-list">
	<?php foreach($events as $event) {
		$date = $event->getBeginDate();
		if ($event->isPast()) {
		} else if ($limit > 0) {
			snippet('singleevent', array(
        	'event'  => $event,
        	'date' => $date
        	));
        	$limit--;
		};
	}; ?>
</ul>