![picture](../images/beta.png)
# Frontend Boilerplate

Minimalist and ready to use frontEnd HTML5/CSS/JS Boilerplate for creating new web projects with [Gulp.js](https://gulpjs.com/).

![picture](../images/screenshot.png)

# Getting Started

These instructions will help you run the project on a live system or on your local machine for 
development and testing purposes.

## Dependencies

First, make sure these are installed on your machine :

- [Node.js](http://nodejs.org)
- [Yarn](https://yarnpkg.com/)
- [Gulp](http://gulpjs.com)

## Quick start

In bash/terminal/command line, `cd` into your project directory.

1. Clone this repo or download zip.
2. Run `yarn install` to install required files. (Add --no-bin-links if on VirtualBox.)
3. When it's done installing, run one of the task runners to get going :
	- `gulp` manually compiles HTML/CSS/JS files.
	- `gulp watch --dev` automatically compiles HTML/CSS/JS and spies on files changes.
	- `gulp watch --dev --reload` automatically reload browser.
	
Consider using the `--dev` option for development and testing purposes **only**.

:+1::rocket::+1::rocket::+1::rocket::+1::rocket::+1::rocket::+1::rocket::+1:

# Configuration

Everything you need is in */gulp-includes/gulp-configuration.js*.

# Documentation

- [Available Gulp commands](./gulp-commands.md)
- [Use external libraries with Yarn](./external-libraries.md)
- [SCSS lint - How to bypass gulp check-scss warnings](./scss-lint.md)
- [JSHint - How to bypass gulp check-js warnings](./jshint.md)
- [Modernizr features detection](./modernizr.md)
- [Built-in JavaScript viewport informations (gulp_display)](./viewport-framework.md)
- [Responsive image Plugin](./responsive-image-plugin.md)
- [CMS/Framework Integration](./cms-framework.md)

# Maintenance

Update outdated NPM dependencies :

`yarn upgrade-interactive --latest` (Add --no-bin-links if on VirtualBox.)

# Authors

- Hédi Ben Aba
- [Fidesio](https://www.fidesio.com/)

# License

This project is licensed under the MIT License - see the [LICENSE.md](./LICENSE.md) file for 
details
