<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/services.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `TranscoderService.GetJob`.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.GetJobRequest</code>
 */
class GetJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the job to retrieve.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the job to retrieve.
     *           Format: `projects/{project}/locations/{location}/jobs/{job}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the job to retrieve.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the job to retrieve.
     * Format: `projects/{project}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
