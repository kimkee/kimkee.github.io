import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  publicDir: './public',
  root: './',
  base:'./',
  publicPath:"./",
  server: {
    watch: {
      ignored: ['!**/node_modules/your-package-name/**','*.css']
    }
  },
  build: {
      outDir: './docs',
      minify: 'esbuild',
      chunkSizeWarningLimit :1000 ,
  },
})
