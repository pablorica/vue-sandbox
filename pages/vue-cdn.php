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
        
        <h2>From a CDN</h2> 
        <hr/>
        <p>You can use Vue directly from a CDN via a script tag</p>
        <pre><code>&lt;script src=&quot;https://unpkg.com/vue@3/dist/vue.global.js&quot;&gt;&lt;/script&gt;</code></pre>

        <h3>Using the Global Build </h3>
        <p>The above link loads the global build of Vue, where all top-level APIs are exposed as properties on the global Vue object. Here is a full example using the global build:</p>

        <table style="border:0; width:100%">
            <tr>
                <td style="width:50%">
                    <pre style="padding:0; margin:0"><code>&lt;script src=&quot;https://unpkg.com/vue@3/dist/vue.global.js&quot;&gt;&lt;/script&gt;

&lt;div id=&quot;app&quot;&gt;{{ message }}&lt;/div&gt;

&lt;script&gt;
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref(&#39;Hello vue!&#39;)
      return {
        message
      }
    }
  }).mount(&#39;#app&#39;)
&lt;/script&gt;</code></pre>
                </td>
                <td style="width:50%">

                    <div class="test-box test-box-1" 
                        style="height: 440px;"
                    >
                        <iframe src="<?=BASE_URL?>/pages/iframes/vue-cdn/index.html" 
                            width="100%" 
                            height="100%"
                        ></iframe>
                    </div>
                </td>
            </tr>
            <tr>
                
                <td style="width:50%">
                    <p>
                        <a href="<?=BASE_URL?>/pages/iframes/vue-cdn/index.html" 
                            target="_blank"
                        >Open example in a new page</a>
                    </p>

                </td>
                <td style="width:50%"></td>
            </tr>
        </table>

        <h3>Using the ES Module Build</h3>
        <p>You can use ES modules syntax. Most modern browsers now support ES modules natively, so we can use Vue from a CDN via native ES modules like this:</p>

        <table style="border:0; width:100%">
            <tr>
                <td style="width:50%">
                    <pre style="padding:0; margin:0"><code>&lt;div id=&quot;app&quot;&gt;{{ message }}&lt;/div&gt;

&lt;script type=&quot;module&quot;&gt;
  import { createApp, ref } from &#39;https://unpkg.com/vue@3/dist/vue.esm-browser.js&#39;

  createApp({
    setup() {
      const message = ref(&#39;Hello Vue!&#39;)
      return {
        message
      }
    }
  }).mount(&#39;#app&#39;)
&lt;/script&gt;</code></pre>
                </td>
                <td style="width:50%">

                    <div class="test-box test-box-1" 
                        style="height: 400px;"
                    >
                        <iframe src="<?=BASE_URL?>/pages/iframes/vue-cdn/index2.html" 
                            width="100%" 
                            height="100%"
                        ></iframe>
                    </div>
                </td>
            </tr>
            <tr>
                
                <td style="width:50%">
                    <p>
                        <a href="<?=BASE_URL?>/pages/iframes/vue-cdn/index2.html" 
                            target="_blank"
                        >Open example in a new page</a>
                    </p>

                </td>
                <td style="width:50%"></td>
            </tr>
        </table>
                
        

<h3>Splitting Up the Modules and enabling Import maps</h3>
        <p>We can teach the browser where to locate the vue import by using Import Maps, also we may need to split our code into separate JavaScript files so that they are easier to manage:</p>

        <table style="border:0; width:100%">
            <tr>
                <td style="width:50%">
                    <p style="padding:0; margin:0"><code>index.html</code></p>
                    <pre style="padding:0; margin:0"><code>&lt;script type=&quot;importmap&quot;&gt;
    {
      &quot;imports&quot;: {
        &quot;vue&quot;: &quot;https://unpkg.com/vue@3/dist/vue.esm-browser.js&quot;
      }
    }
  &lt;/script&gt;
 
  &lt;div id=&quot;app&quot;&gt;&lt;/div&gt;

&lt;script type=&quot;module&quot;&gt;
  import { createApp } from &#39;vue&#39;
  import MyCounter from &#39;./counter.js&#39;

  createApp(MyCounter).mount(&#39;#app&#39;)
&lt;/script&gt;</code></pre>

<p style="padding:0; margin:0"><code>my-component.js</code></p>

<pre style="padding:0; margin:0">
<code>import { ref } from &#39;vue&#39;
export default {
  setup() {
    const count = ref(1)
    return { count }
  },
  template: `&lt;div&gt;count is {{ count }}&lt;/div&gt;`
}</code></pre>
</code></pre>
                </td>
                <td style="width:50%">
                <p>&nbsp;</p>
                    <div class="test-box test-box-1" 
                        style="height: 730px"
                    >
                    
                        <iframe src="<?=BASE_URL?>/pages/iframes/vue-cdn/index3.html" 
                            width="100%" 
                            height="100%"
                        ></iframe>
                    </div>
                </td>
            </tr>
            <tr>
                
                <td style="width:50%">
                    <p>
                        <a href="<?=BASE_URL?>/pages/iframes/vue-cdn/index3.html" 
                            target="_blank"
                        >Open example in a new page</a>
                    </p>

                </td>
                <td style="width:50%"></td>
            </tr>
        </table>





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
                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Modules" 
                target="_blank"
                >ES modules  </a>
            </p>

        </div>
        
    </section>