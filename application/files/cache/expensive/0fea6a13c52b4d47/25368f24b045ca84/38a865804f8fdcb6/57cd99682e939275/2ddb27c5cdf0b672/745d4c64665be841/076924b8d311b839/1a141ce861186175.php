<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\site$type][1]/ */
/* Type: array */
/* Expiration: 2023-07-22T23:12:53+00:00 */



$loaded = true;
$expiration = 1690067573;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Type',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'sites',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteTypeID',
     'referencedColumnName' => 'siteTypeID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1689664741;
