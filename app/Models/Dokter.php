<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pasien;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = ['kode_dokter','nama_dokter','telepon','alamat','keahlian'];


    public function pasien(){
        return $this->hasMany(Pasien::class);
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('kode_dokter', 'like', '%' . $filters['search'] . '%')
                ->orWhere('nama_dokter', 'like', '%' . $filters['search'] . '%');
        }

        if(isset($filters['kode_dokter']) ? $filters['kode_dokter'] : false){
            $query->Where('id',$filters['kode_dokter']);
        }
    }
}