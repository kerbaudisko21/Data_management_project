<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'tgl',
        'kode_pelanggan',
        'subtotal'
    ];
    public static function boot() {
	    parent::boot();
	    static::creating(function($item) {
            $lastId = 0;
            if(Sales::select('id')->count() > 0){
                $lastId = Sales::select('id')->orderBy('id','desc')->first();
                $lastId=(int)substr($lastId , -3);
            }
            $item->id = "NOTA_".$lastId+1;
	    });

	}

    public function customer(){
        return  $this->hasMany(Customers::class);
    }

    public function idNota(){
        return $this->hasMany(SalesItems::class,'nota','id');
    }
}
