<h2>New Location</h2>
<?php
  echo $form->create('Location');
  echo $form->input('name');
  echo $form->input('oncampus',array('checked'=>'true','type'=>'checkbox','label'=>'On Campus'));
  echo $form->input('geo_lat', array('label'=>'Latitude'));
  echo $form->input('geo_long', array('label'=>'Longitude'));
  echo $form->end('Save');
?>
