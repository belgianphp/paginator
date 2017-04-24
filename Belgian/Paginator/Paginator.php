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

use Belgian\Paginator\Nav\NumberNav;
use Belgian\Paginator\Nav\ArrowNav;

class Paginator implements IPaginator 
{

    private $total;
    private $perPage;
    private $offset;

    private $currentNumber;
    private $totalRows;
    private $linkNumber;
    private $numberNav;
    private $arrowNav;
    




    public function __construct(
        ITotal          $total, 
        IPerPage        $perPage, 
        ICurrentNumber  $currentNumber, 
        ILinkNumber     $numberLink
    )
    {
        $this->total         = $total;
        $this->perPage       = $perPage;
        $this->currentNumber = $currentNumber; 

        $t = self::getTotal();
        $p = self::getPerPage();
        $c = $this->currentNumber->getCurrentNumber();

        $this->offset    = ($p * $c - $p);
        $this->totalRows = (ceil( $t / $p));


        $this->numberNav = new NumberNav(
            $currentNumber, $numberLink,
            $this->totalRows
        );

        $this->arrowNav = new ArrowNav(
            $currentNumber,
            $this->totalRows
        );

    }





    public function getTotal()
    {
        return $this->total->getTotal();
    }





    public function getNumber()
    {
        return  $this->numberNav;
    } 





    public function getArrow()
    {
        return  $this->arrowNav;
    } 





    public function getPerPage()
    {
        return $this->perPage->getPerPage();
    }




    public function getOffset()
    {
        return $this->offset;
    }





    public function haveToPaginate()
    {
        return ($this->totalRows > 1); 
    } 






}

