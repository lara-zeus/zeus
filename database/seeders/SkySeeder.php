<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LaraZeus\Sky\SkyPlugin;

class SkySeeder extends Seeder
{
    public function run()
    {
        SkyPlugin::get()->getModel('Tag')::create(['name' => ['en' => 'laravel', 'ar' => 'لارافل'], 'type' => 'category']);
        SkyPlugin::get()->getModel('Tag')::create(['name' => ['en' => 'talks', 'ar' => 'اخبار'], 'type' => 'category']);
        SkyPlugin::get()->getModel('Tag')::create(['name' => ['en' => 'dev', 'ar' => 'تطوير'], 'type' => 'category']);

        SkyPlugin::get()->getModel('Post')::factory()
            ->count(15)
            ->create();

        foreach (SkyPlugin::get()->getModel('Post')::all() as $post) {
            $random_tags = SkyPlugin::get()->getModel('Tag')::all()->random(1)->first()->name;
            $post->syncTagsWithType([$random_tags], 'category');
        }

        SkyPlugin::get()->getModel('Faq')::create([
            'question' => [
                'en' => 'who is zeus',
                'ar' => 'من هو زوس',
            ],
            'answer' => [
                'en' => 'Zeus is the god of the sky in ancient Greek mythology. As the chief Greek deity, Zeus is considered the ruler, protector, and father of all gods and humans. Zeus is often depicted as an older man with a beard and is represented by symbols such as the lightning bolt and the eagle.',
                'ar' => 'زيوس هو إله السماء والصاعقة في الميثولوجيا الإغريقية. نظيره الروماني هو جوبتير، ونظيره في الميثولوجيا الهندوسية هو إندرا وفي الإيتروسكانية الإله تينيا. تكمن قوة زيوس في حكمه لقوى الطبيعة الرهيبة التي كان الإغريق يخشونها كالبرق والرعد والسماء الواسعة.',
            ],
        ]);

        SkyPlugin::get()->getModel('Tag')::create(['name' => ['en' => 'support docs', 'ar' => 'الدعم الفني'], 'type' => 'library']);
        SkyPlugin::get()->getModel('Tag')::create(['name' => ['en' => 'how to', 'ar' => 'كيف'], 'type' => 'library']);

        SkyPlugin::get()->getModel('Library')::factory()
            ->count(8)
            ->create();

        foreach (SkyPlugin::get()->getModel('Library')::all() as $library) {
            $random_tags = SkyPlugin::get()->getModel('Tag')::getWithType('library')->random(1)->first()->name;
            $library->syncTagsWithType([$random_tags], 'library');
        }
    }
}
