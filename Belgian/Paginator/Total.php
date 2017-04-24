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

class Total implements ITotal
{
    private $total;
    
    public function __construct($total)
    {
        $this->total = (int) $total;
    }



    public function getTotal()
    {
       return  $this->total;
    } 
    
}    


