<?php if ($widget == 'single_text'): ?>
    <?php echo $view['form']->block($form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>
        <div class="row">
            <div class="col-sm-4">
                <?php echo $view['form']->label($form['year']) ?>
                <?php echo $view['form']->widget($form['year']) ?>
            </div>
            <div class="col-sm-4">
                <?php echo $view['form']->label($form['month']) ?>
                <?php echo $view['form']->widget($form['month']) ?>
            </div>
            <div class="col-sm-4">
                <?php echo $view['form']->label($form['day']) ?>
                <?php echo $view['form']->widget($form['day']) ?>
            </div>
        </div>
    </div>
<?php endif ?>
