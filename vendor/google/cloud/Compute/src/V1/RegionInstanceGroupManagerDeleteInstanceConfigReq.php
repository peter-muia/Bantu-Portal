<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RegionInstanceGroupManagers.deletePerInstanceConfigs
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionInstanceGroupManagerDeleteInstanceConfigReq</code>
 */
class RegionInstanceGroupManagerDeleteInstanceConfigReq extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of instance names for which we want to delete per-instance configs on this managed instance group.
     *
     * Generated from protobuf field <code>repeated string names = 104585032;</code>
     */
    private $names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $names
     *           The list of instance names for which we want to delete per-instance configs on this managed instance group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of instance names for which we want to delete per-instance configs on this managed instance group.
     *
     * Generated from protobuf field <code>repeated string names = 104585032;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * The list of instance names for which we want to delete per-instance configs on this managed instance group.
     *
     * Generated from protobuf field <code>repeated string names = 104585032;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

