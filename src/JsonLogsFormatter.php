<?php

namespace VMorozov\LaravelJsonLogFormatter;

use Monolog\Formatter\NormalizerFormatter;
use Monolog\LogRecord;

class JsonLogsFormatter extends NormalizerFormatter
{
    public function __construct()
{
    parent::__construct('Y-m-d\TH:i:s.uP');
}

    public function format(LogRecord $record): string
{
    $recordData = parent::format($record);

    $message = [
        'timestamp' => $recordData['datetime'],
        'version' => config('json_log_formatter.schema_version', 1),
        'application' => config('json_log_formatter.app_name', 'laravel'),
    ];
    if (isset($recordData['message'])) {
        $message['message'] = $recordData['message'];
    }
    if (isset($recordData['channel'])) {
        $message['environment'] = $recordData['channel'];
    }
    if (isset($recordData['level_name'])) {
        $message['level'] = strtolower($recordData['level_name']);
    }
    if (count($recordData['context']) > 0) {
        $message['context'] = $recordData['context'];
    }
    if (count($recordData['extra']) > 0) {
        $message['extra'] = $recordData['extra'];
    }

    return $this->toJson($message) . "\n";
}
}
