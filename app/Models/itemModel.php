<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class itemModel extends \Eloquent
{
    use HasFactory;
    protected $table = 'item';
    public $timestamps = true;
    protected $fillable = [
        'nama',
        'harga_awal',
        'deskripsi',
        'gambar',
        'kategori_id',
        'harga_akhir',
        'id_user',
        'status',
        'complete_at'
    ];

    public function bid(){
        return $this->hasMany(bidModel::class, 'id_item');
    }
    public function kategori(){
        return $this->belongsTo(kategoriModel::class, 'kategori_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    // public function user(){
    //     return $this->belongsTo()
    // }
    
   


   

}
