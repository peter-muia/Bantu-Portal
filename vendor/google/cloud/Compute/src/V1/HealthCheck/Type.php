<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\HealthCheck;

use UnexpectedValueException;

/**
 * Specifies the type of the healthCheck, either TCP, SSL, HTTP, HTTPS or HTTP2. If not specified, the default is TCP. Exactly one of the protocol-specific health check field must be specified, which must match type field.
 *
 * Protobuf type <code>google.cloud.compute.v1.HealthCheck.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>GRPC = 2196510;</code>
     */
    const GRPC = 2196510;
    /**
     * Generated from protobuf enum <code>HTTP = 2228360;</code>
     */
    const HTTP = 2228360;
    /**
     * Generated from protobuf enum <code>HTTP2 = 69079210;</code>
     */
    const HTTP2 = 69079210;
    /**
     * Generated from protobuf enum <code>HTTPS = 69079243;</code>
     */
    const HTTPS = 69079243;
    /**
     * Generated from protobuf enum <code>INVALID = 530283991;</code>
     */
    const INVALID = 530283991;
    /**
     * Generated from protobuf enum <code>SSL = 82412;</code>
     */
    const SSL = 82412;
    /**
     * Generated from protobuf enum <code>TCP = 82881;</code>
     */
    const TCP = 82881;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::GRPC => 'GRPC',
        self::HTTP => 'HTTP',
        self::HTTP2 => 'HTTP2',
        self::HTTPS => 'HTTPS',
        self::INVALID => 'INVALID',
        self::SSL => 'SSL',
        self::TCP => 'TCP',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


