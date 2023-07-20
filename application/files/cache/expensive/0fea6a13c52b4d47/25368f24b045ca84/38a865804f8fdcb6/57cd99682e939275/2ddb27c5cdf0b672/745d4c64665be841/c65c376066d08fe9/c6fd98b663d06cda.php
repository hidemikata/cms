<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\group\group$site_groups][1]/ */
/* Type: array */
/* Expiration: 2023-07-18T00:54:51+00:00 */



$loaded = true;
$expiration = 1689641691;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'group',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Permission\\SiteGroup',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1689232571;
