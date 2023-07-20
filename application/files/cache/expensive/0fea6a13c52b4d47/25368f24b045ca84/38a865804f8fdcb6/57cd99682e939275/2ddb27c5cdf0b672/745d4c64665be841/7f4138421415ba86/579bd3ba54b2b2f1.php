<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\automation\task$set_tasks][1]/ */
/* Type: array */
/* Expiration: 2023-07-23T01:45:38+00:00 */



$loaded = true;
$expiration = 1690076738;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'task',
     'targetEntity' => 'TaskSetTask',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1689664789;
