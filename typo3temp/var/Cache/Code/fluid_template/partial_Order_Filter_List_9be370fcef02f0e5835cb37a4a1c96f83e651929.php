<?php

class partial_Order_Filter_List_9be370fcef02f0e5835cb37a4a1c96f83e651929 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
            <div>
                <label for="searchCustomer">
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
$arguments5['key'] = 'filterCustomer';

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
$arguments7['property'] = 'customer';
$arguments7['id'] = 'searchCustomer';
$arguments7['class'] = 'cart_module_search_field_string';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.customer', $array9);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
            </div><br />

            <div class="col-50">
                <div>
                    <label for="searchOrderNumber">
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
$arguments10['key'] = 'filterOrderNumber';

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
$arguments12['property'] = 'orderNumber';
$arguments12['id'] = 'searchOrderNumber';
$arguments12['class'] = 'cart_module_search_field_string';
$array14 = array (
);$arguments12['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.orderNumber', $array14);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output4 .= '
                </div>
                <div>
                    <label for="searchOrderDateStart">
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
$arguments17['property'] = 'orderDateStart';
$arguments17['id'] = 'searchOrderDateStart';
$arguments17['class'] = 'cart_module_search_field_start cart_date';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.orderDateStart', $array19);
$arguments17['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output4 .= '
                </div>
                <div>
                    <label for="searchOrderDateEnd">
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
$arguments22['property'] = 'orderDateEnd';
$arguments22['id'] = 'searchOrderDateEnd';
$arguments22['class'] = 'cart_module_search_field_end cart_date';
$array24 = array (
);$arguments22['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.orderDateEnd', $array24);
$arguments22['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output4 .= '
                </div>
            </div>
            <div class="col-50">
                <div>
                    <label for="searchInvoiceNumber">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['key'] = 'filterInvoiceNumber';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['name'] = NULL;
$arguments27['value'] = NULL;
$arguments27['property'] = NULL;
$arguments27['autofocus'] = NULL;
$arguments27['disabled'] = NULL;
$arguments27['maxlength'] = NULL;
$arguments27['readonly'] = NULL;
$arguments27['size'] = NULL;
$arguments27['placeholder'] = NULL;
$arguments27['pattern'] = NULL;
$arguments27['errorClass'] = 'f3-form-error';
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['required'] = false;
$arguments27['type'] = 'text';
$arguments27['property'] = 'invoiceNumber';
$arguments27['id'] = 'searchInvoiceNumber';
$arguments27['class'] = 'cart_module_search_field_string';
$array29 = array (
);$arguments27['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.inoviceNumber', $array29);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output4 .= '
                </div>
                <div>
                    <label for="searchInvoiceDateStart">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['key'] = 'filterStartDate';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['property'] = NULL;
$arguments32['autofocus'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['maxlength'] = NULL;
$arguments32['readonly'] = NULL;
$arguments32['size'] = NULL;
$arguments32['placeholder'] = NULL;
$arguments32['pattern'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['required'] = false;
$arguments32['type'] = 'text';
$arguments32['property'] = 'invoiceDateStart';
$arguments32['id'] = 'searchInvoiceDateStart';
$arguments32['class'] = 'cart_module_search_field_start cart_date';
$array34 = array (
);$arguments32['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.invoiceDateStart', $array34);
$arguments32['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output4 .= '
                </div>
                <div>
                    <label for="searchInvoiceDateEnd">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['key'] = 'filterEndDate';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext), ENT_QUOTES);

$output4 .= '
                    </label>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['autofocus'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['maxlength'] = NULL;
$arguments37['readonly'] = NULL;
$arguments37['size'] = NULL;
$arguments37['placeholder'] = NULL;
$arguments37['pattern'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['required'] = false;
$arguments37['type'] = 'text';
$arguments37['property'] = 'invoiceDateEnd';
$arguments37['id'] = 'searchInvoiceDateEnd';
$arguments37['class'] = 'cart_module_search_field_end cart_date';
$array39 = array (
);$arguments37['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.invoiceDateEnd', $array39);
$arguments37['type'] = 'date';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output4 .= '
                </div>
            </div>
            <div class="clear">&nbsp;</div><br />

            <div class="col-50">
                <label for="searchPaymentStatus">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['key'] = 'tx_cart_domain_model_order_payment';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext), ENT_QUOTES);

$output4 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['key'] = 'tx_cart_domain_model_order_payment.status';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext), ENT_QUOTES);

$output4 .= '
                </label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['name'] = NULL;
$arguments44['value'] = NULL;
$arguments44['property'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['size'] = NULL;
$arguments44['disabled'] = NULL;
$arguments44['options'] = NULL;
$arguments44['optionsAfterContent'] = false;
$arguments44['optionValueField'] = NULL;
$arguments44['optionLabelField'] = NULL;
$arguments44['sortByOptionLabel'] = false;
$arguments44['selectAllByDefault'] = false;
$arguments44['errorClass'] = 'f3-form-error';
$arguments44['prependOptionLabel'] = NULL;
$arguments44['prependOptionValue'] = NULL;
$arguments44['multiple'] = false;
$arguments44['property'] = 'paymentStatus';
$array46 = array (
);$arguments44['options'] = $renderingContext->getVariableProvider()->getByPath('paymentStatus', $array46);
$arguments44['optionValueField'] = 'key';
$arguments44['optionLabelField'] = 'value';
$array47 = array (
);$arguments44['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.paymentStatus', $array47);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output4 .= '
            </div>
            <div class="col-50">
                <label for="searchShippingStatus">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['key'] = 'tx_cart_domain_model_order_shipping';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext), ENT_QUOTES);

$output4 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['key'] = 'tx_cart_domain_model_order_shipping.status';

$output4 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext), ENT_QUOTES);

$output4 .= '
                </label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['size'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['options'] = NULL;
$arguments52['optionsAfterContent'] = false;
$arguments52['optionValueField'] = NULL;
$arguments52['optionLabelField'] = NULL;
$arguments52['sortByOptionLabel'] = false;
$arguments52['selectAllByDefault'] = false;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['prependOptionLabel'] = NULL;
$arguments52['prependOptionValue'] = NULL;
$arguments52['multiple'] = false;
$arguments52['property'] = 'shippingStatus';
$array54 = array (
);$arguments52['options'] = $renderingContext->getVariableProvider()->getByPath('shippingStatus', $array54);
$arguments52['optionValueField'] = 'key';
$arguments52['optionLabelField'] = 'value';
$array55 = array (
);$arguments52['value'] = $renderingContext->getVariableProvider()->getByPath('searchArguments.paymentStatus', $array55);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output4 .= '
            </div>
            <div class="clear">&nbsp;</div><br />

            <div class="col-25" style="float:right;">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['name'] = NULL;
$arguments56['value'] = NULL;
$arguments56['property'] = NULL;
$arguments56['disabled'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['key'] = 'filter';
$arguments56['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
$arguments56['class'] = 'searchall_submit';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

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