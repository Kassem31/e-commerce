<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class ProductCategoriesController extends Controller
{
    public function index()
    {
        // $categories = ProductCategory::withCount('products')->paginate(10); 

        $categories = ProductCategory::withCount('products')
            ->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
            ->when(\request()->status != null, function ($query) {
                $query->whereStatus(\request()->status);
            })
            ->orderBy(\request()->sort_by ?? 'id', \request()->order_by ?? 'desc')
            ->paginate(\request()->limit_by ?? 10);
        return view('backend.product_categories.index' , compact('categories'));
    }

    public function create()
    {
        $main_categories = ProductCategory::whereNull('parent_id')->get(['id', 'name']);
        return view('backend.product_categories.create', compact('main_categories'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('backend.product_categories.show');
    }

    public function edit($id)
    {
        return view('backend.product_categories.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
