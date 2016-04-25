<?php namespace Anomaly\ConfigPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Config\Repository;
use Twig_SimpleFunction;

/**
 * Class ConfigPlugin
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\Streams\Addon\Plugin\Auth
 */
class ConfigPlugin extends Plugin
{

    /**
     * The config object from Laravel.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Create a new ConfigPlugin instance.
     *
     * @param Repository
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Return plugin functions.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('config', [$this->config, 'get']),
            new Twig_SimpleFunction('config_get', [$this->config, 'get']),
            new Twig_SimpleFunction('config_has', [$this->config, 'has']),
        ];
    }
}
