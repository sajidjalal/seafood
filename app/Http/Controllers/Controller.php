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
        $data['current_menu'] = "about";

        return view('about', $data);
    }

    public function contact_us_old()
    {
        $data['page_title'] = 'contact us of SeaFoods';
        $data['current_menu'] = "contact_us_old";

        return view('contact-us', $data);
    }

    public function product_old()
    {
        $data['page_title'] = 'Product list';
        $data['product_master'] =  ProductMasterModel::get();
        $data['product_categories'] =  ProductCategoriesModel::paginate(9);

        $data['related_slide'] =  ProductCategoriesModel::inRandomOrder()->limit(6)->get();
        $data['show_silde'] = false;
        $data['current_menu'] = "product_old";

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
        $data['current_menu'] = "product";

        if (count($data['related_slide']) > 5) {
            $data['show_silde'] = true;
        }
        return view('product_new', $data);
    }

    public function view_product(Request $request)
    {
        $data['page_title'] = 'View Product Deatils';
        $data['product_categories'] =  ProductCategoriesModel::where('id', $request->id)->first();
        $data['current_menu'] = "view_product";

        return view('view_product', $data);
    }

    public function test()
    {
        $data['page_title'] = 'Product list';
        $data['product_master'] =  ProductMasterModel::get();
        $data['product_categories'] =  ProductCategoriesModel::paginate(9);
        $data['current_menu'] = "test";

        return view('test', $data);
    }

    public function home_new()
    {
        $data['page_title'] = 'Welcome to SeaFoods';
        $data['current_menu'] = "home";

        $data['product_list'] =  ProductCategoriesModel::select(['product_categories.*'])
            ->join('product_master', 'product_master.id', 'product_categories.product_id')
            ->where('product_master.status', 1)
            ->where('product_categories.status', 1)
            ->get();

        return view('new_look.welcome', $data);
    }

    public function products()
    {
        $data['page_title'] = 'Products list';
        $data['product_master'] = ProductMasterModel::select(['id', 'name'])->where('status', 1)->get();
        $data['dynamic_name'] = "product_categories_";
        foreach ($data['product_master'] as $key => $value) {
            $dynamic_name = "product_categories_" . $key;
            $data['dynamic_category'][$dynamic_name] =  ProductCategoriesModel::select(['product_categories.*'])
                ->join('product_master', 'product_master.id', 'product_categories.product_id')
                ->where('product_master.status', 1)
                ->where('product_categories.status', 1)
                ->where('product_id', $value->id)->get();
        }

        $data['product_categories_crustaceans'] =  ProductCategoriesModel::select(['product_categories.*'])
            ->join('product_master', 'product_master.id', 'product_categories.product_id')
            ->where('product_master.status', 1)
            ->where('product_id', 4)->get();

        $data['current_menu'] = "products";

        return view('new_look.product_new', $data);
    }

    public function about_us()
    {
        $data['page_title'] = 'About Us';
        $data['current_menu'] = "about_us";

        return view('new_look.about_us', $data);
    }

    public function contact_us()
    {
        $data['page_title'] = 'Contact Us';
        $data['current_menu'] = "contact_us";

        return view('new_look.contact_us', $data);
    }

    public function services()
    {
        $data['page_title'] = 'Services Us';
        $data['current_menu'] = "services";

        return view('new_look.services', $data);
    }

    public function sourcing()
    {
        $data['page_title'] = 'Sourcing';
        $data['current_menu'] = "sourcing";

        return view('new_look.sourcing', $data);
    }
    public function quality_control()
    {
        $data['page_title'] = 'Quality Control';
        $data['current_menu'] = "quality_control";

        return view('new_look.quality-control', $data);
    }
    public function distribution()
    {
        $data['page_title'] = 'SUPPLY CHAIN MANAGEMENT';
        $data['current_menu'] = "distribution";

        return view('new_look.distribution', $data);
    }
}
