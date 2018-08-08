<?php

class layout_Default_37765eb3aa9f9c91649a39f90281c055f09da92a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'cart' => 
  array (
    0 => 'Extcode\\Cart\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper Extcode\Cart\ViewHelpers\IncludeFileViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['path'] = NULL;
$arguments4['compress'] = false;
$arguments4['path'] = '../typo3conf/ext/cart/Resources/Public/Stylesheets/Backend/style.css';

$output3 .= htmlspecialchars(Extcode\Cart\ViewHelpers\IncludeFileViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext), ENT_QUOTES);

$output3 .= '
    <div class="module-docheader">
        <div class="module-docheader-bar">
            <div class="module-docheader-bar-column-left">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['table'] = NULL;
$arguments6['field'] = '';
$arguments6['wrap'] = '';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
            </div>
            <div class="module-docheader-bar-column-right">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageInfoViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\PageInfoViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
            </div>
        </div>
        <div class="typo3-docheader-buttons">
            <div class="module-docheader-bar-column-left">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['section'] = 'actions';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
            </div>
            <div class="module-docheader-bar-column-right">
                <span class="btn btn-sm btn-default">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['getVars'] = array (
);
$arguments14['setVars'] = array (
);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
                </span>
            </div>
        </div>
    </div>
    <div id="typo3-docbody">
        <div id="typo3-inner-docbody">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['queueIdentifier'] = NULL;
$arguments16['as'] = NULL;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['section'] = 'content';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output3 .= '
        </div>
    </div>
';
return $output3;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['enableClickMenu'] = true;
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

return $output0;
}


}
#