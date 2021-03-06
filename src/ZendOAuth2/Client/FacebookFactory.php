<?php
namespace ZendOAuth2\Client;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FacebookFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $me = new \ZendOAuth2\Client\Facebook;
        $cf = $serviceLocator->get('Config');
        $me->setOptions(new \ZendOAuth2\ClientOptions($cf['zendoauth2']['facebook']));
        return $me;
    }
}