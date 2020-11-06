<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FornecedorEndereco;

class Fornecedor extends Model
{
    use HasFactory;

    protected $fillable = ['nome','email','telefone','celular','tipo'];

    public function fornecedorFisico()
	{
		return $this->hasOne(FornecedorFisico::class, 'id_fornecedor');
	}

	public function fornecedorJuridico()
	{
		return $this->hasOne(FornecedorJuridico::class, 'id_fornecedor');
	}

	public function fornecedorEndereco()
	{
		return $this->hasOne(FornecedorEndereco::class, 'id_fornecedor');
	}

}
