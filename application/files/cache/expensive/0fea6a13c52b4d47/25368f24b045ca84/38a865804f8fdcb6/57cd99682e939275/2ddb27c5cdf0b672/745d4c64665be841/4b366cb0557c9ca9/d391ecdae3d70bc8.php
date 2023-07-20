<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\relation$group][1]/ */
/* Type: array */
/* Expiration: 2023-07-18T02:41:24+00:00 */



$loaded = true;
$expiration = 1689648084;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Group',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'group_relations',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteGID',
     'referencedColumnName' => 'siteGID',
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
$data['createdOn'] = 1689232571;
