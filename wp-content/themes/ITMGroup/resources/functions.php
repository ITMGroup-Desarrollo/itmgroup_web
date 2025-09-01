<?php
@ini_set( 'upload_max_size', '500M' );
@ini_set( 'post_max_size',   '500M');
@ini_set( 'max_execution_time', '500' );
@ini_set( 'file_uploads', 'On' );


// general tools and utilities
require_once 'inc/utils.php';

// classes for adding meta data or custom post types
require_once 'inc/customDataUtils.php';

// tools for using languages with plugin Polylang
require_once 'inc/langUtils.php';

// tools for blog
require_once 'inc/blogUtils.php';

//wp configs
require_once 'inc/mainRules.php';

//wp admin page configs
if (is_admin() ) {
  require_once 'inc/adminRules.php';
  
}



// editable configs

// file to add custom post types and meta with
require_once 'inc/customDataConfig.php';

//file to add custom menu global variables
require_once 'inc/menuUtils.php';


// proyectos
// used in: 
// components/proyectos.php,
// components/proyectosGrid.php

global $proyectos;
$proyectos = [
    [
        'img' => '/assets/VANGUARDIA/itm_desarrollos_inmobiliarios(30).jpg',
        'title' => 'Vanguardia  <br>Puerto Morelos',
        'text' => (Lang\getLang() == 'en') ? 'Your community in the new residential club of Puerto Morelos.' : 'Tu comunidad en el nuevo club residencial de Puerto Morelos.',
        'link' => 'https://vanguardiaresidences.com'
    ],
    [
        'img' => '/assets/HLIVING/itm_desarrollos_inmobiliarios(17).jpg',
        'title' => 'H Living  <br>Cancún',
        'text' => (Lang\getLang() == 'en') ? 'The new apartment development located in Cancun.' : 'El nuevo desarrollo de departamentos ubicado en Cancún.',
        'link' => 'https://hliving.mx'
    ],
    [
        'img' => '/assets/ALBORADA/itm_desarrollos_inmobiliarios(1).jpg',
        'title' => 'Alborada  <br>Puerto Morelos',
        'text' => (Lang\getLang() == 'en') ? 'Apartments minutes away from the beach in Puerto Morelos.' : 'Departamentos a minutos de la playa de Puerto Morelos.',
        'link' => 'https://alboradacondos.com.mx/es/'
    ],
    [
        'img' => '/assets/KU MAHAHUAL/itm_desarrollos_inmobiliarios(22).jpg',
        'title' => 'Ku  <br>Mahahual',
        'text' => (Lang\getLang() == 'en') ? 'The only residential lot development in Mahahual.' : 'El único desarrollo de lotes residenciales en Mahahual.',
        'link' => 'https://kumahahual.com/en/'
    ],
    [
        'img' => '/assets/ALDEA UMM/itm_desarrollos_inmobiliarios(15).jpg',
        'title' => 'Aldea Umm  <br>Puerto Morelos',
        'text' => (Lang\getLang() == 'en') ? 'Residential lots in Puerto Morelos.' : 'Lotes residenciales en Puerto Morelos.',
        'link' => 'https://aldeaumm.com'
    ]
    
];