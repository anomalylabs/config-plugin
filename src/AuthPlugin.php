<?php namespace Anomaly\ConfigPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Illuminate\Contracts\Auth\Guard;
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
     * @var \Illuminate\Auth\Guard
     */
    protected $config;

    /**
     * Create a new ConfigPlugin instance.
     *
     * @param \Illuminate\Auth\Guard
     */
    public function __construct(Guard $config)
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
            new Twig_SimpleFunction('config_check', [$this->config, 'check']),
            new Twig_SimpleFunction('config_guest', [$this->config, 'guest']),
            new Twig_SimpleFunction('config_user', [$this->config, 'user']),
        ];
    }
}
