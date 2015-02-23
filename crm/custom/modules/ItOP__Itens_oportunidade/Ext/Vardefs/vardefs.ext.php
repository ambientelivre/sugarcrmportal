<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2012-03-02 10:47:12

 

 // created: 2012-03-02 10:46:38
$dictionary['ItOP__Itens_oportunidade']['fields']['valor']['required']=false;

 

// created: 2012-03-02 10:45:33
$dictionary["ItOP__Itens_oportunidade"]["fields"]["itop__itenscad_s_solucoes"] = array (
  'name' => 'itop__itenscad_s_solucoes',
  'type' => 'link',
  'relationship' => 'itop__itens_oportunidade_cad_s_solucoes',
  'source' => 'non-db',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_CAD_S_SOLUCOES_TITLE',
);
$dictionary["ItOP__Itens_oportunidade"]["fields"]["itop__itens_solucoes_name"] = array (
  'name' => 'itop__itens_solucoes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_CAD_S_SOLUCOES_TITLE',
  'save' => true,
  'id_name' => 'itop__iten1d39olucoes_ida',
  'link' => 'itop__itenscad_s_solucoes',
  'table' => 'cad_s_solucoes',
  'module' => 'CAD_S_Solucoes',
  'rname' => 'name',
);
$dictionary["ItOP__Itens_oportunidade"]["fields"]["itop__iten1d39olucoes_ida"] = array (
  'name' => 'itop__iten1d39olucoes_ida',
  'type' => 'link',
  'relationship' => 'itop__itens_oportunidade_cad_s_solucoes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_ITOP__ITENS_OPORTUNIDADE_TITLE',
);

?>