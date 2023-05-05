<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1\Instance;

use UnexpectedValueException;

/**
 * The instance state.
 *
 * Protobuf type <code>google.cloud.filestore.v1.Instance.State</code>
 */
class State
{
    /**
     * State not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The instance is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The instance is available for use.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * Work is being done on the instance. You can get further details from the
     * `statusMessage` field of the `Instance` resource.
     *
     * Generated from protobuf enum <code>REPAIRING = 3;</code>
     */
    const REPAIRING = 3;
    /**
     * The instance is shutting down.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * The instance is experiencing an issue and might be unusable. You can get
     * further details from the `statusMessage` field of the `Instance`
     * resource.
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;
    /**
     * The instance is restoring a backup to an existing file share and may be
     * unusable during this time.
     *
     * Generated from protobuf enum <code>RESTORING = 7;</code>
     */
    const RESTORING = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::REPAIRING => 'REPAIRING',
        self::DELETING => 'DELETING',
        self::ERROR => 'ERROR',
        self::RESTORING => 'RESTORING',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Filestore\V1\Instance_State::class);
