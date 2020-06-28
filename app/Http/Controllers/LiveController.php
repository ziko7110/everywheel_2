<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;

class LiveController extends Controller
{

    public function index()
    {
         // DROPをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://clubdrop.jp/schedule/detail/8908');
         //テキストを取得するための配列を準備
        $drop_artists = array();
         //テキストを取得
        $goutte->filter('.other_artists')->each(function ($node) use (&$drop_artists) {
            $drop_artists[] = $node->text();
        });

        // BEYONDをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://beyond-osaka.jp/schedule/detail/8851');
        //テキストを取得するための配列を準備
        $beyond_artists = array();
        //テキストを取得
        $goutte->filter('.other_artists')->each(function ($node) use (&$beyond_artists) {
            $beyond_artists[] = $node->text();
        });

        // ここではVaronをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://osaka-varon.jp/schedule/detail/3332');
        //テキストを取得するための配列を準備
        $varon_artists = array();
        //テキストを取得
        $goutte->filter('.other_artists')->each(function ($node) use (&$varon_artists) {
            $varon_artists[] = $node->text();
        });
        $params = [
            // 'images' => $images,
            'varon_artists' => $varon_artists,
            'beyond_artists' => $beyond_artists,
            'drop_artists' => $drop_artists,
        ];
// eval(\Psy\sh());
        return view('index', $params);
    }

    public function show(Request $request)
    {

    }



}
