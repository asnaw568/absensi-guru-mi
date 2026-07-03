<?php

namespace AGM\Database;

if (!defined('ABSPATH')) {
    exit;
}

class Installer
{
    public static function install()
    {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $charset_collate = $wpdb->get_charset_collate();

        $guru = $wpdb->prefix . 'agm_guru';

        $sql = "CREATE TABLE $guru (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            nama VARCHAR(150) NOT NULL,
            nip VARCHAR(50) DEFAULT '',
            jabatan VARCHAR(100) DEFAULT '',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";

        dbDelta($sql);

        $absensi = $wpdb->prefix . 'agm_absensi';

        $sql = "CREATE TABLE $absensi (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            guru_id BIGINT UNSIGNED NOT NULL,
            tanggal DATE NOT NULL,
            jam_masuk TIME NULL,
            jam_pulang TIME NULL,
            status VARCHAR(30) DEFAULT 'Hadir',
            PRIMARY KEY (id)
        ) $charset_collate;";

        dbDelta($sql);
    }
}