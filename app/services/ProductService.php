<?php
namespace App\Services;

use App\Traits\RequestService;
use function config;

class ProductService
{
    use RequestService;

    public $baseUri;
    public $secret;
    public function __construct()
    {
        $this->baseUri = config('service.products.base_uri');
        \Log::info(config('service.products.base_uri'));
        $this->secret = config('service.products.secret');
    }
    public function fetchProducts()
    {
        return $this->request('GET', '/api/product');
    }
    public function fetchProduct($product)
    {
        return $this->request('GET', "/api/product/{$product}");
    }
    public function createProduct($data)
    {
        return $this->request('POST', '/api/product', $data);
    }
    public function updateProduct($data)
    {
        return $this->request('POST', "/api/product/update",$data);
    }
    public function deleteProduct($id)
    {
        return $this->request('GET', "/api/product/delete/{$id}");
    }
}

?>