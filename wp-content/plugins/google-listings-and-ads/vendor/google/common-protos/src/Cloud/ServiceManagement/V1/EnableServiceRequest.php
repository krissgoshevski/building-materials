<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for EnableService method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.EnableServiceRequest</code>
 */
class EnableServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the service to enable. Specifying an unknown service name will
     * cause the request to fail.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_name = '';
    /**
     * Required. The identity of consumer resource which service enablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:<project_id>"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     *
     * Generated from protobuf field <code>string consumer_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $consumer_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. Name of the service to enable. Specifying an unknown service name will
     *           cause the request to fail.
     *     @type string $consumer_id
     *           Required. The identity of consumer resource which service enablement will be
     *           applied to.
     *           The Google Service Management implementation accepts the following
     *           forms:
     *           - "project:<project_id>"
     *           Note: this is made compatible with
     *           google.api.servicecontrol.v1.Operation.consumer_id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the service to enable. Specifying an unknown service name will
     * cause the request to fail.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Required. Name of the service to enable. Specifying an unknown service name will
     * cause the request to fail.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Required. The identity of consumer resource which service enablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:<project_id>"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     *
     * Generated from protobuf field <code>string consumer_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * Required. The identity of consumer resource which service enablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:<project_id>"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     *
     * Generated from protobuf field <code>string consumer_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;

        return $this;
    }

}

