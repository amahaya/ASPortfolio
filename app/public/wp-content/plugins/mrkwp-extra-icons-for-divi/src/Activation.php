<?php

namespace MRKWP_SOCIAL_ICONS;

/**
 * Activation class.
 */
class Activation
{

    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * Plugin activation.
     */
    public function install()
    {
        flush_rewrite_rules();
    }
}
