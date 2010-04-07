<div id="location_view">
<h2><?php echo $location['Location']['name'] ?></h2>
<p id='campus'>
  <?php if ($location['Location']['oncampus']): ?>
    On Campus
  <?php else: ?>
    Off Campus
  <?php endif ?>
</p>

<!--
<p>Lat: <?php echo $location['Location']['geo_lat'] ?></p>
<p>Long: <?php echo $location['Location']['geo_long'] ?></p>
-->

<p><?php echo '<img src="http://maps.google.com/maps/api/staticmap?size=640x480&zoom=18&maptype=hybrid&markers=color:red|'.$location['Location']['geo_lat'].','.$location['Location']['geo_long'].'&sensor=false"/>'?>
</div>
