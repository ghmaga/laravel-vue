<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = 'categories';

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    // 获取子栏目id
    public static function getChildrenIds($parent_id) {
        $children = self::select('id')->where('parent_id', $parent_id)->orderBy('order')->orderBy('id')->get();
        $children_arr = [];
        foreach($children  as $key => $val) {
            $children_arr[] = $val['id'];
        }
        return $children_arr;
    }

    // 获取子栏目
    public static function getChildren($parent_id) {
        return self::select(['id', 'title', 'module'])->where('parent_id', $parent_id)->orderBy('order')->orderBy('id')->get();
    }
}
