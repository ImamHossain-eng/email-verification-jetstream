<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Wireless\V1\Sim;

use Twilio\Options;
use Twilio\Values;

abstract class UsageRecordOptions {
    /**
     * @param \DateTime $end Only include usage that occurred on or before this date
     * @param \DateTime $start Only include usage that has occurred on or after
     *                         this date
     * @param string $granularity The time-based grouping that results are
     *                            aggregated by
     * @return ReadUsageRecordOptions Options builder
     */
    public static function read(\DateTime $end = Values::NONE, \DateTime $start = Values::NONE, string $granularity = Values::NONE): ReadUsageRecordOptions {
        return new ReadUsageRecordOptions($end, $start, $granularity);
    }
}

class ReadUsageRecordOptions extends Options {
    /**
     * @param \DateTime $end Only include usage that occurred on or before this date
     * @param \DateTime $start Only include usage that has occurred on or after
     *                         this date
     * @param string $granularity The time-based grouping that results are
     *                            aggregated by
     */
    public function __construct(\DateTime $end = Values::NONE, \DateTime $start = Values::NONE, string $granularity = Values::NONE) {
        $this->options['end'] = $end;
        $this->options['start'] = $start;
        $this->options['granularity'] = $granularity;
    }

    /**
     * Only include usage that occurred on or before this date, specified in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html). The default is the current time.
     *
     * @param \DateTime $end Only include usage that occurred on or before this date
     * @return $this Fluent Builder
     */
    public function setEnd(\DateTime $end): self {
        $this->options['end'] = $end;
        return $this;
    }

    /**
     * Only include usage that has occurred on or after this date, specified in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html). The default is one month before the `end` parameter value.
     *
     * @param \DateTime $start Only include usage that has occurred on or after
     *                         this date
     * @return $this Fluent Builder
     */
    public function setStart(\DateTime $start): self {
        $this->options['start'] = $start;
        return $this;
    }

    /**
     * How to summarize the usage by time. Can be: `daily`, `hourly`, or `all`. The default is `all`. A value of `all` returns one Usage Record that describes the usage for the entire period.
     *
     * @param string $granularity The time-based grouping that results are
     *                            aggregated by
     * @return $this Fluent Builder
     */
    public function setGranularity(string $granularity): self {
        $this->options['granularity'] = $granularity;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Wireless.V1.ReadUsageRecordOptions ' . $options . ']';
    }
}