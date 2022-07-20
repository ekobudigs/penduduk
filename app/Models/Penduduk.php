<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'penduduk';
    public $timestamps = false;


    public function scopeFilter($query, array $fillters)
    {

        $query->when($fillters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('job_title', 'like', '%' . $search . '%');
            });
        });

    }
}
