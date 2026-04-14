# PHP Student Notes Summary - Setup Log

## Goal
Set up and test a small plain PHP project locally.

## Project Folder
`student-notes-summary`

## Files Created
- `data.php`
- `functions.php`
- `index.php`
- `open-notes.php`
- `status-summary.php`

## Local Setup Steps
1. Created the project folder and app files in VS Code.
2. Added the student notes data in `data.php`.
3. Added reusable helper functions in `functions.php`.
4. Built the page files for:
   - all notes
   - open notes
   - status summary
5. Linked the pages together with simple navigation links.

## How I Ran the Project
I tested the project locally in the browser using Apache and localhost.

Example path:
- `http://localhost/student-notes-summary/app/`
- `http://localhost/student-notes-summary/app/open-notes.php`
- `http://localhost/student-notes-summary/app/status-summary.php`

## What I Checked
- all notes displayed correctly
- open notes page only showed notes with `status` set to `open`
- status summary page correctly counted:
  - total notes
  - open notes
  - closed notes

## Small Fixes During Setup
- corrected PHP variable naming issues
- fixed loop and `if` statement structure
- moved repeated logic into `functions.php`
- corrected file include spelling for `functions.php`
- updated headings and links for cleaner page structure

## Result
The project runs locally and each page displays the expected output.