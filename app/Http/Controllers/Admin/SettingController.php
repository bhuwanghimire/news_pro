<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){

        $page_name = 'System Setting ';
        $setting = Setting::find(1);
        $system_name = $setting->value;
        return view('admin.setting.update',compact('page_name','system_name'));
    }

     public function update(Request $request){

      
    $this->validate($request,[
      'name'=>'required'
    ]);
      $fav_settings = Setting::find(2);
     if($request->hasFile('favicon')){
      

        @unlink(public_path('/others/'.$fav_settings->value));
        $favicon_image = $request->favicon;
        $favicon_new_name = time().$favicon_image->getClientOriginalName();
        $favicon_image->move('others',$favicon_new_name);
        $fav_settings->value = $favicon_new_name;
        $fav_settings->save(); 
        }
  


$front_settings = Setting::find(3);
    if($request->file('front_logo')){
     @unlink(public_path('/others/'.$front_settings->value));
     $file = $request->file('front_logo');
     $extension = $file->getClientOriginalExtension();
     $front_logo = 'front_logo.'.$extension;
     $file->move(public_path('/others'),$front_logo);
     $front_settings->value = $front_logo;
     $front_settings->save(); 
 }
//  Image::make($file)->resize(653,569)->save(public_path('/post/'.$main_image));

 $admin_settings = Setting::find(4);
    if($request->file('admin_logo')){
     @unlink(public_path('/others/'.$admin_settings->value));
     $file = $request->file('admin_logo');
     $extension = $file->getClientOriginalExtension();
    return  $admin_logo = 'admin_logo.'.$extension;
     $file->save(public_path('/others/'.$admin_logo));
     return $admin_settings->value = $admin_logo;
     $admin_settings->save(); 
 }

   $sys_settings = Setting::find(1);
   $sys_settings->value = $request->name;
   $sys_settings->save();
   return redirect()->route('setting');
 
  }
}
