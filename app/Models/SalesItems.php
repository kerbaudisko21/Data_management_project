<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesItems extends Model
{
    use HasFactory;
    protected $primaryKey = 'nota';
    public $incrementing = false;
    protected $fillable =[
        'nota',
        'kode_barang',
        'qty'
    ];

    public function nota(){
        return $this->belongsTo(Sales::class);
    }

    public function item(){
        return $this->belongsTo(Items::class,'kode_barang','id');
    }
}
