
 Product Attachment for Magento 2
Overview
The Product Attachment module for Magento 2 enhances the shopping experience by allowing store administrators to attach files (e.g., PDFs, images, manuals, etc.) to product pages. Customers can easily download these files directly from the product detail page, improving information accessibility and customer satisfaction. 🌟

Features
📂 Attach Multiple File Types: Upload a variety of file types such as PDF, DOC, XLS, ZIP, etc., to your products.
🖥️ Display Attachments on Product Page: Files are displayed on the product detail page under a "Downloads" section for easy access.
✏️ Customizable Titles & Descriptions: Customize file titles and descriptions for clarity and better customer understanding.
🔒 Restrict File Downloads: Control who can access specific files by restricting downloads to specific customer groups.
🛠️ Easy Attachment Management: Manage and upload files through an intuitive interface in the admin panel.
🌐 3D File Preview: Showcase interactive 3D models (e.g., product prototypes or assembly instructions) directly on the product page for an engaging shopping experience.
Compatibility
Magento 2.3.x
Magento 2.4.x
Installation
📦 Installation via Composer (Recommended)
Install the module via Composer:

bash
Copy code
composer require letscms/product-attachment
Enable the Module:

bash
Copy code
bin/magento module:enable Letscms_ProductAttachment
Upgrade the Database:

bash
Copy code
bin/magento setup:upgrade
Compile and Deploy Static Content:

bash
Copy code
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
Flush Cache:

bash
Copy code
bin/magento cache:flush
🔧 Manual Installation
Download the Module from the repository.
Extract and Copy Files to app/code/Letscms/ProductAttachment.
Enable the Module:
bash
Copy code
bin/magento module:enable Letscms_ProductAttachment
Follow the same steps for upgrading the database, compiling, deploying static content, and clearing the cache as above.
Configuration
🔑 Login to Magento Admin Panel.
⚙️ Navigate to Configuration: Stores > Configuration > Letscms > Product Attachment.
Configure Settings:
✅ Enable/Disable the module.
📄 Set allowed file types (e.g., PDF, DOCX, PNG).
🔤 Customize the display title for the attachments section.
📝 Add a description for better file understanding.
Usage
🛠️ Edit Product:

Go to Products in the Admin Panel and edit an existing product or create a new one.
📤 Upload Attachments:

Find the Product Attachments tab under the product details page.
Click on Add Attachment and upload your files.
Add a title and description for each file.
💾 Save the Product:

After saving the product, the attachments will be displayed in the Downloads section on the product detail page.
📐 3D Preview Setup
File Compatibility: Ensure the uploaded file is in a compatible format (e.g., .glb, .gltf).
🖼️ Configure 3D Viewer Settings:
Go to Stores > Configuration > Letscms > Product Attachment.
Adjust settings for displaying 3D models interactively on the product page.
