<?php $wrapper = isset($wrapper) ? (bool)$wrapper : true ?>

<?php if ($wrapper): ?><div class="checkbox"><?php endif ?>
<label class="<?php if (array_key_exists('disabled', $attr) && $attr['disabled'] === 'disabled'): ?>text-muted<?php endif; ?>">
    <input type="checkbox"
        <?php echo $view['form']->block($form, 'widget_attributes') ?>
        <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>
        <?php if ($checked): ?> checked="checked"<?php endif ?>
    />
    <?php echo $view['form']->block($form, 'form_label_text')?>
</label>
<?php if ($wrapper): ?></div><?php endif ?>
