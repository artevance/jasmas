<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Foundation\Macro\Schema\BlueprintContract;
use App\Macro\Kernel;
use LogicException;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSchemaMacros();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the Schema Macros.
     * 
     * @return void
     */
    public function registerSchemaMacros()
    {
        $this->registerBlueprintMacros();
    }

    /**
     * @return void
     */
    public function registerBlueprintMacros()
    {
        if (config('macro.schema.blueprint.register')) {
            $blueprints = Kernel::$schema['blueprints'];

            foreach ($blueprints as $methodName => $blueprint) {
                if ( ! (new $blueprint) instanceof BlueprintContract)
                    throw new LogicException(
                        'Blueprint: '.$blueprint.' must implements '.BlueprintContract::class
                    );

                Blueprint::macro(
                    $methodName,
                    call_user_func([$blueprint, BlueprintContract::MAIN_METHOD])
                );
            }
        }
    }
}
