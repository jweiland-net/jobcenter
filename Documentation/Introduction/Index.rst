..  include:: /Includes.rst.txt


..  _introduction:

============
Introduction
============

The **Jobcenter** extension provides a flexible way to manage and display
contact persons for various social services based on visitor filters such as
age, location (PID), disability, or self-reliance. It is primarily designed
for German Jobcenter use cases and integrates seamlessly with TYPO3's Extbase &
Fluid framework.

This extension is compatible with **TYPO3 v12 LTS** and follows best practices
using dependency injection, clean controller logic, and SOLID principles.

Main features
=============

- Show contacts filtered by:

  - Age group (e.g., 15–24 or 25–49)
  - ZIP code for employer contacts
  - Self-reliance and handicap status
  - Service-related queries (Leistungsgewährung)

- Backend support for managing contact data
- Separate handling of citizen and employer contact listings
- Flash messages when no responsible contact is found
- Reusable services for getting page titles
- Fallback logic for missing data
- Fully templated output via Fluid

Target audience
===============

This extension is built for:

- Public Jobcenters in Germany
- TYPO3 integrators building Jobcenter-specific platforms
- Developers who want a modular and extensible contact filtering system
