<?php 

require '../vendor/autoload.php';

use Belgian\Paginator\Paginator;
use Belgian\Paginator\Total;
use Belgian\Paginator\PerPage;
use Belgian\Paginator\CurrentNumber;
use Belgian\Paginator\LinkNumber;


if( !function_exists('anchor') ) 
{
    function anchor($link, $name)
    {
        return sprintf('<a href="%s">%s</a>', $link, $name);
    }
}



$currNum = (isset($_GET['page'])) ? (int) $_GET['page']: 0;
$url = 'http://127.0.0.1/github/belgianphp/paginator/test/main.php?page=';
$currStr = '<b style="color: #c00;">%s</b>';



$page = new Paginator(
    new Total(200),
    new PerPage(10),
    new CurrentNumber($currNum),
    new LinkNumber(2)
);


if( $page->haveToPaginate() )
{
    echo ( !$page->getArrow()->getFirst() ) ? 
        'First |' : 
        anchor( $url . $page->getArrow()->getFirst(), 'First' );

    echo ' ';

    echo ( !$page->getArrow()->getPrev() ) ? 
        'Previous' : 
        anchor($url . $page->getArrow()->getPrev(), 'Previous');
    echo ' ';

    echo ' - ';

    foreach ( $page->getNumber()->getAll() as $num )
    {
        echo ( $page->getNumber()->getCurrent() == $num ) ? 
            sprintf($currStr, $num) : anchor($url . $num, $num);
        echo ' - ';
    }

    echo ( !$page->getArrow()->getNext() ) ? 
        'Next' : anchor($url . $page->getArrow()->getNext(), 'Next');
    echo ' ';

    echo ( !$page->getArrow()->getLast() ) ? 
        '| Last' : anchor($url . $page->getArrow()->getLast(), 'Last');
    echo ' ';

}


## SQL string
/*

$sql = 'SELECT * FROM tb_lorem LIMIT 10 OFFSET ' . $page->getOffset();

 */


