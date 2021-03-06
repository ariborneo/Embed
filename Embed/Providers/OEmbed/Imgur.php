<?php
namespace Embed\Providers\OEmbed;

class Imgur extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'http://api.imgur.com/oembed';
    }
    public static function getPatterns()
    {
        return array(
        	'http://imgur.com/*',
        	'http://i.imgur.com/*'
        );
    }
}
