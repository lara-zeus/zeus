<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use LaraZeus\DynamicDashboard\Widgets\Classes\HeadingWidget;
use LaraZeus\DynamicDashboard\Widgets\Classes\ImageWidget;

class RainSeeder extends Seeder
{
    /**
     * @throws \JsonException
     */
    public function run(): void
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
                                'widget' => HeadingWidget::class,
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
                                'widget' => HeadingWidget::class,
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
                                'widget' => ImageWidget::class,
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
                                'widget' => HeadingWidget::class,
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
                                'widget' => HeadingWidget::class,
                                'content' => 'no title bottom column content',
                            ],
                        ],
                    ],
                ], JSON_THROW_ON_ERROR),
                'created_at' => now(),
            ]);
    }
}
