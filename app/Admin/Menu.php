<?php

namespace AGM\Admin;

if (!defined('ABSPATH')) {
    exit;
}

class Menu
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'register_menu']);
    }

    public function register_menu()
    {
        add_menu_page(
            'Absensi Guru',
            'Absensi Guru',
            'manage_options',
            'agm-dashboard',
            [$this, 'dashboard'],
            'dashicons-groups',
            6
        );
    }

    public function dashboard()
    {
        ?>
        <div class="wrap">
            <h1>Absensi Guru MI Asnawiyah</h1>

            <hr>

            <h2>Selamat Datang 👋</h2>

            <p>Plugin Absensi Guru berhasil diaktifkan.</p>

            <p>Versi : <strong>1.0.0</strong></p>

            <p>Status : <span style="color:green;">Aktif</span></p>

        </div>
        <?php
    }
}