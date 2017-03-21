
<?php 
	$calendar = calendar(page('calendar')->calendar()->yaml());
    $allEvents = $calendar->getAllEvents(); 
    $futureEvents = $calendar->getEvents(); 
    $tmpDate = getdate(0);
    $currentDate = getdate();
?>

<?php if (empty($futureEvents)) : ?>
    <h4>Pas d'événements à venir</h4>

<?php else : ?>
    <ul class="media-list">
    	<?php foreach($futureEvents as $event) {
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
<?php endif ?>

