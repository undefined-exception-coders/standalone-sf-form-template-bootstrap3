<?php
if (!array_key_exists('class', $attr)) {
    $attr['class'] = '';
}
$attr['class'] .= ' form-control';
?>
<?php if ($expanded): ?>
<?php echo $view['form']->block($form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo $view['form']->block($form, 'choice_widget_collapsed', ['attr' => $attr]) ?>
<?php endif ?>