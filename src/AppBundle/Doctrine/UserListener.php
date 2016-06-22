<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 21/6/2016
 * Time: 19:08
 */

namespace AppBundle\Doctrine;


use Symfony\Component\Security\Core\Encoder\EncoderFactory;

class UserListener
{
    private $encoderFactory;

    public function __construct(EncoderFactory $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function prePersist(LifecycleEventArgs $eventArgs)
    {
        
    }

}