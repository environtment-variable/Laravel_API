<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    use ApiResponse;

    public function index(): JsonResponse
    {
        return $this->successResponse(Product::all(), 'Products retrieved successfully.');
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product = Product::create($validated);
        return $this->successResponse($product, 'Product created successfully.', Response::HTTP_CREATED);
    }

    public function show(Product $product): JsonResponse
    {
        return $this->successResponse($product, 'Product details retrieved successfully.');
    }

    public function update(Request $request, Product $product): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'stock' => 'sometimes|integer',
        ]);

        $product->update($validated);
        return $this->successResponse($product, 'Product updated successfully.');
    }

    public function destroy(Product $product): JsonResponse
    {
        $product->delete();
        return $this->successResponse(null, 'Product deleted successfully.');
    }
}
