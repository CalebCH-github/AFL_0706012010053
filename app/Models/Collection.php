<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $primaryKey = 'collection_name';
    protected $keyType = 'string';
    protected $table = 'collection';
    protected $fillable = [
        'collection_name',
        'cars',
        'company',
        'image_path'
    ];

    public function getCars(){
        return $this->hasMany(Cars::class, 'collection_from', 'collection_name');
    }
}
