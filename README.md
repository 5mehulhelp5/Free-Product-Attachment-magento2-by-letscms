📎 Product Attachment for Magento 2

Overview
The Product Attachment module for Magento 2 enhances the shopping experience by allowing store administrators to attach files (e.g., PDFs, images, manuals, etc.) to product pages. Customers can easily download these files directly from the product detail page, improving information accessibility and customer satisfaction.

🚀 Features
📂 Attach Multiple File Types: Upload a variety of file types such as PDF, DOC, XLS, ZIP, etc., to your products.
🖥️ Display Attachments on Product Page: Files are displayed on the product detail page under a "Downloads" section for easy access.
✏️ Customizable Titles and Descriptions: Customize file titles and descriptions for clarity and better customer understanding.
🔒 Restrict File Downloads: Control who can access specific files by restricting downloads to specific customer groups.
🛠️ Easy Attachment Management: Manage and upload files through an intuitive interface in the admin panel.
🌐 3D File Preview: Showcase interactive 3D models (e.g., product prototypes or assembly instructions) directly on the product page for an engaging shopping experience.
🖥️ Compatibility
Magento 2.3.x
Magento 2.4.x
⚙️ Installation
📦 Installation via Composer (Recommended)
Install via Composer
Run the following command to install the module:

bash
Copy code
composer require letscms/product-attachment
Enable the Module
Once installed, enable the module by running:

bash
Copy code
bin/magento module:enable Letscms_ProductAttachment
Upgrade the Database
Upgrade the database schema with:

bash
Copy code
bin/magento setup:upgrade
Compile and Deploy Static Content
Run these commands to compile and deploy static content:

bash
Copy code
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
Flush Cache
Clear Magento cache:

bash
Copy code
bin/magento cache:flush
🔧 Manual Installation
If you prefer manual installation, follow these steps:

Download the Module
Download the module package from the repository.

Extract and Copy Files
Extract the downloaded files and copy them to the app/code/Letscms/ProductAttachment directory.

Enable the Module
Run the following command:

bash
Copy code
bin/magento module:enable Letscms_ProductAttachment
Run Setup Commands
Upgrade the database, compile, deploy static content, and flush the cache using the same steps mentioned above.

🔧 Configuration
Log into Magento Admin Panel
Navigate to your Magento Admin Panel.

Navigate to Settings
Go to Stores > Configuration > Letscms > Product Attachment.

Configure Settings
Adjust the following settings as needed:

✅ Enable/Disable Module
📄 Set Allowed File Types (e.g., PDF, DOCX, PNG, etc.)
🔤 Customize Display Title for attachments section.
📝 Set Description to provide more details on file contents.
🛠️ Usage
Edit Product
Go to Products in the Admin panel and edit an existing product or create a new one.

Upload Attachments
Find the Product Attachments tab under the product details page.

Add Attachments
Click on Add Attachment, upload your files, and add a title and description for each file.

Save the Product
Save the product. The attachments will now be displayed on the product detail page under the "Downloads" section.

📐 3D Preview Setup
To enable 3D previews:

Ensure that the uploaded file is in a compatible format (e.g., .glb, .gltf).
Go to Stores > Configuration > Letscms > Product Attachment.
Configure the 3D viewer settings for displaying interactive 3D models.
📸 Screenshots
Here are some visuals to guide you through the process:

1. Admin Panel Settings
A look at the configuration settings in the admin panel.


2. Product Attachment Upload Interface
Upload files to your product through the product edit page.


3. Frontend Display
The frontend of the product page showcasing the "Downloads" section and 3D preview.


💬 Support
If you need further assistance or encounter issues, feel free to reach out to us at:

📧 Email: letscmsdev@gmail.com

🤝 Contribution
We welcome contributions! Feel free to:

Fork the repository.
Submit issues or feature requests.
Create pull requests to improve the module.
Thank you for using the Product Attachment module for Magento 2! We hope it enhances your store’s functionality and user experience. 🌟
