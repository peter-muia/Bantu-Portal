<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyResourceStatusInstanceSchedulePolicyStatus</code>
 */
class ResourcePolicyResourceStatusInstanceSchedulePolicyStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The last time the schedule successfully ran. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string last_run_start_time = 303069063;</code>
     */
    private $last_run_start_time = null;
    /**
     * [Output Only] The next time the schedule is planned to run. The actual time might be slightly different. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string next_run_start_time = 318642570;</code>
     */
    private $next_run_start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $last_run_start_time
     *           [Output Only] The last time the schedule successfully ran. The timestamp is an RFC3339 string.
     *     @type string $next_run_start_time
     *           [Output Only] The next time the schedule is planned to run. The actual time might be slightly different. The timestamp is an RFC3339 string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The last time the schedule successfully ran. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string last_run_start_time = 303069063;</code>
     * @return string
     */
    public function getLastRunStartTime()
    {
        return isset($this->last_run_start_time) ? $this->last_run_start_time : '';
    }

    public function hasLastRunStartTime()
    {
        return isset($this->last_run_start_time);
    }

    public function clearLastRunStartTime()
    {
        unset($this->last_run_start_time);
    }

    /**
     * [Output Only] The last time the schedule successfully ran. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string last_run_start_time = 303069063;</code>
     * @param string $var
     * @return $this
     */
    public function setLastRunStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_run_start_time = $var;

        return $this;
    }

    /**
     * [Output Only] The next time the schedule is planned to run. The actual time might be slightly different. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string next_run_start_time = 318642570;</code>
     * @return string
     */
    public function getNextRunStartTime()
    {
        return isset($this->next_run_start_time) ? $this->next_run_start_time : '';
    }

    public function hasNextRunStartTime()
    {
        return isset($this->next_run_start_time);
    }

    public function clearNextRunStartTime()
    {
        unset($this->next_run_start_time);
    }

    /**
     * [Output Only] The next time the schedule is planned to run. The actual time might be slightly different. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string next_run_start_time = 318642570;</code>
     * @param string $var
     * @return $this
     */
    public function setNextRunStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_run_start_time = $var;

        return $this;
    }

}

