<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;

    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
    
    public $timestamps = false;
    public $incrementing = false;

    // public function skill_sets()
    // {
    //     return $this->belongsToMany(Candidate::class,'skill_sets','id_skill','id_candidate');
    // }
}
