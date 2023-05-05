<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response to a GetTemplate request.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.GetTemplateResponse</code>
 */
class GetTemplateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of the get template request. Any problems with the
     * request will be indicated in the error_details.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     */
    private $status = null;
    /**
     * The template metadata describing the template name, available
     * parameters, etc.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TemplateMetadata metadata = 2;</code>
     */
    private $metadata = null;
    /**
     * Template Type.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.GetTemplateResponse.TemplateType template_type = 3;</code>
     */
    private $template_type = 0;
    /**
     * Describes the runtime metadata with SDKInfo and available parameters.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.RuntimeMetadata runtime_metadata = 4;</code>
     */
    private $runtime_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $status
     *           The status of the get template request. Any problems with the
     *           request will be indicated in the error_details.
     *     @type \Google\Cloud\Dataflow\V1beta3\TemplateMetadata $metadata
     *           The template metadata describing the template name, available
     *           parameters, etc.
     *     @type int $template_type
     *           Template Type.
     *     @type \Google\Cloud\Dataflow\V1beta3\RuntimeMetadata $runtime_metadata
     *           Describes the runtime metadata with SDKInfo and available parameters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of the get template request. Any problems with the
     * request will be indicated in the error_details.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @return \Google\Rpc\Status|null
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
     * The status of the get template request. Any problems with the
     * request will be indicated in the error_details.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The template metadata describing the template name, available
     * parameters, etc.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TemplateMetadata metadata = 2;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\TemplateMetadata|null
     */
    public function getMetadata()
    {
        return isset($this->metadata) ? $this->metadata : null;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * The template metadata describing the template name, available
     * parameters, etc.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.TemplateMetadata metadata = 2;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\TemplateMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\TemplateMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Template Type.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.GetTemplateResponse.TemplateType template_type = 3;</code>
     * @return int
     */
    public function getTemplateType()
    {
        return $this->template_type;
    }

    /**
     * Template Type.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.GetTemplateResponse.TemplateType template_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTemplateType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\GetTemplateResponse\TemplateType::class);
        $this->template_type = $var;

        return $this;
    }

    /**
     * Describes the runtime metadata with SDKInfo and available parameters.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.RuntimeMetadata runtime_metadata = 4;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\RuntimeMetadata|null
     */
    public function getRuntimeMetadata()
    {
        return isset($this->runtime_metadata) ? $this->runtime_metadata : null;
    }

    public function hasRuntimeMetadata()
    {
        return isset($this->runtime_metadata);
    }

    public function clearRuntimeMetadata()
    {
        unset($this->runtime_metadata);
    }

    /**
     * Describes the runtime metadata with SDKInfo and available parameters.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.RuntimeMetadata runtime_metadata = 4;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\RuntimeMetadata $var
     * @return $this
     */
    public function setRuntimeMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\RuntimeMetadata::class);
        $this->runtime_metadata = $var;

        return $this;
    }

}

