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
class ChangeMyNamePlugin extends BasePlugin
{
    /**
     * Returns the plugins name or alias.
     *
     * @param bool $real
     *
     * @return mixed|string
     */
    public function getName($real = false)
    {
        $name = 'Change My Name';
        $alias = $this->getSettings()->pluginAlias;

        if ($real) {
            return $name;
        }

        return empty($alias) ? $name : $alias;
    }

    /**
     * Returns the plugin’s version.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.0';
    }

    /**
     * Returns the plugin developer's name.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Jason McCallister';
    }

    /**
     * Returns the plugin developer's URL.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://themccallister.com';
    }

    /**
     * Returns whether or not the plugin has its own cp section.
     *
     * @return mixed
     */
    public function hasCpSection()
    {
        return $this->getSettings()->enableCpTab;
    }

    /**
     * Returns array of the plugins settings.
     * Used in changemyname/templates/_settings.
     *
     * @return array
     */
    public function defineSettings()
    {
        $url = craft()->getSiteUrl();

        return [
            'enableCpTab'    => [AttributeType::Bool, 'default' => true],
            'pluginAlias'    => AttributeType::String,
        ];
    }

    /**
     * @throws \LogicException
     * @throws \Twig_Error_Runtime
     *
     * @return string
     */
    public function getSettingsHtml()
    {
        $settings = $this->getSettings();

        return craft()->templates->render('changemyname/_settings', compact('settings'));
    }
}
