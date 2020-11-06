<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\FornecedorEndereco;
use App\Models\FornecedorFisico;
use App\Models\FornecedorJuridico;
use \Datetime;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedor.fornecedores',['fornecedores'=>$fornecedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedor.createfornecedor');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $fornecedor = array("nome"=>$input["nome"],
                            "email"=>$input["email"],
                            "telefone"=>$input["telefone"],
                            "celular"=>$input["celular"],
                            "tipo"=>$input["tipo"],);

        $insert = Fornecedor::create($fornecedor);
        
        $id =$insert->id;
        
        $endereco = array("cep"=>$input["cep"],
                         "estado"=>$input["estado"],
                         "cidade"=>$input["cidade"],
                         "bairro"=>$input["bairro"],
                         "logradouro"=>$input["logradouro"],
                         "numero"=>$input["numero"],
                         "complemento"=>$input["complemento"],
                         "id_fornecedor"=>$id);

        FornecedorEndereco::create($endereco);

        if($input["tipo"] === "pessoafisica"){
             $pessoafisica = array("cpf"=>$input["cpf"],
                                    "datanascimento"=>date('Y-m-d H:i', strtotime($input["datanascimento"])),
                                    "id_fornecedor"=>$id);

        FornecedorFisico::create($pessoafisica);

        }else if($input["tipo"]=== "pessoajuridica"){
            $pessoajuridica = array("cnpj"=>$input["cnpj"],
                                    "razaosocial"=>$input["razaosocial"],
                                    "id_fornecedor"=>$id);

        FornecedorJuridico::create($pessoajuridica);
        }

        return redirect()->route('fornecedor.fornecedores');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedor::find($id);

        $endereco = $fornecedor->fornecedorEndereco()->first();

        if ($fornecedor->tipo === "pessoafisica") {

            $fornecedorfisico = $fornecedor->fornecedorFisico()->first();
            return view('fornecedor.showfornecedorfisico',compact('fornecedor','endereco','fornecedorfisico'));

        }else if($fornecedor->tipo === "pessoajuridica"){

            $fornecedorjuridico = $fornecedor->fornecedorjuridico()->first();
            return view('fornecedor.showfornecedorjuridico',compact('fornecedor',
                                                                    'endereco',
                                                                    'fornecedorjuridico'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        $endereco = $fornecedor->fornecedorEndereco()->first();

        if($fornecedor->tipo === "pessoafisica"){
            $pessoafisica = $fornecedor->fornecedorFisico()->first();
            return view('fornecedor.editfornecedor',compact('fornecedor',
                                                            'endereco',
                                                            'pessoafisica'
            ));
        }else if($fornecedor->tipo === "pessoajuridica"){
            $pessoajuridica = $fornecedor->fornecedorJuridico()->first();
            return view('fornecedor.editfornecedor', compact('fornecedor',
                                                             'endereco',
                                                             'pessoajuridica'        
            ));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
