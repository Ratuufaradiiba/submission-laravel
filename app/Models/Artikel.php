<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    //mapping ke table
    protected $table = 'artikel';
    // mapping ke kolom/field
    protected $fillable = ['judul','teks_lengkap','gambar','kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class); 
    }
}
