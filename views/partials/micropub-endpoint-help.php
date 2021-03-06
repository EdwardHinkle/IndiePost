    <p>You will need to <a href="/creating-a-micropub-endpoint">create a Micropub endpoint</a> for your website which can create posts on your site. Once you've created the Micropub endpoint, you can indicate its location using the markup below.</p>
    <p><pre><code>&lt;link rel="micropub" href="https://<?= (property_exists($this, 'meParts') ? $this->meParts['host'] : 'example.com') ?>/micropub"&gt;</code></pre></p>
    <p><pre><code>Link: &lt;https://<?= (property_exists($this, 'meParts') ? $this->meParts['host'] : 'example.com') ?>/micropub&gt;; rel="micropub"</code></pre></p>
