<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = 'kategoribuku';
    protected $primaryKey = 'KategoriID';
    protected $fillable = ['NamaKategori'];
    public $timestamps = false;

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'kategoribuku_relasi', 'KategoriID', 'BukuID');
    }
}
