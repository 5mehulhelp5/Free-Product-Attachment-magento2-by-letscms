   <h1>Buy Now Button for Magento 2</h1>

  <h2>Overview</h2>
  <p>The <strong>Buy Now Button</strong> module for Magento 2 enhances the shopping experience by allowing customers to quickly purchase a product with a single click, bypassing the shopping cart. This streamlines the checkout process, making it more efficient and user-friendly, especially for customers who are ready to make an immediate purchase.</p>

  <div class="section-header">🌟 Key Features</div>
  <ul class="features">
    <li><strong>🛒 Instant Purchase</strong>: Adds a "Buy Now" button on product pages for immediate checkout.</li>
    <li><strong>🚀 Simplified Checkout</strong>: Directs customers to the checkout page without needing to go through the cart, speeding up the purchase process.</li>
    <li><strong>🛍️ Customizable Button</strong>: Easily customize the button text and appearance to match your store’s theme.</li>
    <li><strong>🔒 Optional Cart Bypass</strong>: Optionally bypass the cart page for a more direct path to checkout.</li>
    <li><strong>🎨 Configurable Display</strong>: Display the button based on specific product types or customer groups.</li>
  </ul>

  <div class="section-header">Compatibility</div>
  <ul>
    <li>Magento 2.3.x</li>
    <li>Magento 2.4.x</li>
  </ul>

  <div class="section-header">Installation</div>

  <h3>📦 Installation via Composer (Recommended)</h3>
  <p>Install the module via Composer:</p>
  <pre><code>composer require letscms/buy-now-button</code></pre>

  <p>Enable the Module:</p>
  <pre><code>bin/magento module:enable Letscms_BuyNowButton</code></pre>

  <p>Upgrade the Database:</p>
  <pre><code>bin/magento setup:upgrade</code></pre>

  <p>Compile and Deploy Static Content:</p>
  <pre><code>bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f</code></pre>

  <p>Flush Cache:</p>
  <pre><code>bin/magento cache:flush</code></pre>

  <h3>🔧 Manual Installation</h3>
  <ol>
    <li>Download the Module from the repository.</li>
    <li>Extract and Copy Files to <code>app/code/Letscms/BuyNowButton</code>.</li>
    <li>Enable the Module:
      <pre><code>bin/magento module:enable Letscms_BuyNowButton</code></pre>
    </li>
    <li>Follow the same steps for upgrading the database, compiling, deploying static content, and clearing the cache as above.</li>
  </ol>

  <div class="section-header">Configuration</div>

  <h3>🔑 Configure the Module</h3>
  <ol>
    <li>Login to Magento Admin Panel.</li>
    <li>Navigate to Configuration: <code>Stores > Configuration > Letscms > Buy Now Button</code>.</li>
    <li>Configure the following settings:
      <ul>
        <li>✅ <strong>Enable/Disable the module</strong>.</li>
        <li>🖱️ <strong>Button Text:</strong> Set custom text for the "Buy Now" button.</li>
        <li>💼 <strong>Show Button on Product Page:</strong> Choose where to display the button (e.g., product pages, specific categories).</li>
        <li>🎨 <strong>Customize Button Appearance:</strong> Set the style, color, and size of the button.</li>
        <li>🔒 <strong>Restrict to Customer Groups:</strong> Optionally, restrict button visibility to certain customer groups.</li>
      </ul>
    </li>
  </ol>

  <div class="section-header">Usage</div>

  <h3>🛠️ Add the Buy Now Button</h3>
  <ol>
    <li>Go to <strong>Products</strong> in the Admin Panel and edit an existing product or create a new one.</li>
    <li>In the product configuration, find the <strong>Buy Now Button</strong> section.</li>
    <li><strong>Enable the Button</strong> for this product and customize the display options if needed.</li>
    <li>Save the Product.</li>
  </ol>

  <h3>🛍️ Customer Experience</h3>
  <ul>
    <li>The <strong>Buy Now</strong> button will now appear on the product page.</li>
    <li>Customers can click the button to bypass the cart and go directly to the checkout page for an immediate purchase.</li>
  </ul>
