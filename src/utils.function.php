<?php

function jsonResponse ($state, $data) {
    http_response_code($state);
    echo json_encode($data);
}