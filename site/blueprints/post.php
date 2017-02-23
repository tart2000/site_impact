<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    default: today
    width: 1/2
  author:
    label: Author
    type: user
    width: 1/2
  coverimage:
    label: Coverimage
    type: select
    options: images
  text:
    label: Text
    type: textarea
    requiered: true
  tags:
    label: Tags
    type: tags
    lowercase: true

