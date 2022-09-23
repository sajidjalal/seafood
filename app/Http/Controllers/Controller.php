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

    public function contact_us_old()
    {
        $data['page_title'] = 'contact us of SeaFoods';
        return view('contact-us', $data);
    }

    public function product_old()
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

    public function product_new()
    {
        $data['page_title'] = 'Product list';
        $data['product_master'] =  ProductMasterModel::get();
        $data['product_categories'] =  ProductCategoriesModel::paginate(9);

        $data['related_slide'] =  ProductCategoriesModel::inRandomOrder()->limit(6)->get();
        $data['show_silde'] = false;

        if (count($data['related_slide']) > 5) {
            $data['show_silde'] = true;
        }
        return view('product_new', $data);
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

    public function home_new()
    {
        $data['page_title'] = 'Welcome to SeaFoods';
        return view('new_look.welcome', $data);
    }

    public function products()
    {
        $data['page_title'] = 'Products list';
        return view('new_look.product', $data);
    }

    public function about_us()
    {
        $data['page_title'] = 'About Us';
        return view('new_look.about_us', $data);
    }

    public function contact_us()
    {
        $data['page_title'] = 'Contact Us';
        return view('new_look.contact_us', $data);
    }

    public function services()
    {
        $data['page_title'] = 'Services Us';
        return view('new_look.services', $data);
    }

    public function sourcing()
    {
        $data['page_title'] = 'Sourcing';
        return view('new_look.sourcing', $data);
    }
    public function quality_control()
    {
        $data['page_title'] = 'Quality Control';
        return view('new_look.quality-control', $data);
    }
    public function distribution()
    {
        $data['page_title'] = 'SUPPLY CHAIN MANAGEMENT';
        return view('new_look.distribution', $data);
    }
}
