<?php

class partial_Order_Filter_Statistic_921298472914ddc0f87f6722f48e29e425bc12c6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="tx_cart_module_products_filter">
    <div class="tx_cart_module_products_filter_inner">

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
            <div class="col-50" style="display:block;float:left;">
                <div>
                    <label for="searchOrderDateStart">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['key'] = 'filterStartDate';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['pattern'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['required'] = false;
$arguments7['type'] = 'text';
$arguments7['property'] = 'orderDateStart';
$arguments7['id'] = 'searchOrderDateStart';
$arguments7['class'] = 'cart_module_search_field_start cart_date';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.orderDateStart', $array9);
$arguments7['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
                </div>
                <div>
                    <label for="searchOrderDateEnd">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['key'] = 'filterEndDate';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['autofocus'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['maxlength'] = NULL;
$arguments12['readonly'] = NULL;
$arguments12['size'] = NULL;
$arguments12['placeholder'] = NULL;
$arguments12['pattern'] = NULL;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['required'] = false;
$arguments12['type'] = 'text';
$arguments12['property'] = 'orderDateEnd';
$arguments12['id'] = 'searchOrderDateEnd';
$arguments12['class'] = 'cart_module_search_field_end cart_date';
$array14 = array (
);$arguments12['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.orderDateEnd', $array14);
$arguments12['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output4 .= '
                </div>
            </div>
            <div class="col-50" style="display:block;float:left;">
                <div>
                    <label for="searchInvoiceDateStart">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'filterStartDate';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['autofocus'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['maxlength'] = NULL;
$arguments17['readonly'] = NULL;
$arguments17['size'] = NULL;
$arguments17['placeholder'] = NULL;
$arguments17['pattern'] = NULL;
$arguments17['errorClass'] = 'f3-form-error';
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['required'] = false;
$arguments17['type'] = 'text';
$arguments17['property'] = 'invoiceDateStart';
$arguments17['id'] = 'searchInvoiceDateStart';
$arguments17['class'] = 'cart_module_search_field_start cart_date';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.invoiceDateStart', $array19);
$arguments17['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output4 .= '
                </div>
                <div>
                    <label for="searchInvoiceDateEnd">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['key'] = 'filterEndDate';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['autofocus'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['maxlength'] = NULL;
$arguments22['readonly'] = NULL;
$arguments22['size'] = NULL;
$arguments22['placeholder'] = NULL;
$arguments22['pattern'] = NULL;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['required'] = false;
$arguments22['type'] = 'text';
$arguments22['property'] = 'invoiceDateEnd';
$arguments22['id'] = 'searchInvoiceDateEnd';
$arguments22['class'] = 'cart_module_search_field_end cart_date';
$array24 = array (
);$arguments22['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.invoiceDateEnd', $array24);
$arguments22['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output4 .= '
                </div>
            </div>
            <div class="clear">&nbsp;</div><br />

            <div class="col-25" style="float:right;">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['name'] = NULL;
$arguments25['value'] = NULL;
$arguments25['property'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['key'] = 'filter';
$arguments25['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
$arguments25['class'] = 'searchall_submit';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output4 .= '
            </div>

            <div class="clear">&nbsp;</div>
        ';
return $output4;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['object'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = 'GET';
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['hiddenFieldClassName'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['name'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['target'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$array3 = array (
);$arguments1['action'] = $renderingContext->getVariableProvider()->getByPath('action', $array3);
$arguments1['name'] = 'search';
$arguments1['id'] = 'module_cartorders_search_form';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    </div>
</div>';

return $output0;
}


}
#