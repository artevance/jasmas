<?php

namespace App\Macro;

class Kernel
{
    /**
     * @var array
     */
    public static array $schema = [
        'blueprints' => [
            // Foreigns
            'action' => Schema\Blueprint\Foreigns\ActionBlueprint::class,
            'module' => Schema\Blueprint\Foreigns\ModuleBlueprint::class,
            'package' => Schema\Blueprint\Foreigns\PackageBlueprint::class,
            'reportType' => Schema\Blueprint\Foreigns\ReportTypeBlueprint::class,
            'widgetType' => Schema\Blueprint\Foreigns\WidgetTypeBlueprint::class,
            // Strings
            'code' => Schema\Blueprint\Strings\CodeBlueprint::class,
            'name' => Schema\Blueprint\Strings\NameBlueprint::class,
            'ref' => Schema\Blueprint\Strings\RefBlueprint::class,
        ],
    ];
}
