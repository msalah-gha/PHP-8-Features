<?php

# Named Parameters
/*
 with named parameters:
  - easy to remember the parameters
  - can send the parameters with any order without now issue at all

 disadvantages:
   - named parameters will be coupled with the code,
 as ex: if you changed the $description to productDesc in this case you will need to
 maintain all the named parameters while getting object from this class
*/

class Invoice
{
    public function __construct(
        private string $description,
        private int $total,
        private bool $paid
    )
    {
    }
}

$invoice = new Invoice(
    description: 'customer installation',
    total: 100,
    paid: true
);
var_dump($invoice);

/*
* send parameters with any order without any issue
$invoice_2 = new Invoice(
    paid: true,
    total: 60,
    description: 'customer development',
);
*/