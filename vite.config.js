import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        react(),
        tailwindcss(),
    ],
    server: {
        cors:true,
        hmr: {
            host: "name-of-codespace-5173.github.dev",
            clientPort: 443,
            protocol:'wss',
        },
        
    }

});
