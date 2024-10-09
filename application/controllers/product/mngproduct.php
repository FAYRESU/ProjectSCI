<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MngProduct extends CI_Controller
{

	public function showProduct($product_id = null)
	{
		echo "Product id :" . $product_id;
		echo "</br>";
		$this->_showProductName();
	}

	public function _showProductName()
	{
		echo "Product name : iPhone";
	}
}


// http://localhost/project3/index.php/mngproduct/showproduct
