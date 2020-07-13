<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;
use Carbon\Carbon;

class LiveController extends Controller
{

    public function index()
    {
         // DROPをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://clubdrop.jp/schedule/detail/8908');
        $drop_artists = array();
        $goutte->filter('.other_artists')->each(function ($node) use (&$drop_artists) {
            $drop_artists[] = $node->text();
        });

        // BEYONDをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://beyond-osaka.jp/schedule/detail/8851');
        $beyond_artists = array();
        $goutte->filter('.other_artists')->each(function ($node) use (&$beyond_artists) {
            $beyond_artists[] = $node->text();
        });
        
        // ここではVaronをスクレイピング
        $goutte = GoutteFacade::request('GET', 'https://osaka-varon.jp/schedule/detail/3332');
        $varon_artists = array();
        $goutte->filter('.other_artists')->each(function ($node) use (&$varon_artists) {
            $varon_artists[] = $node->text();
        });
        // Varonタイトルをスクレイピング
        $varon_title = array();
        $goutte->filter('/html/body/div[1]/div/div[1]/section/div/article/div/h1')->each(function ($node) use (&$varon_title) {
            $varon_title[] = $node->text();
        });

        $params = [
            'varon_artists'     => $varon_artists,
            'beyond_artists'    => $beyond_artists,
            'drop_artists'      => $drop_artists,

            'varon_title'       => $varon_title,
        ];
        return view('index', $params);
    }
}
