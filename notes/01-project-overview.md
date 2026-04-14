# PHP Student Notes Summary - Project Overview

## Goal
Practice core PHP basics by building a small multi-page project using variables, arrays, loops, functions, conditional logic, and browser output.

## Project Idea
This project displays a set of student notes using plain PHP.

It includes:
- a page showing all notes
- a page showing only open notes
- a page showing a status summary

The project is split so that data, reusable logic, and page output are kept separate.

## Main PHP Concepts
- variables
- arrays
- associative arrays
- loops
- functions
- conditional logic
- basic PHP output in the browser
- built-in functions such as `count()`

## File Overview
- `data.php` - stores the student notes array
- `functions.php` - stores reusable helper functions
- `index.php` - shows all notes
- `open-notes.php` - shows only open notes
- `status-summary.php` - shows counts and summary information

## Data Shape
Each note includes:
- `student_name`
- `note_text`
- `status`