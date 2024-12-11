# softuni-Wordpress-Jubilee

SoftUni WP course project - a platform for online learning


*The project is implemented using the WordPress platform

*The project has a custom theme, using a free Jubilee HTML/CSS/JS with GPL-licence. The theme includes:

 -native WP_Query() for looping (The_Loop()) different items in the corresponding templates;
 -header part, including the dynamic <title> field;
 -footer part with registered sidebar area and a few widgets there;
 -all styles and scripts are enqueued, using the proper native WP functions;
 -archive template for the author's archive, date archive and category archive of blog posts; 
 -page template for the homepage with most of the dynamic of the section;
 -page template for the services with most of the dynamic of the section;
 -page template for listing all posts from the custom post type 
 -template for the single view for blog posts, single view of one of the Custom Post Types;
 
*The project has custom WordPress plugin, which includes:
 
 -registered Custom Post Type for Subjects, Reviews, Teachers;
 -a Class, following the OOP structure in the plugin for the one of the cpt
 -register custom taxonomy, attached to the custom post type
 -metabox build using native WP functions with custom option that works with the post-meta
 -metabox/dashboard field registered with ACF;
 -Options Page
 -an AJAX functionality for a dynamic section of the project-click event for subscribe for a course.
 -a registered shortcode, showing a promo offer

*The project is available in a Git repository - https://github.com/DaniBacheva/softuni-jubilee



