<?php if (isset($prototype)): ?>
    <?php if (empty($single_item_theme)): ?>
        <?php $prototypeHtml = $view['form']->row($prototype) ?>
    <?php else: ?>
        <?php $prototypeHtml = $view['form']->block($prototype, $single_item_theme) ?>
    <?php endif ?>

    <?php if ($allow_delete): ?>
        <?php $prototypeHtml = '
        <div class="row">
            <div class="'.$responsive_content_col.'">'.$prototypeHtml.'</div>
            <div class="'.$responsive_delete_col.'">
                <div class="form-group">
                    '.($button_delete_empty_label ? '<label style="display: block" class="hidden-xs">&nbsp</label>' : '').'
                    <button type="button" data-bootstrap-collection="btn-delete" data-bootstrap-collection-id="'.$form->vars['id'].'" class="btn btn-'.$button_delete_style.($button_delete_block ? ' btn-block' : '').'">'.$view->escape((!empty($button_delete_content) ? $button_delete_content : (false !== $translation_domain ? $view['translator']->trans($button_delete_text, array(), $translation_domain) : $button_delete_text))).'</button>
                </div>
            </div>
        </div>' ?>
    <?php endif ?>
<?php endif ?>

<ul class="list-unstyled" data-bootstrap-collection="collection" data-bootstrap-collection-id="<?php echo $form->vars['id'] ?>" data-prototype="<?php echo $view->escape($prototypeHtml) ?>">
    <?php foreach ($form as $child) : ?>
        <li>
            <?php if ($allow_delete): ?>
                <div class="row"><div class="<?php echo $responsive_content_col ?>">
            <?php endif ?>

            <?php if (empty($single_item_theme)): ?>
                <?php echo $view['form']->row($child) ?>
            <?php else: ?>
                <?php echo $view['form']->block($child, $single_item_theme) ?>
            <?php endif ?>

            <?php if ($allow_delete): ?>
                </div><div class="<?php echo $responsive_delete_col ?>">
            <?php endif ?>

            <?php if ($allow_delete): ?>
                <div class="form-group">
                    <?php if ($button_delete_empty_label): ?>
                        <label style="" class="hidden-xs">&nbsp</label>
                    <?php endif ?>
                    <button type="button" data-bootstrap-collection="btn-delete" data-bootstrap-collection-id="<?php echo $form->vars['id'] ?>" class="btn btn-<?php echo $button_delete_style ?><?php if ($button_delete_block): ?> btn-block<?php endif ?>"><?php echo $view->escape((!empty($button_delete_content) ? $button_delete_content : (false !== $translation_domain ? $view['translator']->trans($button_delete_text, array(), $translation_domain) : $button_delete_text))) ?></button>
                </div>
            <?php endif ?>

            <?php if ($allow_delete): ?>
                </div></div>
            <?php endif ?>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($allow_add): ?>
    <button type="button" data-bootstrap-collection="btn-add" data-bootstrap-collection-id="<?php echo $form->vars['id'] ?>" class="btn btn-<?php echo $button_add_style ?><?php if ($button_add_block): ?> btn-block<?php endif ?>"><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($button_add_text, array(), $translation_domain) : $button_add_text) ?></button>
<?php endif ?>
