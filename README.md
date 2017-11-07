Robo Wrapper for N98 Magerun and Forked projects
===============================================

This is (currentl very thin) wrapper around N98-Magerun and IMI-Conrun for using it in the
Robo task runner.

**documentation is incomplete**

imi-conrun (Contao Command Line Tool)
=====================================

n98-magerun (Magento 1.x Command Line Tool)
===========================================

n98-magerun2 (Magento 2.x Command Line Tool)
============================================

:warning: Only supports magerun2 v2.x

getCurrentBaseUrl
-----------------

    $baseUrl = $this->taskMagerunTwoExecWithResult()->getCurrentBaseUrl();

getCurrentDeployMode
--------------------

    $deployMode = $this->taskMagerunTwoExecWithResult()->getCurrentDeployMode();
