<?php

namespace Kanboard\Plugin\TagiStartedDateIconChange;

use Kanboard\Core\Plugin\Base;
// use Kanboard\Core\Translator;
// use Kanboard\Plugin\PluginNameExampleStudlyCaps\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        // Template Override
        //  - Override name should be camelCase e.g. pluginNameExampleCamelCase
        $this->template->setTemplateOverride('task_list/task_icons', 'TagiStartedDateIconChange:task_list/task_icons');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        // Do not translate the plugin name here
        return 'TagiStartedDateIconChange';
    }

    public function getPluginDescription()
    {
        return t('This plugin simply changes the started date icon from the clock to a play symbol.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.27';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/kanboard-TagiStartedDateIconChange';
    }
}