<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorJuridico extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj','razaosocial','id_fornecedor'];
}
