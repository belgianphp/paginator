<?php 

/*
 *
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/paginator
 * @copyright   2017
 * 
 */



namespace Belgian\Paginator\Nav;

use Belgian\Paginator\ICurrentNumber;

class ArrowNav implements IArrowNav
{

    private $_first;
    private $_last;
    private $_next;
    private $_prev;

    private $_currentNumber;
    private $_totalRows;


    public function __construct(
        ICurrentNumber $currentNumber,
        $totalRows 
    )
    { 
        $this->_currentNumber = $currentNumber;
        $this->_totalRows     = $totalRows;

        self::_init();
    }



    public function getFirst()
    {
        return  $this->_first;
    } 


    public function getLast()
    {
        return $this->_last;
    } 


    public function getPrev()
    {
        return $this->_prev;
    } 


    public function getNext()
    {
        return $this->_next;
    } 




    private function _init()
    {
        $total   = $this->_totalRows;
        $currNum = $this->_currentNumber->getCurrentNumber();
        $first   = ($currNum != 1)? 1: NULL;
        $last    = ($currNum != $total)? $total: NULL;
        $plus    = ($currNum - 1)? ($currNum - 1): NULL;
        $less    = (($currNum + 1) <= $total)? ($currNum + 1): NULL;


        $this->_first  = $first;
        $this->_last   = $last;
        $this->_prev   = $plus; 
        $this->_next   = $less;


    } 






}    


