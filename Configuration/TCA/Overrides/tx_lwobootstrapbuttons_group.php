<?php

/*
 * This file is part of the package KU Bootstrap buttons.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();

/**
 * Registers backend previewRenderer for custom content element "KU Bootstrap buttons".
 */

$GLOBALS['TCA']['tt_content']['types']['lwo_button_group']['previewRenderer'] = \UniversityOfCopenhagen\KuBootstrapButtons\Backend\Preview\kuBootstrapButtonsPreviewRenderer::class;