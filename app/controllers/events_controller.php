<?php
class EventsController extends AppController {
  var $name = "Events";
  var $helpers = array('Time');
  function index() {
    $conditions = array('Event.end_time > NOW()');
    $this->set('events', $this->Event->find('all', array('conditions' => $conditions, 'order' => 'Event.start_time ASC')));
  }
  function view($id = null) {
    $this->Event->id = $id;
    $this->set('event', $this->Event->read());
  }
  function edit($id = null) {


    $locations = $this->Event->Location->find('list');
    /*$locations = array();
    foreach ($this->Event->Location->find('all') as $loc)
    {
      $name = $loc['Location']['name'];
      $l_id = $loc['Location']['id'];
      $locations[$l_id] = $name;
    }*/
    $this->set('locations', $locations);


    if (empty($this->data)) {
      $this->data = $this->Event->findById($id);
    } elseif (sha1($this->data['Event']['password1'])!=$this->data['Event']['password_hash']) {
      $this->Session->setFlash('Incorrect Password');
      $this->set('Event', $this->data['Event']);
      $this->redirect(array('action'=>'edit'));
    } elseif ($this->Event->save($this->data)) {
      $this->Session->setFlash('Your event has been saved.');
      $this->redirect(array('action'=>'view', 'id'=>$this->data['Event']['id']));
    }
  }
  function add() {
    if(!empty($this->data)) {
      if ($this->data['Event']['password1'] != $this->data['Event']['password2'])
      {
        $this->Session->setFlash('Passwords do not match.');
        $this->set('Event', $this->data['Event']);
        $this->redirect(array('action'=>'add'));
      }
      else
        $this->data['Event']['password_hash'] = sha1($this->data['Event']['password1']);

      if ($this->Event->save($this->data)) {
        $this->Session->setFlash('Your event has been saved.');
        $this->redirect(array('action'=>'index'));
      }
    } else {
      $locations = $this->Event->Location->find('list');
      /*$locations = array();
      foreach ($this->Event->Location->find('all') as $loc)
      {
        $name = $loc['Location']['name'];
        $id = $loc['Location']['id'];
        $locations[$id] = $name;
      }*/
      $this->set('locations', $locations);
    }
  }
}
?>
