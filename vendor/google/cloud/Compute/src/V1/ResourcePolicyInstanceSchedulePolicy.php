<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An InstanceSchedulePolicy specifies when and how frequent certain operations are performed on the instance.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicy</code>
 */
class ResourcePolicyInstanceSchedulePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The expiration time of the schedule. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string expiration_time = 230299229;</code>
     */
    private $expiration_time = null;
    /**
     * The start time of the schedule. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string start_time = 37467274;</code>
     */
    private $start_time = null;
    /**
     * Specifies the time zone to be used in interpreting Schedule.schedule. The value of this field must be a time zone name from the tz database: http://en.wikipedia.org/wiki/Tz_database.
     *
     * Generated from protobuf field <code>string time_zone = 36848094;</code>
     */
    private $time_zone = null;
    /**
     * Specifies the schedule for starting instances.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule vm_start_schedule = 17762396;</code>
     */
    private $vm_start_schedule = null;
    /**
     * Specifies the schedule for stopping instances.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule vm_stop_schedule = 426242732;</code>
     */
    private $vm_stop_schedule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $expiration_time
     *           The expiration time of the schedule. The timestamp is an RFC3339 string.
     *     @type string $start_time
     *           The start time of the schedule. The timestamp is an RFC3339 string.
     *     @type string $time_zone
     *           Specifies the time zone to be used in interpreting Schedule.schedule. The value of this field must be a time zone name from the tz database: http://en.wikipedia.org/wiki/Tz_database.
     *     @type \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule $vm_start_schedule
     *           Specifies the schedule for starting instances.
     *     @type \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule $vm_stop_schedule
     *           Specifies the schedule for stopping instances.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The expiration time of the schedule. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string expiration_time = 230299229;</code>
     * @return string
     */
    public function getExpirationTime()
    {
        return isset($this->expiration_time) ? $this->expiration_time : '';
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     * The expiration time of the schedule. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string expiration_time = 230299229;</code>
     * @param string $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * The start time of the schedule. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string start_time = 37467274;</code>
     * @return string
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : '';
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The start time of the schedule. The timestamp is an RFC3339 string.
     *
     * Generated from protobuf field <code>string start_time = 37467274;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Specifies the time zone to be used in interpreting Schedule.schedule. The value of this field must be a time zone name from the tz database: http://en.wikipedia.org/wiki/Tz_database.
     *
     * Generated from protobuf field <code>string time_zone = 36848094;</code>
     * @return string
     */
    public function getTimeZone()
    {
        return isset($this->time_zone) ? $this->time_zone : '';
    }

    public function hasTimeZone()
    {
        return isset($this->time_zone);
    }

    public function clearTimeZone()
    {
        unset($this->time_zone);
    }

    /**
     * Specifies the time zone to be used in interpreting Schedule.schedule. The value of this field must be a time zone name from the tz database: http://en.wikipedia.org/wiki/Tz_database.
     *
     * Generated from protobuf field <code>string time_zone = 36848094;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Specifies the schedule for starting instances.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule vm_start_schedule = 17762396;</code>
     * @return \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule|null
     */
    public function getVmStartSchedule()
    {
        return isset($this->vm_start_schedule) ? $this->vm_start_schedule : null;
    }

    public function hasVmStartSchedule()
    {
        return isset($this->vm_start_schedule);
    }

    public function clearVmStartSchedule()
    {
        unset($this->vm_start_schedule);
    }

    /**
     * Specifies the schedule for starting instances.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule vm_start_schedule = 17762396;</code>
     * @param \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule $var
     * @return $this
     */
    public function setVmStartSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule::class);
        $this->vm_start_schedule = $var;

        return $this;
    }

    /**
     * Specifies the schedule for stopping instances.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule vm_stop_schedule = 426242732;</code>
     * @return \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule|null
     */
    public function getVmStopSchedule()
    {
        return isset($this->vm_stop_schedule) ? $this->vm_stop_schedule : null;
    }

    public function hasVmStopSchedule()
    {
        return isset($this->vm_stop_schedule);
    }

    public function clearVmStopSchedule()
    {
        unset($this->vm_stop_schedule);
    }

    /**
     * Specifies the schedule for stopping instances.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourcePolicyInstanceSchedulePolicySchedule vm_stop_schedule = 426242732;</code>
     * @param \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule $var
     * @return $this
     */
    public function setVmStopSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ResourcePolicyInstanceSchedulePolicySchedule::class);
        $this->vm_stop_schedule = $var;

        return $this;
    }

}

