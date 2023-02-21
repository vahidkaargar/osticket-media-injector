<?php

class MediaInjectorPluginConfig extends PluginConfig
{
    function getOptions()
    {
        return array(
            'entries' => new TextboxField(array(
                'label' => 'Paste your css, js medias',
                'configuration' => array('size' => 60, 'length' => 255),
                'required' => true,
            ))
        );
    }
}


class MediaInjectorPlugin extends Plugin
{
    var $config_class = 'MediaInjectorPluginConfig';

    function bootstrap()
    {
        $config = $this->getConfig();
        Signal::connect('bootstrap', function ($ost) use ($config) {
            $ost->addExtraHeader($config->get('entries'));
        });
    }

}

