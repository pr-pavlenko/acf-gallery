# ACF Gallery Shortcode with Lightbox

This project allows you to display an ACF (Advanced Custom Fields) gallery in a WordPress post or page using a simple shortcode. It includes a custom layout and styling, along with lightbox functionality for an enhanced user experience.

Features

	•	Dynamically display an ACF gallery using a shortcode.
	•	Responsive layout with three images per row.
	•	Customizable borders and spacing between images.
	•	Lightbox integration for viewing images in an overlay.

 Requirements

	1.	WordPress: Ensure your site runs WordPress 5.0+.
	2.	ACF Pro Plugin: Required for the Gallery field type.
	3.	WP Simple Lightbox Plugin: To enable the lightbox functionality.

 Installation

1. Add PHP Code to functions.php
2. Add CSS to style.css
3. Include the CSS in your theme’s style.css file
4. Install WP Simple Lightbox Plugin

 Usage

Add a Gallery Field in ACF

	1.	Create a new Gallery field in ACF for the desired post, page, or custom post type.
	2.	Assign it a field name, e.g., gallery.

Use the Shortcode

Insert the following shortcode in a post or page where you want to display the gallery:

[display_acf_gallery name="gallery"]

Replace "gallery" with the field name of your ACF Gallery.

Customization

	•	Image Sizes:
	•	Currently uses the large size for images in the gallery. You can change this in the PHP code ($image['sizes']['large']).
	•	Styling:
	•	Modify the style.css file to adjust the layout, spacing, or image appearance.
	•	Lightbox Options:
	•	WP Simple Lightbox handles the overlay. Additional options can be configured in the plugin settings.

 Troubleshooting

	•	Gallery Not Displaying: Ensure the field name in the shortcode matches the ACF Gallery field name.
	•	Lightbox Not Working: Check that the WP Simple Lightbox plugin is installed and activated.
	•	Styling Issues: Verify the CSS is properly added to your theme’s stylesheet.
