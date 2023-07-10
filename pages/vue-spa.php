<?php
/**
 * Blend modes
 *
 * @package @pablorica/scss
 */

?>


    <section 
        id = "main" 
        class="vue-spa"
    >
        
        <h2>Vue SPA's</h2> 
        <hr/>
        <p>In this section we will introduce how to scaffold a Vue Single Page Application on your local machine. The created project will be using a build setup based on Vite and allow us to use Vue Single-File Components.</p>

        <pre><code> > npm init vue@latest
Need to install the following packages:
  create-vue@latest
Ok to proceed? (y) y

    Vue.js - The Progressive JavaScript Framework

✔ Project name: … vue-spa
✔ Add TypeScript? … No / Yes
✔ Add JSX Support? … No / Yes
✔ Add Vue Router for Single Page Application development? … No / Yes
✔ Add Pinia for state management? … No / Yes
✔ Add Vitest for Unit Testing? … No / Yes
✔ Add an End-to-End Testing Solution? › No
✔ Add ESLint for code quality? … No / Yes

Scaffolding project in /Users/pablo/Sites/localhost/tutorials/vue/pages/iframes/vue-spa/vue-spa...

Done. Now run:

  cd vue-spa
  npm install              
  npm run dev</code></pre>
                

        <div class="test-box test-box-1" 
            style="height: 600px;"
        >
            <iframe src="<?=BASE_URL?>/pages/iframes/vue-spa/dist/index.html" 
                width="100%" 
                height="100%"
            ></iframe>
        </div>
        <p>
            <a href="<?=BASE_URL?>/pages/iframes/vue-spa/dist/index.html" 
                target="_blank"
            >Open example in a new page</a>
        </p>
        
        <p>Note: As we are building the VUE examples in a custom folder inside our local server, they won't work unther the default http://localhost url. To change that, we need to edit the vite config file and change the base URL:</p>
        <code>pages/iframes/vue-spa/vite.config.js </code>
        <pre><code> import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  base: 'http://localhost/tutorials/vue/pages/iframes/vue-spa/dist/',
  plugins: [
    vue(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  }
})</code></pre>




        <div class="read-more">
        
            <h3>Certified Vue.js Developer. Chapter 1: Vue.js Essentials </h3>
            <p><a href="http://localhost/tutorials/laravel-vue-crud/public/posts/show/110" target="_blank">Bootstrap a Vue App</a></p>
        </div>

        <div class="read-more">
            <h3>Read more:</h3>
            <p>
                <a href="https://vuejs.org/guide/quick-start.html" 
                target="_blank"
                >Vue.js guide </a>
            </p>
            <p>
                <a href="https://vite-plugin-ssr.com/base-url" 
                target="_blank"
                >Vite: Base URL </a>
            </p>

        </div>
        
    </section>