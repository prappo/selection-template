import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
    build: {
        // generate manifest.json in outDir
        manifest: true,

    },
    plugins: [vue()],
    server: {
        host: '192.168.0.117'
      }
})