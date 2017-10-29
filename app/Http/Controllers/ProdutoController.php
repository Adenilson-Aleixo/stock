<?php 

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\ResponseFactory;
use Request;


class ProdutoController extends Controller 
{

    /**
     * Lista de produtos
     *
     */
    public function lista()
    {
        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    /**
     * Detalhes do produto
     *
     */
    public function mostra($id)
    {
        $produtos = DB::select("select * from produtos where id = ?", [$id]);

        if (empty($produtos)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $produtos[0]);
    }

    /**
     * Formulario
     *
     */
    public function novo()
    {
        return view('produto.novo');
    }

    /**
     * Salvar um produto
     *
     */
    public function adiciona()
    {
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');

        $produto = DB::insert("insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)", 
                              [$nome, $quantidade, $valor, $descricao]);

        return view('produto.adiciona')->with('nome', $nome);
    }

}