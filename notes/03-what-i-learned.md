# PHP Student Notes Summary - What I Learned

## Main Things I Learned
This project helped me understand how a small PHP project can be split into data, logic, and page output.

I learned that:
- `data.php` can store the main array data
- `functions.php` can hold reusable helper logic
- page files like `index.php`, `open-notes.php`, and `status-summary.php` can focus on displaying output in the browser

## PHP Concepts I Practiced
Through this project, I practiced:
- variables
- arrays
- associative arrays
- `foreach` loops
- `if` statements
- functions
- built-in functions like `count()`
- mixing PHP with HTML output

## What Made More Sense After Building It
One thing that became clearer was the difference between:
- the full collection of notes
- one single note inside a loop

For example:
- `$studentNotes` means all notes
- `$studentNote` means one note from that array during a loop

I also understood better why PHP files often switch between:
- PHP logic
- HTML output

That made more sense once I saw the page render in the browser.

## What I Found Tricky At First
At first, I found these parts confusing:
- when to open and close PHP tags
- how `foreach` works with arrays
- how to print values inside HTML tags
- how to count filtered items
- how to keep variable names consistent inside loops

I also had to be careful with:
- exact variable names
- matching opening and closing braces
- using the correct file include names

## What Improved During the Project
As I kept building, I got better at:
- structuring arrays properly
- looping through records
- filtering notes by status
- moving repeated logic into helper functions
- understanding how data flows from PHP arrays into browser output

## Final Understanding
By the end of the project, I could clearly explain:
- how the data is stored
- how the pages use that data
- how helper functions reduce repeated logic
- how filtering and counting work in plain PHP

This project helped me feel more confident with the basics of PHP before moving into bigger PHP or LAMP-based work.