<?php $type = $multiple ? 'checkbox' : 'radio' ?>
<?php foreach ($form as $child): ?>
    <div <?php echo $view['form']->block($form, 'widget_container_attributes', ['attr' => ['class' => $type]]) ?>>
        <?php echo $view['form']->widget($child, [
            'wrapper' => false,
            'choice_translation_domain' => $choice_translation_domain
        ]) ?>
    </div>
<?php endforeach ?>
