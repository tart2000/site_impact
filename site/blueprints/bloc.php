<?php if(!defined('KIRBY')) exit ?>

title: Bloc
pages: 
  template: default 
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  links: 
    label: Links 
    type: structure 
    entry: >
      {{titre}}
    fields: 
      titre: 
        label: Title 
        type: text 
      link: 
        label: Link 
        type: url 