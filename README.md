📦 WordPress Update Product Prices Plugin
CHANGE THE PRICE OF ALL YOUR PRODUCTS WITH ONE CLICK.
This plugin is perfect for bulk updating prices on your WooCommerce store.

🔧 How to Use
Follow these steps to customize the plugin with your desired price and upload it to your WordPress site.

1. Download or Clone the Plugin
Download this repository as a .zip file or clone it:

<pre>git clone https://github.com/pewishere/wordpress-update-product-prices.git</pre>

2. Edit the Plugin File
Open the plugin file wordpress-update-product-prices.php in a code editor (like VS Code or Notepad++).

You will see two important parts to edit:

Step A: Find this section:

<pre>WHERE meta_key = '_regular_price'
AND meta_value = ''</pre>
Change the empty string ('') to the CURRENT price of the products you want to update.
Example: If you want to update all products that currently cost 0, write:

<pre>AND meta_value = '0'</pre>
Step B: Then find this part:

<pre>update_post_meta($product_id, '_regular_price', '');
update_post_meta($product_id, '_price', '');</pre>
Replace the empty strings with the NEW price you want to set.
Example: To change the price to 19.99, write:


<pre>update_post_meta($product_id, '_regular_price', '19.99');
update_post_meta($product_id, '_price', '19.99');</pre>
3. Zip the Plugin
After editing, zip the entire folder (wordpress-update-product-prices/) so it can be uploaded to WordPress.

4. Upload to WordPress
Go to your WordPress dashboard.

Navigate to Plugins > Add New > Upload Plugin.

Upload the zipped plugin file.

Click Install Now, then Activate.

🎉 Done! Your product prices will update automatically once the plugin is activated.

⚠️ Warning
Use this only when you really want to change all product prices at once.

Always backup your site and test on a staging environment first.

BY [POORI](https://github.com/pewishere)
