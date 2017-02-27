
# Incubator website template

## Structure 

It is based on Kirby (see below) and uses : 

- Bootstrap 
- Font Awesome 
- Paper.js (for the banner animation)
- JQuery 
- match Height JS lib 

## Objects 

The base contains : 

- program > modules > blocs 
- cohortes > cohorte (year/name) > companies 
- ecoysytem > mentors 
- categories (define mentor types)
- FAQ 
- partners (logos on hp)
- calendar (for adding events)
- basic support for multiple languages

Blocs can contain sub-pages, links (URLs) or documents.

## Customization 

It is made to be used on a variety of incubation programs but it requires a little configuration. 

- pay Kirby's licence
- change main hp logo in page 'home' 
- change color # codes for the network in assets/js/network.js 
- change site description (obviously) 
- change location on map on HP 
- define mentor types before adding mentors(!)

Once it's online : 

- add Kirby licence number 
- change site logo in Site options 
- add Google Analytics number 
- use contact form for the first time to activate it (in each languages) 
- adapt / create content 

To add language : 

- add it in the config file
- translate content 
- add elements in the languages files (you'll need to create a lot of elements that haven't been made translatable yet)

# Based on Kirby CMS Bootstrap Blog Starterkit

Blog Starterkit merges Kirby CMS Bootstrap Starterkit and Blogprint of Jan Hofmann to offer a great Kirby starter for projects that needs a blog.

Blogprint repo: <https://github.com/ausminternet/blogprint>  
Kirby CMS Bootstrap Starterkit repo: <https://github.com/6ui11em/kirbycms-bootstrap-starterkit>

## Kirby

Kirby is a file-based CMS.
Easy to setup. Easy to use. Flexible as hell.

<http://getkirby.com>