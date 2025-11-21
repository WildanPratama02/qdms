# UI Design & Responsiveness Guide

*Laravel Blade + Bootstrap 5*

## Overview

This document defines standards and implementation rules for building
responsive UI in the Public Pages using Laravel Blade and Bootstrap 5.
The goal is to ensure all pages scale gracefully across desktop, tablet,
and mobile devices, with special focus on navigation, layouts, and UI
components.

## Responsive Design Rules

### Breakpoints (Bootstrap 5)

  Device        Width     Bootstrap Prefix
  ------------- --------- ------------------
  Extra Small   \<576px   col-12
  Small         ≥576px    col-sm-\*
  Medium        ≥768px    col-md-\*
  Large         ≥992px    col-lg-\*
  Extra Large   ≥1200px   col-xl-\*

## Navigation (Navbar + Offcanvas)

### Desktop View:

-   Full navigation bar visible
-   Logo aligned left
-   Menu items centered or right-aligned
-   Action buttons (Login, Profile, Logout) stay on the right
-   Embed Code looker Dashboard responsive Size

### Mobile/Tablet View (md and below):

-   Navbar collapses into right-side offcanvas sidebar
-   Toggle button (hamburger) appears on the right
-   Font-size and icon sizes reduced using Bootstrap utilities (fs-6,
    fs-7)
-   Embed Code looker Dashboard responsive Size


### Blade Structure:

resources/views/layouts/app.blade.php\
resources/views/components/navbar.blade.php

### Required Classes:
```{=html}
<button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
```
## Page Layout Structure (Blade)

``` blade
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row gx-4 gy-4">
        <!-- Page content goes here -->
    </div>
</div>
@endsection
```

## UI Component Rules

### Cards

``` html
<div class="col-12 col-md-6 col-lg-4">
  <div class="card shadow-sm h-100">
    <div class="card-body">
```

### Forms

``` html
<form class="row g-3">
  <div class="col-12 col-md-6">
    <input type="text" class="form-control" placeholder="Enter value">
```

### Tables

``` html
<div class="table-responsive">
  <table class="table table-striped table-bordered align-middle">
```

### Images

``` html
<img src="image.jpg" class="img-fluid rounded" alt="Responsive Image">
```

## Utility Classes to Use

  Purpose        Bootstrap Class
  -------------- -----------------------------------------------------
  Full width     w-100, container-fluid
  Spacing        px-3, py-2, mx-auto
  Alignment      d-flex, justify-content-between, align-items-center
  Visibility     d-none d-lg-block
  Overflow fix   text-wrap, flex-wrap

## Avoid These

-   Inline CSS styling
-   Fixed width/heights (width:600px)
-   Hardcoded pixel values
-   Custom CSS unless absolutely needed

## Files Impacted

  Component              Blade File
  ---------------------- ---------------------------------------------
  Navbar                 resources/views/components/navbar.blade.php
  Layout Base            resources/views/layouts/app.blade.php
  Public Pages           resources/views/public/\*.blade.php
  Shared UI Components   resources/views/components/\*.blade.php

## Quick Testing Checklist

  Check                 Desktop   Tablet   Mobile
  --------------------- --------- -------- --------
  Navbar visible        ☑         ☐        ☐
  Offcanvas works       ☐         ☑        ☑
  Cards stack           ☐         ☑        ☑
  Tables scrollable     ☐         ☑        ☑
  Buttons readable      ☑         ☑        ☑
  No content overflow   ☑         ☑        ☑
