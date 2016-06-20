<?php

namespace UEC\Standalone\Symfony\Form\Template\Bootstrap3\Type;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BootstrapCollectionFormType extends CollectionType
{
    public function getParent()
    {
        return CollectionType::class;
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars = array_replace($view->vars, [
            'single_item_theme' => $options['single_item_theme'],
            'button_add_text' => $options['button_add_text'],
            'button_add_block' => $options['button_add_block'],
            'button_add_style' => $options['button_add_style'],
            'button_delete_text' => $options['button_delete_text'],
            'button_delete_block' => $options['button_delete_block'],
            'button_delete_style' => $options['button_delete_style'],
            'button_delete_content' => $options['button_delete_content'],
            'button_delete_empty_label' => $options['button_delete_empty_label'],
            'responsive_content_col' => $options['responsive_content_col'],
            'responsive_delete_col' => $options['responsive_delete_col'],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'single_item_theme' => null,
            'button_add_text' => 'Add item',
            'button_add_block' => false,
            'button_add_style' => 'default',
            'button_delete_text' => 'Delete item',
            'button_delete_block' => false,
            'button_delete_style' => 'danger',
            'button_delete_content' => null,
            'button_delete_empty_label' => true,
            'responsive_content_col' => 'col-sm-10',
            'responsive_delete_col' => 'col-sm-2',
        ));
    }

    public function getBlockPrefix()
    {
        return 'bootstrap_collection';
    }
}