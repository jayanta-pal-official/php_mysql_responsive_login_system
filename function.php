<?php
function get_inputs($index)
{
    $inputs = isset($_POST[$index]) ? $_POST[$index] : "";
    return $inputs;

}
?>

