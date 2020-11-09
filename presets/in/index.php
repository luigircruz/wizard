<?php

$tpl_lang = 'in';
$lang_tracker = 'ind';
$lang_iso = 'en';

require $_SERVER['DOCUMENT_ROOT'].'/hf-tpl/variables.php';

require '../config/'. $tpl_lang .'/app.php';
require '../config/'. $tpl_lang .'/translations.php';
require '../resources/views/head.php';

?>

<body lang="<?php echo $lang_tracker ?>" class="<?php echo $tpl_lang ?>">

<?php

require $_SERVER['DOCUMENT_ROOT'].'/hf-tpl/header.php';

require '../resources/views/layouts/main.php';

require '../resources/views/footer.php';
