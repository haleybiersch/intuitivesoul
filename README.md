# intuitivesoul

Created 9:14 PM 2021-03-21 by JK

NOTE: Some default page templates are identical as content is moved to the WP admin rather than in the page itself. For example, page-about & page-services are the same. This can simply be converted to a page-template.

REVISIONS

Below is a list of files that do not seem to be used in the theme and have been removed:
- css/nicepage.css (used on the ui-kit, not used)
- css/home.css (used on the ui-kit, not used)
- ui-kit.php (this is from the original UI Kit, not used)
- /js/nicepage.js (from the ui-kit, not used)
- /js/jquery.js (jquery is loaded under the file jquery-3.6.0.min.js)

STYLES
The root css was updated to include theme content only. All rules have been moved to the css/styles.css file and duplicate rules removed.

JAVA
JS code from the original slide-down menu have been removed

FUNCTIONS PHP
- Like functions have been placed under one name for loading
- JS & CSS have been re-ordered based on inheritance
- Corrected file name spelling (file not being loaded - jquery-3.6.0) NOTE: directry spelling for fontawsome, spelled foRtawesome (not corrected)

HEADER.PHP
- re-inserted the "Skip to Content" link

FOOTER.PHP
- added dynamic year in the copyright 
- remove breaks, added style from original style

INDEX.PHP
- added content renderer
- removed sample modal
- added sidebar include

FRONT-PAGE.PHP
- added content renderer
- removed sample modal
- corrected nested tags

ARCHIVE.PHP
- removed page-level styling
- added proper section
- added sidebar include

SIDEBAR.PHP
- added linkedin icon

PAGE-ABOUT.PHP
PAGE-BLOG.PHP
PAGE-CONTECT.PHP

PAGE-MEDIA.PHP
- removed blogtalk content.  Changed col size on iheart and bmajor to col-3.  Changed size of images.
- added item to table header
- Removed H1 Header
- changed table class striped and added styling for table to style.css

PAGE-SERVICES.PHP
PAGE.PHP
SINGLE.PHP
- Added main & section tags
- added sidebar include

PAGE-ABOUT.PHP
- moved content to the WP page itself. The content rendered adds the text

THEME
- Added the screenshot png for use on the theme page in WP Admin

OUTSTANDING ISSUES
- The "Back to Top" button has disappered
- The "Skip To Content" has disappered
