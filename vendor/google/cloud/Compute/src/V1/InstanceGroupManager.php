<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Managed Instance Group resource.
 * An instance group is a collection of VM instances that you can manage as a single entity. For more information, read Instance groups.
 * For zonal Managed Instance Group, use the instanceGroupManagers resource.
 * For regional Managed Instance Group, use the regionInstanceGroupManagers resource. (== resource_for {$api_version}.instanceGroupManagers ==) (== resource_for {$api_version}.regionInstanceGroupManagers ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManager</code>
 */
class InstanceGroupManager extends \Google\Protobuf\Internal\Message
{
    /**
     * The autohealing policy for this managed instance group. You can specify only one value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroupManagerAutoHealingPolicy auto_healing_policies = 456799109;</code>
     */
    private $auto_healing_policies;
    /**
     * The base instance name to use for instances in this group. The value must be 1-58 characters long. Instances are named by appending a hyphen and a random four-character string to the base instance name. The base instance name must comply with RFC1035.
     *
     * Generated from protobuf field <code>string base_instance_name = 389106439;</code>
     */
    private $base_instance_name = null;
    /**
     * [Output Only] The creation timestamp for this managed instance group in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * [Output Only] The list of instance actions and the number of instances in this managed instance group that are scheduled for each of those actions.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerActionsSummary current_actions = 164045879;</code>
     */
    private $current_actions = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Policy specifying the intended distribution of managed instances across zones in a regional managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DistributionPolicy distribution_policy = 534558541;</code>
     */
    private $distribution_policy = null;
    /**
     * Fingerprint of this resource. This field may be used in optimistic locking. It will be ignored when inserting an InstanceGroupManager. An up-to-date fingerprint must be provided in order to update the InstanceGroupManager, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve an InstanceGroupManager.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] The URL of the Instance Group resource.
     *
     * Generated from protobuf field <code>string instance_group = 81095253;</code>
     */
    private $instance_group = null;
    /**
     * The URL of the instance template that is specified for this managed instance group. The group uses this template to create all new instances in the managed instance group. The templates for existing instances in the group do not change unless you run recreateInstances, run applyUpdatesToInstances, or set the group's updatePolicy.type to PROACTIVE.
     *
     * Generated from protobuf field <code>string instance_template = 309248228;</code>
     */
    private $instance_template = null;
    /**
     * [Output Only] The resource type, which is always compute#instanceGroupManager for managed instance groups.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * The name of the managed instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Named ports configured for the Instance Groups complementary to this Instance Group Manager.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     */
    private $named_ports;
    /**
     * [Output Only] The URL of the region where the managed instance group resides (for regional resources).
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] The URL for this managed instance group. The server defines this URL.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * Stateful configuration for this Instanced Group Manager
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.StatefulPolicy stateful_policy = 47538565;</code>
     */
    private $stateful_policy = null;
    /**
     * [Output Only] The status of this managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerStatus status = 181260274;</code>
     */
    private $status = null;
    /**
     * The URLs for all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *
     * Generated from protobuf field <code>repeated string target_pools = 336072617;</code>
     */
    private $target_pools;
    /**
     * The target number of running instances for this managed instance group. You can reduce this number by using the instanceGroupManager deleteInstances or abandonInstances methods. Resizing the group also changes this number.
     *
     * Generated from protobuf field <code>int32 target_size = 62880239;</code>
     */
    private $target_size = null;
    /**
     * The update policy for this managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy update_policy = 175809896;</code>
     */
    private $update_policy = null;
    /**
     * Specifies the instance templates used by this managed instance group to create instances.
     * Each version is defined by an instanceTemplate and a name. Every version can appear at most once per instance group. This field overrides the top-level instanceTemplate field. Read more about the relationships between these fields. Exactly one version must leave the targetSize field unset. That version will be applied to all remaining instances. For more information, read about canary updates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroupManagerVersion versions = 162430619;</code>
     */
    private $versions;
    /**
     * [Output Only] The URL of a zone where the managed instance group is located (for zonal resources).
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerAutoHealingPolicy[]|\Google\Protobuf\Internal\RepeatedField $auto_healing_policies
     *           The autohealing policy for this managed instance group. You can specify only one value.
     *     @type string $base_instance_name
     *           The base instance name to use for instances in this group. The value must be 1-58 characters long. Instances are named by appending a hyphen and a random four-character string to the base instance name. The base instance name must comply with RFC1035.
     *     @type string $creation_timestamp
     *           [Output Only] The creation timestamp for this managed instance group in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerActionsSummary $current_actions
     *           [Output Only] The list of instance actions and the number of instances in this managed instance group that are scheduled for each of those actions.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type \Google\Cloud\Compute\V1\DistributionPolicy $distribution_policy
     *           Policy specifying the intended distribution of managed instances across zones in a regional managed instance group.
     *     @type string $fingerprint
     *           Fingerprint of this resource. This field may be used in optimistic locking. It will be ignored when inserting an InstanceGroupManager. An up-to-date fingerprint must be provided in order to update the InstanceGroupManager, otherwise the request will fail with error 412 conditionNotMet.
     *           To see the latest fingerprint, make a get() request to retrieve an InstanceGroupManager.
     *     @type int|string $id
     *           [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *     @type string $instance_group
     *           [Output Only] The URL of the Instance Group resource.
     *     @type string $instance_template
     *           The URL of the instance template that is specified for this managed instance group. The group uses this template to create all new instances in the managed instance group. The templates for existing instances in the group do not change unless you run recreateInstances, run applyUpdatesToInstances, or set the group's updatePolicy.type to PROACTIVE.
     *     @type string $kind
     *           [Output Only] The resource type, which is always compute#instanceGroupManager for managed instance groups.
     *     @type string $name
     *           The name of the managed instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *     @type \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $named_ports
     *           Named ports configured for the Instance Groups complementary to this Instance Group Manager.
     *     @type string $region
     *           [Output Only] The URL of the region where the managed instance group resides (for regional resources).
     *     @type string $self_link
     *           [Output Only] The URL for this managed instance group. The server defines this URL.
     *     @type \Google\Cloud\Compute\V1\StatefulPolicy $stateful_policy
     *           Stateful configuration for this Instanced Group Manager
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerStatus $status
     *           [Output Only] The status of this managed instance group.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $target_pools
     *           The URLs for all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *     @type int $target_size
     *           The target number of running instances for this managed instance group. You can reduce this number by using the instanceGroupManager deleteInstances or abandonInstances methods. Resizing the group also changes this number.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy $update_policy
     *           The update policy for this managed instance group.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerVersion[]|\Google\Protobuf\Internal\RepeatedField $versions
     *           Specifies the instance templates used by this managed instance group to create instances.
     *           Each version is defined by an instanceTemplate and a name. Every version can appear at most once per instance group. This field overrides the top-level instanceTemplate field. Read more about the relationships between these fields. Exactly one version must leave the targetSize field unset. That version will be applied to all remaining instances. For more information, read about canary updates.
     *     @type string $zone
     *           [Output Only] The URL of a zone where the managed instance group is located (for zonal resources).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The autohealing policy for this managed instance group. You can specify only one value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroupManagerAutoHealingPolicy auto_healing_policies = 456799109;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutoHealingPolicies()
    {
        return $this->auto_healing_policies;
    }

    /**
     * The autohealing policy for this managed instance group. You can specify only one value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroupManagerAutoHealingPolicy auto_healing_policies = 456799109;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerAutoHealingPolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutoHealingPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InstanceGroupManagerAutoHealingPolicy::class);
        $this->auto_healing_policies = $arr;

        return $this;
    }

    /**
     * The base instance name to use for instances in this group. The value must be 1-58 characters long. Instances are named by appending a hyphen and a random four-character string to the base instance name. The base instance name must comply with RFC1035.
     *
     * Generated from protobuf field <code>string base_instance_name = 389106439;</code>
     * @return string
     */
    public function getBaseInstanceName()
    {
        return isset($this->base_instance_name) ? $this->base_instance_name : '';
    }

    public function hasBaseInstanceName()
    {
        return isset($this->base_instance_name);
    }

    public function clearBaseInstanceName()
    {
        unset($this->base_instance_name);
    }

    /**
     * The base instance name to use for instances in this group. The value must be 1-58 characters long. Instances are named by appending a hyphen and a random four-character string to the base instance name. The base instance name must comply with RFC1035.
     *
     * Generated from protobuf field <code>string base_instance_name = 389106439;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_instance_name = $var;

        return $this;
    }

    /**
     * [Output Only] The creation timestamp for this managed instance group in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] The creation timestamp for this managed instance group in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] The list of instance actions and the number of instances in this managed instance group that are scheduled for each of those actions.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerActionsSummary current_actions = 164045879;</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerActionsSummary|null
     */
    public function getCurrentActions()
    {
        return isset($this->current_actions) ? $this->current_actions : null;
    }

    public function hasCurrentActions()
    {
        return isset($this->current_actions);
    }

    public function clearCurrentActions()
    {
        unset($this->current_actions);
    }

    /**
     * [Output Only] The list of instance actions and the number of instances in this managed instance group that are scheduled for each of those actions.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerActionsSummary current_actions = 164045879;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerActionsSummary $var
     * @return $this
     */
    public function setCurrentActions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagerActionsSummary::class);
        $this->current_actions = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Policy specifying the intended distribution of managed instances across zones in a regional managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DistributionPolicy distribution_policy = 534558541;</code>
     * @return \Google\Cloud\Compute\V1\DistributionPolicy|null
     */
    public function getDistributionPolicy()
    {
        return isset($this->distribution_policy) ? $this->distribution_policy : null;
    }

    public function hasDistributionPolicy()
    {
        return isset($this->distribution_policy);
    }

    public function clearDistributionPolicy()
    {
        unset($this->distribution_policy);
    }

    /**
     * Policy specifying the intended distribution of managed instances across zones in a regional managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DistributionPolicy distribution_policy = 534558541;</code>
     * @param \Google\Cloud\Compute\V1\DistributionPolicy $var
     * @return $this
     */
    public function setDistributionPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DistributionPolicy::class);
        $this->distribution_policy = $var;

        return $this;
    }

    /**
     * Fingerprint of this resource. This field may be used in optimistic locking. It will be ignored when inserting an InstanceGroupManager. An up-to-date fingerprint must be provided in order to update the InstanceGroupManager, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve an InstanceGroupManager.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of this resource. This field may be used in optimistic locking. It will be ignored when inserting an InstanceGroupManager. An up-to-date fingerprint must be provided in order to update the InstanceGroupManager, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve an InstanceGroupManager.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] A unique identifier for this resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the Instance Group resource.
     *
     * Generated from protobuf field <code>string instance_group = 81095253;</code>
     * @return string
     */
    public function getInstanceGroup()
    {
        return isset($this->instance_group) ? $this->instance_group : '';
    }

    public function hasInstanceGroup()
    {
        return isset($this->instance_group);
    }

    public function clearInstanceGroup()
    {
        unset($this->instance_group);
    }

    /**
     * [Output Only] The URL of the Instance Group resource.
     *
     * Generated from protobuf field <code>string instance_group = 81095253;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group = $var;

        return $this;
    }

    /**
     * The URL of the instance template that is specified for this managed instance group. The group uses this template to create all new instances in the managed instance group. The templates for existing instances in the group do not change unless you run recreateInstances, run applyUpdatesToInstances, or set the group's updatePolicy.type to PROACTIVE.
     *
     * Generated from protobuf field <code>string instance_template = 309248228;</code>
     * @return string
     */
    public function getInstanceTemplate()
    {
        return isset($this->instance_template) ? $this->instance_template : '';
    }

    public function hasInstanceTemplate()
    {
        return isset($this->instance_template);
    }

    public function clearInstanceTemplate()
    {
        unset($this->instance_template);
    }

    /**
     * The URL of the instance template that is specified for this managed instance group. The group uses this template to create all new instances in the managed instance group. The templates for existing instances in the group do not change unless you run recreateInstances, run applyUpdatesToInstances, or set the group's updatePolicy.type to PROACTIVE.
     *
     * Generated from protobuf field <code>string instance_template = 309248228;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_template = $var;

        return $this;
    }

    /**
     * [Output Only] The resource type, which is always compute#instanceGroupManager for managed instance groups.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] The resource type, which is always compute#instanceGroupManager for managed instance groups.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The name of the managed instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the managed instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Named ports configured for the Instance Groups complementary to this Instance Group Manager.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamedPorts()
    {
        return $this->named_ports;
    }

    /**
     * Named ports configured for the Instance Groups complementary to this Instance Group Manager.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     * @param \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamedPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NamedPort::class);
        $this->named_ports = $arr;

        return $this;
    }

    /**
     * [Output Only] The URL of the region where the managed instance group resides (for regional resources).
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] The URL of the region where the managed instance group resides (for regional resources).
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] The URL for this managed instance group. The server defines this URL.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] The URL for this managed instance group. The server defines this URL.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Stateful configuration for this Instanced Group Manager
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.StatefulPolicy stateful_policy = 47538565;</code>
     * @return \Google\Cloud\Compute\V1\StatefulPolicy|null
     */
    public function getStatefulPolicy()
    {
        return isset($this->stateful_policy) ? $this->stateful_policy : null;
    }

    public function hasStatefulPolicy()
    {
        return isset($this->stateful_policy);
    }

    public function clearStatefulPolicy()
    {
        unset($this->stateful_policy);
    }

    /**
     * Stateful configuration for this Instanced Group Manager
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.StatefulPolicy stateful_policy = 47538565;</code>
     * @param \Google\Cloud\Compute\V1\StatefulPolicy $var
     * @return $this
     */
    public function setStatefulPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\StatefulPolicy::class);
        $this->stateful_policy = $var;

        return $this;
    }

    /**
     * [Output Only] The status of this managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerStatus status = 181260274;</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerStatus|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of this managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerStatus status = 181260274;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagerStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The URLs for all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *
     * Generated from protobuf field <code>repeated string target_pools = 336072617;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetPools()
    {
        return $this->target_pools;
    }

    /**
     * The URLs for all TargetPool resources to which instances in the instanceGroup field are added. The target pools automatically apply to all of the instances in the managed instance group.
     *
     * Generated from protobuf field <code>repeated string target_pools = 336072617;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->target_pools = $arr;

        return $this;
    }

    /**
     * The target number of running instances for this managed instance group. You can reduce this number by using the instanceGroupManager deleteInstances or abandonInstances methods. Resizing the group also changes this number.
     *
     * Generated from protobuf field <code>int32 target_size = 62880239;</code>
     * @return int
     */
    public function getTargetSize()
    {
        return isset($this->target_size) ? $this->target_size : 0;
    }

    public function hasTargetSize()
    {
        return isset($this->target_size);
    }

    public function clearTargetSize()
    {
        unset($this->target_size);
    }

    /**
     * The target number of running instances for this managed instance group. You can reduce this number by using the instanceGroupManager deleteInstances or abandonInstances methods. Resizing the group also changes this number.
     *
     * Generated from protobuf field <code>int32 target_size = 62880239;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_size = $var;

        return $this;
    }

    /**
     * The update policy for this managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy update_policy = 175809896;</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy|null
     */
    public function getUpdatePolicy()
    {
        return isset($this->update_policy) ? $this->update_policy : null;
    }

    public function hasUpdatePolicy()
    {
        return isset($this->update_policy);
    }

    public function clearUpdatePolicy()
    {
        unset($this->update_policy);
    }

    /**
     * The update policy for this managed instance group.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy update_policy = 175809896;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy $var
     * @return $this
     */
    public function setUpdatePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy::class);
        $this->update_policy = $var;

        return $this;
    }

    /**
     * Specifies the instance templates used by this managed instance group to create instances.
     * Each version is defined by an instanceTemplate and a name. Every version can appear at most once per instance group. This field overrides the top-level instanceTemplate field. Read more about the relationships between these fields. Exactly one version must leave the targetSize field unset. That version will be applied to all remaining instances. For more information, read about canary updates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroupManagerVersion versions = 162430619;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersions()
    {
        return $this->versions;
    }

    /**
     * Specifies the instance templates used by this managed instance group to create instances.
     * Each version is defined by an instanceTemplate and a name. Every version can appear at most once per instance group. This field overrides the top-level instanceTemplate field. Read more about the relationships between these fields. Exactly one version must leave the targetSize field unset. That version will be applied to all remaining instances. For more information, read about canary updates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroupManagerVersion versions = 162430619;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerVersion[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InstanceGroupManagerVersion::class);
        $this->versions = $arr;

        return $this;
    }

    /**
     * [Output Only] The URL of a zone where the managed instance group is located (for zonal resources).
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The URL of a zone where the managed instance group is located (for zonal resources).
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

