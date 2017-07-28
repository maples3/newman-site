# NKU Newman Club Website

## About this readme
This document is not as an explanation of the site as much as a guide to future maintainers who weren't around when this site was written.  One of the difficulties of maintaining a club website is that I (Anthony) will be around for a few more years to maintain the site, but who will be in charge of it when I graduate?  When I arrived, it was clear that the site hadn't been touched in years, hence the new one :)  However, I want to do what I can to prevent that from happening in the future.  So this file is written more as a "how-to" for a future site maintainer who has only a little HTML knowledge.

## Page structure
Each page is composed of the header, the nav area, the main body, and the footer (as designated by their respective HTML5 tags).  The files `header.php`, `nav.php`, and `footer.php`.  The main body is specific to each individual page, since obvoiusly you want the content to change between pages.

### Header
The header is currently very simple, just an image with an `alt` tag.  The nav bar is also contained within the header, so it's included in the `header.php` file (and *not* included in the individual pages).

### Nav bar
The nav bar is an interesting bit of PHP that can do a lot more than it currently does.  It is capable of adding (de-)emphasis on the currently displayed page, as well as a "special" page that is also emphasized regardless. Currently, neither of these features are used, but they can be activated by writing the CSS classes.
There is also some documentation in the comments of the `nav.php` file itself, which explain how it works and how to use it.

### Main content
This is where you actually write the page content.  It's fairly straightforward if you are familiar with the basic HTML tags.
One thing that I wanted to be able to do easily was to have a few "articles" or "stories" with images on the pages.  If you look at the pages, you can see how it should be structured, but here's a quick outline anyway:
```html
<div class="story">
<!-- Picture is optional, but here is where it needs to go.  I usually link to a high-res version as well -->
<img src="group.jpg" alt="Group picture">
<h3>Article heading</h3>
<p>Article content</p>
</div>
```

### Footer
The footer was tricky to write, because I wanted it to transfer well to mobile.  It's just two floating divs, a `right` and a `left`.
There's also a small "credit" div at the bottom with my name and email (and if other club members contribute, they will appear here as well).  Part of the reasoning for this is to provide a point-of-contact in case seven years from now, someone in the club looks at the site and wants help working on it.  Also, one thing I really wanted to do with the site is to make sure there's always a way for incoming students to get in contact with a human.
