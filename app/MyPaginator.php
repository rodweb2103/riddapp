<?php
namespace App;

use Illuminate\Pagination\LengthAwarePaginator;

class MyPaginator extends LengthAwarePaginator
{
 
  public $total;
  public function __construct(LengthAwarePaginator $paginator,$total) {
   
    $this->total = $total;
    parent::__construct($paginator->items, $paginator->total, $paginator->perPage, $paginator->currentPage, $paginator->options);

  }

  public function toArray() {

      return array_merge(parent::toArray(), ['total_all'=>$this->total]);

  }

}