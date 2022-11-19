<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    use HasFactory;

    protected $table = 'candidates';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','id_job','email','phone','year','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
    
    public $timestamps = false;
    public $incrementing = false;

    // public function skill_sets()
    // {
    //     return $this->belongsToMany(Skills::class,'skill_sets','id_candidate','id_skill');
    // }
    public function skills()
    {
        return $this->hasMany(Skillsets::class,'id_candidate');
    }
}
