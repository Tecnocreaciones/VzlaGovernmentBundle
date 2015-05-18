<?php

/*
 * This file is part of the TecnoCreaciones package.
 * 
 * (c) www.tecnocreaciones.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\GovernmentBundle\Twig\Extension;

/**
 * Description of CoreExtension
 *
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class CoreExtension extends \Twig_Extension
{
    private $cacheRendered;
    public function __construct() {
        $this->cacheRendered = array();
    }
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('hash', array($this, 'generateHash'), array('is_safe' => array('html'))),
        );
    }
    
    public function getFunctions() {
        return array(
            new \Twig_SimpleFunction('isRender', array($this,'isRender')),
        );
    }
//    
//    function staticCall($class, $function, $args = array())
//    {
//        if (class_exists($class) && method_exists($class, $function))
//            return call_user_func_array(array($class, $function), $args);
//        return null;
//    }
    
    public function isRender($name) 
    {
        if(in_array($name,$this->cacheRendered)){
            return true;
        }
        $this->cacheRendered[] = $name;
        return false;
    }
    
    function generateHash($str) {
        return md5($str);
    }
    
    public function getName() {
        return 'vzla_government_core_extension';
    }
}
