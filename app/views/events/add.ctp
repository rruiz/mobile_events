<div id="event_new">
<h2>New Event</h2>
<table>
<?php
  $f = array('before' => '<tr><td>',
             'between' => '</td><td>',
             'after' => '</td></tr>');

  echo $form->create('Event'); ?>
<table>
<?php
  echo $form->input('name',$f);
  echo $form->input('description', (array('rows'=>'3')+$f));
  echo $form->input('location_id',(array('type'=>'select','options'=>$locations)+$f));
  echo $form->input('start_time', $f);
  echo $form->input('end_time', $f);
  echo $form->input('password1',(array('type'=>'password')+$f));
  echo $form->input('password2',(array('type'=>'password')+$f));
?>
</table>
<?php
  echo $form->end('Save', $f);
?>
</div>
