<div class="form-group<?php if (!$valid): ?> has-error<?php endif ?>">
    <?php if (!in_array($block_prefixes[1], ['checkbox'])): ?>
        <?php echo $view['form']->label($form) ?>
    <?php endif ?>
    <?php echo $view['form']->widget($form) ?>
    <?php echo $view['form']->errors($form) ?>
</div>
