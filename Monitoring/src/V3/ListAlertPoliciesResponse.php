<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The protocol for the `ListAlertPolicies` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListAlertPoliciesResponse</code>
 */
class ListAlertPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The returned alert policies.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy alert_policies = 3;</code>
     */
    private $alert_policies;
    /**
     * If there might be more results than were returned, then this field is set
     * to a non-empty value. To see the additional results,
     * use that value as `page_token` in the next call to this method.
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
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy[]|\Google\Protobuf\Internal\RepeatedField $alert_policies
     *           The returned alert policies.
     *     @type string $next_page_token
     *           If there might be more results than were returned, then this field is set
     *           to a non-empty value. To see the additional results,
     *           use that value as `page_token` in the next call to this method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\AlertService::initOnce();
        parent::__construct($data);
    }

    /**
     * The returned alert policies.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy alert_policies = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlertPolicies()
    {
        return $this->alert_policies;
    }

    /**
     * The returned alert policies.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy alert_policies = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlertPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\AlertPolicy::class);
        $this->alert_policies = $arr;

        return $this;
    }

    /**
     * If there might be more results than were returned, then this field is set
     * to a non-empty value. To see the additional results,
     * use that value as `page_token` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than were returned, then this field is set
     * to a non-empty value. To see the additional results,
     * use that value as `page_token` in the next call to this method.
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

