<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $primaryKey = 'car_name';
    protected $keyType = 'string';
    protected $table = 'cars';
    protected $fillable = [
        'car_name',
        'collection_from',
        'year',
        'color',
        //'index',
        'image_path_car',
    ];

    public function getCollection(){
        return $this->belongsTo(Collection::class, 'collection_from', 'collection_id');
    }
}
