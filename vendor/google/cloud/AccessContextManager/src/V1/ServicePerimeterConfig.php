<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/service_perimeter.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ServicePerimeterConfig` specifies a set of Google Cloud resources that
 * describe specific Service Perimeter configuration.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ServicePerimeterConfig</code>
 */
class ServicePerimeterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of Google Cloud resources that are inside of the service perimeter.
     * Currently only projects are allowed. Format: `projects/{project_number}`
     *
     * Generated from protobuf field <code>repeated string resources = 1;</code>
     */
    private $resources;
    /**
     * A list of `AccessLevel` resource names that allow resources within the
     * `ServicePerimeter` to be accessed from the internet. `AccessLevels` listed
     * must be in the same policy as this `ServicePerimeter`. Referencing a
     * nonexistent `AccessLevel` is a syntax error. If no `AccessLevel` names are
     * listed, resources within the perimeter can only be accessed via Google
     * Cloud calls with request origins within the perimeter. Example:
     * `"accessPolicies/MY_POLICY/accessLevels/MY_LEVEL"`.
     * For Service Perimeter Bridge, must be empty.
     *
     * Generated from protobuf field <code>repeated string access_levels = 2;</code>
     */
    private $access_levels;
    /**
     * Google Cloud services that are subject to the Service Perimeter
     * restrictions. For example, if `storage.googleapis.com` is specified, access
     * to the storage buckets inside the perimeter must meet the perimeter's
     * access restrictions.
     *
     * Generated from protobuf field <code>repeated string restricted_services = 4;</code>
     */
    private $restricted_services;
    /**
     * Configuration for APIs allowed within Perimeter.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.ServicePerimeterConfig.VpcAccessibleServices vpc_accessible_services = 10;</code>
     */
    private $vpc_accessible_services = null;
    /**
     * List of [IngressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * to apply to the perimeter. A perimeter may have multiple [IngressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy],
     * each of which is evaluated separately. Access is granted if any [Ingress
     * Policy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * grants it. Must be empty for a perimeter bridge.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy ingress_policies = 8;</code>
     */
    private $ingress_policies;
    /**
     * List of [EgressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * to apply to the perimeter. A perimeter may have multiple [EgressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy],
     * each of which is evaluated separately. Access is granted if any
     * [EgressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * grants it. Must be empty for a perimeter bridge.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy egress_policies = 9;</code>
     */
    private $egress_policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resources
     *           A list of Google Cloud resources that are inside of the service perimeter.
     *           Currently only projects are allowed. Format: `projects/{project_number}`
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $access_levels
     *           A list of `AccessLevel` resource names that allow resources within the
     *           `ServicePerimeter` to be accessed from the internet. `AccessLevels` listed
     *           must be in the same policy as this `ServicePerimeter`. Referencing a
     *           nonexistent `AccessLevel` is a syntax error. If no `AccessLevel` names are
     *           listed, resources within the perimeter can only be accessed via Google
     *           Cloud calls with request origins within the perimeter. Example:
     *           `"accessPolicies/MY_POLICY/accessLevels/MY_LEVEL"`.
     *           For Service Perimeter Bridge, must be empty.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $restricted_services
     *           Google Cloud services that are subject to the Service Perimeter
     *           restrictions. For example, if `storage.googleapis.com` is specified, access
     *           to the storage buckets inside the perimeter must meet the perimeter's
     *           access restrictions.
     *     @type \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\VpcAccessibleServices $vpc_accessible_services
     *           Configuration for APIs allowed within Perimeter.
     *     @type \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\IngressPolicy[]|\Google\Protobuf\Internal\RepeatedField $ingress_policies
     *           List of [IngressPolicies]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     *           to apply to the perimeter. A perimeter may have multiple [IngressPolicies]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy],
     *           each of which is evaluated separately. Access is granted if any [Ingress
     *           Policy]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     *           grants it. Must be empty for a perimeter bridge.
     *     @type \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\EgressPolicy[]|\Google\Protobuf\Internal\RepeatedField $egress_policies
     *           List of [EgressPolicies]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     *           to apply to the perimeter. A perimeter may have multiple [EgressPolicies]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy],
     *           each of which is evaluated separately. Access is granted if any
     *           [EgressPolicy]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     *           grants it. Must be empty for a perimeter bridge.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\ServicePerimeter::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of Google Cloud resources that are inside of the service perimeter.
     * Currently only projects are allowed. Format: `projects/{project_number}`
     *
     * Generated from protobuf field <code>repeated string resources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * A list of Google Cloud resources that are inside of the service perimeter.
     * Currently only projects are allowed. Format: `projects/{project_number}`
     *
     * Generated from protobuf field <code>repeated string resources = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resources = $arr;

        return $this;
    }

    /**
     * A list of `AccessLevel` resource names that allow resources within the
     * `ServicePerimeter` to be accessed from the internet. `AccessLevels` listed
     * must be in the same policy as this `ServicePerimeter`. Referencing a
     * nonexistent `AccessLevel` is a syntax error. If no `AccessLevel` names are
     * listed, resources within the perimeter can only be accessed via Google
     * Cloud calls with request origins within the perimeter. Example:
     * `"accessPolicies/MY_POLICY/accessLevels/MY_LEVEL"`.
     * For Service Perimeter Bridge, must be empty.
     *
     * Generated from protobuf field <code>repeated string access_levels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessLevels()
    {
        return $this->access_levels;
    }

    /**
     * A list of `AccessLevel` resource names that allow resources within the
     * `ServicePerimeter` to be accessed from the internet. `AccessLevels` listed
     * must be in the same policy as this `ServicePerimeter`. Referencing a
     * nonexistent `AccessLevel` is a syntax error. If no `AccessLevel` names are
     * listed, resources within the perimeter can only be accessed via Google
     * Cloud calls with request origins within the perimeter. Example:
     * `"accessPolicies/MY_POLICY/accessLevels/MY_LEVEL"`.
     * For Service Perimeter Bridge, must be empty.
     *
     * Generated from protobuf field <code>repeated string access_levels = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessLevels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->access_levels = $arr;

        return $this;
    }

    /**
     * Google Cloud services that are subject to the Service Perimeter
     * restrictions. For example, if `storage.googleapis.com` is specified, access
     * to the storage buckets inside the perimeter must meet the perimeter's
     * access restrictions.
     *
     * Generated from protobuf field <code>repeated string restricted_services = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedServices()
    {
        return $this->restricted_services;
    }

    /**
     * Google Cloud services that are subject to the Service Perimeter
     * restrictions. For example, if `storage.googleapis.com` is specified, access
     * to the storage buckets inside the perimeter must meet the perimeter's
     * access restrictions.
     *
     * Generated from protobuf field <code>repeated string restricted_services = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->restricted_services = $arr;

        return $this;
    }

    /**
     * Configuration for APIs allowed within Perimeter.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.ServicePerimeterConfig.VpcAccessibleServices vpc_accessible_services = 10;</code>
     * @return \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\VpcAccessibleServices|null
     */
    public function getVpcAccessibleServices()
    {
        return isset($this->vpc_accessible_services) ? $this->vpc_accessible_services : null;
    }

    public function hasVpcAccessibleServices()
    {
        return isset($this->vpc_accessible_services);
    }

    public function clearVpcAccessibleServices()
    {
        unset($this->vpc_accessible_services);
    }

    /**
     * Configuration for APIs allowed within Perimeter.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.ServicePerimeterConfig.VpcAccessibleServices vpc_accessible_services = 10;</code>
     * @param \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\VpcAccessibleServices $var
     * @return $this
     */
    public function setVpcAccessibleServices($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\VpcAccessibleServices::class);
        $this->vpc_accessible_services = $var;

        return $this;
    }

    /**
     * List of [IngressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * to apply to the perimeter. A perimeter may have multiple [IngressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy],
     * each of which is evaluated separately. Access is granted if any [Ingress
     * Policy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * grants it. Must be empty for a perimeter bridge.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy ingress_policies = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIngressPolicies()
    {
        return $this->ingress_policies;
    }

    /**
     * List of [IngressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * to apply to the perimeter. A perimeter may have multiple [IngressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy],
     * each of which is evaluated separately. Access is granted if any [Ingress
     * Policy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy]
     * grants it. Must be empty for a perimeter bridge.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.IngressPolicy ingress_policies = 8;</code>
     * @param \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\IngressPolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIngressPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\IngressPolicy::class);
        $this->ingress_policies = $arr;

        return $this;
    }

    /**
     * List of [EgressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * to apply to the perimeter. A perimeter may have multiple [EgressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy],
     * each of which is evaluated separately. Access is granted if any
     * [EgressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * grants it. Must be empty for a perimeter bridge.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy egress_policies = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEgressPolicies()
    {
        return $this->egress_policies;
    }

    /**
     * List of [EgressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * to apply to the perimeter. A perimeter may have multiple [EgressPolicies]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy],
     * each of which is evaluated separately. Access is granted if any
     * [EgressPolicy]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy]
     * grants it. Must be empty for a perimeter bridge.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeterConfig.EgressPolicy egress_policies = 9;</code>
     * @param \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\EgressPolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEgressPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\ServicePerimeterConfig\EgressPolicy::class);
        $this->egress_policies = $arr;

        return $this;
    }

}

