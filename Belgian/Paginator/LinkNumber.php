<?php 

/*
 *
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/paginator
 * @copyright   2017
 * 
 */



namespace Belgian\Paginator;

class LinkNumber implements ILinkNumber
{
    private $num;
    
    public function __construct($num)
    {
        $this->num = (int) $num;
    }



public function getLinkNumber()
{
    return $this->num;
} 





}


