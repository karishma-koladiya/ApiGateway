<?php 
namespace App\Services;
use App\Traits\RequestService;
use function config;
class OrderService
{
    use RequestService;
    public $baseUri;
    public $secret;
    public function __construct()
    {
        $this->baseUri = config('services.orders.base_uri');
        $this->secret = config('services.orders.secret');
    }
    public function fetchOrders()
    {
        return $this->request('GET', '/api/order');
    }
    public function fetchOrder($order)
    {
        return $this->request('GET', "/api/order/{$order}");
    }
    public function createOrder($data)
    {
        return $this->request('POST', '/api/order', $data);
    }
    public function updateOrder($order, $data)
    {
        return $this->request('PATCH', "/api/order/{$order}", $data);
    }
    public function deleteOrder($order)
    {
        return $this->request('DELETE', "/api/order/{$order}");
    }
}