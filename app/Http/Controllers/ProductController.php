<?php

namespace App\Http\Controllers;

use App\services\ProductService;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $all_products = json_decode($this->productService->fetchProducts(),true);
        $all_products = $all_products['data'];
        
        return view('product.index')->with(['all_products'=>$all_products]);
    }
    public function show($product)
    {
        $product = json_decode($this->productService->fetchProduct($product),true);
        $product = $product['data'];

        return view('product.create')->with(['product'=>$product]);
    }
    public function create(){
        $product = [];

        return view('product.create')->with(['product'=>$product]);
    }
    public function store(Request $request)
    {
        $this->productService->createProduct($request->all());
        
        return redirect()->to('api/product');
    }
    public function update(Request $request)
    {
        $this->productService->updateProduct($request->all());
        return redirect()->to('api/product');
    }
    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return redirect()->to('api/product');
    }

    public function updateName($productname){
        return setName($productname);
    }
}
?>