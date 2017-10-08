<nav>
<ul>
<?php

/*
TO FUTURE SITE MAINTAINERS
If you're trying to add or remove a page to/from the header, scroll down
*/

class PageLink {
	private $file; // The file name of the page
	private $name; // The name of the page
	private $isCurrent; // Is this page the currently displayed page?
	private $special;

	/**
	 *	Creates the object with the specified filename and page name
	 */
	public function __construct($file1, $name1, $special1 = false) {
		$this->file = $file1;
		$this->name = $name1;

		// Default is to align left like normal (default parameter set)
		$this->special = $special1;

		// Determine if this page is the currently displayed page
		$this->isCurrent = (strcmp(basename($_SERVER['PHP_SELF']), $this->file) == 0);

		/*
		//Testing code
		if ( $this->isCurrent ) {
			echo "TRUE";
		} else {
			echo "f";
			echo $this->file;
			echo " != ";
			echo basename($_SERVER['PHP_SELF']);
			echo "\n";
		}
		*/
	}

	/**
	 * Prints the HTML for the link
	 */
	public function printLine() {
		echo "<li><a href=\"";
		echo $this->file;
		echo "\"";

		echo " class=\"";

		// Add the currentPage CSS class if needed
		if ($this->isCurrent) {
			echo "currentPage ";
		}

		// Add the special CSS class if needed
		if ($this->special) {
			echo "special ";
		}

		echo "\">";
		echo $this->name;
		echo "</a></li>";
		echo "\n";
	}
}

/*
TO FUTURE MAINTAINERS
These next few lines are where the pages get defined.

First parameter (string): the file name of the page.
			(Note that this won't work if you put pages in folders, so don't do that.)
Second parameter (string): the display name of the page
Third parameter (boolean, optional): If the link should have the "special" CSS class
			(defaults to false)

The 'currentPage' CSS class gets applied to the current page's <a> element.
The 'special' CSS class will be applied to the <a> tag of the requested pages.
If you're confused, change 'false' to 'true' on the 'events.php' page below,
put it on the server, and view the page source.  (At the time of this writing,
there was no CSS that would cause any visible change in the sites.

*/

$pages = array(
	new PageLink("index.php", "Home"),
	new PageLink("about.php", "About Us"),
	// The 'false' here doesn't change anything, since that's the default
	new PageLink("events.php", "Events", false),
	new PageLink("officers.php", "Officers"),
	new PageLink("contact.php", "Contact Us")
);

foreach ($pages as $page) {
	$page->printLine();
}

/*
Original HTML that didn't do something special for the current page
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="events.php">Events</a></li>
	<li><a href="officers.php">Officers</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="contact.php"><?php echo basename($_SERVER['PHP_SELF']); ?></a></li>
</ul>
*/
?>
</ul>
</nav>
