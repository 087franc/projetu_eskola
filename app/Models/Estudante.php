<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;
    protected $table = 'estudante';
    // protected $naran_kompleteu = "null";
    protected $fillable = ['naran_kompletu','hela_fatin','no_telefone','sexo','data_moris','foto','created_at','updated_at'];
}
