import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
             input: [
                'resources/js/app.js',
                'public/admin_assets/js/feather.min.js',
                'public/admin_assets/js/feather-custom.js',
                'public/admin_assets/js/custom-select.js',
                'public/admin_assets/js/apexchart/apexcharts.js',
                'public/admin_assets/js/apexchart/apex-common.js',
                 'public/admin_assets/js/apexchart/unique-custom.js',
                'public/admin_assets/js/sidebar.js',
                'public/admin_assets/js/customizer.js',
                'public/admin_assets/js/script.js'
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: true,
                },
            },
        }),
    ],
});
