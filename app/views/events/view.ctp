<div id="event_view">
<h1><?php echo $event['Event']['name'] ?> <?php echo $html->link('(edit)', '/events/edit/'.$event['Event']['id'], array('id'=>'edit_event_link')) ?></h1>
<p>
  <?php echo $event['Event']['description'] ?>
</p>
<p>
  Where: <?php echo $html->link($event['Location']['name'],
     array('controller'=>'locations', 'action'=>'view',
      'id'=>$event['Location']['id'])); ?>
</p>
<?php $start = $event['Event']['start_time']; $end = $event['Event']['end_time']; ?>
<p>When: <?php echo $time->format('D, M jS Y, g:ia',$start); ?></p>
<!--<p>Until: <?php echo $time->format('D, M jS Y, g:ia',$end); ?></p>-->
<p>Duration: <?php echo(round((strtotime($end) - strtotime($start)) / 3600, 1) . ' hours'); ?></p>
</div>
