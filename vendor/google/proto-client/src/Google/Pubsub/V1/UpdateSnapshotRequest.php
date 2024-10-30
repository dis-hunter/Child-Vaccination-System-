<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the UpdateSnapshot method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.UpdateSnapshotRequest</code>
 */
class UpdateSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The updated snpashot object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Snapshot snapshot = 1;</code>
     */
    private $snapshot = null;
    /**
     * Indicates which fields in the provided snapshot to update.
     * Must be specified and non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The updated snpashot object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Snapshot snapshot = 1;</code>
     * @return \Google\Pubsub\V1\Snapshot
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * The updated snpashot object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Snapshot snapshot = 1;</code>
     * @param \Google\Pubsub\V1\Snapshot $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Pubsub\V1\Snapshot::class);
        $this->snapshot = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided snapshot to update.
     * Must be specified and non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Indicates which fields in the provided snapshot to update.
     * Must be specified and non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

