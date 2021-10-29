<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{

    protected $fillable = [
        'kode_pemesanan',
        'status',
        'total_harga',
        'kode_unik',
        'user_id',
    ];

    public function pesanan_details(){
        return $this->hasMany(PesananDetail::class, 'pesanan_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::Class, 'user_id', 'id');
    }

    public function statuss()
    {
        return $this->belongsTo(Status::class, 'status', 'id');
    }
}
