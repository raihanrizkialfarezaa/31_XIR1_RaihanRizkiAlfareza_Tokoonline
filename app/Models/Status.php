<?php

namespace App\Models;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $guarded = ['id'];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'status', 'id');
    }
}
