<?php
/**
 * TypeWafRule
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;
use \Fastly\ObjectSerializer;

/**
 * TypeWafRule Class Doc Comment
 *
 * @category Class
 * @description Resource type.
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TypeWafRule
{
    /**
     * Possible values of this enum
     */
    const WAF_RULE = 'waf_rule';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WAF_RULE
        ];
    }
}


