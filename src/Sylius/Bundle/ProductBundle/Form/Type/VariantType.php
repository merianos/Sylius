<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ProductBundle\Form\Type;

use Sylius\Bundle\VariationBundle\Form\Type\VariantType as BaseVariantType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Product variant form type.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class VariantType extends BaseVariantType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('availableOn', 'datetime', [
                'required' => false,
                'date_widget' => 'single_text',
                'time_widget' => 'single_text',
                'label' => 'sylius.form.product_variant.available_on',
            ])
            ->add('availableUntil', 'datetime', [
                'required' => false,
                'date_widget' => 'single_text',
                'time_widget' => 'single_text',
                'label' => 'sylius.form.product_variant.available_until',
            ])
        ;
    }
}
