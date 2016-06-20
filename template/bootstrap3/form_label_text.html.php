<?php if (false !== $label): ?>
<?php if (!$label) { $label = isset($label_format)
    ? strtr($label_format, array('%name%' => $name, '%id%' => $id))
    : $view['form']->humanize($name); } ?>
<?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?>
<?php endif ?>
