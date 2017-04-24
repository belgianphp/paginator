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

interface IArrowNav
{
    public function getFirst();
    public function getLast();
    public function getPrev();
    public function getNext();
}



