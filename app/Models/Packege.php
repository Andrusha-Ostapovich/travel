<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packege extends Model
{
    use HasFactory,HasUuids;

    

    public static function templatesList(string $columnKey = null, string $indexKey = null): array
    {

        $records = [
            [
                'key' => 'default',
                'name' => trans('lte::main.Default'),
                'blade' => 'pages.default',
            ],
            [
                'key' => 'home',
                'name' => trans('lte::main.Homepage'),
                'blade' => 'pages.home',
            ],
            [
                'key' => 'contacts',
                'name' => trans('lte::main.Contacts'),
                'blade' => 'pages.contacts',
            ],
            [
                'key' => 'about',
                'name' => trans('lte::main.About'),
                'blade' => 'pages.about',
            ],
        ];

        return self::staticListBuild($records, $columnKey, $indexKey);
    }
}
