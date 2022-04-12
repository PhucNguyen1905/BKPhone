<?php

function getPostData($name)
{
    if (isset($_POST[$name])) {
        return trim($_POST[$name]);
    }
    return '';
}
