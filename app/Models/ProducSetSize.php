<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducSetSize extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sizeItem(){
        return $this ->belongsTo(ProductSize::class , 'size_id' , 'id');
    }
}
