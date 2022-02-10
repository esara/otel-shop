<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/trace/v1/trace_config.proto

namespace Opentelemetry\Proto\Trace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sampler that always makes a constant decision on span sampling.
 *
 * Generated from protobuf message <code>opentelemetry.proto.trace.v1.ConstantSampler</code>
 */
class ConstantSampler extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.opentelemetry.proto.trace.v1.ConstantSampler.ConstantDecision decision = 1;</code>
     */
    private $decision = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $decision
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Trace\V1\TraceConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.trace.v1.ConstantSampler.ConstantDecision decision = 1;</code>
     * @return int
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.trace.v1.ConstantSampler.ConstantDecision decision = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDecision($var)
    {
        GPBUtil::checkEnum($var, \Opentelemetry\Proto\Trace\V1\ConstantSampler_ConstantDecision::class);
        $this->decision = $var;

        return $this;
    }

}

