<?php
namespace Lang;

// this file uses the plugin Polylang

function getLocale($base = 'es-MX'){
	if ( function_exists('pll_current_language') ) {
        return str_replace('_', '-', pll_current_language('locale'));
    }
    else{
    	return $base;
    }
}
function getLang($base = 'es'){
	if ( function_exists('pll_current_language') ) {
        return pll_current_language();
    }
    else{
    	return $base;
    }
}