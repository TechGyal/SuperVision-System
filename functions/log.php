<?php


class log
{
    public static function logData($log_msg, bool $error_log = true)
    {
        // create logs
        if ($error_log) {
            $log_filename = $_SERVER['DOCUMENT_ROOT'] . "/logs";
        } else {
            $log_filename = $_SERVER['DOCUMENT_ROOT'] . "/logs";
        }

        // check if file exists here
        if (!file_exists($log_filename)) {
            // create directory/folder uploads.
            mkdir($log_filename, 0777, true);
        }
        $log_file_data = $log_filename . '/log_' . date('d-M-Y') . '.log';
        file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
    }
}