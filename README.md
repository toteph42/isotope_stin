## isotope_STIN ##

This extension handles EU-STIN (European Union Sales Tax Identification Number) also known as "EU Ust-ID", "EU VAT ID" or "EU MwSt-ID").

**Installation**

* Install extension.
* In back end open "Store configuration" in "Isotope eCommerce" section.
* Under head line "General settings" please open "Store configurations".
* Select your shop and open for editing.
* In section "Address configuration" please enter the country where your shop is located (e.g. "Germany").
* If you want to receive a qualified notification (as evidence for your tax office) for validation of STIN, please enter your own STIN (for more information see below).
* Activate for field "EU sales tax ID number" in "Billing address fields".
* Open section "EU country configuration".
* Check / select all EU countries (you may select multiple countries by holding down the Strg key during selection).
* Close shop configuration.

* Under head line "Checkout Flow" please open "Tax rates".
* Create a tax rate with 19% for each European country (if your shop is located in Germany; else use the specific sales tax rate of the home country of your shop).
* Please don't forget: You need to active "The tax rate is an EU VAT" in section "EU tax id configuration".

* Under head line "Checkout Flow" please open "Tax classes".
* Create a new tax class (e.g. "EU-Tax") and apply all European tax rates previously defined in section "Tax rates".
* Don't forget to use tax class "EU-Tax" during product definition.

**Usage**

* During customer ordering a new field "EU sales tax ID number" is now available.
* During processing of input address data, STIN is checked online.
* If any error occurs during check, a message will be displayed.
* If STIN is validated, no tax will be applied. **Warning:** If you've specified e.g. Germany as your location of shop and a STIN from this country is entered, then tax is still applied.
* If you've entered a STIN in shop configuration, then a e-mail will automatically be send to "Shipping E-mail address". This mail can be used as qualified evidence for a STIN check for your tax office. The e-mail contains a unique identifier and all address data entered by customer and (if available) all data related to STIN returned by EU server. You can use this e-mail to verify customer. A automatic verification of address data is not possible since each country has different restriction which data is made available through by EU server (in some countries no data is returned at all).
* In multiple forms you may use the Insert Tag `{{eu_stin::TEXT}}`. As soon as customer entered a valid STIN and no tax apply, then "TEXT" will be inserted into form (else text is dropped). You can use this for inserting something like "VAT reversed".
* In multiple forms you may use the Insert Tag `{{eu_stin_no::TEXT}}`. If tax applies then "TEXT" will be inserted into form (else text is dropped).

**Test**

* Select a product in your shop and (**important!**) click until you reach the "Order Review" page. This is important, because Isotope does apply only here.

**Specifics**

* This extension makes the "EU sales tax ID number" field also available to all Contao "Member" (see "Account Manager->Members" section "Address details") - you may use this field in "Registration" and "Personal Data" module.
* The online check is only performed during updates to field content.
* If you've specified a German STIN in shop configuration and EU server is down a fallback call to "Zentrales Bundesamtes für Steuern" will be performed.

Please enjoy!

If you like my software, I would be happy to get a donation.

<a href="https://www.paypal.com/donate/?hosted_button_id=DS6VK49NAFHEQ" target="_blank" rel="noopener">
  <img src="https://www.paypalobjects.com/en_US/DK/i/btn/btn_donateCC_LG.gif" alt="Donate with PayPal"/>
</a>
