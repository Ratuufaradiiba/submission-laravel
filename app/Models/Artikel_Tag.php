<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel_Tag extends Model
{
    use HasFactory;
    // mapping ke table
    protected $table = 'artikel_tag';
    // mapping ke kolom/field
    protected $fillable = ['artikel_id','tag_id'];
}
