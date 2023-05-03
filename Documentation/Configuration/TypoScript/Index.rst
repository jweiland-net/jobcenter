..  include:: /Includes.rst.txt


..  _typoscript:

==========
TypoScript
==========

`jobcenter` needs some basic TypoScript configuration. To do so you have to add
an +ext template to either the root page of your website or to a specific page
which contains the `jobcenter` plugin.

..  rst-class:: bignums

1.  Locate page

    You have to decide where you want to insert the TypoScript template. Either
    root page or page with `jobcenter` plugin is OK.

2.  Create TypoScript template

    Switch to template module and choose the specific page from above in the
    pagetree. Choose `Click here to create an extension template` from the
    right frame. In the TYPO3 community it is also known as "+ext template".

3.  Add static template

    Choose `Info/Modify` from the upper selectbox and then click on `Edit the
    whole template record` button below the little table. On tab `Includes`
    locate the section `Include static (from extension)`. Use the search above
    `Available items` to search for `jobcenter`. Hopefully just one record is
    visible below. Choose it, to move that record to the left.

4.  Save

    If you want you can give that template a name on tab "General", save and
    close it.

5.  Constants Editor

    Choose `Constant Editor` from the upper selectbox.

6.  `jobcenter` constants

    Choose `PLUGIN.TX_JOBCENTER` from the category selectbox to show just
    `jobcenter` related constants

7.  Configure constants

    Adapt the constants to your needs.

8.  Configure TypoScript

    As constants will only allow modifiying a fixed selection of TypoScript you
    also switch to `Info/Modify` again and click on `Setup`. Here you have
    the possibility to configure all `jobcenter` related configuration.

View
====

view.templateRootPaths
----------------------

Default: Value from Constants *EXT:jobcenter/Resources/Private/Templates/*

You can override our Templates with your own SitePackage extension. We prefer
to change this value in TS Constants.

view.partialRootPaths
---------------------

Default: Value from Constants *EXT:jobcenter/Resources/Private/Partials/*

You can override our Partials with your own SitePackage extension. We prefer
to change this value in TS Constants.

view.layoutsRootPaths
---------------------

Default: Value from Constants *EXT:jobcenter/Resources/Layouts/Templates/*

You can override our Layouts with your own SitePackage extension. We prefer
to change this value in TS Constants.


Persistence
===========

persistence.storagePid
----------------------

Set this value to a Storage Folder (PID) where you have stored the records.

Example: `plugin.tx_jobcenter.settings.storagePid = 21,45,3234`


Settings
========

settings.pidForManagement15_24
------------------------------

Default: Value from Constants *0*

Example: `plugin.tx_jobcenter.settings.pidForManagement15_24 = 52`

Define the PID of a storage folder which contains the records for
employees which are responsible for people whose age is between 15 and 24.

settings.pidForManagement25_49
------------------------------

Default: Value from Constants *0*

Example: `plugin.tx_jobcenter.settings.pidForManagement25_49 = 53`

Define the PID of a storage folder which contains the records for
employees which are responsible for people whose age is between 25 and 49.

settings.pidForService
------------------------------

Default: Value from Constants *0*

Example: `plugin.tx_jobcenter.settings.pidForService = 54`

Define the PID of a storage folder which contains the records for
services.
