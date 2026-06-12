<?php
// -----------------------------------------------------------------------------
//  Block: STARTER
//  Edited: 3L, 27-JAN-2022
// -----------------------------------------------------------------------------


// -- Initializations
date_default_timezone_set('Europe/Lisbon');
setlocale(LC_TIME, "pt_PT");



// -- Project CONSTANTS
defined('IS_EXPORT') or define('IS_EXPORT', false);
defined('VERSION') or define('VERSION', '1.0');
defined('DATE_UPDATE') or define('DATE_UPDATE', '27-JAN-2022');

defined('SITE_COFINA_BRAND') or define('SITE_COFINA_BRAND', 'Correio da Manhã');
// defined('SITE_COFINA_BRAND') or define('SITE_COFINA_BRAND','Jornal de Negócios');
// defined('SITE_COFINA_BRAND') or define('SITE_COFINA_BRAND','Sábado');

defined('SITE_TITLE') or define('SITE_TITLE', 'Starter Widget');
defined('SITE_SLUG') or define('SITE_SLUG', 'starter-widget');
defined('SITE_CLIENT_NAME') or define('SITE_CLIENT_NAME', null);
defined('SITE_URL') or define('SITE_URL', null);
defined('SITE_CONTENT_BACKGROUND') or define('SITE_CONTENT_BACKGROUND', '#F3F3F3');



// -- Define Cofina Brand CONSTANTS
switch (SITE_COFINA_BRAND):
  case 'Correio da Manhã':
    defined('SITE_COFINA_SLUG') or define('SITE_COFINA_SLUG', 'cm');
    defined('SITE_UTMS_SLUG') or define('SITE_UTMS_SLUG', 'Correio%20da%20Manh%C3%A3');
    $widget_type = 'regular';
    $widget_size = '900';
    break;
  case 'Jornal de Negócios':
    defined('SITE_COFINA_SLUG') or define('SITE_COFINA_SLUG', 'negocios');
    defined('SITE_UTMS_SLUG') or define('SITE_UTMS_SLUG', 'Neg%C3%B3cios');
    $widget_type = 'regular';
    $widget_size = '900';
    break;
  case 'Sábado':
    defined('SITE_COFINA_SLUG') or define('SITE_COFINA_SLUG', 'sabado');
    defined('SITE_UTMS_SLUG') or define('SITE_UTMS_SLUG', 'S%C3%A1bado');
    $widget_type = 'wide';
    $widget_size = '1320';
    break;
endswitch;
defined('SITE_UTMS_PREFFIX') or define('SITE_UTMS_PREFFIX', '?utm_source=Widget%20HP&utm_medium=Referral&utm_campaign=' . SITE_UTMS_SLUG);


// -- Set for EXPORT
if (IS_EXPORT):
  defined('SITE_BASE_IMG') or define('SITE_BASE_IMG', 'https://pubs.xl.pt/c-studio/widgets-cbs/' . SITE_SLUG . '/');
else:
  defined('SITE_BASE_IMG') or define('SITE_BASE_IMG', '');
endif;
?>