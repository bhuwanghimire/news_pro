<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $setting = Setting::all();
       
        foreach($setting as $key => $setting){
            if ($key === 0) $system_name = $setting->value ;
                elseif ($key === 1) $favicon = $setting->value ;
                elseif ($key === 2) $front_logo = $setting->value ;
                elseif ($key === 3) $admin_logo = $setting->value ;
            }
        
            $shareData  = array(
                'system_name' =>$system_name ,
                 'favicon' =>$favicon ,
                  'front_logo' =>$front_logo ,
                   'admin_logo' =>$admin_logo 
                
                );

                view()->share('shareData',$shareData);
           
        
       
    }
}
