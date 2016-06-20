<?php if ($widget == 'single_text'): ?>
    <?php echo $view['form']->block($form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php $vars = $widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <?php
        $columnsForBlock = 12;
        $division = 1;
        if ($with_minutes) {
            $division++;
        }
        if ($with_seconds) {
            $division++;
        }
        $columnsForBlock /= $division;
    ?>
    <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>
        <div class="row">
            <div class="col-sm-<?php echo $columnsForBlock ?>">
                <?php echo $view['form']->label($form['hour']) ?>
                <?php echo $view['form']->widget($form['hour'], $vars) ?>
            </div>
            <?php if ($with_minutes): ?>
                <div class="col-sm-<?php echo $columnsForBlock ?>">
                    <?php echo $view['form']->label($form['minute']) ?>
                    <?php echo $view['form']->widget($form['minute'], $vars) ?>
                </div>
            <?php endif ?>
            <?php if ($with_seconds): ?>
                <div class="col-sm-<?php echo $columnsForBlock ?>">
                    <?php echo $view['form']->label($form['second']) ?>
                    <?php echo $view['form']->widget($form['second'], $vars) ?>
                </div>
            <?php endif ?>
        </div>
    </div>
<?php endif ?>
