## How to install?

##### Download the generated [wizard](https://github.com/luigircruz/wizard/tree/master/builds) PHAR file to your Downloads folder.

##### On your git bash terminal, create a symlink between the standalone PHAR archive file (wizard) and composer global.

```sh
ln -fs {source_path} {composer_bin_path}
```

This will create a link between the PHAR file and Composer global so that all the commands from “wizard” will be available to the git bash command line.

##### Definitions:
- ln = creates a symlink (symbolic link)
- -fs = an option that makes it a soft symlink and forces the symlinking if one already exists
- source_path = location path of the downloaded “wizard.phar” file
- composer_bin_path = location path of the composer’s bin 

##### Example: (for MacOS)

```sh
ln -fs ~/Downloads/wizard ~/.composer/vendor/bin
```

##### Example: (for Windows OS)

```sh
ln -fs ~/Downloads/wizard ~/AppData/Local/ComposerSetup/bin
```

------

## Generate a wizard PHAR file

1. Clone this repository: 

```sh
git clone https://github.com/luigircruz/wizard.git wizard
```
2. Run composer update (NOTE: Make sure you have atleast PHP 7.3 on your machine): 
```sh
composer update`
```
3. Build the application: 
```sh
php wizard app:build wizard
```

This will prompt you the build version of the app. You may use `1.0.0` as your version on initial install.

Once done, a `wizard` PHAR file will be generated from the `builds/` folder. Then after that, you can now symlink the generated file to your composer global.

##### Example: (for MacOS)

```sh
ln -fs ~/wizard/builds/wizard ~/.composer/vendor/bin
```

##### Example: (for Windows OS)

```sh
ln -fs ~/wizard/builds/wizard ~/AppData/Local/ComposerSetup/bin
```

------

## How to use the Landing Page Boilerplate Generator?

1. Open your git bash terminal anywhere on your preferred directory (Ex: inside htdocs/)
2. Enter command to generate a generic boilerplate:

USAGE: 

```sh
wizard [command] [type] [language]
```

LEGEND:
- Available command = make:preset
- Available type = generic
- Available languages =  en, id, in, kr, sc, th, vn, eu, ch, jp, hi, te, gr, pl, es, pt

Examples:
##### Generic EN page: 

```sh
wizard make:preset generic --lang=en
```

##### Generic Multiple Language page: 

```sh
wizard make:preset generic --lang={en,sc,th,vn}
```