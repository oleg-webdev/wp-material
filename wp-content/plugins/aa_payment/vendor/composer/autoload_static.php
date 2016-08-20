<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2c341bd6d5f52403d3c07a395f00552
{
    public static $files = array (
        '8128451d85444c6fb3364304e548ae39' => __DIR__ . '/../..' . '/payment_ajax.php',
        '0183b21fc9f1be9c6b3ce2d86c1ed53d' => __DIR__ . '/../..' . '/PaypalScope/run.php',
        '0bf5755a77d92325fc60bd9a55eb44d2' => __DIR__ . '/../..' . '/PaypalScope/shortcodes.php',
        'ef6335b2b4ffe1a6aa651b55390361c8' => __DIR__ . '/../..' . '/PaypalScope/redirect_handlers.php',
        'f944291d48461ee63cf47ca5d58d3e7d' => __DIR__ . '/../..' . '/products/product_custom_posts.php',
        '7d0679809302a40c822748489d1fde29' => __DIR__ . '/../..' . '/products/orders_custom_posts.php',
        '12f0376a1502d77e947713d5404a4060' => __DIR__ . '/../..' . '/content_templates/attributes.php',
        'f6d31036a1ccc8695c6fa2cdeaf1668c' => __DIR__ . '/../..' . '/content_templates/single-product-content.php',
        '678829c9bead5c61e091a219cc1aa469' => __DIR__ . '/../..' . '/content_templates/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Apayment\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Apayment\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Apayment',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Apayment\\CustomPosts' => __DIR__ . '/../..' . '/Apayment/CustomPosts.php',
        'PayPal\\Api\\Address' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Address.php',
        'PayPal\\Api\\Agreement' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Agreement.php',
        'PayPal\\Api\\AgreementDetails' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/AgreementDetails.php',
        'PayPal\\Api\\AgreementStateDescriptor' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/AgreementStateDescriptor.php',
        'PayPal\\Api\\AgreementTransaction' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/AgreementTransaction.php',
        'PayPal\\Api\\AgreementTransactions' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/AgreementTransactions.php',
        'PayPal\\Api\\AlternatePayment' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/AlternatePayment.php',
        'PayPal\\Api\\Amount' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Amount.php',
        'PayPal\\Api\\Authorization' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Authorization.php',
        'PayPal\\Api\\BankAccount' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/BankAccount.php',
        'PayPal\\Api\\BankAccountsList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/BankAccountsList.php',
        'PayPal\\Api\\BankToken' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/BankToken.php',
        'PayPal\\Api\\BaseAddress' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/BaseAddress.php',
        'PayPal\\Api\\Billing' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Billing.php',
        'PayPal\\Api\\BillingAgreementToken' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/BillingAgreementToken.php',
        'PayPal\\Api\\BillingInfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/BillingInfo.php',
        'PayPal\\Api\\CancelNotification' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CancelNotification.php',
        'PayPal\\Api\\Capture' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Capture.php',
        'PayPal\\Api\\CarrierAccount' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CarrierAccount.php',
        'PayPal\\Api\\CarrierAccountToken' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CarrierAccountToken.php',
        'PayPal\\Api\\CartBase' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CartBase.php',
        'PayPal\\Api\\ChargeModel' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ChargeModel.php',
        'PayPal\\Api\\Cost' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Cost.php',
        'PayPal\\Api\\CountryCode' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CountryCode.php',
        'PayPal\\Api\\CreateProfileResponse' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CreateProfileResponse.php',
        'PayPal\\Api\\Credit' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Credit.php',
        'PayPal\\Api\\CreditCard' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CreditCard.php',
        'PayPal\\Api\\CreditCardHistory' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CreditCardHistory.php',
        'PayPal\\Api\\CreditCardList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CreditCardList.php',
        'PayPal\\Api\\CreditCardToken' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CreditCardToken.php',
        'PayPal\\Api\\CreditFinancingOffered' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CreditFinancingOffered.php',
        'PayPal\\Api\\Currency' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Currency.php',
        'PayPal\\Api\\CurrencyConversion' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CurrencyConversion.php',
        'PayPal\\Api\\CustomAmount' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/CustomAmount.php',
        'PayPal\\Api\\Details' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Details.php',
        'PayPal\\Api\\Error' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Error.php',
        'PayPal\\Api\\ErrorDetails' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ErrorDetails.php',
        'PayPal\\Api\\ExtendedBankAccount' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ExtendedBankAccount.php',
        'PayPal\\Api\\ExternalFunding' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ExternalFunding.php',
        'PayPal\\Api\\FileAttachment' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FileAttachment.php',
        'PayPal\\Api\\FlowConfig' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FlowConfig.php',
        'PayPal\\Api\\FmfDetails' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FmfDetails.php',
        'PayPal\\Api\\FundingDetail' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FundingDetail.php',
        'PayPal\\Api\\FundingInstrument' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FundingInstrument.php',
        'PayPal\\Api\\FundingOption' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FundingOption.php',
        'PayPal\\Api\\FundingSource' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FundingSource.php',
        'PayPal\\Api\\FuturePayment' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/FuturePayment.php',
        'PayPal\\Api\\HyperSchema' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/HyperSchema.php',
        'PayPal\\Api\\Image' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Image.php',
        'PayPal\\Api\\Incentive' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Incentive.php',
        'PayPal\\Api\\InputFields' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InputFields.php',
        'PayPal\\Api\\InstallmentInfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InstallmentInfo.php',
        'PayPal\\Api\\InstallmentOption' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InstallmentOption.php',
        'PayPal\\Api\\Invoice' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Invoice.php',
        'PayPal\\Api\\InvoiceAddress' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InvoiceAddress.php',
        'PayPal\\Api\\InvoiceItem' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InvoiceItem.php',
        'PayPal\\Api\\InvoiceNumber' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InvoiceNumber.php',
        'PayPal\\Api\\InvoiceSearchResponse' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/InvoiceSearchResponse.php',
        'PayPal\\Api\\Item' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Item.php',
        'PayPal\\Api\\ItemList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ItemList.php',
        'PayPal\\Api\\Links' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Links.php',
        'PayPal\\Api\\Measurement' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Measurement.php',
        'PayPal\\Api\\MerchantInfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/MerchantInfo.php',
        'PayPal\\Api\\MerchantPreferences' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/MerchantPreferences.php',
        'PayPal\\Api\\Metadata' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Metadata.php',
        'PayPal\\Api\\NameValuePair' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/NameValuePair.php',
        'PayPal\\Api\\Notification' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Notification.php',
        'PayPal\\Api\\OpenIdAddress' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/OpenIdAddress.php',
        'PayPal\\Api\\OpenIdError' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/OpenIdError.php',
        'PayPal\\Api\\OpenIdSession' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/OpenIdSession.php',
        'PayPal\\Api\\OpenIdTokeninfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/OpenIdTokeninfo.php',
        'PayPal\\Api\\OpenIdUserinfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/OpenIdUserinfo.php',
        'PayPal\\Api\\Order' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Order.php',
        'PayPal\\Api\\OverrideChargeModel' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/OverrideChargeModel.php',
        'PayPal\\Api\\Participant' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Participant.php',
        'PayPal\\Api\\Patch' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Patch.php',
        'PayPal\\Api\\PatchRequest' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PatchRequest.php',
        'PayPal\\Api\\Payee' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Payee.php',
        'PayPal\\Api\\Payer' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Payer.php',
        'PayPal\\Api\\PayerInfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PayerInfo.php',
        'PayPal\\Api\\Payment' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Payment.php',
        'PayPal\\Api\\PaymentCard' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentCard.php',
        'PayPal\\Api\\PaymentCardToken' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentCardToken.php',
        'PayPal\\Api\\PaymentDefinition' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentDefinition.php',
        'PayPal\\Api\\PaymentDetail' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentDetail.php',
        'PayPal\\Api\\PaymentExecution' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentExecution.php',
        'PayPal\\Api\\PaymentHistory' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentHistory.php',
        'PayPal\\Api\\PaymentInstruction' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentInstruction.php',
        'PayPal\\Api\\PaymentOptions' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentOptions.php',
        'PayPal\\Api\\PaymentSummary' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentSummary.php',
        'PayPal\\Api\\PaymentTerm' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PaymentTerm.php',
        'PayPal\\Api\\Payout' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Payout.php',
        'PayPal\\Api\\PayoutBatch' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PayoutBatch.php',
        'PayPal\\Api\\PayoutBatchHeader' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PayoutBatchHeader.php',
        'PayPal\\Api\\PayoutItem' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PayoutItem.php',
        'PayPal\\Api\\PayoutItemDetails' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PayoutItemDetails.php',
        'PayPal\\Api\\PayoutSenderBatchHeader' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PayoutSenderBatchHeader.php',
        'PayPal\\Api\\Phone' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Phone.php',
        'PayPal\\Api\\Plan' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Plan.php',
        'PayPal\\Api\\PlanList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PlanList.php',
        'PayPal\\Api\\PotentialPayerInfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PotentialPayerInfo.php',
        'PayPal\\Api\\Presentation' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Presentation.php',
        'PayPal\\Api\\PrivateLabelCard' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/PrivateLabelCard.php',
        'PayPal\\Api\\ProcessorResponse' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ProcessorResponse.php',
        'PayPal\\Api\\RecipientBankingInstruction' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/RecipientBankingInstruction.php',
        'PayPal\\Api\\RedirectUrls' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/RedirectUrls.php',
        'PayPal\\Api\\Refund' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Refund.php',
        'PayPal\\Api\\RefundDetail' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/RefundDetail.php',
        'PayPal\\Api\\RelatedResources' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/RelatedResources.php',
        'PayPal\\Api\\Sale' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Sale.php',
        'PayPal\\Api\\Search' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Search.php',
        'PayPal\\Api\\ShippingAddress' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ShippingAddress.php',
        'PayPal\\Api\\ShippingCost' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ShippingCost.php',
        'PayPal\\Api\\ShippingInfo' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/ShippingInfo.php',
        'PayPal\\Api\\Tax' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Tax.php',
        'PayPal\\Api\\Template' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Template.php',
        'PayPal\\Api\\TemplateData' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/TemplateData.php',
        'PayPal\\Api\\TemplateSettings' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/TemplateSettings.php',
        'PayPal\\Api\\TemplateSettingsMetadata' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/TemplateSettingsMetadata.php',
        'PayPal\\Api\\Templates' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Templates.php',
        'PayPal\\Api\\Terms' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Terms.php',
        'PayPal\\Api\\Transaction' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Transaction.php',
        'PayPal\\Api\\TransactionBase' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/TransactionBase.php',
        'PayPal\\Api\\Transactions' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Transactions.php',
        'PayPal\\Api\\WebProfile' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/WebProfile.php',
        'PayPal\\Api\\Webhook' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/Webhook.php',
        'PayPal\\Api\\WebhookEvent' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/WebhookEvent.php',
        'PayPal\\Api\\WebhookEventList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/WebhookEventList.php',
        'PayPal\\Api\\WebhookEventType' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/WebhookEventType.php',
        'PayPal\\Api\\WebhookEventTypeList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/WebhookEventTypeList.php',
        'PayPal\\Api\\WebhookList' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Api/WebhookList.php',
        'PayPal\\Auth\\OAuthTokenCredential' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Auth/OAuthTokenCredential.php',
        'PayPal\\Cache\\AuthorizationCache' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Cache/AuthorizationCache.php',
        'PayPal\\Common\\ArrayUtil' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Common/ArrayUtil.php',
        'PayPal\\Common\\PayPalModel' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Common/PayPalModel.php',
        'PayPal\\Common\\PayPalResourceModel' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Common/PayPalResourceModel.php',
        'PayPal\\Common\\PayPalUserAgent' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Common/PayPalUserAgent.php',
        'PayPal\\Common\\ReflectionUtil' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Common/ReflectionUtil.php',
        'PayPal\\Converter\\FormatConverter' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Converter/FormatConverter.php',
        'PayPal\\Core\\PayPalConfigManager' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Core/PayPalConfigManager.php',
        'PayPal\\Core\\PayPalConstants' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Core/PayPalConstants.php',
        'PayPal\\Core\\PayPalCredentialManager' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Core/PayPalCredentialManager.php',
        'PayPal\\Core\\PayPalHttpConfig' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Core/PayPalHttpConfig.php',
        'PayPal\\Core\\PayPalHttpConnection' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Core/PayPalHttpConnection.php',
        'PayPal\\Core\\PayPalLoggingManager' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Core/PayPalLoggingManager.php',
        'PayPal\\Exception\\PayPalConfigurationException' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Exception/PayPalConfigurationException.php',
        'PayPal\\Exception\\PayPalConnectionException' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Exception/PayPalConnectionException.php',
        'PayPal\\Exception\\PayPalInvalidCredentialException' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Exception/PayPalInvalidCredentialException.php',
        'PayPal\\Exception\\PayPalMissingCredentialException' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Exception/PayPalMissingCredentialException.php',
        'PayPal\\Handler\\IPayPalHandler' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Handler/IPayPalHandler.php',
        'PayPal\\Handler\\OauthHandler' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Handler/OauthHandler.php',
        'PayPal\\Handler\\RestHandler' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Handler/RestHandler.php',
        'PayPal\\Log\\PayPalDefaultLogFactory' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Log/PayPalDefaultLogFactory.php',
        'PayPal\\Log\\PayPalLogFactory' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Log/PayPalLogFactory.php',
        'PayPal\\Log\\PayPalLogger' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Log/PayPalLogger.php',
        'PayPal\\Rest\\ApiContext' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Rest/ApiContext.php',
        'PayPal\\Rest\\IResource' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Rest/IResource.php',
        'PayPal\\Security\\Cipher' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Security/Cipher.php',
        'PayPal\\Transport\\PayPalRestCall' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Transport/PayPalRestCall.php',
        'PayPal\\Validation\\ArgumentValidator' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Validation/ArgumentValidator.php',
        'PayPal\\Validation\\JsonValidator' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Validation/JsonValidator.php',
        'PayPal\\Validation\\NumericValidator' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Validation/NumericValidator.php',
        'PayPal\\Validation\\UrlValidator' => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib/PayPal/Validation/UrlValidator.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2c341bd6d5f52403d3c07a395f00552::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2c341bd6d5f52403d3c07a395f00552::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc2c341bd6d5f52403d3c07a395f00552::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc2c341bd6d5f52403d3c07a395f00552::$classMap;

        }, null, ClassLoader::class);
    }
}
