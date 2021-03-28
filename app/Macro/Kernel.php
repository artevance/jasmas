<?php

namespace App\Macro;

class Kernel
{
    /**
     * @var array
     */
    public static array $schema = [
        'blueprints' => [
            // Booleans
            'active' => Schema\Blueprint\Booleans\ActiveBlueprint::class,
            // Foreigns
            'action' => Schema\Blueprint\Foreigns\ActionBlueprint::class,
            'feature' => Schema\Blueprint\Foreigns\FeatureBlueprint::class,
            'module' => Schema\Blueprint\Foreigns\ModuleBlueprint::class,
            'package' => Schema\Blueprint\Foreigns\PackageBlueprint::class,
            'report' => Schema\Blueprint\Foreigns\ReportBlueprint::class,
            'reportType' => Schema\Blueprint\Foreigns\ReportTypeBlueprint::class,
            'role' => Schema\Blueprint\Foreigns\RoleBlueprint::class,
            'user' => Schema\Blueprint\Foreigns\UserBlueprint::class,
            'userCreate' => Schema\Blueprint\Foreigns\UserCreateBlueprint::class,
            'userDelete' => Schema\Blueprint\Foreigns\UserDeleteBlueprint::class,
            'userTimestamps' => Schema\Blueprint\Foreigns\UserTimestampsBlueprint::class,
            'userUpdate' => Schema\Blueprint\Foreigns\UserUpdateBlueprint::class,
            'widget' => Schema\Blueprint\Foreigns\WidgetBlueprint::class,
            'widgetType' => Schema\Blueprint\Foreigns\WidgetTypeBlueprint::class,
            // Strings
            'code' => Schema\Blueprint\Strings\CodeBlueprint::class,
            'fullName' => Schema\Blueprint\Strings\FullNameBlueprint::class,
            'name' => Schema\Blueprint\Strings\NameBlueprint::class,
            'password' => Schema\Blueprint\Strings\PasswordBlueprint::class,
            'ref' => Schema\Blueprint\Strings\RefBlueprint::class,
            'username' => Schema\Blueprint\Strings\UsernameBlueprint::class,
            // Text
            'fileName' => Schema\Blueprint\Text\FileNameBlueprint::class,
            'storageDir' => Schema\Blueprint\Text\StorageDirBlueprint::class,
        ],
    ];
}
