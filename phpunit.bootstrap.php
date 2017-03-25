<?php

require_once __DIR__.'/vendor/autoload.php';

define('ALPINE_SRC_PATH', __DIR__ . '/src');

if (!getenv('COMMON_TEST_DB_CONNECTION')) {
    define('COMMON_TEST_DB_CONNECTION', json_encode(['driver' => 'pdo_sqlite', 'url' => 'sqlite:///:memory:', 'dbname' => 'alpine']));
} else {
    define('COMMON_TEST_DB_CONNECTION', getenv('COMMON_TEST_DB_CONNECTION'));
}
