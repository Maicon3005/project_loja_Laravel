<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorEndereco extends Model
{
    use HasFactory;

    protected $fillable = ['cep','estado','cidade','bairro','logradouro','numero','complemento','id_fornecedor'];
}
