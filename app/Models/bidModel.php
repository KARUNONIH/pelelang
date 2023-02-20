<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class bidModel extends Model
{
    use HasFactory;
    protected $table = 'bid';
    public $timestamps = true;
    protected $fillable = [
        'bid_price',
        'id_item',
        'id_user'
    ];

    public function get(){
        return $this->belongsTo(itemModel::class, 'id_user');
    }
    
}
