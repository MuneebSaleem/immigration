// noinspection ES6ConvertVarToLetConst

console.debug('scripts.js loaded');

// Eligibility form
(function () {
    'use strict';

    var _ELIGIBILITY_FORM = new (function () {
            var self = this;

            self.options = null;
            self.hasPageLoaded = false;

            //<<< Step 1
            self.getEligibilityFormStep1Form = function () {
                var form = document.getElementById('eligibility-form-step-1');
                return form || undefined;
            };

            self.isVWPEligible = function (countryRef) {
                return self.options.vwpCountries.includes(countryRef);
            };

            self.eligibilityFormStep1Values = function () {
                var form = self.getEligibilityFormStep1Form();

                var data = {
                    citizenship: null,
                    has2ndCitizenship: null,
                    secondCitizenship: null,
                    reasonForTravel: null,
                    isEligible: false,
                    eligibleCountry: null,
                    isFilled: false,
                };

                if (!form) {
                    return data;
                }

                var iCitizenship = form.querySelector('select[name="citizenship-country"]');
                var iHas2ndCitizenship = form.querySelector('input[name="has-secondary-citizenship"]');
                var i2ndCitizenship = form.querySelector('select[name="citizenship-country-secondary"]');
                var iReasonForTravel = form.querySelector('input[name="reason-for-travel"]:checked');

                data.citizenship = iCitizenship.value;
                data.has2ndCitizenship = iHas2ndCitizenship.checked;

                if (data.has2ndCitizenship) {
                    data.secondCitizenship = i2ndCitizenship.value;
                }

                data.reasonForTravel = iReasonForTravel ? iReasonForTravel.value : null;

                if (self.isVWPEligible(data.citizenship)) {
                    data.isEligible = true;
                    data.eligibleCountry = data.citizenship;
                } else if (data.has2ndCitizenship && self.isVWPEligible(data.secondCitizenship)) {
                    data.isEligible = true;
                    data.eligibleCountry = data.secondCitizenship;
                }

                data.isFilled = data.citizenship !== "";

                return data;
            };

            self.onEligibilityFormStep1Submit = function () {
                var data = self.eligibilityFormStep1Values();

                if (!data.citizenship) {

                    //if language option is in errorCitizenshipEmpty, show error message in language option
                    if (self.options.errorCitizenshipEmpty.hasOwnProperty(self.options.language)) {

                        //alert(self.options.errorCitizenshipEmpty[self.options.language]);
                        //displaying the error msg within a div inner html
                        document.getElementById("errorCitizenship").innerHTML = self.options.errorCitizenshipEmpty[self.options.language];


                    }

                    return;

                }

                if (data.has2ndCitizenship && !data.secondCitizenship) {
                    //if language option is in errorSecondaryCitizenshipEmpty, show error message in language option
                    if (self.options.errorSecondaryCitizenshipEmpty.hasOwnProperty(self.options.language)) {

                        //alert(self.options.errorSecondaryCitizenshipEmpty[self.options.language]);

                        //if the previous err msg is still there, remove it
                        document.getElementById("errorCitizenship").innerHTML = "";

                        document.getElementById("errorSecondaryCitizenship").innerHTML = self.options.errorSecondaryCitizenshipEmpty[self.options.language];


                    }

                    return;
                }

                // if (!data.reasonForTravel) {
                //     alert('Please select reason for travel');
                //     return;
                // }

                if (data.isEligible) {
                    self.hydrateEligibilityFormStep2WhenEligible(data);
                    self.transitionToStep('step-2');
                    //output an image right before the h2 tag
                    document.getElementById("eligibility-form-step-2-outcome").insertAdjacentHTML("afterbegin", "<img src='/wp-content/uploads/2023/11/step2-eligible.png' alt='esta-eligibility-checker-eligible'>");

                    return;
                }

                self.hydrateEligibilityFormStep2WhenNotEligible(data);
                self.transitionToStep('step-2');

                //output an image right before the h2 tag
                document.getElementById("eligibility-form-step-2-outcome").insertAdjacentHTML("afterbegin", "<img src='/wp-content/uploads/2023/11/step2-not-eligible.png' alt='esta-eligibility-checker-not-eligible'>");

            };

            self.bindEligibilityFormStep1 = function () {

                var form = self.getEligibilityFormStep1Form();

                // Deal with 2nd citizenship select
                var iHas2ndCitizenship = form.querySelector('input[name="has-secondary-citizenship"]');
                var secondCitizenshipContainer = form.querySelector('#secondary-citizenship-container');

                iHas2ndCitizenship.addEventListener('change', function (e) {
                    if (e.target.checked) {
                        secondCitizenshipContainer.classList.remove('d-none');
                        return;
                    }

                    secondCitizenshipContainer.classList.add('d-none');
                });

                // Bind submit
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    self.onEligibilityFormStep1Submit();
                });
            };
            //>>> STEP 1 END

            //<<< STEP 2
            self.getEligibilityFormStep2Form = function () {
                var form = document.getElementById('eligibility-form-step-2');


                return form || undefined;
            };

            self.eligibilityFormStep2Values = function () {
                var form = self.getEligibilityFormStep2Form();

                var data = {
                    isBillingCountrySameAsCitizenship: null,
                    billingCountry: null,
                };

                if (!form) {
                    return data;
                }

                var iBillingCountryNotResidence = form.querySelector('input[name="is-billing-country-not-residence"]:checked');
                var iBillingCountry = form.querySelector('select[name="billing-country"]');

                data.isBillingCountrySameAsCitizenship = iBillingCountryNotResidence
                    ? (iBillingCountryNotResidence.value === 'yes')
                    : null;

                data.billingCountry = iBillingCountry.value;

                return data;
            };

            self.hydrateEligibilityFormStep2Meta = function (meta, key, value) {
                var form = self.getEligibilityFormStep2Form();
                var container = form.querySelector('#' + meta);

                var keyContainer = container.querySelector('.meta-key');
                var valueContainer = container.querySelector('.meta-value');

                keyContainer.innerHTML = key;
                valueContainer.innerHTML = value;
            };


            self.hydrateEligibilityFormStep2 = function (form, labels, self, targetCitizenship) {
                form.querySelector('#eligibility-form-step-2-outcome').innerHTML = labels['heading'];
                self.hydrateEligibilityFormStep2Meta('citizenship-meta', labels['citizenshipPrefix'], targetCitizenship);
                self.hydrateEligibilityFormStep2Meta('length-of-stay-meta', labels['lengthPrefix'], labels['length']);
                self.hydrateEligibilityFormStep2Meta('length-of-stay-meta', labels['lengthPrefix'], labels['length']);
                self.hydrateEligibilityFormStep2Meta('type-meta', labels['typePrefix'], labels['type']);
                form.querySelector('#general-info').innerHTML = labels['text'];
                form.querySelector('button[type="submit"]').innerHTML = labels['submit'];
            };

            self.hydrateEligibilityFormStep2WhenEligible = function (data) {
                var form = self.getEligibilityFormStep2Form();
                var labels = self.options['vwpLabels'];
                var targetCitizenship = data.eligibleCountry;

                self.hydrateEligibilityFormStep2(form, labels, self, targetCitizenship);
            };

            self.hydrateEligibilityFormStep2WhenNotEligible = function (data) {
                var form = self.getEligibilityFormStep2Form();
                var labels = self.options['nonVwpLabels'];
                var targetCitizenship = data.citizenship;

                self.hydrateEligibilityFormStep2(form, labels, self, targetCitizenship);
            };

            self.getRedirectLanguage = function (siteLanguage) {
                if ('zh' === siteLanguage) {
                    return 'zh-hans';
                }

                if ('tw' === siteLanguage) {
                    return 'zh-hant';
                }

                return siteLanguage;
            };

            self.onEligibilityFormStep2Submit = function () {
                var dataForm1 = self.eligibilityFormStep1Values();
                var dataForm2 = self.eligibilityFormStep2Values();

                if (null === dataForm2.isBillingCountrySameAsCitizenship) {
                    //if language option is in errorConfirmCountryYouLiveIn, show error message in language option

                    if (self.options.errorConfirmCountryYouLiveIn.hasOwnProperty(self.options.language)) {


                        document.getElementById("errorConfirmCountryYouLiveInRadio").innerHTML = self.options.errorConfirmCountryYouLiveIn[self.options.language];

                    }

                    return;
                }

                if (false === dataForm2.isBillingCountrySameAsCitizenship
                    && !dataForm2.billingCountry) {
                    //if language option is in errorConfirmCountryYouLiveIn, show error message in language option
                    if (self.options.errorConfirmCountryYouLiveIn.hasOwnProperty(self.options.language)) {

                        //remove the previous err msg
                        document.getElementById("errorConfirmCountryYouLiveInRadio").innerHTML = "";

                        document.getElementById("errorConfirmCountryYouLiveInCountry").innerHTML = self.options.errorConfirmCountryYouLiveIn[self.options.language];


                    }

                    return;
                }

                // TODO - Redirect to the correct URL below
                var target;
                if (dataForm1.isEligible) {
                    if (true === dataForm2.isBillingCountrySameAsCitizenship) {
                        // When user has a valid passport - is Eligible And the Billing Country matches the Passport Country


                        //C
                        if (self.options.countriesToCy.includes(dataForm1.eligibleCountry)) {
                            target = 'https://www.usimmigrationsupport.net/' + this.getRedirectLanguage(self.options.language) + '/esta-application.html/step1';

                        }
                        //I
                        else if (self.options.countriesToIom.includes(dataForm1.eligibleCountry)) {
                            target = 'https://www.usimmigrationsupport.com/' + this.getRedirectLanguage(self.options.language) + '/esta-application.html/step1';

                        } else {

                            //B
                            target = 'https://www.onlineimmigration.com/' + this.getRedirectLanguage(self.options.language) + '/esta-application.html/step1';
                        }


                    } else {
                        // When user has a valid passport - is Eligible And the selected Billing Country does not match the Passport Country


                            //C
                        if (self.options.countriesToCy.includes(dataForm2.billingCountry)) {

                            target = 'https://www.usimmigrationsupport.net/' + this.getRedirectLanguage(self.options.language) + '/esta-application.html/step1';

                            //I
                        } else if (self.options.countriesToIom.includes(dataForm1.eligibleCountry) && self.options.countriesToIom.includes(dataForm2.billingCountry)) {

                            target = 'https://www.usimmigrationsupport.com/' + this.getRedirectLanguage(self.options.language) + '/esta-application.html/step1';

                            //B
                        } else {
                            target = 'https://www.onlineimmigration.com/' + this.getRedirectLanguage(self.options.language) + '/esta-application.html/step1';
                        }
                    }
                } else {
                    // When Not Eligible, send all to oi.com/B

                    target = 'https://www.onlineimmigration.com/' + this.getRedirectLanguage(self.options.language) + '/pdf/b-2-tourist-visa-application-guide-en/step1';

                }


                //alert(target);
                window.location.href = target;
            }
            ;

            self.bindEligibilityFormStep2 = function () {

                var form = self.getEligibilityFormStep2Form();

                // Deal with billing country radio
                var iBillingCountryNotResidenceGroup
                    = form.querySelectorAll('input[name="is-billing-country-not-residence"]');
                var billingCountryWrapper = form.querySelector('#billing-country-wrapper');

                for (var i = 0; i < iBillingCountryNotResidenceGroup.length; i++) {
                    var target = iBillingCountryNotResidenceGroup[i];
                    target.addEventListener('change', function (e) {
                        if ('no' === e.target.value) {
                            billingCountryWrapper.classList.remove('d-none');
                            return;
                        }

                        billingCountryWrapper.classList.add('d-none');
                    });
                }

                // Bind submit
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    self.onEligibilityFormStep2Submit();
                });
            };
            //>>> STEP 2 END

            self.transitionToStep = function (step, stateChange) {
                var stateChange = stateChange !== false;
                var step1Section = document.getElementById('eligibility-form-step-1-section');
                var step2Section = document.getElementById('eligibility-form-step-2-section');

                if ('step-1' === step) {

                    step1Section.classList.remove('d-none');
                    step2Section.classList.add('d-none');

                    return;

                }

                if ('step-2' === step) {
                    var data = self.eligibilityFormStep1Values();

                    if(!data.isFilled) {
                        return
                    }
                    if (stateChange) {
                        history.pushState({name: "Step2"}, null, document.location.pathname + document.location.search + document.location.hash)
                    }
                    step1Section.classList.add('d-none');
                    step2Section.classList.remove('d-none');

                    return;
                }

                console.error('Unknown step: ' + step);
            };






            self.onPageLoaded = function () {

                if (self.hasPageLoaded) {
                    return;
                }

                history.replaceState({name: "Step1"}, null, document.location.pathname + document.location.search + document.location.hash);

                //checking the url for the step and making the transition as needed
                window.addEventListener('popstate',  (event)=> {
                     if (event.state.name === "Step1") {
                         self.transitionToStep('step-1', false);

                     }
                     if (event.state.name === "Step2") {
                        self.transitionToStep('step-2', false);

                    }

                });

                self.options = window._ELIGIBILITY_FORM_OPTIONS;

                self.bindEligibilityFormStep1();
                self.bindEligibilityFormStep2();

                self.hasPageLoaded = true;

                console.debug('page loaded');
            };
        }
    )
    ();

    // Expose the load handler to window
    window._ON_ELIGIBILITY_FORM_LOADED = _ELIGIBILITY_FORM.onPageLoaded;
})();

// Load on DOM ready
document.addEventListener('DOMContentLoaded', function () {
    window._ON_ELIGIBILITY_FORM_LOADED();
});

// Fall back to 10 seconds, if DOM ready never arrives...
setTimeout(function () {
    window._ON_ELIGIBILITY_FORM_LOADED();
}, 10 * 1000);
