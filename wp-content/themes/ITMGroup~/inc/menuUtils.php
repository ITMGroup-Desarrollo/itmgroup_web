<?php
function define_brands_links() {
  global $ports, $realState, $hospitality;

  $ports = [
      [
          'href' => (Lang\getLang() == 'en') ? '/ports#costa-maya' : '/puertos#costa-maya',
          'title' => 'Costa Maya'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/ports#taino-bay' : '/puertos#taino-bay',
          'title' => 'Taino Bay'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/ports#cabo-rojo' : '/puertos#cabo-rojo',
          'title' => 'Port Cabo Rojo'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/ports#samana' : '/puertos#samana',
          'title' => 'Port Samaná'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/ports#roatan' : '/puertos#roatan',
          'title' => 'Port Roatán'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/ports#la-paz' : '/puertos#la-paz',
          'title' => 'Port La Paz'
      ]
  ];

  $realState = [
      [
          'href' => (Lang\getLang() == 'en') ? '/real-state#vanguardia' : '/desarrollo-inmobiliario#vanguardia',
          'title' => 'Vanguardia'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/real-state#aldea-umm' : '/desarrollo-inmobiliario#aldea-umm',
          'title' => 'Aldea Umm'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/real-state#alborada' : '/desarrollo-inmobiliario#alborada',
          'title' => 'Alborada Condos'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/real-state#ku-mahahual' : '/desarrollo-inmobiliario#ku-mahahual',
          'title' => 'Ku Mahahual'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/real-state#h-living' : '/desarrollo-inmobiliario#h-living',
          'title' => 'H Living'
      ]
  ];

  $hospitality = [
      [
          'href' => (Lang\getLang() == 'en') ? '/hospitality#cancun-center' : '/hospitalidad#cancun-center',
          'title' => 'Cancun Center'
      ],
      [
          'href' => (Lang\getLang() == 'en') ? '/hospitality#aloft' : '/hospitalidad#aloft',
          'title' => 'Aloft'
      ]
  ];
}
add_action('init', 'define_brands_links');
?>