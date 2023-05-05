<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\ChangeHistoryChange;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A snapshot of a resource as before or after the result of a change in
 * change history.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource</code>
 */
class ChangeHistoryResource extends \Google\Protobuf\Internal\Message
{
    protected $resource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\Account $account
     *           A snapshot of an Account resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\Property $property
     *           A snapshot of a Property resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\WebDataStream $web_data_stream
     *           A snapshot of a WebDataStream resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\AndroidAppDataStream $android_app_data_stream
     *           A snapshot of an AndroidAppDataStream resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\IosAppDataStream $ios_app_data_stream
     *           A snapshot of an IosAppDataStream resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\FirebaseLink $firebase_link
     *           A snapshot of a FirebaseLink resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\GoogleAdsLink $google_ads_link
     *           A snapshot of a GoogleAdsLink resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings $google_signals_settings
     *           A snapshot of a GoogleSignalsSettings resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\ConversionEvent $conversion_event
     *           A snapshot of a ConversionEvent resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $measurement_protocol_secret
     *           A snapshot of a MeasurementProtocolSecret resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\CustomDimension $custom_dimension
     *           A snapshot of a CustomDimension resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\CustomMetric $custom_metric
     *           A snapshot of a CustomMetric resource in change history.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A snapshot of an Account resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\Account|null
     */
    public function getAccount()
    {
        return $this->readOneof(1);
    }

    public function hasAccount()
    {
        return $this->hasOneof(1);
    }

    /**
     * A snapshot of an Account resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\Account $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Account::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A snapshot of a Property resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Property property = 2;</code>
     * @return \Google\Analytics\Admin\V1alpha\Property|null
     */
    public function getProperty()
    {
        return $this->readOneof(2);
    }

    public function hasProperty()
    {
        return $this->hasOneof(2);
    }

    /**
     * A snapshot of a Property resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Property property = 2;</code>
     * @param \Google\Analytics\Admin\V1alpha\Property $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Property::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A snapshot of a WebDataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.WebDataStream web_data_stream = 3;</code>
     * @return \Google\Analytics\Admin\V1alpha\WebDataStream|null
     */
    public function getWebDataStream()
    {
        return $this->readOneof(3);
    }

    public function hasWebDataStream()
    {
        return $this->hasOneof(3);
    }

    /**
     * A snapshot of a WebDataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.WebDataStream web_data_stream = 3;</code>
     * @param \Google\Analytics\Admin\V1alpha\WebDataStream $var
     * @return $this
     */
    public function setWebDataStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\WebDataStream::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A snapshot of an AndroidAppDataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AndroidAppDataStream android_app_data_stream = 4;</code>
     * @return \Google\Analytics\Admin\V1alpha\AndroidAppDataStream|null
     */
    public function getAndroidAppDataStream()
    {
        return $this->readOneof(4);
    }

    public function hasAndroidAppDataStream()
    {
        return $this->hasOneof(4);
    }

    /**
     * A snapshot of an AndroidAppDataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AndroidAppDataStream android_app_data_stream = 4;</code>
     * @param \Google\Analytics\Admin\V1alpha\AndroidAppDataStream $var
     * @return $this
     */
    public function setAndroidAppDataStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AndroidAppDataStream::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A snapshot of an IosAppDataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 5;</code>
     * @return \Google\Analytics\Admin\V1alpha\IosAppDataStream|null
     */
    public function getIosAppDataStream()
    {
        return $this->readOneof(5);
    }

    public function hasIosAppDataStream()
    {
        return $this->hasOneof(5);
    }

    /**
     * A snapshot of an IosAppDataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 5;</code>
     * @param \Google\Analytics\Admin\V1alpha\IosAppDataStream $var
     * @return $this
     */
    public function setIosAppDataStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\IosAppDataStream::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A snapshot of a FirebaseLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.FirebaseLink firebase_link = 6;</code>
     * @return \Google\Analytics\Admin\V1alpha\FirebaseLink|null
     */
    public function getFirebaseLink()
    {
        return $this->readOneof(6);
    }

    public function hasFirebaseLink()
    {
        return $this->hasOneof(6);
    }

    /**
     * A snapshot of a FirebaseLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.FirebaseLink firebase_link = 6;</code>
     * @param \Google\Analytics\Admin\V1alpha\FirebaseLink $var
     * @return $this
     */
    public function setFirebaseLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\FirebaseLink::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A snapshot of a GoogleAdsLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 7;</code>
     * @return \Google\Analytics\Admin\V1alpha\GoogleAdsLink|null
     */
    public function getGoogleAdsLink()
    {
        return $this->readOneof(7);
    }

    public function hasGoogleAdsLink()
    {
        return $this->hasOneof(7);
    }

    /**
     * A snapshot of a GoogleAdsLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 7;</code>
     * @param \Google\Analytics\Admin\V1alpha\GoogleAdsLink $var
     * @return $this
     */
    public function setGoogleAdsLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\GoogleAdsLink::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A snapshot of a GoogleSignalsSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleSignalsSettings google_signals_settings = 8;</code>
     * @return \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings|null
     */
    public function getGoogleSignalsSettings()
    {
        return $this->readOneof(8);
    }

    public function hasGoogleSignalsSettings()
    {
        return $this->hasOneof(8);
    }

    /**
     * A snapshot of a GoogleSignalsSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleSignalsSettings google_signals_settings = 8;</code>
     * @param \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings $var
     * @return $this
     */
    public function setGoogleSignalsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A snapshot of a ConversionEvent resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent conversion_event = 11;</code>
     * @return \Google\Analytics\Admin\V1alpha\ConversionEvent|null
     */
    public function getConversionEvent()
    {
        return $this->readOneof(11);
    }

    public function hasConversionEvent()
    {
        return $this->hasOneof(11);
    }

    /**
     * A snapshot of a ConversionEvent resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent conversion_event = 11;</code>
     * @param \Google\Analytics\Admin\V1alpha\ConversionEvent $var
     * @return $this
     */
    public function setConversionEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ConversionEvent::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A snapshot of a MeasurementProtocolSecret resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 12;</code>
     * @return \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret|null
     */
    public function getMeasurementProtocolSecret()
    {
        return $this->readOneof(12);
    }

    public function hasMeasurementProtocolSecret()
    {
        return $this->hasOneof(12);
    }

    /**
     * A snapshot of a MeasurementProtocolSecret resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 12;</code>
     * @param \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $var
     * @return $this
     */
    public function setMeasurementProtocolSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * A snapshot of a CustomDimension resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 13;</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomDimension|null
     */
    public function getCustomDimension()
    {
        return $this->readOneof(13);
    }

    public function hasCustomDimension()
    {
        return $this->hasOneof(13);
    }

    /**
     * A snapshot of a CustomDimension resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 13;</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomDimension $var
     * @return $this
     */
    public function setCustomDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\CustomDimension::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * A snapshot of a CustomMetric resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 14;</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomMetric|null
     */
    public function getCustomMetric()
    {
        return $this->readOneof(14);
    }

    public function hasCustomMetric()
    {
        return $this->hasOneof(14);
    }

    /**
     * A snapshot of a CustomMetric resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 14;</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomMetric $var
     * @return $this
     */
    public function setCustomMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\CustomMetric::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->whichOneof("resource");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChangeHistoryResource::class, \Google\Analytics\Admin\V1alpha\ChangeHistoryChange_ChangeHistoryResource::class);

