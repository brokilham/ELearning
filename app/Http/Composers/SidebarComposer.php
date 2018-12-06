<?php 
namespace App\Http\Composers;
use Illuminate\Contracts\View\View;
use App\menu;
use App\users;
use auth;
//use App\privilage_webpages;

class SidebarComposer{
    public function compose(View $view){
        
        $user = Auth::user();
        $menu = menu::where('status', 'active')->where('hak_akses', $user->hak_akses)->orderBy('nama', 'asc')->get();
        $view->with( 'datas', ['menu' => $menu]);

    }
}