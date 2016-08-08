<?php if (!$label) { $label = isset($label_format)
    ? strtr($label_format, array('%name%' => $name, '%id%' => $id))
    : $view['form']->humanize($name); } ?>

<?php
if (!array_key_exists('class', $attr)) {
    $attr['class'] = '';
}
$attr['class'] .= ' btn';
?>

<button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes', ['attr' => $attr]) ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>
