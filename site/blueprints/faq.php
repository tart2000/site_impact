<?php if(!defined('KIRBY')) exit ?>

title: Faq
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  questions: 
    label: FAQ
    type: structure 
    entry: >
      {{question}}
    fields:
      question:
        label: Question
        type: text
      answer:
        label: Answer
        type: text