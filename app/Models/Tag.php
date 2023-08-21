<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'tag';
    // mapping ke kolom/field
    protected $fillable = ['nama'];

    public function artikel()
    {
        return $this->belongsToMany(Artikel::class); 
    }

}
