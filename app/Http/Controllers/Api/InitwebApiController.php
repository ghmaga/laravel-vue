<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Config;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryCollection;

use App\Http\Controllers\Api\BaseApiController;

class InitwebApiController extends BaseApiController {
   public function index() {
      $categories = Category::orderBy('order')->orderBy('id')->get();

      // 导航
      $tree = getCategoryTree($categories);
      // 配置信息
      $config_new = Config::init_config();
      // 产品中心子分类
      $product_tree = Category::getChildren(1);


      $res['data'] = [
        'config' => $config_new,
        'categories' => $tree,
        'product_tree' => $product_tree
      ];
      return $res;
   }
}
?>