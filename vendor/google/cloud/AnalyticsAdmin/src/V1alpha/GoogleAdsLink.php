<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between an GA4 property and a Google Ads account.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.GoogleAdsLink</code>
 */
class GoogleAdsLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Format: properties/{propertyId}/googleAdsLinks/{googleAdsLinkId}
     * Note: googleAdsLinkId is not the Google Ads customer ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Immutable. Google Ads customer ID.
     *
     * Generated from protobuf field <code>string customer_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $customer_id = '';
    /**
     * Output only. If true, this link is for a Google Ads manager account.
     *
     * Generated from protobuf field <code>bool can_manage_clients = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $can_manage_clients = false;
    /**
     * Enable personalized advertising features with this integration.
     * Automatically publish my Google Analytics audience lists and Google
     * Analytics remarketing events/parameters to the linked Google Ads account.
     * If this field is not set on create/update, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 5;</code>
     */
    private $ads_personalization_enabled = null;
    /**
     * Output only. Email address of the user that created the link.
     * An empty string will be returned if the email address can't be retrieved.
     *
     * Generated from protobuf field <code>string email_address = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $email_address = '';
    /**
     * Output only. Time when this link was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time when this link was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Format: properties/{propertyId}/googleAdsLinks/{googleAdsLinkId}
     *           Note: googleAdsLinkId is not the Google Ads customer ID.
     *     @type string $customer_id
     *           Immutable. Google Ads customer ID.
     *     @type bool $can_manage_clients
     *           Output only. If true, this link is for a Google Ads manager account.
     *     @type \Google\Protobuf\BoolValue $ads_personalization_enabled
     *           Enable personalized advertising features with this integration.
     *           Automatically publish my Google Analytics audience lists and Google
     *           Analytics remarketing events/parameters to the linked Google Ads account.
     *           If this field is not set on create/update, it will be defaulted to true.
     *     @type string $email_address
     *           Output only. Email address of the user that created the link.
     *           An empty string will be returned if the email address can't be retrieved.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this link was originally created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when this link was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Format: properties/{propertyId}/googleAdsLinks/{googleAdsLinkId}
     * Note: googleAdsLinkId is not the Google Ads customer ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Format: properties/{propertyId}/googleAdsLinks/{googleAdsLinkId}
     * Note: googleAdsLinkId is not the Google Ads customer ID.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. Google Ads customer ID.
     *
     * Generated from protobuf field <code>string customer_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Immutable. Google Ads customer ID.
     *
     * Generated from protobuf field <code>string customer_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Output only. If true, this link is for a Google Ads manager account.
     *
     * Generated from protobuf field <code>bool can_manage_clients = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCanManageClients()
    {
        return $this->can_manage_clients;
    }

    /**
     * Output only. If true, this link is for a Google Ads manager account.
     *
     * Generated from protobuf field <code>bool can_manage_clients = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCanManageClients($var)
    {
        GPBUtil::checkBool($var);
        $this->can_manage_clients = $var;

        return $this;
    }

    /**
     * Enable personalized advertising features with this integration.
     * Automatically publish my Google Analytics audience lists and Google
     * Analytics remarketing events/parameters to the linked Google Ads account.
     * If this field is not set on create/update, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 5;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getAdsPersonalizationEnabled()
    {
        return isset($this->ads_personalization_enabled) ? $this->ads_personalization_enabled : null;
    }

    public function hasAdsPersonalizationEnabled()
    {
        return isset($this->ads_personalization_enabled);
    }

    public function clearAdsPersonalizationEnabled()
    {
        unset($this->ads_personalization_enabled);
    }

    /**
     * Returns the unboxed value from <code>getAdsPersonalizationEnabled()</code>

     * Enable personalized advertising features with this integration.
     * Automatically publish my Google Analytics audience lists and Google
     * Analytics remarketing events/parameters to the linked Google Ads account.
     * If this field is not set on create/update, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 5;</code>
     * @return bool|null
     */
    public function getAdsPersonalizationEnabledValue()
    {
        return $this->readWrapperValue("ads_personalization_enabled");
    }

    /**
     * Enable personalized advertising features with this integration.
     * Automatically publish my Google Analytics audience lists and Google
     * Analytics remarketing events/parameters to the linked Google Ads account.
     * If this field is not set on create/update, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAdsPersonalizationEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->ads_personalization_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Enable personalized advertising features with this integration.
     * Automatically publish my Google Analytics audience lists and Google
     * Analytics remarketing events/parameters to the linked Google Ads account.
     * If this field is not set on create/update, it will be defaulted to true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ads_personalization_enabled = 5;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAdsPersonalizationEnabledValue($var)
    {
        $this->writeWrapperValue("ads_personalization_enabled", $var);
        return $this;}

    /**
     * Output only. Email address of the user that created the link.
     * An empty string will be returned if the email address can't be retrieved.
     *
     * Generated from protobuf field <code>string email_address = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * Output only. Email address of the user that created the link.
     * An empty string will be returned if the email address can't be retrieved.
     *
     * Generated from protobuf field <code>string email_address = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Output only. Time when this link was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when this link was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when this link was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when this link was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

