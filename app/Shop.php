<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{


  static  function lang($val, $lan)
    {
        //   {{ \App\Setting::lang("","") }}
        $lang = DB::table('lang')->where('key', $val)->where('lang', $lan)->value('val');
        // dd($lang);
        return $lang;

    }
    static  function footer($val, $lan)
    {
        //   {{ \App\Setting::lang("","") }}
        $lang = DB::table('footer')->where('key', $val)->where('lang', $lan)->value('val');
        // dd($lang);
        return $lang;

    }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
