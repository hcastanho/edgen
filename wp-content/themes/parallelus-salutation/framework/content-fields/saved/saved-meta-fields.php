<?php 
#================================================
#	Page and Post Options
#================================================

// Layout Options
add_filter('content_fields_saved', 'content_fields_saved_layout_options');
function content_fields_saved_layout_options ($d) {$d['layout-options'] = maybe_unserialize('a:8:{s:5:"label";s:14:"Layout Options";s:8:"position";s:5:"right";s:5:"index";s:14:"layout-options";s:12:"ancestor_key";s:14:"layout-options";s:11:"version_key";s:20:"id_v8swp2wg9rqtysw84";s:10:"import_key";s:0:"";s:6:"fields";a:3:{s:6:"layout";a:10:{s:5:"label";s:6:"Layout";s:3:"key";s:6:"layout";s:4:"slug";s:0:"";s:10:"field_type";s:6:"select";s:6:"values";s:11:"[[layouts]]";s:7:"caption";s:97:"Optionally specify a custom layout instead of the default selected in &quot;Design Settings&quot;";s:5:"index";s:6:"layout";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:19:"id_jkvlq42sg1912b54";s:10:"import_key";s:0:"";}s:13:"custom-header";a:10:{s:5:"label";s:13:"Custom Header";s:3:"key";s:13:"layout_header";s:4:"slug";s:0:"";s:10:"field_type";s:6:"select";s:6:"values";s:16:"[[page_headers]]";s:7:"caption";s:85:"Specify a custom header to use instead of the one configured for the selected layout.";s:5:"index";s:13:"custom-header";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_ub89f70durl23bzk8";s:10:"import_key";s:0:"";}s:13:"custom-footer";a:10:{s:5:"label";s:13:"Custom Footer";s:3:"key";s:13:"layout_footer";s:4:"slug";s:0:"";s:10:"field_type";s:6:"select";s:6:"values";s:16:"[[page_footers]]";s:7:"caption";s:85:"Specify a custom footer to use instead of the one configured for the selected layout.";s:5:"index";s:13:"custom-footer";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:17:"id_w1l59yql6ceee9";s:10:"import_key";s:0:"";}}s:10:"post_types";a:2:{i:0;s:4:"post";i:1;s:4:"page";}}', true); return $d; }

// Design Options
add_filter('content_fields_saved', 'content_fields_saved_design_options');
function content_fields_saved_design_options ($d) {$d['design-options'] = maybe_unserialize('a:8:{s:5:"label";s:14:"Design Options";s:8:"position";s:5:"right";s:5:"index";s:14:"design-options";s:12:"ancestor_key";s:14:"design-options";s:11:"version_key";s:19:"id_s3wfezhndevfl56s";s:10:"import_key";s:0:"";s:6:"fields";a:2:{s:10:"hide-title";a:10:{s:5:"label";s:10:"Hide Title";s:3:"key";s:10:"hide_title";s:4:"slug";s:0:"";s:10:"field_type";s:8:"checkbox";s:6:"values";s:0:"";s:7:"caption";s:29:"Hide the title for this page.";s:5:"index";s:10:"hide-title";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_v3vt77j1dal52bhs8";s:10:"import_key";s:0:"";}s:4:"skin";a:10:{s:5:"label";s:4:"Skin";s:3:"key";s:4:"skin";s:4:"slug";s:0:"";s:10:"field_type";s:6:"select";s:6:"values";s:9:"[[skins]]";s:7:"caption";s:32:"Override the theme skin setting.";s:5:"index";s:4:"skin";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:19:"id_q1l40hqw61hosq5c";s:10:"import_key";s:0:"";}}s:10:"post_types";a:2:{i:0;s:4:"post";i:1;s:4:"page";}}', true); return $d; }

// Media
add_filter('content_fields_saved', 'content_fields_saved_media');
function content_fields_saved_media ($d) {$d['media'] = maybe_unserialize('a:8:{s:5:"label";s:5:"Media";s:8:"position";s:5:"right";s:5:"index";s:5:"media";s:12:"ancestor_key";s:5:"media";s:11:"version_key";s:20:"id_vyejo3wizcs52zf0g";s:10:"import_key";s:0:"";s:6:"fields";a:2:{s:3:"url";a:10:{s:5:"label";s:3:"URL";s:3:"key";s:9:"media_url";s:4:"slug";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:7:"caption";s:85:"Video or image URL to display in lightbox when &quot;Featured Image&quot; is clicked.";s:5:"index";s:3:"url";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_enh7e20a3waligw68";s:10:"import_key";s:0:"";}s:5:"title";a:10:{s:5:"label";s:5:"Title";s:3:"key";s:11:"media_title";s:4:"slug";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:7:"caption";s:38:"Optional title to use with this media.";s:5:"index";s:5:"title";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_wqzcx1pa33ho7l49w";s:10:"import_key";s:0:"";}}s:10:"post_types";a:2:{i:0;s:4:"post";i:1;s:4:"page";}}', true); return $d; }

// Content Optons (auto paragraphs, search exclude, etc.)
add_filter('content_fields_saved', 'content_fields_saved_content_options');
function content_fields_saved_content_options ($d) {$d['content-options'] = maybe_unserialize('a:8:{s:5:"label";s:15:"Content Options";s:8:"position";s:5:"right";s:5:"index";s:15:"content-options";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_pv4m356oduuude0w0";s:10:"import_key";s:0:"";s:6:"fields";a:2:{s:19:"exclude-from-search";a:10:{s:5:"label";s:19:"Exclude from Search";s:3:"key";s:14:"search-exclude";s:4:"slug";s:0:"";s:10:"field_type";s:8:"checkbox";s:6:"values";s:0:"";s:7:"caption";s:35:"Hide this page from search results.";s:5:"index";s:19:"exclude-from-search";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_pwlff6p840of4goow";s:10:"import_key";s:0:"";}s:15:"auto-paragraphs";a:10:{s:5:"label";s:15:"Auto Paragraphs";s:3:"key";s:7:"wpautop";s:4:"slug";s:0:"";s:10:"field_type";s:6:"select";s:6:"values";s:7:"On, Off";s:7:"caption";s:82:"Add &lt;p&gt; and &lt;br&gt; tags automatically. (disabling may fix layout issues)";s:5:"index";s:15:"auto-paragraphs";s:12:"ancestor_key";s:15:"content-options";s:11:"version_key";s:20:"id_moctx6fwuaud5esso";s:10:"import_key";s:0:"";}}s:10:"post_types";a:2:{i:0;s:4:"post";i:1;s:4:"page";}}', true); return $d; }

#================================================
#	Static Block Options
#================================================

// Background Options
add_filter('content_fields_saved', 'content_fields_saved_background');
function content_fields_saved_background ($d) {$d['background'] = maybe_unserialize('a:8:{s:5:"label";s:10:"Background";s:8:"position";s:4:"left";s:5:"index";s:10:"background";s:12:"ancestor_key";s:10:"background";s:11:"version_key";s:20:"id_ro00b1dw8z3g9z4cg";s:10:"import_key";s:0:"";s:6:"fields";a:5:{s:5:"color";a:10:{s:5:"label";s:5:"Color";s:3:"key";s:8:"bg_color";s:4:"slug";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:7:"caption";s:200:"Enter the HEX color value for an option background color.&lt;br&gt;&lt;a href=&quot;http://www.colorpicker.com/&quot; target=&quot;_blank&quot;&gt;Where can I get the HEX value for my color?&lt;/a&gt;";s:5:"index";s:5:"color";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_vpour7fsts5t67d8o";s:10:"import_key";s:0:"";}s:5:"image";a:10:{s:5:"label";s:5:"Image";s:3:"key";s:8:"bg_image";s:4:"slug";s:0:"";s:10:"field_type";s:4:"text";s:6:"values";s:0:"";s:7:"caption";s:65:"Enter the full URL of an image to show in your header background.";s:5:"index";s:5:"image";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_vuu1b23jvd2r3uc80";s:10:"import_key";s:0:"";}s:25:"image-position-horizontal";a:10:{s:5:"label";s:27:"Image Position (Horizontal)";s:3:"key";s:8:"bg_pos_x";s:4:"slug";s:0:"";s:10:"field_type";s:5:"radio";s:6:"values";s:20:"*Left, Center, Right";s:7:"caption";s:0:"";s:5:"index";s:25:"image-position-horizontal";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_g86w06kscqibnfe8s";s:10:"import_key";s:0:"";}s:23:"image-position-vertical";a:10:{s:5:"label";s:25:"Image Position (Vertical)";s:3:"key";s:8:"bg_pos_y";s:4:"slug";s:0:"";s:10:"field_type";s:5:"radio";s:6:"values";s:20:"*Top, Center, Bottom";s:7:"caption";s:0:"";s:5:"index";s:23:"image-position-vertical";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_j3rpf70ojd76mbasc";s:10:"import_key";s:0:"";}s:6:"repeat";a:10:{s:5:"label";s:6:"Repeat";s:3:"key";s:9:"bg_repeat";s:4:"slug";s:0:"";s:10:"field_type";s:5:"radio";s:6:"values";s:54:"*No Repeat, Repeat, Repeat Horizontal, Repeat Vertical";s:7:"caption";s:0:"";s:5:"index";s:6:"repeat";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:19:"id_jle9n59uwd48ls88";s:10:"import_key";s:0:"";}}s:10:"post_types";a:1:{i:0;s:12:"static_block";}}', true); return $d; }

// Content Options (auto paragraphs, search exclude, etc.)
add_filter('content_fields_saved', 'content_fields_saved_static_content_options');
function content_fields_saved_static_content_options ($d) {$d['static-content-options'] = maybe_unserialize('a:8:{s:5:"label";s:22:"Static Content Options";s:8:"position";s:5:"right";s:5:"index";s:22:"static-content-options";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_nc7095b1p8bbldhss";s:10:"import_key";s:0:"";s:10:"post_types";a:1:{i:0;s:12:"static_block";}s:6:"fields";a:1:{s:15:"auto-paragraphs";a:10:{s:5:"label";s:15:"Auto Paragraphs";s:3:"key";s:7:"wpautop";s:4:"slug";s:0:"";s:10:"field_type";s:6:"select";s:6:"values";s:7:"On, Off";s:7:"caption";s:82:"Add &lt;p&gt; and &lt;br&gt; tags automatically. (disabling may fix layout issues)";s:5:"index";s:15:"auto-paragraphs";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:19:"id_wmko563cjd4g0omg";s:10:"import_key";s:0:"";}}}', true); return $d; }

// HTML Content (code)
add_filter('content_fields_saved', 'content_fields_saved_html_content');
function content_fields_saved_html_content ($d) {$d['html-content'] = maybe_unserialize('a:8:{s:5:"label";s:12:"HTML Content";s:8:"position";s:4:"left";s:5:"index";s:12:"html-content";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_n2ed73n9eltsurf0g";s:10:"import_key";s:0:"";s:6:"fields";a:1:{s:10:"code-input";a:10:{s:5:"label";s:10:"Code Input";s:3:"key";s:4:"code";s:4:"slug";s:0:"";s:10:"field_type";s:8:"textarea";s:6:"values";s:0:"";s:7:"caption";s:283:"This content is loaded immediately after the editor content. The main purpose of this field is to prevent the import feature in WP from stripping content needed for the theme to function. (use single quotes instead of double quotes or WP will convert them to HTML special characters)";s:5:"index";s:10:"code-input";s:12:"ancestor_key";s:0:"";s:11:"version_key";s:20:"id_ox8g95fsy6htlja0w";s:10:"import_key";s:0:"";}}s:10:"post_types";a:1:{i:0;s:12:"static_block";}}', true); return $d; }
?>