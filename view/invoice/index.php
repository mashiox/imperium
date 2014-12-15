<?php
/**
    @file
    @brief Invoice Index View Shows Paginated Results of the Index View
*/

namespace Edoceo\Imperium;

use Edoceo\Radix\Radix;

echo Radix::block('page-link', array(
	'cur' => $this->page_cur,
	'max' => $this->page_max,
	'size' => $_GET['size'],
));

echo Radix::block('invoice-list', array('list' => $this->list));

echo Radix::block('page-link', array(
	'cur' => $this->page_cur,
	'max' => $this->page_max,
	'size' => $_GET['size'],
));
