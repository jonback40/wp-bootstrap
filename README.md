# wp-bootstrap
Default setup and configuration for working with Bootstrap in WordPress.

### Includes
* `gulpfile.js` to compile `.scss` files to `.css` files with autoprefixed and minified content.
* Default `functions.php`
* Default template files
* Default app icons

### Usage
* Open a terminal and navigate to your project directory.
* Run `git clone https://github.com/mattmilburn/wp-bootstrap.git` to clone this repo into your project directory.
* `cd` into this directory and run `npm install` to install its dependencies.
* Run `npm start` to start the watch task. Or just run `gulp` to run the process once.

As you make edits to the `.scss` files stored in the `/src` directory, Gulp will automatically compile, autoprefix and minify your CSS.
