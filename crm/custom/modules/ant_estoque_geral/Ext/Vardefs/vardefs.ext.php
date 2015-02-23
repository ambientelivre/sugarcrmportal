<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:34
$dictionary["ant_estoque_geral"]["fields"]["ant_estoque_ant_regionais"] = array (
  'name' => 'ant_estoque_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqueregionais_name"] = array (
  'name' => 'ant_estoqueregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 'ant_estoquf27agionais_idb',
  'link' => 'ant_estoque_ant_regionais',
  'table' => 'ant_regionais',
  'module' => 'ant_regionais',
  'rname' => 'name',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquf27agionais_idb"] = array (
  'name' => 'ant_estoquf27agionais_idb',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);


// created: 2014-12-23 09:50:34
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquent_secretarias"] = array (
  'name' => 'ant_estoquent_secretarias',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquecretarias_name"] = array (
  'name' => 'ant_estoquecretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu5de3etarias_idb',
  'link' => 'ant_estoquent_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqu5de3etarias_idb"] = array (
  'name' => 'ant_estoqu5de3etarias_idb',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);


// created: 2014-12-23 09:50:34
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqueal_ant_produto"] = array (
  'name' => 'ant_estoqueal_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquet_produto_name"] = array (
  'name' => 'ant_estoquet_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu70a5produto_idb',
  'link' => 'ant_estoqueal_ant_produto',
  'table' => 'ant_produto',
  'module' => 'ant_produto',
  'rname' => 'name',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqu70a5produto_idb"] = array (
  'name' => 'ant_estoqu70a5produto_idb',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);

?>