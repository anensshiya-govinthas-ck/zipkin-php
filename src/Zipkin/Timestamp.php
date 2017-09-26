<?php

namespace Zipkin\Timestamp;

/**
 * Returns current timestamp in the zipkin format.
 *
 * @return int
 */
function now()
{
    return (int) (microtime(true) * 1000 * 1000);
}

/**
 * Checks whether a timestamp is valid or not.
 *
 * @param mixed $timestamp
 * @return bool
 */
function is_valid_timestamp($timestamp)
{
    return ctype_digit((string) $timestamp) && strlen((string) $timestamp) === 16;
}
