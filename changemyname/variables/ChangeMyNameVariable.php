<?php

namespace Craft;

/**
 * Change My Name @v1.0.
 *
 * Example plugin that demonstrates how to use an alias to change
 * a plugins name and provide the option to display the plugins
 * cp section in Craft - inspired by plugins by @selvinortiz
 *
 * @author		Jason McCallister - http://themccallister.com
 * @copyright	2014 Jason McCallister
 * @license		[MIT]
 */
class ChangeMyNameVariable
{
    protected $plugin;

    public function __construct()
    {
        $this->plugin = craft()->plugins->getPlugin('changemyname');
    }

    /**
     * Returns getName for use in templates.
     *
     * @param bool $real
     *
     * @return string
     */
    public function getName($real = true)
    {
        return $this->plugin->getName($real);
    }

    /**
     * Returns getVersion for use in templates.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->plugin->getVersion();
    }

    /**
     * Returns getDeveloper for use in templates.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return $this->plugin->getDeveloper();
    }

    /**
     * Returns getDeveloperUrl for use in templates.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return $this->plugin->getDeveloperUrl();
    }

    /**
     * Returns getUrl for the plugin for use in templates.
     *
     * @return string
     */
    public function getUrl()
    {
        return sprintf('/%s/changemyname', craft()->config->get('cpTrigger'));
    }
}
