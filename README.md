# TYPO3 Extension `jobcenter`

[![Latest Stable Version](https://poser.pugx.org/jweiland/jobcenter/v/stable.svg)](https://packagist.org/packages/jweiland/jobcenter)
[![TYPO3 12.4](https://img.shields.io/badge/TYPO3-12.4-green.svg)](https://get.typo3.org/version/12)
[![License](http://poser.pugx.org/jweiland/jobcenter/license)](https://packagist.org/packages/jweiland/jobcenter)
[![Total Downloads](https://poser.pugx.org/jweiland/jobcenter/downloads.svg)](https://packagist.org/packages/jweiland/jobcenter)
[![Monthly Downloads](https://poser.pugx.org/jweiland/jobcenter/d/monthly)](https://packagist.org/packages/jweiland/jobcenter)

![Build Status](https://github.com/jweiland-net/jobcenter/actions/workflows/ci.yml/badge.svg)

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
