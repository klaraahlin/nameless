# Nameless Drupal theme

Starting point for drupal theme development and to allow a clean output of content.

## Technical goals

* HTML 5
* basic html elements should be styled normalized and simple but pretty
* all Drupal elements should be styled or explicitly left out -> normalize
* basic Drupal theme scaffolding, preprocessing and resets should be done
* Cross-browser and device support (IE8+, Firefox, Chrome, Safari, Opera, iOS, Android. IE7 is partly supported)

## Usage

1. Add to %drupalroot%/sites/all/themes
2. **Rename theme and hooks to a project specific name**
3. Update README to contain project specific information
4. Run 'bower install' to download the required libraries
5. Delete the .gitignore file or remove the line ignoring the libraries folder
6. Run 'compass compile' to generate the first version of your css files

## Quick install via command line
Replace the **[placeholder]** with your new theme name.

    # Go into your theme directory
    cd /your/drupal/folder/sites/all/themes/
    
    # Prepare the theme template
    git clone git@github.com:wunderkraut/nameless.git
	cp -r nameless [placeholder]
	cd [placeholder]
	rm -rdf .git*

	# Rename files
	find . -depth -name '*nameless*' -execdir bash -c 'mv -i "$1" "${1//nameless/[placeholder]}"' bash {} \;

	# Replace the theme name recursive
	find . -depth -type f \( -name '*.info' -o -name 'bower.json' -o -name '*.php' -o -name '*.js' \) -exec sed -i '' s%nameless%[placeholder]% {} +

	# Install libraries
	bower install

	# Compile the css files the first time
	compass compile	
	
	
