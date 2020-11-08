<?php

//Config
include_once('config.php');

/*----------------------------------------------------
				Normal Reg Variables
----------------------------------------------------*/
// Normal Reg Language declaration
$rf_lang = 'sc';

// Include the fast reg configuration
include($_SERVER['DOCUMENT_ROOT'].'/normal-reg/rf-config.php');


/*----------------------------------------------------
				HF Template Variables
----------------------------------------------------*/

//Language
$tpl_lang = 'sc';

//Header template
include($_SERVER['DOCUMENT_ROOT'].'/hf-tpl/variables.php');

// Social media settings
$social_media = array($tel_icon, $fac_icon);
$phone_number_str = '';

// Footer scripts
$toll_str = 'INTERNATIONAL<br> TOLL-FREE:<br> 1800814063';

$tpl_ga_code_id = 'UA-36828255-4';

/*----------------------------------------------------
				Translations
----------------------------------------------------*/
include('translations.php');
?>

<!DOCTYPE html>
<html>
<head>
	<?php
        //Includes Meta tags, JS, CSS
        include('_includes/head.php');
    ?>
</head>
<body lang="<?php echo $tpl_lang; ?>" class="<?php echo $tpl_lang; ?>">

	<!-- Hidden input fields for HF template -->
	<input type="hidden" name="tpl_url_hidden" id="tpl-url-hidden" value="<?php echo TPL_URL; ?>">
	<input type="hidden" name="tpl_mobile_responsive" id="tpl-mobile-responsive" value="<?php echo $mobile_responsive; ?>">
	
	<?php
		//Main Template
		include('_includes/main.php');
		//Footer Template
		include($_SERVER['DOCUMENT_ROOT'].'/hf-tpl/footer.php');
	?>
    
</body>
</html>
