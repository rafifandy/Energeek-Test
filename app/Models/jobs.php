<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'];
    
    public $timestamps = false;
    public $incrementing = false;

    public function candidate()
    {
        return $this->hasMany(Candidates::class,'id');
    }
}
