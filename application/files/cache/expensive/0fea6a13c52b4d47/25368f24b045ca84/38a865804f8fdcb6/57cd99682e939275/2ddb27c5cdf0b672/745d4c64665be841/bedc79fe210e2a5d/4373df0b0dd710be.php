<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\key\key$set_keys][1]/ */
/* Type: array */
/* Expiration: 2023-07-23T05:54:34+00:00 */



$loaded = true;
$expiration = 1690091674;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'attribute_key',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\SetKey',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'akID',
     'referencedColumnName' => 'akID',
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
$data['createdOn'] = 1689664788;
