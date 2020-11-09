<?php

/*
|----------------------------------------------------------------------------------
| HEADER/FOOTER TEMPLATE CONFIGURATIONS 
|----------------------------------------------------------------------------------
|
| Most Dafabet landing pages uses uniformly designed header and footer template.
| These template/s is already created and can be imported to your application 
| out of the box. It is important that you are familiar with the different 
| types of template layouts, knows how to utilize it on your app, and 
| is aware of the configuration variables needed for an specific
| language/page. 
|
| You can learn more about the HEADER/FOOTER template here: 
| https://asianlogic.atlassian.net/wiki/spaces/OWD/pages/2646954/Landing+Pages+HF
|
*/

return [
    
    $header_layout = 3,

    $language_ticker = false,

    $product_menu = false,

    $phone_number = false,

    $toll_str = 'INTERNATIONAL<br>TOLL-FREE:<br>800-7423-2274',

    $social_media = array($fac_icon, $twi_icon, $ins_icon, $wha_icon_click),

    $tpl_ga_code_scripts = false,

];