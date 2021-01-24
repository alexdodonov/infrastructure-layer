<?php
namespace Mezon\Redirect;

use Mezon\Conf\Conf;

class Layer
{

    /**
     * Was redirect performed?
     *
     * @var boolean
     */
    public static $redirectWasPerformed = false;

    /**
     * Redirecting to another page
     */
    public static function regirectTo(string $url): void
    {
        if (Conf::getConfigValue('redirect/layer', 'real')) {
            header("Location: $url");
            exit(0);
        } else {
            self::$redirectWasPerformed = true;
        }
    }
}
