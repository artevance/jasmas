<?php

namespace App\Foundation\Http;

trait ManageService
{
    /**
     * @param  \App\Foundation\Http\Service  $service
     * @param  \Illuminate\Http\Request  $request
     * @param  ...$args
     * @return mixed
     */
    public function manage(Service $service, $request, ...$args)
    {
        return $service->serve($request, ...$args);
    }
}
