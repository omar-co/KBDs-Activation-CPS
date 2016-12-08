
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>2016 KBDs Activation CPS.</strong>
</footer>

</div>

<?php  foreach ($js_footer as $js) {
    echo '<script src="' . base_url($js) . '.js"></script>';
}

foreach ($js_footer_final as $js) {
    echo '<script src="' . base_url($js) . '.js"></script>';
}
if ( ! $js_code == NULL)
{
    echo '<script type="text/javascript">';
    echo $js_code;
    echo  '</script>';
}
?>

<!-- ./wrapper -->
