id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>" <?php if ($disabled): ?>disabled="disabled" <?php endif ?>

<?php
if (array_key_exists('style', $attr) && in_array($attr['style'], ['default','primary','success','info','warning','danger','link'])) {
    $attr['class'] .= ' btn-'.$attr['style'];
    unset($attr['style']);
} else {
    $attr['class'] .= ' btn-primary';
}
?>

<?php foreach ($attr as $k => $v): ?>
<?php if (in_array($v, array('placeholder', 'title'), true)): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>
<?php elseif ($v === true): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>
<?php elseif ($v !== false): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>
<?php endif ?>
<?php endforeach ?>
