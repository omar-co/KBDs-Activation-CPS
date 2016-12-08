<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<?php

foreach ($estilos as $css) {
    echo '<link rel="stylesheet" href="' . base_url($css) . '.css?'.now().'">';
}

?>

<?php

if (isset($js_head)) {
    foreach ($js_head as $js) {
        echo '<script src="' . base_url($js) . '.js"></script>';
    }
}

?>


<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

