<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'app_name', 'value' => 'Bilify'],
            ['key' => 'currency', 'value' => 'EURs'],
            ['key' => 'language', 'value' => 'en'],
        ];

        DB::transaction(function () use ($settings) {
            foreach ($settings as $setting) {
                Setting::query()->updateOrCreate(
                    ['key' => $setting['key']],
                    ['value' => $setting['value']]
                );
            }
        });
    }
}
