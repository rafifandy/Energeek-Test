<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skillsets extends Model
{
    use HasFactory;

    protected $table = 'skill_sets';
    protected $fillable = ['id_candidate','id_skill'];
    
    public $timestamps = false;
    public $incrementing = false;

    // // public function skill_sets()
    // // {
    // //     return $this->belongsToMany(Candidate::class,'skill_sets','id_skill','id_candidate');
    // // }
}
