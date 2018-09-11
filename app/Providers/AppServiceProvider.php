<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Services,App\SocialLinks,App\ServiceType,App\Team,App\Page,App\Client,App\GalleryType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
  
public function boot()
{
    Schema::defaultStringLength(191);
    $services = Services::where("is_active" , 0)->get();
    View::share('services',$services);
   //  $sociallink = SocialLinks::orderBy('id','DESC')->get();
   //  View::share('sociallink',$sociallink);
     $servicetypes = ServiceType::where("is_active" , 0)->get();
     View::share('servicetypes',$servicetypes);
    $ourteams = Team::all();
    View::share('ourteams',$ourteams);
   //  $pages = Page::all();
   //  View::share('pages',$pages);
   //  $clients = Client::all();
   //  View::share('clients',$clients);

   //  $gallerytypes = GalleryType::with('gallerys')->get();
   // // echo "<pre>";
   // // print_r($gallerytypes);exit;
   //  View::share('gallerytypes',$gallerytypes);
}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
