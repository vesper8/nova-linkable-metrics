<?php

namespace SaintSystems\Nova\LinkableMetrics;

use Laravel\Nova\Metrics\PartitionResult;
use SaintSystems\Nova\LinkableMetrics\LinkableResult;

class LinkablePartitionResult extends PartitionResult
{
    use LinkableResult;

    public $partitionLabelLinkMap = [];

    public function partitionLabelLinkMap($partitionLabelLinkMap)
    {
        $this->partitionLabelLinkMap = $partitionLabelLinkMap;
    }

    /**
     * Prepare the metric for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'url' => $this->url,
            'partitionLabelLinkMap' => $this->partitionLabelLinkMap,
        ]);
    }
}
