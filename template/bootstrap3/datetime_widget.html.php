<?php if ($widget == 'single_text'): ?>
    <?php echo $view['form']->block($form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo $view['form']->block($form, 'widget_container_attributes', ['attr' => ['class' => 'row']]) ?>>
        <?php echo $view['form']->widget($form['date'], ['attr' => ['class' => 'col-sm-8']]) ?> <?php echo $view['form']->widget($form['time'], ['attr' => ['class' => 'col-sm-4']]) ?>
    </div>
<?php endif ?>
