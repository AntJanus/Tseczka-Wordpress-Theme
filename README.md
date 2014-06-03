![logo](images/tseczka-logo.png)

Tseczka Wordpress Theme v3
=======================

Tseczka is a wordpress theme that I've been working on and updating for the past five years or so. With each update, I changed the architecture and brought in more abstraction as well as simplicity.

As it stands right now, Tseczka is fully modular, incredibly simple to edit, and lightweight. It's barely opinionated and where it IS opinionated, you're one line of code away from changing it to your own tastes.

What is has
===========

Tseczka has:

* CSS framework called [Tseczka CSS](http://github.com/antjanus/tseczka-css-framework)
* a full grid system ripped from [Foundation](http://foundation.zurb.com)
* prettifyJS support in the /assets folder
* various functions and bits for additional functionality
* dead simple templates
* tiny MCE styling to match the site
* support for multiple sidebars, pick which one you want per page


What it doesn't have
=====================

Tseczka lacks:

* an options menu
* opinionated PHP framework setup
* child theme support
* pretty looks out of the box


FAQ
===========

###Why Tseczka?

Why indeed. Tseczka is what I call a "starter theme". It's a theme that you'd clone and make your own creation out of. Meaning that it's not meant to be extended, nor to be a full solution out of the box. It provides simple boilerplate in terms of PHP as well as CSS via the Tseczka CSS Framework. It is easily modifiable.

My main purpose for Tseczka was ot have a bloat-less skeleton that doesn't have an overwhelming amount of boilerplate and that is not opinionated

###How about an options menu?

Nope, never gonna happen. Tseczka is for developers, not for designers or for users! There are some options you can select from within the admin (well, one at the time of writing: which sidebar to use for a page/post). Everything else is programmed. I included a single global variable meant to specify the number of sidebars that's it.

###How did you come up with this ridiculous name?

Tseczka is a puzzle that used to be sold in Czech Republic that uses pieces of plastic shaped like "C"s and "S"s that could hook onto each other to create chains, bracelets, or whatever else for fun. It felt *fitting* to pick something that has to do with my heritage and that emphasizes modularity to create a final product.

###Cross browser support?
I haven't tested yet but should be IE9+ and modern versions of newer browsers. My previous iterations <2.0.1 supported IE7 and the old Opera engine

###What makes this theme so special?

Lack of features, lack of 50 different layouts, lack of 50 million shortcuts, basically. The "lack of things" make this theme perfect for usage.

###Does this work straight out of the box?

Yes, but it's pretty much just like Bootstrap 2.X in that out of the box, it's okay but with an hour of work, it looks great. I've written about this a couple of years ago about [Bootstrap](http://antjanus.com/blog/web-design-tips/user-interface-usability/customize-twitter-bootstrap-into-themes/) and same principles apply here. Play around with changing variables and see what you can come up with. And don't feel too shy to dig into the LESS files themselves.

LOG
===========

* v3.0.0 - Completely new Tseczka
* v2.0.1 - Clean copy of tseczka. Cleanly pulled.
* v2.0.0 - Final working version before major restructuring.
