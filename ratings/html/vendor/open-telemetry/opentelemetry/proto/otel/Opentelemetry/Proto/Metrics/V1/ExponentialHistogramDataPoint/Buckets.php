<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/v1/metrics.proto

namespace Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Buckets are a set of bucket counts, encoded in a contiguous array
 * of counts.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets</code>
 */
class Buckets extends \Google\Protobuf\Internal\Message
{
    /**
     * Offset is the bucket index of the first entry in the bucket_counts array.
     * 
     * Note: This uses a varint encoding as a simple form of compression.
     *
     * Generated from protobuf field <code>sint32 offset = 1;</code>
     */
    private $offset = 0;
    /**
     * Count is an array of counts, where count[i] carries the count
     * of the bucket at index (offset+i).  count[i] is the count of
     * values greater than or equal to base^(offset+i) and less than
     * base^(offset+i+1).
     * Note: By contrast, the explicit HistogramDataPoint uses
     * fixed64.  This field is expected to have many buckets,
     * especially zeros, so uint64 has been selected to ensure
     * varint encoding.
     *
     * Generated from protobuf field <code>repeated uint64 bucket_counts = 2;</code>
     */
    private $bucket_counts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $offset
     *           Offset is the bucket index of the first entry in the bucket_counts array.
     *           
     *           Note: This uses a varint encoding as a simple form of compression.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $bucket_counts
     *           Count is an array of counts, where count[i] carries the count
     *           of the bucket at index (offset+i).  count[i] is the count of
     *           values greater than or equal to base^(offset+i) and less than
     *           base^(offset+i+1).
     *           Note: By contrast, the explicit HistogramDataPoint uses
     *           fixed64.  This field is expected to have many buckets,
     *           especially zeros, so uint64 has been selected to ensure
     *           varint encoding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * Offset is the bucket index of the first entry in the bucket_counts array.
     * 
     * Note: This uses a varint encoding as a simple form of compression.
     *
     * Generated from protobuf field <code>sint32 offset = 1;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Offset is the bucket index of the first entry in the bucket_counts array.
     * 
     * Note: This uses a varint encoding as a simple form of compression.
     *
     * Generated from protobuf field <code>sint32 offset = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Count is an array of counts, where count[i] carries the count
     * of the bucket at index (offset+i).  count[i] is the count of
     * values greater than or equal to base^(offset+i) and less than
     * base^(offset+i+1).
     * Note: By contrast, the explicit HistogramDataPoint uses
     * fixed64.  This field is expected to have many buckets,
     * especially zeros, so uint64 has been selected to ensure
     * varint encoding.
     *
     * Generated from protobuf field <code>repeated uint64 bucket_counts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBucketCounts()
    {
        return $this->bucket_counts;
    }

    /**
     * Count is an array of counts, where count[i] carries the count
     * of the bucket at index (offset+i).  count[i] is the count of
     * values greater than or equal to base^(offset+i) and less than
     * base^(offset+i+1).
     * Note: By contrast, the explicit HistogramDataPoint uses
     * fixed64.  This field is expected to have many buckets,
     * especially zeros, so uint64 has been selected to ensure
     * varint encoding.
     *
     * Generated from protobuf field <code>repeated uint64 bucket_counts = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBucketCounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->bucket_counts = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Buckets::class, \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint_Buckets::class);

