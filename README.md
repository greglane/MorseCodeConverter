Introduction
============

Morse Code Converter is a library for PHP Code Igniter v2.

As the name suggests, it encodes regular text to morse code and vice versa.

Here's a working demo -> http://greglane.me/demos/morse/index.php/morsecodes

This repo includes a sample controller and view (including HTML5 Boilerplate)

Installation
============

To use the library, just copy it into your application/libraries directory in Code Igniter.  It has no dependencies so you don't need anything else to make it work.
If you want the included demo to work, you will need to autoload the 'form' and 'url' helpers.

Methods
=======

convert2morse()
--------------
Accepts a text string and returns a string of Morse code.  Note that it has no arguments
but it checks the post array for a variable called 'message' from your form. Also note
that only latin characters used in English are converted. Additionally, space characters
are not converted to Morse but 2 extra spaces are added to more clearly delineate 'words'
as each Morse character is separated by a single space.

morse2text()
------------
Accepts a string of Morse code and converts it to plain text.  Note that it has no arguments
but it checks the post array for a variable called 'message' from your form. Also note that
only latin Morse code characters used in English are converted. The library can convert Morse
written with a variety of characters.  For example, '_', '-' and '—' are all acceptable as
dashes and '.' and '·' are acceptable for the dots.

Error Handling
==============

At the moment, there is none. The library expects to receive plain text or Morse as
appropriate.