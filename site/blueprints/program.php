<?php if(!defined('KIRBY')) exit ?>

title: Program
pages:
  hide: true
  template: module
files: false
fields:
  title:
    label: Title
    type:  text
  text: 
    label: Text
    type: textarea
  Modulelist:
    label: Modules
    type: subpagelist
    filter: 
  		template: module
