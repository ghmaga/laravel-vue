<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'configs';

    public static function init_config() {
      $config = Config::all(['title', 'content']);
      $config_new = [];
      foreach($config as $key => $val) {
        $config_new[$val['title']] = $val['content'];
      }
      return $config_new;
    }
}
