import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'
import path from 'node:path';

export default defineConfig({
    resolve: {
        alias: {
            'livewire': path.resolve(__dirname, 'vendor/livewire/livewire/dist/livewire.esm.js'),
        },
    },
    server: {
        fs: {
            allow: ['.', path.resolve(__dirname, 'vendor')],
        },
    },
    plugins: [
        tailwindcss(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
