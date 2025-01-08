📎 Product Attachment for Magento 2

Overview

The Product Attachment module for Magento 2 allows store administrators to attach files (e.g., PDFs, images, manuals, etc.) to products. These files are displayed on the product detail page for customers to download, improving the overall shopping experience and providing valuable information about the products.

🚀 Features

📂 Attach multiple file types (PDF, DOC, XLS, ZIP, etc.) to products.

🖥️ Display file attachments on the product detail page.

✏️ Customizable file titles and descriptions.

🔒 Restrict file downloads to specific customer groups.

🛠️ Easy management of attachments in the admin panel.

🌐 3D File Preview: Showcase 3D models (e.g., product prototypes, assembly instructions) directly on the product page for a more engaging user experience.

🖥️ Compatibility

Magento 2.3.x, 2.4.x

⚙️ Installation

1. Manual Installation

Download the module from the repository.

Extract the downloaded files and copy them to the app/code/Letscms/ProductAttachment directory.

Run the following commands from the Magento 2 root:

bin/magento module:enable Letscms_ProductAttachment
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:flush

🔧 Configuration

Log in to the Magento Admin Panel.

Navigate to Stores > Configuration > Letscms > Product Attachment.

Configure the settings as required:

✅ Enable/Disable the module.

📄 Set allowed file types.

🔤 Customize the file display section title.

📝 Usage

Go to the Products section in the admin panel and edit a product.

Find the "Product Attachments" tab under the product edit page.

Click "Add Attachment" to upload files.

Enter a title and description for each attachment.

Save the product.

The attachments will now be displayed on the product detail page under the "Downloads" or similar section.

To enable 3D previews, ensure the uploaded file is in a compatible format (e.g., .glb, .gltf) and configure the 3D viewer under Stores > Configuration > Letscms > Product Attachment.

📸 Screenshots

Include screenshots here to showcase:

Admin panel settings

Product attachment upload interface

Frontend display of attachments, including 3D previews

💬 Support

For support or further assistance, please contact letscmsdev@gmail.com.

🤝 Contribution

Feel free to fork this repository, submit issues, or create pull requests. We welcome contributions to improve this module.


Thank you for using the Product Attachment module for Magento 2! This module is completely free to use and we hope it enhances your store's functionality and user experience. 🌟
