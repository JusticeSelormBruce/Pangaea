<?php

namespace App\Http\Controllers;

use App\Events\NewsEvent;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function publishNews()
   {
      $data = News::create(News::validateNewsData());
      event(new NewsEvent($data));
      return response()->json([ json_decode($data) ]);
   }
}
