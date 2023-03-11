<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dokter;

class Pasien extends Model
{
    use HasFactory;

    // protected $fillable = ['dokter_id','kode_pasien','nama_pasien','birthday','alamat'];
    protected $guarded = ['id'];

    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }

    public function scopefilter($query, array $filters){

        if(isset($filters['search'])){
            $query->Where('kode_pasien', 'like', '%' . $filters['search'] . '%')
                ->orWhere('nama_pasien', 'like', '%' . $filters['search'] . '%');
        }

        if(isset($filters['dokter_id']) ? $filters['dokter_id'] : false){
            $query->Where('dokter_id',$filters['dokter_id']);
        }
    }
}
