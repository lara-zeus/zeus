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
                    'headerColumn' => [
                        [
                            'type' => 'paragraph',
                            'data' => [
                                'title' => null,
                                'sort' => 1,
                                'widget' => "LaraZeus\DynamicDashboard\Widgets\Classes\HeadingWidget",
                                'content' => 'no title top column content',
                            ],
                        ],
                    ],
                    'rightColumn' => [
                        [
                            'type' => 'paragraph',
                            'data' => [
                                'title' => 'left column',
                                'sort' => 1,
                                'widget' => "LaraZeus\DynamicDashboard\Widgets\Classes\HeadingWidget",
                                'content' => 'left column',
                            ],
                        ],
                    ],
                    'middleColumn' => [
                        [
                            'type' => 'image',
                            'data' => [
                                'title' => null,
                                'sort' => 1,
                                'widget' => "LaraZeus\DynamicDashboard\Widgets\Classes\ImageWidget",
                                'url' => 'https://picsum.photos/600/400?random=1',
                                'alt' => 'alt',
                            ],
                        ],
                    ],
                    'leftColumn' => [
                        [
                            'type' => 'paragraph',
                            'data' => [
                                'title' => 'right column',
                                'sort' => 1,
                                'widget' => "LaraZeus\DynamicDashboard\Widgets\Classes\HeadingWidget",
                                'content' => 'right column',
                            ],
                        ],
                    ],
                    'footerColumn' => [
                        [
                            'type' => 'paragraph',
                            'data' => [
                                'title' => null,
                                'sort' => 1,
                                'widget' => "LaraZeus\DynamicDashboard\Widgets\Classes\HeadingWidget",
                                'content' => 'no title bottom column content',
                            ],
                        ],
                    ],
                ]),
                'created_at' => now(),
            ]);
    }
}
