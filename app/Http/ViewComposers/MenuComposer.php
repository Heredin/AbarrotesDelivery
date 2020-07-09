<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\View;
use App\Categorias;

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
      $view->with('menu',$menu);
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
