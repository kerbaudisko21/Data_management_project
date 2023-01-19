<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'domisili'
    ];
    public static function boot() {
	    parent::boot();
	    static::creating(function($item) {
            $lastId = 0;
            if(Customers::select('id')->count() > 0){
                $lastId = Customers::select('id')->orderBy('id','desc')->first();
                $lastId=(int)substr($lastId , -3);
            }
            $item->id = "PELANGAN- ".$lastId+1;
	    });

	}
    public function nota(){
        return $this->hasMany(Sales::class,'kode_pelanggan','id');
    }


}
