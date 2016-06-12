<?php

namespace Modules\Core\Source\MicroModules;

use Slim\Csrf\Guard;
use App\Source\AModule;
use Modules\Core\Source\Libs\Middleware\CSRFMiddleware;


class CSRFModule extends AModule
{
    const MODULE_NAME = 'csrf';

    public function registerDi()
    {
    	$this->container['csrf'] = function ($c) {
		    return new Guard;
		};
    }

    public function registerMiddleware()
    {
    	$this->app->add(new CSRFMiddleware());
    }
}
