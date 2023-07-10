


# scss boilerplate

[![Latest Version on NPM](https://img.shields.io/npm/v/scss.svg?style=flat-square)](https://npmjs.com/package/scss)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Simple Github project splash website using html5, SCSS and jquery. Good to learn basic of web development. 

Based on 
- [html5_CSS_JS_JQuery](https://github.com/yogeshswdev/html5_CSS_JavaScript_JQuery_start)
- [Spatie scss](https://github.com/spatie/scss)


### index.html
copy index_final.html and change it, test it, commit it.

### scss
The package sets some sensible defaults for HTML elements eg.:

```scss
// base/*.scss

* {
    box-sizing: border-box;
    position: relative;

    &:after,
    &:before {
        box-sizing: border-box;
    }
}
```

Generic helper classes are included for common layout issues:

```scss
// helpers/margin.scss

.h-margin {
    ...
}

.h-margin-none {
    ...
}

.h-margin-small {
    ...
}

...

```

Default settings are stored in Sass maps...

```scss
// settings/typography.scss

$font-weight: (
    default: (
            ...
            ),
    secondary: (
        normal: 400,
        bold: 700,
    ),
    fixed: (
       ...
    ),
) !default;


// settings/colors.scss

$blue: (
    lightest: #e6f5ff,
    lighter: #8bcdff,
    ...
) !default;
```

... and can be used with mixins or functions afterwards:

```scss
// my-app.scss

@import '@spatie/scss/settings';
@import 'my-custom-settings';
@import '@spatie/scss/styles';

h1 {
    @include font-secondary-bold;
    color: blue(darkest);
}

```

*Full documentation in progress*


## Install


```bash
npm install
```

## Usage

### Import

Import the base & styles file in your SCSS files.

```scss
@import '@spatie/scss/settings';
@import '@spatie/scss/styles';
```

### Overwriting defaults

All default settings are stored in `src/settings`. Copy 1 or more of these Sass maps to your own project and import them before you import the main file.

Eg. to set your own gutters in `px` instead of `rem`, you would construct or import your own `$gutters` variable.
Be sure to remove the `!default` flag for this variable.

```scss
// your-app.scss
@import '@spatie/scss/settings';

// overwrite default settings
$gutter: (
    xs: 5px,
    s: 10px,
    default: 20px,
    ...
);

@import '@spatie/scss/styles';
```

### Autoprefixing

CSS properties are not vendor-prefixed. Running autoprefixer in your own build process is recommended.

## Documentation

This package implements the ideas from our [css-styleguide](https://github.com/spatie/css-styleguide).


### Code Style
- Install cscomb globally via `npm i csscomb -g` 
- Put a `.csscomb.json` in root dir of your project
- Run `csscomb src`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
