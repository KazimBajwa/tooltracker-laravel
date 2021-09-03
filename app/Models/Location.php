<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = ['name'];
    public function tools()
    {
        return $this->hasMany(Tool::class, 'location_id', 'id');
    }
}
