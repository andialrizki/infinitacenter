<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerPage;
use App\Models\BannerHome;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Client;
use App\Models\Setting;
use App\Models\Video;

use App\Models\Services;
use App\Models\Company;
use App\Models\ProductCategory;
use App\Models\AllProduct;
use DB;
class HomeController extends Controller
{

    public function index()
    {
        $params['settings'] = Setting::first();
        $params['gallery_category'] = GalleryCategory::where('status', 'active')->orderBy('sort', 'ASC')->get();
        $params['gallery'] = Gallery::where('status', 'active')->orderBy('sort', 'ASC')->get();
        $params['client'] = Client::where('status', 'active')->orderBy('sort', 'ASC')->get();
        $params['services'] = Services::where('status', 'active')->orderBy('sort', 'ASC')->get();
        $params['company'] = Company::where('status', 'active')->orderBy('sort', 'ASC')->get();
        $params['banner'] = BannerPage::where('title', 'banner-hero')->where('status', 'active')->orderBy('sort', 'ASC')->first();
        return view('frontend.home', $params);
    }

    public function index_old()
    {
        $data['product'] = ProductCategory::get();

        $data['settings'] = Setting::first();
        $data['gallerys'] = Gallery::limit(6)->get();
        $data['banner'] = BannerHome::where('sort','<',4)->get();
        $data['news'] = News::get();
        $data['service'] =  Services::get();
        $data['product'] = ProductCategory::get();
        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
        $data['banner'] = BannerHome::where('sort','<',4)->get();
        
        return view("frontend.home",$data);
    }

    public function about_us()
    {
        $data['product'] = ProductCategory::get();
        $data['settings'] = Setting::first();
        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
            $data['banner'] = BannerHome::where('sort','<',4)->get();
        $data['banner'] =  BannerPage::where('title','about us')->get();
      
      
        return view("frontend.about",$data);
    }
    public function certifications()
    {
        return view("frontend.about.certification");
    }
    public function product($id, Request $request)
    {
        $data['settings'] = Setting::first();
        $data['product'] = ProductCategory::get();

        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
            $data['banner'] = BannerHome::where('sort','<',4)->get();
        $data['product_all'] = AllProduct::where('category','=',$id)->get();
        $data['banner'] =  BannerPage::where('title','Product')->get();
      
        // $data['product_menu'] = DB::table('product_all')
        //   ->join('product_category', 'product_category.id','=','product_all.category' )
        //   ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
      //dump($data['product']);
        return view("frontend.product",$data);
    }
    public function product_detail($id, Request $request)
    {
        $data['banner'] =  BannerPage::where('title','property-gallery')->get();

        $data['settings'] = Setting::first();
       $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
            $data['banner'] = BannerHome::where('sort','<',4)->get();

        $data['product'] = DB::table('product_category')->where('id',$request->id)->first();
        return view("frontend.product_detail",$data);
    }
    public function services()
    {
        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');

        $data['service'] = Services::get();
        $data['banner'] = BannerPage::where('title','Services')->get();
        $data['settings'] = Setting::first();

        return view("frontend.service",$data);
    }
    public function gallery()
    {
        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');

        $data['product'] = ProductCategory::get();
      
        $data['gallerys'] = Gallery::get();
        $data['banner'] = BannerPage::where('title','property-gallery')->get();
        $data['settings'] = Setting::first();

        return view("frontend.gallery", $data);
    }
    public function contact_us()
    {
         $data['banner'] =  BannerPage::where('title','contact us')->get();
         $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
        $data['settings'] = Setting::first();
        $data['product'] = ProductCategory::get();

        return view("frontend.contact_us",$data);
    }

    public function news(Request $request){
         $data['banner'] =  BannerPage::where('title','contact us')->get();
         $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
        $data['settings'] = Setting::first();
        $data['product'] = ProductCategory::get();
        $data['news'] = News::where('status','active')->simplePaginate(4);
        $data['recentpost'] = News::where('status','active')->orderBy('date_create')->limit(4)->get();

        return view("frontend.news",$data);
    }

    
    public function news_detail(Request $request)
    {
        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');
        $data['settings'] = Setting::first();

        
        return view("frontend.news.detail",['berita'=>$news]);
    }

       public function video()
    {
        $data['product_menu'] = DB::table('product_all')
           ->join('product_category', 'product_category.id','=','product_all.category' )
           ->select('product_all.*','product_category.title as categoryname')->get()->groupBy('categoryname');

                $data['video'] = Video::simplePaginate(4);

        $data['banner'] = BannerPage::where('title','video')->get();
        $data['settings'] = Setting::first();

        return view("frontend.video",$data);
    }
    
}
