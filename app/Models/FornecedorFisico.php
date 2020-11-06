<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorFisico extends Model
{
    use HasFactory;

    protected $fillable = ['cpf','datanascimento','id_fornecedor'];
}
