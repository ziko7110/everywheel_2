<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;

class LiveController extends Controller
{

    // public function index(Request $request)
    // {
    //     $live_schedule = $items_data;


    //     return view('index', compact('live_schedule'));
    // }

    public function index()
    {
        // ここではアマゾンカメラランキングをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://osaka-varon.jp/schedule/detail/3332');

        //画像を取得するための配列を準備
        $images = array();
        //テキストを取得するための配列を準備
        $artists = array();

        //画像のsrc部分を取得
        $goutte->filter('.a-dynamic-image')->each(function ($node) use (&$images) {
            $images[] = $node->attr('src');
        });

        //テキストを取得
        $goutte->filter('.other_artists')->each(function ($node) use (&$artists) {
            $artists[] = $node->text();
        });
        $params = [
            // 'images' => $images,
            'artists' => $artists,
        ];
        // eval(\Psy\sh());
        return view('index', $params);
    }

    public function show(Request $request)
    {

    }



}
