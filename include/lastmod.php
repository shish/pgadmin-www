<?php

// This code is based on the example originally posted by Simon Willison
// at http://simon.incutio.com/archive/2003/04/23/conditionalGet

function handleModHeaders($timestamp) {
    $last_modified = substr(date('r', $timestamp), 0, -5).'GMT';
    $etag = '"'.md5($last_modified).'"';

    // Send the headers
    header("Last-Modified: $last_modified");
    header("ETag: $etag");

    // See if the client has provided the required headers
    $if_modified_since = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ?
        stripslashes($_SERVER['HTTP_IF_MODIFIED_SINCE']) :
        false;

    $if_none_match = isset($_SERVER['HTTP_IF_NONE_MATCH']) ?
        stripslashes($_SERVER['HTTP_IF_NONE_MATCH']) : 
        false;

    if (!$if_modified_since && !$if_none_match) {
        return;
    }

    // At least one of the headers is there - check them
    if ($if_none_match && $if_none_match != $etag) {
        return; // etag is there but doesn't match
    }

    if ($if_modified_since && $if_modified_since != $last_modified) {
        return; // if-modified-since is there but doesn't match
    }

    // Nothing has changed since their last request - serve a 304 and exit
    header('HTTP/1.0 304 Not Modified');
    exit;
}

?>
