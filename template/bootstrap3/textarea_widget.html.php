<?php
if (!array_key_exists('class', $attr)) {
    $attr['class'] = '';
}
$attr['class'] .= ' form-control';
?>
<textarea <?php echo $view['form']->block($form, 'widget_attributes', ['attr' => $attr]) ?>><?php echo $view->escape($value) ?></textarea>
