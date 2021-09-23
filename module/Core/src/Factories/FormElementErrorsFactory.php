<?php

namespace Core\Factories;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Laminas\Form\View\Helper\FormElementErrors;

class FormElementErrorsFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $helper = new FormElementErrors();

        $config = $container->get('config');
        if (isset($config['view_helper_config']['form_element_errors'])) {
            $configHelper = $config['view_helper_config']['form_element_errors'];
            if (isset($configHelper['message_open_format'])) {
                $helper->setMessageOpenFormat($configHelper['message_open_format']);
            }
            if (isset($configHelper['message_separator_string'])) {
                $helper->setMessageOpenFormat($configHelper['message_separator_string']);
            }
            if (isset($configHelper['message_open_string'])) {
                $helper->setMessageOpenFormat($configHelper['message_open_string']);
            }
        }

        return $helper;
    }
}
