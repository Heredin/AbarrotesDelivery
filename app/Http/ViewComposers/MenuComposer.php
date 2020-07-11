<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\View;
use App\Categorias;
use App\Publicaciones;

class MenuComposer
{
    /**
     * Register services.
     *
     * @return void
     */
    public function compose(View $view)
    {
      $menu=Categorias::wherePortada(1)->get(['slug','nombre']);
      $blog=Publicaciones::get(['slug','nombre','description','created_at','urlfoto','visitas','orden','categorias_id']);
      $view->with('menu',$menu)->with('blog',$blog);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
     View::composer(['*'],'App\Http\ViewComposers\MenuComposer');
    }
}
