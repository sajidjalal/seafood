<?php

namespace App\Http\Controllers;

use App\Models\Model\ProductCategoriesModel;
use App\Models\Model\ProductMasterModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data['page_title'] = 'Welcome to SeaFoods';
        return view('welcome', $data);
    }

    public function about()
    {
        $data['page_title'] = 'About of SeaFoods';
        return view('about', $data);
    }

    public function contact_us()
    {
        $data['page_title'] = 'contact us of SeaFoods';
        return view('contact-us', $data);
    }

    public function product()
    {
        $data['page_title'] = 'Product list';
        $data['product_master'] =  ProductMasterModel::get();
        $data['product_categories'] =  ProductCategoriesModel::paginate(9);

        $data['related_slide'] =  ProductCategoriesModel::inRandomOrder()->limit(6)->get();
        $data['show_silde'] = false;

        if (count($data['related_slide']) > 5) {
            $data['show_silde'] = true;
        }
        return view('product', $data);
    }

    public function view_product(Request $request)
    {
        $data['page_title'] = 'View Product Deatils';
        $data['product_categories'] =  ProductCategoriesModel::where('id', $request->id)->first();
        
        return view('view_product', $data);
    }

    public function test()
    {
        $data['page_title'] = 'Product list';
        $data['product_master'] =  ProductMasterModel::get();
        $data['product_categories'] =  ProductCategoriesModel::paginate(9);

        return view('test', $data);
    }
}
