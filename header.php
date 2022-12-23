<!DOCTYPE html>
<html lang="en">
<!-- Template part voor de header -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="project">
  <meta name="Author" content="Bartek Filik">
  <title>project</title>
  <!-- wp head functie wordt aangeroepen 
  * Prints scripts or data in the head tag on the front end.
  -->
  <?php
    wp_head()
    ?>
</head>
<!-- body krijgt altijd een class voor een specifiek template -->
<body <?php body_class(); ?>>
    