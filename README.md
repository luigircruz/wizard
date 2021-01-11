## How to install?

##### On your git bash terminal, create a symlink between the standalone PHAR archive file (wizard) and composer global.

`ln -fs {source_path} {composer_bin_path}`

This will create a link between the PHAR file and Composer global so that all the commands from “wizard” will be available to the git bash command line.

##### Definitions:
- ln = creates a symlink (symbolic link)
- -fs = an option that makes it a soft symlink and forces the symlinking if one already exists
- source_path = location path of the downloaded “wizard.phar” file
- composer_bin_path = location path of the composer’s bin 

##### Example: (for Windows OS)

'ln -fs ~/Downloads/wizard ~/AppData/Local/ComposerSetup/bin'

------

## How to use the Landing Page Boilerplate Generator?

1. Open your git bash terminal anywhere on your preferred directory (Ex: inside htdocs/)
2. Enter command to generate a generic boilerplate:

USAGE: 

`wizard [command] [type] [language]`

LEGEND:
Available command = make:preset
Available type = generic
Available languages =  en, id, in, kr, sc, th, vn, eu, ch, jp, hi, te, gr, pl, es, pt

Examples:
##### Generic EN page: 

`wizard make:preset generic --lang=en`

##### Generic Multiple Language page: 

`wizard make:preset generic --lang={en,sc,th,vn}`