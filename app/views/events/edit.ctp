<div id="event_edit">
<?php if ($session->flash() != ''): ?>
  <h3><?php echo $session->flash(); ?></h3>
<?php endif ?>
<h2>Edit Event</h2>
<?php
  echo $form->create('Event');
  echo $form->hidden('id');
  echo $form->input('name');
  echo $form->input('description',array('rows'=>'3'));
  echo $form->input('location_id',array('type'=>'select','options'=>$locations));
  echo $form->input('start_time');
  echo $form->input('end_time');
  echo $form->input('password1',array('type'=>'password'));
  echo $form->hidden('password_hash');
  echo $form->end('Save');
?>
</div>
