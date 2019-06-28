<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Model\AuthRule;

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
        //视图合成器，提供菜单
        \View::composer('layouts.layout', function ($view){
            $authRule = new  AuthRule();
            $menulist = $authRule->status()->isMenu()->display()->get()->toArray();
            $tree = list_tree(filedSort($menulist, 'pid'));

            //将所以分类数据注入需要注入的view文件中
            $view->with('tree', $tree);
        });

//        \View::share('admin', auth('admin')->user());
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
