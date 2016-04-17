<?php if(!defined('KIRBY')) exit ?>

title: Single Post
pages: false
files:
  sortable: true
fields:
  title:
    label: Judul
    type:  text
  date:
    label: Tanggal (Jangan Diubah)
    type: date
    default: today
    override: true
    format: DD/MM/YY
    disable: true
  text:
    label: Konten
    type:  textarea
  tags:
    label: Tags
    type:  tags