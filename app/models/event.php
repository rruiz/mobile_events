<?php
class Event extends AppModel {
  var $name = "Event";
  var $belongsTo = array(
        "Location" => array(
          'className'=>'Location',
          'foreignKey'=>'location_id'));
  var $validate = array(
          'name' => array(
                  'rule' => 'notEmpty'
                      ),
              'description' => array(
                      'rule' => 'notEmpty'
                          )
                );
}
?>
