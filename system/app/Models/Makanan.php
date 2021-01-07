<?php 

namespace App\Models;

/**
 * 
 */
class Makanan extends Model{
	
	protected $table = 'makanan';

	function seller(){
	return $this->belongsTo(User::class, 'id_user');
  }

  	function getHargaAtribute(){
  		return "Rp.".number_format($this->atributes['harga']);
  	}

  	
}