<?php

if (!function_exists('formatFileSize')) {
    function formatFileSize(int $size): string {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $size >= 1024 && $i < count($units) - 1; $i++) {
            $size /= 1024;
        }

        return round($size, 2) . ' ' . $units[$i];
    }
}