<?php if (false !== $label): ?>
<?php $label_attr['class'] = trim((isset($label_attr['class']) ? $label_attr['class'] : '').' control-label') ?>
<?php if ($required) { $label_attr['class'] = trim((isset($label_attr['class']) ? $label_attr['class'] : '').' required'); } ?>
<?php if (!$compound) { $label_attr['for'] = $id; } ?>
    <label <?php foreach ($label_attr as $k => $v) { printf('%s="%s" ', $view->escape($k), $view->escape($v)); } ?>><?php echo $view['form']->block($form, 'form_label_text')?></label>
<?php endif ?>
