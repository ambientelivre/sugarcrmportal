<?php
// created: 2012-01-25 15:15:32
$dictionary["cad_F_Cadastro_familia"]["fields"]["cad_f_cadasstrodeunidades"] = array (
  'name' => 'cad_f_cadasstrodeunidades',
  'type' => 'link',
  'relationship' => 'cad_f_cadastro_familia_cadun_cadastrodeunidades',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_F_CADASTRO_FAMILIA_CADUN_CADASTRODEUNIDADES_FROM_CADUN_CADASTRODEUNIDADES_TITLE',
);
$dictionary["cad_F_Cadastro_familia"]["fields"]["cad_f_cadaseunidades_name"] = array (
  'name' => 'cad_f_cadaseunidades_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_F_CADASTRO_FAMILIA_CADUN_CADASTRODEUNIDADES_FROM_CADUN_CADASTRODEUNIDADES_TITLE',
  'save' => true,
  'id_name' => 'cad_f_cada1031nidades_ida',
  'link' => 'cad_f_cadasstrodeunidades',
  'table' => 'cadun_cadastrodeunidades',
  'module' => 'CADUN_CadastrodeUnidades',
  'rname' => 'name',
);
$dictionary["cad_F_Cadastro_familia"]["fields"]["cad_f_cada1031nidades_ida"] = array (
  'name' => 'cad_f_cada1031nidades_ida',
  'type' => 'link',
  'relationship' => 'cad_f_cadastro_familia_cadun_cadastrodeunidades',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CAD_F_CADASTRO_FAMILIA_CADUN_CADASTRODEUNIDADES_FROM_CAD_F_CADASTRO_FAMILIA_TITLE',
);
