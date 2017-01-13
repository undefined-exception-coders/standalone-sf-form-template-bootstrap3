<?php $wrapper = isset($wrapper) ? (bool)$wrapper : true ?>

<?php if ($wrapper): ?><div class="radio"><?php endif ?>
<label>
    <input type="radio"
        <?php echo $view['form']->block($form, 'widget_attributes') ?>
        value="<?php echo $view->escape($value) ?>"
        <?php if ($checked): ?> checked="checked"<?php endif ?>
    />
    <?php echo $view['form']->block($form, 'form_label_text', [
        'translation_domain' => $choice_translation_domain ?? $translation_domain
    ])?>
</label>
<?php if ($wrapper): ?></div><?php endif ?>