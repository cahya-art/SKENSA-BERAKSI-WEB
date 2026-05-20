<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'judul', 
        'isi_cerita', 
        'kategori', 
        'status', 
        'is_anonymous', 
        'is_published'
    ];

    // INI KABEL RELASINYA: Menyatakan bahwa laporan ini tersambung ke tabel Users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}