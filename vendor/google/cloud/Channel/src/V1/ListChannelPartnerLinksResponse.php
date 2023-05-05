<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListChannelPartnerLinksResponse</code>
 */
class ListChannelPartnerLinksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The Channel partner links for a reseller.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ChannelPartnerLink channel_partner_links = 1;</code>
     */
    private $channel_partner_links;
    /**
     * A token to retrieve the next page of results.
     * Pass to [ListChannelPartnerLinksRequest.page_token][google.cloud.channel.v1.ListChannelPartnerLinksRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\ChannelPartnerLink[]|\Google\Protobuf\Internal\RepeatedField $channel_partner_links
     *           The Channel partner links for a reseller.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to [ListChannelPartnerLinksRequest.page_token][google.cloud.channel.v1.ListChannelPartnerLinksRequest.page_token] to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The Channel partner links for a reseller.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ChannelPartnerLink channel_partner_links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelPartnerLinks()
    {
        return $this->channel_partner_links;
    }

    /**
     * The Channel partner links for a reseller.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ChannelPartnerLink channel_partner_links = 1;</code>
     * @param \Google\Cloud\Channel\V1\ChannelPartnerLink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelPartnerLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\ChannelPartnerLink::class);
        $this->channel_partner_links = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListChannelPartnerLinksRequest.page_token][google.cloud.channel.v1.ListChannelPartnerLinksRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListChannelPartnerLinksRequest.page_token][google.cloud.channel.v1.ListChannelPartnerLinksRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

