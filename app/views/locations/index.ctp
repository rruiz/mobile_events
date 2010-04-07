<h2>Locations</h2>

<?php if ($session->flash() != ''): ?>
  <h3><?php echo $session->flash(); ?></h3>
<?php endif ?>

<h1><?php echo $html->link('New Location',array('controller' => 'locations', 'action' => 'add'))?></h1>

<ul>
<?php foreach($locations as $location): ?>
  <li><?php echo $html->link($location['Location']['name'],
          array('controller'=>'locations','action'=>'view', $location['Location']['id'])); ?>
<?php endforeach; ?>
</ul>
