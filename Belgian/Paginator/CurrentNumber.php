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

class CurrentNumber implements ICurrentNumber
{
    private $currentNumber;

    public function __construct($num)
    {
        $num = (int) $num;
        $currentNumber = ($num) ? $num : 1;




        $this->currentNumber = (int) $currentNumber;
    }



    public function getCurrentNumber()
    {
        return  $this->currentNumber;
    }



}    


