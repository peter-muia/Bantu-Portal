<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/datastore_admin.proto

namespace Google\Cloud\Datastore\Admin\V1;

use UnexpectedValueException;

/**
 * Operation types.
 *
 * Protobuf type <code>google.datastore.admin.v1.OperationType</code>
 */
class OperationType
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>OPERATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const OPERATION_TYPE_UNSPECIFIED = 0;
    /**
     * ExportEntities.
     *
     * Generated from protobuf enum <code>EXPORT_ENTITIES = 1;</code>
     */
    const EXPORT_ENTITIES = 1;
    /**
     * ImportEntities.
     *
     * Generated from protobuf enum <code>IMPORT_ENTITIES = 2;</code>
     */
    const IMPORT_ENTITIES = 2;
    /**
     * CreateIndex.
     *
     * Generated from protobuf enum <code>CREATE_INDEX = 3;</code>
     */
    const CREATE_INDEX = 3;
    /**
     * DeleteIndex.
     *
     * Generated from protobuf enum <code>DELETE_INDEX = 4;</code>
     */
    const DELETE_INDEX = 4;

    private static $valueToName = [
        self::OPERATION_TYPE_UNSPECIFIED => 'OPERATION_TYPE_UNSPECIFIED',
        self::EXPORT_ENTITIES => 'EXPORT_ENTITIES',
        self::IMPORT_ENTITIES => 'IMPORT_ENTITIES',
        self::CREATE_INDEX => 'CREATE_INDEX',
        self::DELETE_INDEX => 'DELETE_INDEX',
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

