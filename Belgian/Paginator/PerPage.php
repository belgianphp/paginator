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

class PerPage implements IPerPage
{
    private $num;
    
    public function __construct($num)
    {
        $this->num = (int) $num;
    }


public function getPerPage()
{
   return  $this->num;
} 



}


