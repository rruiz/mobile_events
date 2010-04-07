<h1>Events <?php echo $html->link('(create new)',array('controller' => 'events', 'action' => 'add'), array('id'=>'new_event_link'))?></h1>

<?php if ($session->flash() != ''): ?>
  <h3><?php echo $session->flash(); ?></h3>
<?php endif ?>

<ul>
<?php foreach($events as $event): ?>
  <li>
  <?php echo $html->link($event['Event']['name'],
          array('controller'=>'events','action'=>'view', $event['Event']['id'])); ?>
  on <?php echo $time->format('D, M jS, g:ia',$event['Event']['start_time']) ?>
  </li>
<?php endforeach; ?>
</ul>
