📎 Product Attachment for Magento 2

Overview

The Product Attachment module for Magento 2 allows store administrators to attach files (e.g., PDFs, images, manuals, etc.) to products. These files are displayed on the product detail page for customers to download, improving the overall shopping experience and providing valuable information about the products.
The Product Attachment module for Magento 2 enhances the shopping experience by allowing store administrators to attach files (e.g., PDFs, images, manuals, etc.) to product pages. Customers can easily download these files directly from the product detail page, improving information accessibility and customer satisfaction.

🚀 Features

📂 Attach multiple file types (PDF, DOC, XLS, ZIP, etc.) to products.

🖥️ Display file attachments on the product detail page.

✏️ Customizable file titles and descriptions.

🔒 Restrict file downloads to specific customer groups.

🛠️ Easy management of attachments in the admin panel.

🌐 3D File Preview: Showcase 3D models (e.g., product prototypes, assembly instructions) directly on the product page for a more engaging user experience.

📂 Attach Multiple File Types: Upload a variety of file types such as PDF, DOC, XLS, ZIP, etc., to your products.
🖥️ Display Attachments on Product Page: Files are displayed on the product detail page under a "Downloads" section for easy access.
✏️ Customizable Titles and Descriptions: Customize file titles and descriptions for clarity and better customer understanding.
🔒 Restrict File Downloads: Control who can access specific files by restricting downloads to specific customer groups.
🛠️ Easy Attachment Management: Manage and upload files through an intuitive interface in the admin panel.
🌐 3D File Preview: Showcase interactive 3D models (e.g., product prototypes or assembly instructions) directly on the product page for an engaging shopping experience.
🖥️ Compatibility

Magento 2.3.x, 2.4.x

Magento 2.3.x
Magento 2.4.x
⚙️ Installation

1. Manual Installation

Download the module from the repository.

Extract the downloaded files and copy them to the app/code/Letscms/ProductAttachment directory.

Run the following commands from the Magento 2 root:

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
bin/magento cache:flush
Flush Cache
Clear Magento cache:

🔧 Configuration
bash
Copy code
bin/magento cache:flush
🔧 Manual Installation
If you prefer manual installation, follow these steps:

Log in to the Magento Admin Panel.
Download the Module
Download the module package from the repository.

Navigate to Stores > Configuration > Letscms > Product Attachment.
Extract and Copy Files
Extract the downloaded files and copy them to the app/code/Letscms/ProductAttachment directory.

Configure the settings as required:
Enable the Module
Run the following command:

✅ Enable/Disable the module.
bash
Copy code
bin/magento module:enable Letscms_ProductAttachment
Run Setup Commands
Upgrade the database, compile, deploy static content, and flush the cache using the same steps mentioned above.

📄 Set allowed file types.
🔧 Configuration
Log into Magento Admin Panel
Navigate to your Magento Admin Panel.

🔤 Customize the file display section title.
Navigate to Settings
Go to Stores > Configuration > Letscms > Product Attachment.

📝 Usage
Configure Settings
Adjust the following settings as needed:

Go to the Products section in the admin panel and edit a product.
✅ Enable/Disable Module
📄 Set Allowed File Types (e.g., PDF, DOCX, PNG, etc.)
🔤 Customize Display Title for attachments section.
📝 Set Description to provide more details on file contents.
🛠️ Usage
Edit Product
Go to Products in the Admin panel and edit an existing product or create a new one.

Find the "Product Attachments" tab under the product edit page.
Upload Attachments
Find the Product Attachments tab under the product details page.

Click "Add Attachment" to upload files.
Add Attachments
Click on Add Attachment, upload your files, and add a title and description for each file.

Enter a title and description for each attachment.
Save the Product
Save the product. The attachments will now be displayed on the product detail page under the "Downloads" section.

Save the product.
📐 3D Preview Setup
To enable 3D previews:

The attachments will now be displayed on the product detail page under the "Downloads" or similar section.
Ensure that the uploaded file is in a compatible format (e.g., .glb, .gltf).
Go to Stores > Configuration > Letscms > Product Attachment.
Configure the 3D viewer settings for displaying interactive 3D models.
📸 Screenshots
Here are some visuals to guide you through the process:

To enable 3D previews, ensure the uploaded file is in a compatible format (e.g., .glb, .gltf) and configure the 3D viewer under Stores > Configuration > Letscms > Product Attachment.
1. Admin Panel Settings
A look at the configuration settings in the admin panel.

📸 Screenshots

Include screenshots here to showcase:
2. Product Attachment Upload Interface
Upload files to your product through the product edit page.

Admin panel settings

Product attachment upload interface
3. Frontend Display
The frontend of the product page showcasing the "Downloads" section and 3D preview.

Frontend display of attachments, including 3D previews

💬 Support
If you need further assistance or encounter issues, feel free to reach out to us at:

For support or further assistance, please contact letscmsdev@gmail.com.
📧 Email: letscmsdev@gmail.com

🤝 Contribution
We welcome contributions! Feel free to:

Feel free to fork this repository, submit issues, or create pull requests. We welcome contributions to improve this module.


Thank you for using the Product Attachment module for Magento 2! This module is completely free to use and we hope it enhances your store's functionality and user experience. 🌟
Fork the repository.
Submit issues or feature requests.
Create pull requests to improve the module.
Thank you for using the Product Attachment module for Magento 2! We hope it enhances your store’s functionality and user experience. 🌟
