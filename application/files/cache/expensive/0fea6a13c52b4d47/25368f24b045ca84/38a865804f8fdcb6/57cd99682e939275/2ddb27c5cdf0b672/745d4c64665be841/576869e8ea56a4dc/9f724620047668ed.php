<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\group$type][1]/ */
/* Type: array */
/* Expiration: 2023-07-18T06:45:25+00:00 */



$loaded = true;
$expiration = 1689662725;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Site\\Type',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
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
$data['createdOn'] = 1689232571;
