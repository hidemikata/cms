<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\automation\tasksettask$task][1]/ */
/* Type: array */
/* Expiration: 2023-07-23T14:30:05+00:00 */



$loaded = true;
$expiration = 1690122605;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Automation\\Task',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'set_tasks',
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1689744768;
