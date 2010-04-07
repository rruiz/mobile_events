<?php
class Location extends AppModel {
  var $name = "Location";
  var $validate = array(
          'name' => array(
                  'rule' => 'notEmpty'
                      ),
          'oncampus' => array(
                  'rule' => 'notEmpty'
                  )
        );
}
?>
