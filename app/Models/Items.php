<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'nama',
        'kategori',
        'harga'
    ];
    public static function boot() {
	    parent::boot();
	    static::creating(function($item) {
            $lastId = 0;
            if(Items::select('id')->count() > 0){
                $lastId = Items::select('id')->orderBy('id','desc')->first();
                $lastId=(int)substr($lastId , -3);
            }
            $item->id = "BRG-".$lastId+1;
	    });

	}

    public function salesItems(){
        return $this->hasMany(SalesItems::class,'kode_barang','id');
    }
}
