# TYPO3 Extension `jobcenter`

[![Packagist][packagist-logo-stable]][extension-packagist-url]
[![Latest Stable Version][extension-build-shield]][extension-ter-url]
[![Total Downloads][extension-downloads-badge]][extension-packagist-url]
[![Monthly Downloads][extension-monthly-downloads]][extension-packagist-url]
[![TYPO3 13.4][TYPO3-shield]][TYPO3-13-url]

![Build Status](https://github.com/jweiland-net/jobcenter/workflows/CI/badge.svg)

The **Jobcenter** extension is built for TYPO3 CMS and is commonly used by
cities and municipalities in Germany.
Its main purpose is to help citizens find the correct contact person for
**granting of benefits** (Leistungsgewährung) at their local town hall.

It provides a flexible and user-friendly system to manage and display contact
persons based on visitor input such as:

- Age group (e.g., 15–24 or 25–49)
- Location (by PID or ZIP code)
- Disability status
- Self-reliance

The extension is based on **Extbase & Fluid**, integrates smoothly into TYPO3,
and is designed for **German Jobcenter use cases**.

## 1 Features

- Create, manage, and display jobcenter contact entries
- Help users easily find the right contact person based on location or case

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using Composer.

Run the following command within your Composer based TYPO3 project:

```
composer require jweiland/jobcenter
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install `jobcenter` with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension.
2) Create jobcenter records on a sysfolder.
3) Add jobcenter plugin on a page and select at least the sysfolder as startingpoint.

## 3 Support

Free Support is available via [GitHub Issue Tracker](https://github.com/jweiland-net/jobcenter/issues).

For commercial support, please contact us at [support@jweiland.net](support@jweiland.net).

<!-- MARKDOWN LINKS & IMAGES -->

[extension-build-shield]: https://poser.pugx.org/jweiland/jobcenter/v/stable.svg?style=for-the-badge

[extension-downloads-badge]: https://poser.pugx.org/jweiland/jobcenter/d/total.svg?style=for-the-badge

[extension-monthly-downloads]: https://poser.pugx.org/jweiland/jobcenter/d/monthly?style=for-the-badge

[extension-ter-url]: https://extensions.typo3.org/extension/jobcenter/

[extension-packagist-url]: https://packagist.org/packages/jweiland/jobcenter/

[packagist-logo-stable]: https://img.shields.io/badge/--grey.svg?style=for-the-badge&logo=packagist&logoColor=white

[TYPO3-13-url]: https://get.typo3.org/version/13

[TYPO3-shield]: https://img.shields.io/badge/TYPO3-13.4-green.svg?style=for-the-badge&logo=typo3
