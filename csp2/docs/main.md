# **DOCUMENTATION**

## **CONTENTS**

1. Introduction
  1.1 Project Terminologies
  1.2 Project Development Team
  1.3 Project Objective
  1.4 Project Requirements
    1.4.1 Project pre-requisites
    1.4.2 Project core requirements
    1.4.3 Optional features
    1.4.4 Personal additions
  1.5 Project Timeline
2. Project Brief
  2.1 Project Documentation
  2.2 Project Planning
    2.2.1 Web features
      2.2.1.1 Web pages & functions
      2.2.1.2 Accounts
      2.2.1.3
    2.2.2 Server file structure
    2.2.3 Pre-coding plans & design
  2.3 Project Coding Task Organization
  2.4 Project Resources
3. Project Design & Development Details and Specifications
  3.0 Naming conventions and specifications
  3.1 Front-end UIUX
    3.1.1 web mark-up
    3.1.2 css display modes
    3.1.3 css non-animation style properties
  3.2 Front-end Scripting
  3.3

### 1. Introduction

#### 1.1 Project Terminologies

Project Name: Chef Andion
Project Type: Web e-commerce
Project Theme: Home-cooked-food services & deliveries

#### 1.2 Project Development Team

project team: Michael James Turiano Albatana (one-man-team)
project assistance: Sir Billy Arante & Sir Pee Jay Saracho

#### 1.3 Project Objectives

- To complete a partial requirement of Tuitt, Inc. for the certification: Full-stack Web Developer.
- Satisfy the project based on the specifications set by Tuitt.
- Design & Develop a fully functional e-commerce project with themes inspired by other person.
- Present the project to the employers, developer-seekers, team-leaders, as part of my career accomplishment.

#### 1.4 Project Requirements

The project criteria were defined by Tuitt, Inc.:

##### 1.4.1 Project Prerequisites

- documentation
- sketches of user interface
- ERD for Database

##### 1.4.2 Project Core Requirements

- CRUD features (create, retrieve, update, delete) for databases with limitations on users
- cart feature
- checkout feature
- filter option
- authentication
- authorization
- relational database using mysql
- order history for admin
- order history for users

##### 1.4.3 Optional Features

- Facebook API (SSO)
- PayPal API, PayMaya API
- 2FA API

##### 1.4.4 Personal Additions

- visitor count
- deploy on personal domain
- reCAPTCHA API

#### 1.5 Project Timeline

### 2. Project Details

#### 2.1 Project Documentation & Disclaimers

Documentation is very important aspect in every projects and has been critical especially for post-project scenarios where an individual (interested person,maybe) will ask for documentation and/or specification.
The developer have no proper training and certification to adhere any IT documentation standards and doesn't guarantee the 100% quality of the documentation.
It is important to note that the developer have relevant academic exposure during college wherein most of the methodologies applied in this documentation are based on the academic experiences, the APA format.
Also, the developer have 6-years professional career at an ISO-certified company where paper-based documentations are among the standard procedures, have observed/read such documentations, and helped orginators to modify some documentations.
Hence, there maybe an APA-style and ISO-style hybrid approaches maybe seen in this documentation; nevertheless, this documentation was created since planning stage with hopes to make things easier to the programmer.
The important details in this documentation are the specifications and planning, and this is the focus of this documentation.
Most of specifications are presented in tabular, diagram, or in chart flavors (rather than paragraph) to help visualize the data.

#### 2.2 Project Planning

##### 2.2.1 Web Features

Summary of Web Features:

1. Web Accounts

- roles: guest, user, admin, manager, dev
- authentication at sign-in & sign-up
-


###### 2.2.1.1 Web Pages

| Webpage name | Account's homepage | Access modes  | Links                  | Webpage display                                                      | navbar/menu options | other invocations |
| ------------ |------------------  |---------------|----------------        |----------------------------------------------------------------------|
| index.php    | guests/logout      | g=1 d=1       | home/manager/admin/dev | random items from product line                                       | *signin, *signup
| home.php     | users              | u=1 d=1       | catalog/cartwish       | random displays items, wishlist items, cart items                    | logout, profile, catalog, cart(*#)
| catalog.php  |                    | g=0.5 u=1 d=1 |                        | displays thumbnail of the items                                      | home, logout, profile, cart, checkout              | filter
| cartwish.php |                    | u=1 d=1       |                        | displays the wishlists and carts,                                    | home, logout, profile, catalog, checkout
| checkout.php |                    | u=1 d=1       |                        | displays items on-cart, pricing, delivery, billing, payment options, | home, logout, profile, cart, catalog
| manager.php  | managers           | m=1 d=1       |                        | displays item & user stats, allows control of users only
| admin.php    | admins             | a=1 d=1       |                        | displays log messages of DB, allows full control of profile access
| dev.php      | dev                | d=1           |                        | runs code-checker and displays log messages
| stats.php    |                    | m=1 d=1 a=1   |                        | displays statistics: items, item purchases, registered users, active users, visitors,
| fetch.php    |                    | all=1         |                        | used to display DB queries (whether it is an account or item database)
\* - ajax enebled

index - home  - catalog
              - cartwish

###### 2.2.1.2 Accounts

| Role    | Built-in Accounts | Description                                                                                                  | Restrictions
|---------|-------------------|--------------------------------------------------------------------------------------------------------------|--------------
| guest   | guest             | not logged in                                                                                                |
| user    | rootuser          | common accounts for site customers                                                                           |
| admin   | rootadmin         | accounts for IT admin, full access to accounts, but have no access at catalog line-up                        |
| manager | rootmanager       | accounts for managers, add/modify/delete contents to the catalog line-up, have read access at users profile  |
| dev     | rootdev           | full access at all web                                                                                       |

##### 2.2.2 Server File Structure

| Directory   | Child Directories |
|-------------|-------------------|
| root:       | admin.php         |
|             | catalog.php       |
|             | cartwish.php      |
|             | checkout.php      |
|             | fetch.php         |
|             | home.php          |
|             | index.php         |
|             | manager.php       |
|             | stats.php         |
| assets/     | layouts.php       |
|             | webcontents.php   |
| assets/js   | animation.js      |
|             | interactive.js    |
|             | script.js         |
|             | validations.js    |
| assets/php/ |  

##### 2.2.3 Pre-coding Plans & Design

Design & Development practices were mostly based from the bootcamp's coding practices, which also observed by many professional developers.
There are also practices which are not derived from the training, but from the technical references, guides, blogs, and forum.
Project planning is important to determine the proper specifications structuring, program logic, and approach to execute coding faster and minimize debugs.
This also helps standardize coding structure and patterns for easier debugging.

| Scope               | Pre-coding planning & design                               | Coding Languages & Libraries/API |
| ---                 | ---                                                        | ---                              |
| static web visuals  | sketch, wireframe, mockups                                 | HTML+PHP, CSS, SCSS              |
| dynamic web visuals | DOM-targets, element interactivity, animation time-frames  | JS, GSAP                         |
| client-side scripts | sketches, flow-charts, function-listing                    | JS                               |
| server-side scripts | sketches, flow-charts, function-listing, code organization | PHP                              |
| database design     | sketches, ERD, queries                                     | MySQL, MariaDB                   |

#### 2.3 Project Coding Task Organization

This task organization aligns to the specifications on chapter-3

| Task Category         | Main Task                          | Language/API/Library/App | Coding File    | Specific Tasks                                       | Specifications              |
|-----------------------|------------------------------------|--------------------------|----------------|------------------------------------------------------|-----------------------------|
| front-end UIUX        | web mark-up                        | HTML/HTML5               | root: *.php    | create webpages using HTML                           | DOM tree                    |
|                       |                                    |                          |                | mark-up rendering only parent containers             | static & dynamic DOMs       |
|                       | SCSS code simplification           | SCSS/SASS                | style.scss     | create @mixins for reiterative properties            | mixins targets              |
|                       |                                    |                          |                | set default/global css properties                    | default properties          |
|                       | CSS display modes & box-model      | SCSS/SASS > CSS3         | style.scss     | set display modes (grid, flex, block) or 'none'      | web layout (visual)         |
|                       |                                    |                          |                | set display properties relative to child/parent      | DOM tree display properties |
|                       |                                    |                          |                | set inline-type tags for inline-elements             | DOM objects with inline     |
|                       |                                    |                          |                | set dimensions for: content, padding, border, margin | CSS box-model properties    |
|                       | CSS non-animation style properties | SCSS/SASS > CSS3         | style.scss     | set background color or image                        |
|                       |                                    |                          |                | set foreground color                                 |
|                       |                                    |                          |                | set border color                                     |
|                       |                                    |                          |                | set text properties                                  |
|                       | simple animations                  | JS                       | interactive.js | group each animation using function                  |
|                       |                                    |                          |                | target all interactive DOM objects                   | DOM tree
|                       |                                    |                          |                | set event listeners & remove if necessary            |
|                       | general animations                 | GreenSock.js             | animation.js   | target all affected DOM objects                      | DOM tree                         |
|                       |                                    |                          |                | animate the root containers                          | animation type, duration, timescale
| front-end scripting   | JS code simplification             | JS                       | script.js      | create functions for reiterative general scripts     | function list, flow-chart
|                       | client-side scripting              | JS                       | script.js      | create general scripts                               | flow-chart
|                       |                                    |                          |                | set AJAX feature                                     | AJAX trigger and callbacks |
|                       |                                    |                          |                | set JSON storage                                     | JSON DB structure, parameters |
|                       | web-feature: validation            | JS                       | validations.js | target all input elements                            | DOM tree |
|                       | web-feature: live validation       | JS                       | validations.js | target all input elements                            | DOM tree |
| back-end scripting    |
| database              |


| API/Language/Library | HTML+PHP           | SCSS/SASS/CSS            | JS                  | PHP                    | greensock.js       |
| ---                  | ---                | ---                      | ---                 | ---                    | ---                |
| Core Function/s:     | index webpage      | permanent CSS properties | DOM Manipulations   | template HTML mark-ups | general animations |
|                      | linked webpage s   | CSS display modes        | basic animations    |
|                      | parent HTML markup |                          | input validations   |
|                      |                    |                          | AJAX                |

#### 2.4 Project Resources

| Category             | Software/API/Technology/Suite/WebApp | Version/Edition/Standard | Components/Features used in the project      | Extension |
| ---                  | ---                                  | ---                      | ---                                          |
| Editor               | VSCode + Extensions                  | VSCode Insiders 1.20     | code editor                                  |
| Debugger             | VSCode Debugger                      | VSCode Insiders 1.20     | debugging                                    |
|                      | Chrome DevTools                      | Chrome 63                | debugging                                    |
| VCS                  | Git                                  | Git 2.15.1.windows.2     | file versioning                              | .git
| Repositories (Git)   | GitHub                               |                          | personal repository                          |
|                      | GitLab                               |                          | official repository by Tuitt                 |
| Analytics            | CodeAlike                            |                          | coding analytics and statistics              |
|                      | WakaTime                             |                          | coding analytics and statistics              |
| Web Server           | XAMPP                                | XAMPP 3.2.2              | web server environment for PHP               |
| Workstation/PC       | Toshiba R930 Notebook (Windows 8.1)  |                          | developer environment                        |
|                      | HP (Windows 10)                      |                          | developer Environment                        |
| Mark-up language     | HTML                                 | HTML/HTML5               | mark-up for the webpage                      | .html
|                      | Markdown                             | Markdown 1.0.1           | mark-up for the documentations               | .md
| Stylesheet language  | CSS                                  | CSS3                     | element display-mode, fixed CSS-aesthetics   | .css
|                      | SASS/SCSS                            | SASS 3.5.4               | coding implementation (instead of CSS)       | .scss
| General programming  | JavaScript                           | ECMAScript2017           | client-side scripting, basic CSS-animations  | .js
|                      | PHP                                  | PHP 7.2.1                | base web API                                 | .php
| Database             | MySQL                                | MySQL 5.7.21.0 Community |                                              |
|                      | MariaDB                              | MariaDB 10.2             |                                              |
|                      | JSON                                 | RFC 8259, ECMA-404       | small database, AJAX                         | .json
| Libraries/APIs       | GreenSock.js (GSAP)                  | GSAP 1.20.3              | general animations                           | .js

### 3. Project Design & Development Details

#### 3.0 Naming Conventions

#### 3.1