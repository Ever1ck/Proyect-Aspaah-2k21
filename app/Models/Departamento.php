<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = "departamentos";

    protected $primaryKey = 'idDepa'; //id

    public $incrementing = true;

    protected $guarded = ['idDepa'];

    protected $fillable=["departamento"];

    public function provincias() {
        return $this->hasMany('App\Models\Provincia', 'idDepa', 'idProv');
    }
}
