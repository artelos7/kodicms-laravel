<?php
namespace KodiCMS\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Installer
 * @package KodiCMS\Support\Facades
 */
class Installer extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'installer';
    }
}
