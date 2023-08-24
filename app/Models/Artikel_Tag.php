<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Artikel_Tag extends Pivot
{
    use HasFactory;
    // mapping ke table
    protected $table = 'artikel_tag';
    // mapping ke kolom/field
    protected $fillable = ['artikel_id','tag_id'];
}
