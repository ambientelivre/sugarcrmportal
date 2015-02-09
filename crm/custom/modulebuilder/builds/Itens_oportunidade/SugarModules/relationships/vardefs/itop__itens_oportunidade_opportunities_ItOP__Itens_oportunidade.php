<?php
// created: 2012-03-02 10:45:33
$dictionary["ItOP__Itens_oportunidade"]["fields"]["itop__itens_opportunities"] = array (
  'name' => 'itop__itens_opportunities',
  'type' => 'link',
  'relationship' => 'itop__itens_oportunidade_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["ItOP__Itens_oportunidade"]["fields"]["itop__itensrtunities_name"] = array (
  'name' => 'itop__itensrtunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'itop__iten6192unities_ida',
  'link' => 'itop__itens_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["ItOP__Itens_oportunidade"]["fields"]["itop__iten6192unities_ida"] = array (
  'name' => 'itop__iten6192unities_ida',
  'type' => 'link',
  'relationship' => 'itop__itens_oportunidade_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_OPPORTUNITIES_FROM_ITOP__ITENS_OPORTUNIDADE_TITLE',
);
