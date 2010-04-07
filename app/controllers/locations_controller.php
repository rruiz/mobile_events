<?php
class LocationsController extends AppController {
  var $name = "Locations";
  function index() {
    $this->set('locations', $this->Location->find('all'));
  }
  function view($id = null) {
    $this->Location->id = $id;
    $this->set('location', $this->Location->read());
  }
  function add() {
    if(!empty($this->data)) {
      if ($this->Location->save($this->data)) {
        $this->Session->setFlash('Your location has been saved.');
        $this->redirect(array('action'=>'index'));
      }
    }
  }
}
?>
