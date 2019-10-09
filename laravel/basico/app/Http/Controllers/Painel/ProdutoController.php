<?php

namespace App\Http\Controllers\Painel;

use App\Models\Painel\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function index()
    {
        $products = $this->product->all();

       /* $products = $this->product->where('active', 1)
                                  ->where('number', '999')
                                  ->get();*/

        $title = 'Listagem de produtos! - Curso Laravel';
        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tests()
    {
        //INSERIR REGISTRO
        /*
        $dados = [
            'name' => 'Nome do produto 3',
            'number' => '85',
            'active' => false,
            'category' => 'eletronicos',
            'description' => 'Descrição vem aqui'
        ];
        */

        /* if (!$this->product->insert($dados)) {
            return 'Falha ao inserir';
        }

        return 'Inserido com sucesso.';*/

        //para usar o método create é preciso definiar os $fillable ou os $guarded do model
        /* $insert = $this->product->create($dados);

         if (!$insert) {
             return 'Falha ao inserir';
         }

         return 'Inserido com sucesso. ID ' . $insert->id ;*/


        //UPDATE

        $dados = [
            'name' => 'Novo nome do produto 5',
            'description' => 'Nova descrição'
        ];

        /*
        //update pelo ID
       //para usar o método update é preciso definiar os $fillable ou os $guarded do model
        $prod = $this->product->find('5'); // localiza o id
         $update = $prod->update($dados);

         if (!$update) {
             return 'Falha ao alterar';
         }

         return 'Alterado com sucesso.  ';
        */

    /*    $update = $this->product
                        ->where('number', '=', '851')
                        ->update($dados);

        if (!$update) {
            return 'Falha ao alterar';
        }

        return 'Alterado com sucesso. ';*/

        //dd($prod); //var_dump do laravel


       /* $prod = $this->product->find('3');
        $delete = $prod->delete()*/

       $this->product->destroy('1');
       $delete = $this->product->destroy([2,3]);

        $delete = $this->product->where('number', '=', 8568)->delete();


        if (!$delete) {
            return 'Falha ao deletar';
        }

        return 'Deletado com sucesso. ';


    }
}
