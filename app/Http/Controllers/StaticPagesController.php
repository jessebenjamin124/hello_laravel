<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
  public function home()
  {
    $postUrl = 'https://s1.eqxiu.com/eqs/scene/count?code=9EvckusE';
    $curlPost = array ('sceneId' => 109380002,
                   'elementId' => 5036835674,
                   'pageId' => 1026726077
                  );
    $num = 0;
    while (true) {
      $ch = curl_init();//初始化curl
      curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
      curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
      curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
      curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
      $data = curl_exec($ch);//运行curl
      curl_close($ch);

      
    }




  }
}
