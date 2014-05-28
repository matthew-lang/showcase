Showcase
========

Showcase is a great tool for exhibiting your work on the web.  It can take a directory on a disk
and organizes it into a layout containing multiple icons, one for each of the exhibit.  Each 
exhibit must reside in its own subdirectory and should contain either a file called showcase.html
or showcase.json to be considered as part of the showcase.

Directories without any of the two files, showcase.html and showcase.json, are dropped from the 
showcase. Normally, the showcase.html is used as the ICON for the exhibit. Each icon is hyperlinked in a way that when it is clicked
the exhibit itself would load. 

Showcase is designed to be recursive.  It could be rendered as a showcase of showcases.  If a
sub-directory does not have an exhibit (driven by an index file), Showcase would render the 
sub-directory as a showcase.

