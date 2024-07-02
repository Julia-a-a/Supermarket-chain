import {resolve} from "path";
import {defineConfig} from "vite";

export default defineConfig({
  build: {
    manifest: true,
    outDir: '../public/my-js-widget', // output directly to the public dir
    rollupOptions: {
      // overwrite default .html entrypoint
      input: 'src/main.js',
      main: resolve(__dirname, 'index.html'),
      register: resolve(__dirname, '/php/register.php'),
    }
  }
});