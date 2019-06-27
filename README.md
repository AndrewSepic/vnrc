Currently using Foundation 6.5.1.

## VNRC Custom theme using JointsWP
JointsWP requires [Node.js](https://nodejs.org) v6.9.x or newer. This doesn't mean you need to understand Node (or even Gulp) - it's just the steps we need to take to make sure all of our development tools are installed. 

## Getting Started 
### Download JointsWP and install dependencies with npm 
```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/JeremyEnglert/JointsWP.git
$ cd JointsWP
$ npm install
```
At this point, JointsWP should be installed and fully running on your local machine. If you prefer to install the theme manually, that will work as well - just be sure to run `npm install` after manually moving the files into the `/themes/` directory.

### Custom Styles
* `style.css` - this file is never actually loaded, however, this is where you set your theme name and is required by WordPress
* `assets/styles/scss/style.scss` - import all of your styles here. If you create an additional SCSS file, be sure to import it here.
* `assets/styles/scss/_main.sass` - place all of your custom styles here.
* `assets/styles/scss/_settings.scss` - adjust Foundation style settings here.
* `assets/styles/scss/login.scss` - place custom login styles here. This will generate it's own stylesheet.
### Custom Scripts
* `assets/scripts/js/` - place your custom scripts here. Each .JS file will be compiled and concatenated when the build process is ran.

### Images
* `assets/images/` - place your theme images here. Each image will be optimized when the build process is ran.
