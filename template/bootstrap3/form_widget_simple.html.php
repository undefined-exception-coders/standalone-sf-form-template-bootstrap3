<?php
if (!array_key_exists('class', $attr)) {
    $attr['class'] = '';
}
$attr['class'] .= ' form-control';
?>

<input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes', ['attr' => $attr]) ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />
