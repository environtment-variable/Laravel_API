<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Product\StoreProductRequest;
use App\Http\Requests\Api\V1\Product\UpdateProductRequest;
use App\Http\Resources\V1\ProductResource;
use App\Models\Product;
use App\Traits\ApiResponse;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    use ApiResponse;

    public function index()
    {
        // Menggunakan pagination agar performa tetap optimal untuk skala besar
        $products = Product::latest()->paginate(10);

        return $this->successResponse(
            ProductResource::collection($products),
            'Products retrieved successfully.'
        );
    }

    public function store(StoreProductRequest $request)
    {
        // Validasi otomatis ditangani oleh StoreProductRequest
        $product = Product::create($request->validated());

        return $this->successResponse(
            new ProductResource($product),
            'Product created successfully.',
            Response::HTTP_CREATED
        );
    }

    public function show(Product $product)
    {
        return $this->successResponse(
            new ProductResource($product),
            'Product details retrieved successfully.'
        );
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        // Validasi otomatis ditangani oleh UpdateProductRequest
        $product->update($request->validated());

        return $this->successResponse(
            new ProductResource($product),
            'Product updated successfully.'
        );
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return $this->successResponse(
            null,
            'Product deleted successfully.'
        );
    }
}