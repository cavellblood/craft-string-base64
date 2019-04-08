<?php
/**
 * String Base64 plugin for Craft CMS 3.1
 *
 * Twig filters to base64 encode/decode a string.
 *
 * @link      https://cavellblood.com
 * @copyright Copyright (c) 2019 Cavell L. Blood
 */

namespace cavellblood\stringbase64\twigextensions;

use cavellblood\stringbase64\StringBase64;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Cavell L. Blood
 * @package   StringBase64
 * @since     1.0.0
 */
class StringBase64TwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'StringBase64';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('base64enc', [$this, 'base64enc']),
            new \Twig_SimpleFilter('base64dec', [$this, 'base64dec']),
        ];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('base64enc', [$this, 'base64enc']),
            new \Twig_SimpleFunction('base64dec', [$this, 'base64dec']),
        ];
    }

    /**
     * @return string
     */
    public function base64enc($str)
    {
        return base64_encode($str);
    }

    /**
     * @return string
     */
    public function base64dec($str)
    {
        return base64_decode($str);
    }
}
