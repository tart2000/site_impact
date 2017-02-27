<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  logo:
    label: Logo
    type: selector
    mode: single
    types:
      - image
  analytics:
    label: Google Analytics ID
    type:  text
    default: UA-XXXXX-X