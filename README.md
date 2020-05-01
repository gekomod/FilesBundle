FileManagerBundle
=================

[![Tests][1]][2] [![Symfony 2.x, 3.x and 4.x][7]][8]

FileManager is a simple Multilingual File Manager Bundle for Symfony

* [Documentation](#documentation)
* [Installation](#installation)
* [Creating Your First File Manager](#creating-your-first-file-manager)


**Features**
*  Upload, delete (multiple), rename, download and sort files
*  Create, rename and delete folders
*  Manage **Public** and **Private** folders
*  **Multilingual** (English, French)
*  **Fully responsive design** (bootstrap)
*  Multilple view modes (list, thumbnail, with tree or not)
*  Easy integration with [**Tinymce**](https://www.tinymce.com/)
*  **Preview images** (even with a Private folder)
*  Create **multilple configurations**
*  **Advanced configuration** (ex : ACL, ...) with your own **service**
*  **File restriction** based on patterns
*  File Upload widget used : [blueimp/jQuery-File-Upload](https://github.com/blueimp/jQuery-File-Upload)
    * **Multiple uploads support**
    * **Drag & Drop support**
    * **Min/Max file size restriction**
    * **Thumbnails generation**
    * **Client-side image resizing/crop**
    * [Exhaustive options](https://github.com/blueimp/jQuery-File-Upload/blob/master/server/php/UploadHandler.php)

Installation
------------

### Step 1: Download the Bundle

```bash
$ composer require gekomod/files-bundle
```

### Step 2: Load the Routes


```yaml
# app/config/routing.yml
artgris_bundle_file_manager:
    resource: "@Files/Controller"
    type:     annotation
    prefix:   /manager
```

### Step 3: Prepare the Web Assets

```cli
# Symfony 3
php bin/console assets:install --symlink
```

### Step 4:  Enable the translator service 

```yml
# app/config/config.yml
framework:
    translator: { fallbacks: [ "en" ] }
```    
    
Creating Your First File Manager
---------------------------------

Create a folder **uploads** in **web**.
 
#### Add following configuration (symfony4) :

```yaml
# app/config/config.yml
artgris_file_manager:
    web_dir: public                 # set your public Directory (not required, default value: web)
    conf:
        default:
            dir: "../public/uploads"
```

Browse the `/manager/?conf=default` URL and you'll get access to your 
file manager
 
[1]: https://travis-ci.org/github/gekomod/FilesBundle.svg?branch=master
[2]: https://travis-ci.org/github/gekomod/FilesBundle
[7]: https://img.shields.io/badge/symfony-2.x%2C%203.x%20and%204.x-green.svg
[8]: https://symfony.com/
