<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RainSeeder extends Seeder
{
    /**
     * @throws \JsonException
     */
    public function run()
    {
        DB::table('layouts')
            ->insertGetId([
                'user_id' => 1,
                'layout_title' => 'New page',
                'layout_slug' => 'new-page',
                'widgets' => json_encode([
                    "headerColumn" => [
                        [
                            "type" => "paragraph",
                            "data" => [
                                "title" => null,
                                "sort" => 1,
                                "widget" => "LaraZeus\Rain\Widgets\Classes\HeadingWidget",
                                "content" => "no title top column content",
                            ]
                        ]
                    ],
                    "rightColumn" => [
                        [
                            "type" => "paragraph",
                            "data" => [
                                "title" => "left column",
                                "sort" => 1,
                                "widget" => "LaraZeus\Rain\Widgets\Classes\HeadingWidget",
                                "content" => "left column",
                            ]
                        ]
                    ],
                    "middleColumn" => [
                        [
                            "type" => "image",
                            "data" => [
                                "title" => null,
                                "sort" => 1,
                                "widget" => "LaraZeus\Rain\Widgets\Classes\ImageWidget",
                                "url" => "widgets/d8snXpNRmcxggHsotkH9p8lxZQ2zeA-metaRGVtby5wbmc=-.png",
                                "alt" => "alt",
                            ]
                        ]
                    ],
                    "leftColumn" => [
                        [
                            "type" => "paragraph",
                            "data" => [
                                "title" => "right column",
                                "sort" => 1,
                                "widget" => "LaraZeus\Rain\Widgets\Classes\HeadingWidget",
                                "content" => "right column",
                            ]
                        ]
                    ],
                    "footerColumn" => [
                        [
                            "type" => "paragraph",
                            "data" => [
                                "title" => null,
                                "sort" => 1,
                                "widget" => "LaraZeus\Rain\Widgets\Classes\HeadingWidget",
                                "content" => "no title bottom column content",
                            ]
                        ]
                    ]
                ]),
                'created_at' => now(),
            ]);
    }
}
