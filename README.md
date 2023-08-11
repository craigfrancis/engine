# Templado 5

> __Templado 5.0 is currently under heavy development__
>
> Templado 5.0 - developed in `main` - is, in major parts, a rewrite from Templado 4.x and under current development. If you want to try 5.0 already, please be aware of the fact the current API is subject to change and it is not yet feature complete.


[![Integrate](https://github.com/templado/engine/workflows/Integrate/badge.svg)](https://github.com/templado/engine/actions)

A pragmatic approach to templating for PHP 8.2+

(Use Templado [4.x](https://github.com/templado/engine/tree/4.x) for PHP >=7.4)

### Motivation

Most of today's templating engines mix code for the required rendering logic with HTML markup in one file and require
the developers to learn their respective language.

Templado follows a different approach on templating: Being in part inspired by [Tempan](https://github.com/watoki/tempan),
Templado relies solely on plain HTML markup. The limited amount of display logic required is contained with the engine
and triggered by the view model when it's applied to the Page.

### Always ready to preview

As a Templado template is plain HTML, previewing is as easy as opening the HTML file with a browser - example data can
and should be included as the engine will clean it up based on the view model upon rendering.

### Form handling included

To make form handling even more easy, Templado comes with explicit HTML Form support. Based on supplied Input data,
Templado will repopulate the HTML form and even include your CSRF protection code.

### Merging of Documents

Documents can be merged based on element ID values to combine multiple fragments - even recursively - into a final document.

### Custom transformations, Filters and Serialization

Templado allows for custom transformations, like adding a class to every ```a``` tag and string based replacements upon
serialization. The full serialization can be customized, with some default variants shipping along.

