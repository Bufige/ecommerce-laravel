<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    //
	
	public $items = null;
	public $totalAmount = 0;
	public $totalPrice = 0;
	
	public function __construct($oldCart)
	{
		if($oldCart) 
		{
			$this->items = $oldCart->items;
			$this->totalAmount = $oldCart->totalAmount;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}
	
	public function add($item, $id) 
	{
		$storeditem = ['amount' => 0, 'price' => $item->price, 'item' =>  $item];
		if($this->items)
		{
			if(array_key_exists($id, $this->items))
			{
				$storeditem = $this->items[$id];
			}
		}
		$storeditem['amount']++;
		$storeditem['price'] = $item->price * $storeditem['amount'];
		$this->items[$id] = $storeditem;
		
		$this->totalAmount++;
		$this->totalPrice += $item->price;
	}
}
