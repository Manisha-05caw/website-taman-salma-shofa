<?php
/**
 * helpers.php - Fungsi global untuk path & URL
 * 
 * Mendeteksi otomatis apakah site berjalan di root domain (production)
 * atau di subfolder (localhost/Salma). Semua view file bisa pakai
 * base_url() untuk menghasilkan path yang benar di kedua environment.
 */

if (!function_exists('base_url')) {
    /**
     * Generate URL relatif terhadap root proyek.
     * 
     * Contoh:
     *   Production (salmashofa.my.id):  base_url('assets/logo.webp') → /assets/logo.webp
     *   Localhost  (localhost/Salma):    base_url('assets/logo.webp') → /Salma/assets/logo.webp
     * 
     * @param string $path Path relatif dari root proyek (tanpa leading slash)
     * @return string URL lengkap dengan base path
     */
    function base_url(string $path = ''): string
    {
        static $base = null;
        
        if ($base === null) {
            $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
            $base = ($script_dir === '/' || $script_dir === '.') ? '' : rtrim($script_dir, '/');
        }
        
        $path = ltrim($path, '/');
        return $base . '/' . $path;
    }
}
