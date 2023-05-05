<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Istio service scoped to a single Kubernetes cluster. Learn more at
 * http://istio.io.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.ClusterIstio</code>
 */
class ClusterIstio extends \Google\Protobuf\Internal\Message
{
    /**
     * The location of the Kubernetes cluster in which this Istio service is
     * defined. Corresponds to the `location` resource label in `k8s_cluster`
     * resources.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * The name of the Kubernetes cluster in which this Istio service is
     * defined. Corresponds to the `cluster_name` resource label in
     * `k8s_cluster` resources.
     *
     * Generated from protobuf field <code>string cluster_name = 2;</code>
     */
    private $cluster_name = '';
    /**
     * The namespace of the Istio service underlying this service. Corresponds
     * to the `destination_service_namespace` metric label in Istio metrics.
     *
     * Generated from protobuf field <code>string service_namespace = 3;</code>
     */
    private $service_namespace = '';
    /**
     * The name of the Istio service underlying this service. Corresponds to the
     * `destination_service_name` metric label in Istio metrics.
     *
     * Generated from protobuf field <code>string service_name = 4;</code>
     */
    private $service_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           The location of the Kubernetes cluster in which this Istio service is
     *           defined. Corresponds to the `location` resource label in `k8s_cluster`
     *           resources.
     *     @type string $cluster_name
     *           The name of the Kubernetes cluster in which this Istio service is
     *           defined. Corresponds to the `cluster_name` resource label in
     *           `k8s_cluster` resources.
     *     @type string $service_namespace
     *           The namespace of the Istio service underlying this service. Corresponds
     *           to the `destination_service_namespace` metric label in Istio metrics.
     *     @type string $service_name
     *           The name of the Istio service underlying this service. Corresponds to the
     *           `destination_service_name` metric label in Istio metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The location of the Kubernetes cluster in which this Istio service is
     * defined. Corresponds to the `location` resource label in `k8s_cluster`
     * resources.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the Kubernetes cluster in which this Istio service is
     * defined. Corresponds to the `location` resource label in `k8s_cluster`
     * resources.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The name of the Kubernetes cluster in which this Istio service is
     * defined. Corresponds to the `cluster_name` resource label in
     * `k8s_cluster` resources.
     *
     * Generated from protobuf field <code>string cluster_name = 2;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * The name of the Kubernetes cluster in which this Istio service is
     * defined. Corresponds to the `cluster_name` resource label in
     * `k8s_cluster` resources.
     *
     * Generated from protobuf field <code>string cluster_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * The namespace of the Istio service underlying this service. Corresponds
     * to the `destination_service_namespace` metric label in Istio metrics.
     *
     * Generated from protobuf field <code>string service_namespace = 3;</code>
     * @return string
     */
    public function getServiceNamespace()
    {
        return $this->service_namespace;
    }

    /**
     * The namespace of the Istio service underlying this service. Corresponds
     * to the `destination_service_namespace` metric label in Istio metrics.
     *
     * Generated from protobuf field <code>string service_namespace = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_namespace = $var;

        return $this;
    }

    /**
     * The name of the Istio service underlying this service. Corresponds to the
     * `destination_service_name` metric label in Istio metrics.
     *
     * Generated from protobuf field <code>string service_name = 4;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The name of the Istio service underlying this service. Corresponds to the
     * `destination_service_name` metric label in Istio metrics.
     *
     * Generated from protobuf field <code>string service_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterIstio::class, \Google\Cloud\Monitoring\V3\Service_ClusterIstio::class);

