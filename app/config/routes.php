<?php
  Router::connect('/', array('controller'=>'events','action'=>'index'));
  Router::connect('/:controller', array('controller'=>':controller','action'=>'index'));
  Router::connect('/:id', array('controller'=>'events','action'=>'view', ':id'))
?>
