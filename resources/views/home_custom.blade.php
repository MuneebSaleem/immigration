@extends('layouts.app')


<div class="modal fade" id="terms" data-bs-keyboard="false" tabindex="-1" aria-labelledby="legalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close h-auto" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2>Terms &amp; Conditions</h2>
                <p class="mb-0"><strong>About this website</strong></p>
                <p>This website is not affiliated with the United States Government. U.S. Immigration Support is an independent publisher of legal books and immigration guides. Our mission is to help immigrants through the United States immigration process by providing the most current information available. There are disclaimers located on the footer of every page of this website stating that U.S. Immigration Support is an independent entity, not a United States government agency.</p>
                <p class="mb-0"><strong>Shipping &amp; Delivery Policy</strong></p>
                <p>eBooks: Available for download immediately after credit card approval.</p>
                <p>Hard Copy Books: Shipped by FedEx within 2 business days from the date the order was received. Tracking information will be sent to the customer’s email address immediately after the order is shipped. DVDs: Shipped by FedEx or USPS Priority Mail within 2 business days from the date the order was received. Tracking information will be sent to the customer’s email address immediately after the order is shipped.</p>
                <p class="mb-0"><strong>Refund Policy</strong></p>
                <p>All products and services purchased from this website are fully refundable within the 90 days of the date of purchase. The request for a refund must be to submitted within 90 days from the day the order was received. U.S. Immigration Support reserves the right to not issue a refund if the request is received after 90 days from the date of purchase. Refunds for credit card transactions are issued within 2 business days. Please be aware that it can take up to 5 business days for the transaction to actually post to your account. Refunds for payments received by check, money order, bank draft, travelers checks, or cash, will be issued as a company check. The refund check will be made payable to the person on the order form and mailed to the address indicated on the order form. If you have any questions with regards to your order, please contact our customer service department. If you wish to cancel your order, please contact us with the reasons for the cancellation request. You should not contact your credit card company or bank to file a dispute, as this will only delay the refund process.</p>
                <p class="mb-0"><strong>Our Products &amp; Services</strong></p>
                <p class="mb-0"><strong>eBooks:</strong> U.S. Immigration Support offers downloadable immigration guides in eBook format (as PDF files). All eBooks available on our website are published by US Immigration Support, not by the USCIS or any United States government agency. Our Immigration eBooks are designed for information purposes only, and should not be considered legal advice.</p>
                <p><strong>Hard Copy Books:</strong> U.S. Immigration Support offers many immigration books in Hard Copy format. Hard Copy Books are shipped by FedEx within 2 business days. All Hard Copy Books available on our website are published by US Immigration Support, not by the USCIS or any United States government agency. Our Immigration Hard Copy Books are designed for information purposes only, and should not be considered legal advice.</p>
                <p class="mb-0"><strong>Recurring Billing</strong></p>
                <p>There is no recurring billing. U.S. Immigration Support does not charge any kind of recurring fees. All purchases on our website are 1-time transactions.</p>
                <p class="mb-0"><strong>Typographical Errors</strong></p>
                <p>In the event that a U.S. Immigration Support product or service is mistakenly listed at an incorrect price, we reserve the right to refuse or cancel any orders listed at the incorrect price. U.S. Immigration Support reserves the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit card charged. In the event your credit card has been charged, a full refund will be issued in the amount of the incorrect price.</p>
                <p class="mb-0"><strong>Links</strong></p>
                <p>This website contains hyperlinks which may take you outside www.usimmigrationsupport.org. Links are made available for your convenience. However, the inclusion of any link does not imply endorsement or approval by U.S. Immigration Support. We are not responsible for any links to and from www.usimmigrationsupport.org. Framing of our website at any level is prohibited.</p>
                <p class="mb-0"><strong>Copyright Information:</strong></p>
                <p>All products on this website are published by US Immigration Support and are protected by United States and international copyright laws. Permission for use of our intellectual property should made in writing to our legal department.</p>
                <p class="mb-0"><strong>Intellectual Property Rights</strong></p>
                <p>Except where otherwise stated, U.S. Immigration Support is the copyright holder of all content, layout, design, data, graphics, trademarks and logos under the www.usimmigrationsupport.org domain. The content is protected by United States and international copyright laws. U.S. Immigration Support will do our utmost to protect our rights, employees, customers, members and intellectual property. We will not hesitate to take legal action if necessary. Permission for use of our intellectual property should made by contacting our legal department.</p>
                <p class="mb-0"><strong>Limitation of Liability</strong></p>
                <p>U.S. Immigration Support shall not be liable for any special or consequential damages that result from the use of, or the inability to use, the materials on this website or the performance of the products, even if U.S. Immigration Support has been advised of the possibility of such damages. Applicable law may not allow the limitation of exclusion of liability or incidental or consequential damages, so the above limitation or exclusion may not apply to you.</p>
                <p class="mb-0"><strong>Personal use Limitation</strong></p>
                <p>The information, news, articles, emails, products and services provided by U.S. Immigration Support are for your personal and non-commercial use. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information, or other content, products or services obtained from U.S. Immigration Support without the express written permission from our legal department.</p>
                <p class="mb-0"><strong>Warranty Disclaimer</strong></p>
                <p>This site and the materials and products on this site are provided “as is” and without warranties of any kind, whether express or implied. To the fullest extent permissible pursuant to applicable law, U.S. Immigration Support disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose and non-infringement. U.S. Immigration Support does not represent or warrant that the functions contained in the site will be uninterrupted or error-free, that the defects will be corrected, or that this site or the server that makes the site available are free of viruses or other harmful components. U.S. Immigration Support does not make any warranties or representations regarding the use of the materials in this site in terms of their correctness, accuracy, adequacy, usefulness, timeliness, reliability or otherwise. Some states do not permit limitations or exclusions on warranties, so the above limitations may not apply to you.</p>
                <p class="mb-0"><strong>Legal Form and Choice of Law</strong></p>
                <p>By using our website, purchasing a products or service, you have entered into a legal contract with U.S. Immigration Support. You agree that the prevailing party in a civil lawsuit may be awarded reasonable attorney’s fees.</p>
                <p class="mb-0"><strong>Currency of Transactions</strong></p>
                <p>All products as sold in U.S. dollars.</p>
                <p class="mb-0"><strong>Changes to the Terms and Conditions</strong></p>
                <p>U.S. Immigration Support retains the right, at its discretion, to change our Terms and Conditions any time. Customers, members and all users of this website are recommended to review our Terms and Conditions, Privacy Policy, and Disclaimers (located on the footer of every page of this website) on a monthly basis.</p>
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="privacy" data-bs-keyboard="false" tabindex="-1" aria-labelledby="legalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close h-auto" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2>Privacy Policy</h2>
                <p>U.S. Immigration Support is committed to protecting our clients’ privacy. U.S. Immigration Support only uses the information we collect to process orders requested by our clients. As a visitor to our website, you have the right to understand our information privacy practices. We understand that submitting your information over the Internet involves a great deal of trust on your part and we take this trust very seriously. Our highest priority is to ensure the security and confidentiality of our clients’ personally identifiable information such as name, address, phone number, email address and credit card details. Please review our Terms and Conditions page for more information.</p>
                <p class="mb-0"><strong>What Information We Collect</strong></p>
                <p>We do not collect any personal information by you browsing our website. If you choose to order any of our products or services, you must voluntarily provide us with your name, address, phone number, email address and credit card information. Once an order is placed, we provide tracking through FEDEX for hard copy products, and we record your IP address, time and date for downloadable products. Your information is not shared with any person, business or organization. No credit card information is stored on our servers. U.S. Immigration Support uses Authorize.net to process credit card transactions. Authorize.net is a leading provider of payment gateway services making it able for customers to purchase products online. Authorize.net will never use your personal information for any other reason. For statistical purposes we have installed Google Analytics. Visit our Business and Website Certifications section for more information.</p>
                <p class="mb-0"><strong>Cookies</strong></p>
                <p>A cookie is a small text file that is stored on a user’s computer for record-keeping purposes. We use cookies on this site. We do not link the information we store in cookies to any personally identifiable information you submit while on our site. We use both session ID cookies and persistent cookies. We use session cookies to make it easier for you to navigate our site. A session ID cookie expires when you close you browser. A persistent cookie remains on your hard drive for an extended period of time. You can remove persistent cookies by following directions provided in your Internet browser’s “help” file or visit our Cookies Page for more information. Persistent cookies also enable us to track and target the interests of our users to enhance the experience on our site. If you reject cookies, you may still use our site, but your ability to use some areas of our site, such as contests or surveys, will be limited. With cookies diabled you may not be able to submit your order.</p>
                <p class="mb-0"><strong>Use of Your Data</strong></p>
                <p>The information you voluntarily provide to us is only used to process your order. User data is never disclosed to any third parties unless as otherwise disclosed in this privacy statement. We disclose your personal information as required by law, such as to comply with a subpoena, or similar legal process when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request, to any other third party with your prior consent to do so.</p>
                <p class="mb-0"><strong>Links to Other Web Sites</strong></p>
                <p>Our Site includes links to other Web sites whose privacy practices may differ from those of Us Immigration Support. If you submit personal information to any of those sites, your information is governed by their privacy statements. We encourage you to carefully read the privacy statement of any Web site you visit.</p>
                <p class="mb-0"><strong>Data Retention</strong></p>
                <p>We will retain your information for as long as your account is active or as needed to provide you services. If you wish to cancel your account or request that we no longer use your information to provide you services contact us at <a href="https://www.usimmigrationsupport.org/cdn-cgi/l/email-protection#82ebece4edc2f7f1ebefefebe5f0e3f6ebedecf1f7f2f2edf0f6acedf0e5"><span class="__cf_email__" data-cfemail="91f8fff7fed1e4e2f8fcfcf8f6e3f0e5f8feffe2e4e1e1fee3e5bffee3f6">[email&#160;protected]</span></a>. We will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.</p>
                <p class="mb-0"><strong>Data Retention</strong></p>
                <p>Access to Personally Identifiable Information</p>
                <p>If your personally identifiable information changes, or if you no longer desire our service, you may do the following: correct, update, amend, delete/remove or deactivate it, by contacting our customer service department at <a href="https://www.usimmigrationsupport.org/cdn-cgi/l/email-protection#c9a0a7afa689bcbaa0a4a4a0aebba8bda0a6a7babcb9b9a6bbbde7a6bbae"><span class="__cf_email__" data-cfemail="660f0800092613150f0b0b0f011407120f09081513161609141248091401">[email&#160;protected]</span></a></p>
                <p class="mb-0"><strong>Security</strong></p>
                <p>Our shopping cart includes a Secure Socket Layer (SSL) certificate to protect our customers’ information when shopping online. SSL technology encrypts the customers’ name, address, and credit card information between your computer and our server. We work closely with Visa, MasterCard, American Express and Discover to eliminate any fraudulent transactions. It is easy to see that your connection is secure as the URL of your website will change from http:// to https:// indicating that the connection is secure during the check-out process. We follow generally accepted industry standards to protect the personal information submitted to us, both during transmission and once we receive it. No method of transmission over the Internet, or method of electronic storage, is 100% secure, however. Therefore, while we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p>
                <p class="mb-0"><strong>Changes in this Privacy Statement</strong></p>
                <p>If we decide to change our privacy policy, we will post those changes to this privacy statement, the home page, and other places we deem appropriate so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. We reserve the right to modify this privacy statement at any time, so please review it frequently. If we make material changes to this policy, we will notify you here, by email, or by means of a notice on our home page.</p>
                <p class="mb-0"><strong>Contact our Legal Department</strong></p>
                <p>Email us at <a href="https://www.usimmigrationsupport.org/cdn-cgi/l/email-protection#7e171018113e0b0d17131317190c1f0a1711100d0b0e0e110c0a50110c19"><span class="__cf_email__" data-cfemail="9df4f3fbf2dde8eef4f0f0f4faeffce9f4f2f3eee8ededf2efe9b3f2effa">[email&#160;protected]</span></a> for further assistance.</p>
            </div>

        </div>
    </div>
</div><div class="modal fade" id="cookies" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cookies" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close h-auto" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2>Cookie Policy</h2>
                <p><strong>Notice</strong><br/>
                    We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking “Accept All”, you consent to the use of ALL the cookies. However, you may visit “More info” to provide a controlled consent.</p>
                <p><strong>Cookies Policy</strong></p>
                <ul>
                    <li>We inform users (hereinafter, “you”) that cookies are used on the Website (hereinafter, “our/this Website”).</li>
                    <li>The below Cookie Policy describes how USIMMIGRATIONSUPPORT.ORG, which owns and controls the Website, uses cookies (hereinafter, “we”).</li>
                    <li>We advise users to examine this policy on a frequent basis because it may be updated as a result of new regulations or business reasons.</li>
                </ul>
                <p><strong>Why do we utilize cookies, and what are they?</strong><br/>
                    “Cookies” are file formats that are used for a variety of reasons, including adjusting the Website’s layout to your device, gathering statistical data, enhancing your user experience, and so on.</p>
                <p>You consent to the establishment of cookies by entering and exploring this Website and purchasing the services offered.</p>
                <p>These include session cookies (which are automatically deleted when you close your browser), persistent cookies (which are stored on your device for a long time), owned cookies (which are sent to your device by our Website to collect data for our use), and third-party cookies (which are sent to your device by a third party) (service providers we have contracted, e.g., links to social media to reshare our content).</p>
                <p>Cookies for user login, cookies for user security, cookies for authentication or identity, add-on cookies, user interface cookies, and certain session cookies are exempt from such permission.</p>
                <p>Please be aware that if you modify your browser’s settings by deactivating the limits imposed on the storage of cookies, we will infer you give us your permission.</p>
                <p>Furthermore, your consent will not be necessary if the placement of cookies is essential to provide a service on our Website that you have specifically requested.</p>
                <p>Third-party cookies are subject to the Privacy and Cookies Policies of the third-party.</p>
                <p>We are not responsible for the content or validity of the third-party Policies mentioned above.</p>
                <p><strong>The following cookie types may be installed in your browser by us:</strong></p>
                <ul>
                    <li>Technical cookies enable the management and operation of our Website, as well as its features and services, such as carry-out sales, payment processing, social media content sharing, and so on.</li>
                    <li>Analytical cookies let us understand how you use our website and which data or services you are most interested in, so we can improve your overall customer experience.</li>
                    <li>Advertising cookies help us improve the quality of our website’s adverts.</li>
                </ul>
                <table width="403">
                    <tbody>
                    <tr>
                        <td width="129"><strong>Cookies name</strong></td>
                        <td width="88"><strong>Supplier</strong></td>
                        <td width="94"><strong>Type</strong></td>
                        <td width="231"><strong>Storage Period</strong></td>
                    </tr>
                    <tr>
                        <td width="129">Authorization</td>
                        <td width="88">Owned</td>
                        <td width="94">Technical</td>
                        <td width="231">Session</td>
                    </tr>
                    <tr>
                        <td width="129">Matomo</td>
                        <td width="88">Matomo</td>
                        <td width="94">Analytical</td>
                        <td width="231">2 years</td>
                    </tr>
                    <tr>
                        <td width="129"></td>
                        <td width="88">usimmigrationsupport.org</td>
                        <td width="94">Analytical</td>
                        <td width="231">Session</td>
                    </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <p><strong>What rights does the user have when it comes to blocking or refusing cookies?</strong></p>
                <p>You can revoke your permission to the placement of cookies by this Website at any time by changing the settings on your device’s browser.</p>
                <p>For the most common internet browsers, here are links to instructions on how to handle or erase cookies:</p>
                <ul>
                    <li>Google Chrome</li>
                    <li>Mozilla Firefox</li>
                    <li>Microsoft IE and Edge</li>
                    <li>Apple Safari</li>
                    <li>Chrome for Android</li>
                    <li>Opera</li>
                </ul>
                <p>Keep in mind that if you disable cookies, you will lose access to certain Website functions that require them.</p>
                <p>You may also set your computer browser to automatically allow or reject all types of cookies. You can also set your browser to inform you whenever a cookie is received, allowing you to choose whether or not to accept it.</p>
                <p>You can also enable private browsing, which prevents your browser from saving browsing data, website logins, cookies, and other information about the web pages you visit, and non-tracking browsing, which prevents your browser from tracking your visits and user patterns.</p>
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="contact" data-bs-keyboard="false" tabindex="-1" aria-labelledby="legalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close h-auto" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2>How can you reach us?</h2>
                <p>We take all requests seriously and welcome suggestions for ways to improve any of our processing services. You can contact us by completing the contact form on this webpage.</p>
                <p>If you require assistance with an existing travel document that you have submitted to us, please send us a message via the contact form, including the following information</p>
                <p><a href="https://www.usimmigrationsupport.org/cdn-cgi/l/email-protection#e68f888089a693958f8b8b8f819487928f898895939696899492c8899481"><strong>info@usimmigrationsupport.org</strong></a></p>
                <div class="contact-wrapper mt-2 bg-accent mb-3">
                    <ul class="check-green">
                        <li>The applicant’s full name</li>
                        <li>The applicant’s email address</li>
                        <li>The final four digits of the credit card was used</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

@section('content')


    <section id="top-bar-main" class="bg-atlantic-blue py-20">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">

                    <img class="navbar-brand" src="{{ asset('app-logo/logo-main.png') }}" alt="US Immigration support">

                </div>

                <div class="col-3 col-md-6 col-xl-8 my-auto d-flex justify-content-end text-end">
                    <div class="my-auto me-3 d-none d-md-block">
                        <p class="check-gold text-white mb-0 check-gold">24/7 Customer Service</p>
                    </div>
                    <ul id="menu-langauge-switcher" class="navbar-nav">
                        <li id="menu-item-11890" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown nav-item nav-item-11890"><a href="#pll_switcher" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">English</span></a>
                            <ul class="dropdown-menu depth_0" style="height: 200px; overflow: auto;">
                                <li id="menu-item-11890-da" class="lang-item lang-item-5 lang-item-da lang-item-first menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-da"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/da/esta-visum-danmark/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAPFBMVEXuAAD9/f347OzjAADVAAD3enr3dnX5+Pj0Zmb0XV3zU1PwRkbvOzvrLy/qIiL19fXnEhLJAADl5eXp0NBOrJwwAAAAWklEQVR4AQXBQU7EMAAAMU+arqpFPfD/VyJOKNoUO1DbAT3TSet8hqS/ydRaV0kfA6EkDIU7yegu8MIFxwAvXMAc56G1vnoGPmMiMPj1NrXDbuctHWR//7iBf5T6EpaFWVlxAAAAAElFTkSuQmCC" alt="Dansk" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Dansk</span></a></li>
                                <li id="menu-item-11890-de" class="lang-item lang-item-10 lang-item-de menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-de"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/de/esta-deutschland/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAABLElEQVR4AY2QgUZEQRSGz9ydmzbYkBWABBJYABHEFhJ6m0WP0DMEQNIr9AKrN8ne2Tt3Zs7MOdOZmRBEv+v34Tvub9R6fdNlAzU+snSME/wdjbjbbJ6EiEg6BA8102QbjKNpoMzw8v6qD/sOALbbT2MC1NgaAWOKOgxf5czY+4dbAX2G/THzcozLrvPV85IQyqVz0rvg2p9Pei4HjzSsiFbV4JgyhhxCjpGdZ0RhdikLB9/b8Qig7MkpSovR7Cp59q6CazaNFiTt4J82o6uvdMVwTsztKTXZod4jgOJJuqNAjFyGrBR8gM6XwKfIC4KanBSTZ0rClKh08D9DFh3egW7ebH7NcRDQWrz9rM2Ne+mDOXB2mZJ8agL19nwxR2iZXGm1gDbQKhDjd4yHb2oW/KR8xHicAAAAAElFTkSuQmCC" alt="Deutsch" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Deutsch</span></a></li>
                                <li id="menu-item-11890-et" class="lang-item lang-item-15 lang-item-et menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-et"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/et/esta-eesti/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAnElEQVR4AWNgsD+Agoz2QJHsZgRiXwpHIA1VG57CUd7KR3AUN/8+BAXPvANE7hNvMDDMgGqAS8DlgMiq4yoEqddeACIUDfhVQxCQDdIABEVFxcFg4AUGDmBgYWFhaGiorqEBRBJgABQBKoZqIKAaUwNu1QgAFASpfvz48W8k8B0JfMYAhw4dQmjAVA0k8WkAShNrww0McAoGDmEAAOE7JtV20p1HAAAAAElFTkSuQmCC" alt="Eesti" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Eesti</span></a></li>
                                <li id="menu-item-11890-es" class="lang-item lang-item-20 lang-item-es menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-es"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/es/esta-espana/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAflBMVEX/AAD9AAD3AADxAADrAAD/eXn9bGz8YWH8WVn6UVH5SEj5Pz/3NDT0Kir9/QD+/nL+/lT18lDt4Uf6+j/39zD39yf19R3n5wDxflXsZ1Pt4Y3x8zr0wbLs1NXz8xPj4wD37t3jmkvsUU/Bz6nrykm3vJ72IiL0FBTyDAvhAABEt4UZAAAAX0lEQVR4AQXBQUrFQBBAwXqTDkYE94Jb73+qfwVRcYxVQRBRToiUfoaVpGTrtdS9SO0Z9FR9lVy/g5c99+dKl30N5uxPuviexXEc9/msC7TOkd4kHu/Dlh4itCJ8AP4B0w4Qwmm7CFQAAAAASUVORK5CYII=" alt="Español" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Español</span></a></li>
                                <li id="menu-item-11890-fr" class="lang-item lang-item-25 lang-item-fr menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-fr"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/fr/esta-france/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAbFBMVEVzldTg4ODS0tLxDwDtAwDjAADD0uz39/fy8vL3k4nzgna4yOixwuXu7u7s6+zn5+fyd2rvcGPtZljYAABrjNCpvOHrWkxegsqfs93NAADpUUFRd8THAABBa7wnVbERRKa8vLyxsLCoqKigoKClCvcsAAAAXklEQVR4AS3JxUEAQQAEwZo13Mk/R9w5/7UERJCIGIgj5qfRJZEpPyNfCgJTjMR1eRRnJiExFJz5Mf1PokWr/UztIjRGQ3V486u0HO55m634U6dMcf0RNPfkVCTvKjO16xHA8miowAAAAABJRU5ErkJggg==" alt="Français" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Français</span></a></li>
                                <li id="menu-item-11890-hr" class="lang-item lang-item-30 lang-item-hr menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-hr"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/hr/esta-croatia/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAA1ElEQVR4AWP4x4ATfUVFr0EIIldZiRX9zsoCoYQEIPobGfk7IAChASIEES1d8yDz+P20xXeB5E87+x/6+kD0TUUFyEZogKuGoosXgdI/z56Fq0Zo+IsKvn//jqz606dPX5HA8+fP0TUAReGqv588CdcAYTx9+hSLBrhqoDMg6oAkQgND0KHmrU+AXoSg6Dk3/Bs2QdxtX7LKre+yVfs5CAqaeoWBYSJUA1w1EAElgAioFKIaQ4PzbqAGYFDCEbJtyEYgNICQ3kYoklwORVxzIAisCIEAGe83/nye/GcAAAAASUVORK5CYII=" alt="Hrvatski" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Hrvatski</span></a></li>
                                <li id="menu-item-11890-it" class="lang-item lang-item-35 lang-item-it menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-it"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/it/esta-italia/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAUVBMVEUAiQAAgADk5OTe3t7vAAB3yXf9/f36+vr5Vlb3RkZjwWNYvVj4+Pj1MzP1KChQuFD1GxviAABHtUf19fXzDw4/sT8AcAA2qzYAWgDLy8vDw8ObXclsAAAAVElEQVR4AQXBSwoCQRQEsNT70CC69P5XdCUMA2ISSAiBWAQScg8bN7GJWxFDrCivwhCLMipGx3LKUOi2HAZluy2HgXprxQGfGL6G63B5MJ5FCD/4A3DaCLvbBle5AAAAAElFTkSuQmCC" alt="Italiano" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Italiano</span></a></li>
                                <li id="menu-item-11890-lv" class="lang-item lang-item-40 lang-item-lv menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-lv"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/lv/esta-latvija/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAV1BMVEWVCAiIAACBAABzAABhAADLe3vJeHjHcnLCaGi9W1u4UFBMAACzRkawPz+sNjanLCyiIiI3AADn0ND15+fw4eHt3Nzp19fKnp79/f329vbIoKCbEhInAADrvaaeAAAAXElEQVR4AQXBMVLDQBRAMT3vj8lMqLj/9WjoaZKsQUqIEGokkWgYcijZf1PkUEq3vgoRb9OcQLB4zbOI8Dbneu5r733ta9/X7WfuByl58I3WSQ4l+mzFB04e+P0HZtwTaCkbp9AAAAAASUVORK5CYII=" alt="Latviski" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Latviski</span></a></li>
                                <li id="menu-item-11890-lt" class="lang-item lang-item-45 lang-item-lt menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-lt"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/lt/esta-lietuva/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAApVBMVEX71gD70gD4zQDywgDrtgD964D853P85mT44Vr/1AD741T64Uj33TnSyADr5n/m4WHl31ni3FDf2EXa0jGsnAAAgwByyHNTu1NLuEtDtEM9sD00rTQpqSkgpSEYoBgANwAAewARnREAKgCuAADbemnRVUHJRC/FNiHAKRO9IA13AADeAADxYmPrPT3pMzPlKiroICDkDw/DAADtV1fpSEi7AADQAADGbSmAAAAAT0lEQVR4AQXBAQrCAAwAsdzayUD0/18VhpokhCC1EBL3XveBIfHVqyQRv2OvkkrqPo8nqVRNs5RSGuy8IxKdu1dJCb6zPIiPxKzfwH0y8Acxgwm2SrNBGgAAAABJRU5ErkJggg==" alt="Lietuviškai" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Lietuviškai</span></a></li>
                                <li id="menu-item-11890-hu" class="lang-item lang-item-50 lang-item-hu menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-hu"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/hu/esta-hungary/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAm0lEQVR4AWM4x4AFHUZF2xAILP2yogINPcvIgKCnUVEQ9MjPD4hWwjUgS0DQPXsHCLqppQVBQDZCA0HVCA1/McAvJPAVFTx79oyBsGpMDQilmKoxNTA4MiStT3aY5wBBJtNMgEh7grZKr4pst6x4u7hAswAQcddyAwUZGBmgGgiqRtcARAFLAuAIrh9uBMQUqAYGTRgSgSFGnAgA0U0GZhH1QEwAAAAASUVORK5CYII=" alt="Magyar" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Magyar</span></a></li>
                                <li id="menu-item-11890-nl" class="lang-item lang-item-55 lang-item-nl menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-nl"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/nl/esta-nederland/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAY1BMVEX/AAD8AADzAADqAAD/fYz+dYT6aHr7XG36VGb6R1f4L0H/ECz+mKXw8fH9/f36+vr19vbW1tbS0tIAG493n89cjcZNgsA/eLkzcbUpaLAcYKwAAFEAA4ANU6UAADsAAHgAAGcSgiW+AAAAS0lEQVR4AQXBiQ3CQBAAMc/dConQf688SoIdBIIyQiR9R0tCuM2rNxHpMqsDIWiBEE4NgnBiHhVJcs48P0uSjXsPl4hLmH2EHzb4A7DPDGppZMSwAAAAAElFTkSuQmCC" alt="Nederlands" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Nederlands</span></a></li>
                                <li id="menu-item-11890-nb" class="lang-item lang-item-60 lang-item-nb menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-nb"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/nb/esta-visum-norge/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAS1BMVEXiAAD+/v4EVNHaAQHPAADyeniUuevvamjuXlzqS0jBAAB6puXoPz3lMjDjJyX6+vr19fXm5uZuneJild5QiNkADK/fExG0AADu7u75QkE3AAAAX0lEQVR4AQXBWQoCMRAFwHrpjhsI3v+OfgtmnFgVJHsXBDEdc/UgRJo65mpKZBkAJaIkeDQE0unpSgj26L3u/Ahw9ujvhTPbDZ/HoES44R2p6Xr0Vwlxb4fXr5bTE/wBnWoXiyWjuXcAAAAASUVORK5CYII=" alt="Norsk" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Norsk</span></a></li>
                                <li id="menu-item-11890-pl" class="lang-item lang-item-65 lang-item-pl menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-pl"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/pl/esta-polska/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAPFBMVEX/8fH67Ozz5ubt4OD+/v77+/v39/fo2Nj5AAD+jo79bW36X1/4T0/5QUHhAAD3MzP0Kir2ICDzERHtAACO5h0ZAAAAQUlEQVR4AQXBsRHDMAwAMTzNwvuvm5MVIECIZIEQZ4EQ7AAIGBABegsR+Z7VxChx7hCjhIwYJcTydcgQ1gv8Lhd/58kJTU6WtnIAAAAASUVORK5CYII=" alt="Polski" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Polski</span></a></li>
                                <li id="menu-item-11890-pt" class="lang-item lang-item-70 lang-item-pt menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-pt"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/pt/esta-portugal/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAABL0lEQVR4AV2RA2yEQRCFNxcnRVw3qG3bthXUbZxaUaOGRVA7ro2wDWoEtW2b9/b2nHx3v943uztDSAwhAQJ86P83keCJw2HcEAJoqLivmJHbnQt+s7OFfMXHMz5DAgBPCKBCUktSRmdK43Dw3Gz451TIc68nPr+7uLzZWr2Zm78bGLxpa797e1+IC0erUeAmL+ol3R8CEE+/qqvDv2BbwjYi6yJR+6Ys5m5zA0C7HbWEIEy/KCpKC8uzQRf5fkivX3zBZIIw/Swvj8cTKthRIbDGDwcYnXRF7avy/KM5q8NZg2cDPWEaYHt8AceFACBsTdui9nmn8VWmpngawN+ngiEVHCocGM5Vpu8G0rUB5iAS0CKAYwCsg/YB1lPWKESBSCAqhMiKwHQueJwI2BeDC83C2lDIxUCuAAAAAElFTkSuQmCC" alt="Português" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Português</span></a></li>
                                <li id="menu-item-11890-sk" class="lang-item lang-item-75 lang-item-sk menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-sk"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/sk/esta-slovaska/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAABJElEQVR4AW3PA2zccRQH8F8u9haO0S2Yg612XJtB7aC2bdttnLRBGda2bdtnfXvWy+f4fyTc11e1mHf3Ii9XN3B/di7yVsBXDA6HK8USBkMYNBrt8uBIXEBraqMVV8JDTgkop4pCVGDkttred/caGcv18uAeHnCyMphOzgW1h5BaciQSnbML+IdQegj5OJNee/UQEMadm8XGqEFBQuKyTdAWmHuvAZqCW+gWIc2yAvkJwWErStmaDssKBctDe5kRI8iDw64RPEOBfDbgHxSQAUKO4vJx6PboFvLwjp+Lek4w99cMpr+ZwMRXPfxTQAh5pVCwDMPYGHc/dHTh/enHDxqVCs/v30khDf8fSguwtwjDzAxQDy///4sgFWQFIjeEKDlURwBP5kav+V3UtwAAAABJRU5ErkJggg==" alt="Slovenčina" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Slovenčina</span></a></li>
                                <li id="menu-item-11890-sl" class="lang-item lang-item-80 lang-item-sl menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-sl"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/sl/esta-slovenija/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAk1BMVEX19fXw8PLs7Ozn5+f+/v73+Pn7+/uKj+N2e9ECDcSTmuXh4fR3f99tdt1lbddbZNVMV9QAAJgAALj0srhBTNE1Q80qOsshMMgUJsUAAIOXV6SrY56nXpskNsyFABDJb5S4RHauMGeoIVyjFlOfEE48AAD1AgL8ZWX4QUH2NDT0KSnzExPuAADgAAD7Xl75UlLnAABeY+lpAAAAYElEQVR4AQXBQU7DUBBAMb+fKSFSV11y//OxRNAqDXaASMjIxcLltTZrW8u1uHjdzNG5FUXe2xzP4/sRKZ2z2L8OUsLox0j7M5h7Ibqlc+azJEHvbezij+hi/H5gBif8A00ZE63V8hIaAAAAAElFTkSuQmCC" alt="Slovenščina" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Slovenščina</span></a></li>
                                <li id="menu-item-11890-fi" class="lang-item lang-item-85 lang-item-fi menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-fi"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/fi/esta-suomi/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAPFBMVEXm6/Pl6/UAKb7b4OvS2OTEzNr9/f6DpeX5+fn09PRjjN1VgtlLetVActEyaM0AAIm9xNW4wM8AAJ2ossIJ2VMtAAAATUlEQVR4AQXBQQrCQBRAsbzfURDB+19UXFinJqEIpNyJi0HfBQfnQFcLMIg0twOR9FsLJIkMJACrtiNnwBqbFPhoGbau4EGHvNjvJzF/+bYNXW6C7PcAAAAASUVORK5CYII=" alt="Suomi" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Suomi</span></a></li>
                                <li id="menu-item-11890-sv" class="lang-item lang-item-90 lang-item-sv menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-sv"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/sv/esta-visum-sverige/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAXVBMVEUAP4H9wAAAKnQAHmsAEF8AB1QAAEd7sct5r8r+5HX943BopcNcnr9Qlrf93VFBjbI2hq0rfqgAADf72UcieqT51jn40i72ziL0yxTmiwD00DQUcKEMaJsAABztngB+lbt6AAAAVklEQVR4AUXHBWEDQABD0fcPhgrmX+KYuW04QXRgzpUi8ZzzbfA5JB9zCDZpTlYNtgtJrQHb+Pv/6/SxqrczvU7nct8I8ve5XnrveXvzJqaW3HDHNfgCGFkLqHdB0OIAAAAASUVORK5CYII=" alt="Svenska" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Svenska</span></a></li>
                                <li id="menu-item-11890-is" class="lang-item lang-item-95 lang-item-is menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-is"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/is/esta-island/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAVFBMVEUAKZr9/f7cAAAAEIsABYEAAHgAAG+IqNXveXh2mcxqkMhYg8EAAFvrWFdNe7xCcrY5bLPoUE/6+vr29vbp6unmQD/kMzLfIiG7AAArYa4gWagAAEQfdUNsAAAAXElEQVR4ASXHxWEFIABAsTyg7vuvWf8uuSWowyDJcsf/7d8tohYjN3+DKVuD4PooeI9Aq9sbyySxn8WHuQtQ83a4m/ttHujreWDK9Vg5bNdmbOaXyLLVWNv23sARUJUSnKgk0YcAAAAASUVORK5CYII=" alt="Íslenska" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Íslenska</span></a></li>
                                <li id="menu-item-11890-cs" class="lang-item lang-item-100 lang-item-cs menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-cs"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/cs/esta-ceska-republika/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAy0lEQVR4AWPgijnase7BV1TwHhU8e/4cjkAaJm1/ev7ep39I4A8M/AKDHzBw9+5dkIZZu5/Vrnpw4MpbPEqB1qJoALoqf8UToB7sqmEAxQYggujBVI2igcl/L9APQNXli+4AUe682ydaZ32aBUUf+vrgCMi9wcgI1QBXvTG7842FxStdXSB6qagIRM9FRIDoKS8vUOQYAwNUA0HVCA0MtluAPiagGlMD0N0fQkKA6J2HBwQBNUMQUB3cFKiGGAZeoG+Q0VkGBjg6hooAVlRUK2riHnwAAAAASUVORK5CYII=" alt="Čeština" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Čeština</span></a></li>
                                <li id="menu-item-11890-el" class="lang-item lang-item-105 lang-item-el menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-el"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/el/esta-greece/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAaVBMVEUJO8bU1dgENMQAILwACbAABKNNctT////+/v74+fv09fjj4+PDzuy9yOm3xOeBhM6OpN6Hn919ltw5ZNHw8vXr7fXJy9czXs4tWs0oVcoGG6rl5++ZrOHV3PCBgsmmt+YIMKKrscgAAI7AuEORAAAAXUlEQVR4ATXKgQbDMACE4e/ayGgMG8DW93+6GmwCWztE8bvDF+KYhFHUZDdD0NO+QRHDjqcQYf9kKpOms5wCXE8x57EFwgJbnnkhI8ct9XLHD2/SStYeUI1JQbAC/u0uEcnG0vheAAAAAElFTkSuQmCC" alt="Ελληνικά" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">Ελληνικά</span></a></li>
                                <li id="menu-item-11890-tw" class="lang-item lang-item-115 lang-item-tw menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-tw"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/tw/esta-taiwan/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAVFBMVEUAILQAGrEAEazhAAD5AADwAACBot+5ued2mNv6aWv7X1/5UVHoAACWltz5+fz+/v5ahNPyRkv5QkL5OTn2MTH3Kir1JiZOe87rOkb1Hh70FRXyDQ3JFHMOAAAAU0lEQVR4AQXBgQ3CMBAAMV8+Iuy/LKhUgB0kRchDfksRbU59R1Xd14If51QNK3Ndc6im7Hg63DVhr/kct2pSr8WRahIWUk1i2XrHo7tYbB8IL/AHd28PeH6kKkoAAAAASUVORK5CYII=" alt="中文 (台灣)" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">中文 (台灣)</span></a></li>
                                <li id="menu-item-11890-ko" class="lang-item lang-item-120 lang-item-ko menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-ko"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/ko/esta-korea/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAh1BMVEXx9/Xt8vLp7+/l6urg5eT+/v7a29vGxsb19fXz8vO8u7zLy8v5+fnr6+qKiop+fX782dlkY2N3d3fZ4d+ur6799vX6kZD7RUX6Pz75eHXo6OjzsrbpOkO2nsRkbb9RasbHeZPS2tirxfAybtqkrdrU1tR6ouZskt1VVVVpaWnI1e3O09Gfn58iHIdTAAAAh0lEQVR4ASXIA3JEARQF0b4PsW0Vs//1xDbGno8+xRZ1KqBKImkEhKThMGBO6rDIsL+opq0G9OZyRkW/PhJ4Yf1tfaKw+BoZvWLQ9mUrmulIHJhg29M9I3IMGJy1lp5ng7ievZDC4Ibt4/vZ2fvLLYkZt/noD8ednx+0+N5nXSYEqzQOYQGYAgnRIeEuj5p0AAAAAElFTkSuQmCC" alt="한국어" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">한국어</span></a></li>
                                <li id="menu-item-11890-ja" class="lang-item lang-item-125 lang-item-ja menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11890-ja"><a class="dropdown-item" href="https://www.usimmigrationsupport.org/ja/esta-japan/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAPFBMVEX09PTy8fHy6+vm5+b+/v77+/v29vbf39/5vLz5fHz6qqr6UFD7QUH5NDT3lZXa2tr419f3JibT09P2WloskN4YAAAAVUlEQVR4AQXBQU7FMBBAMb90hCoW3P+csCAKfIodIBIyQJAGmPQTDHgrzca94K/keT/nWOgjmdm4VvIpwy1GXOsZ9ndYYL/Wee3IRI/fr4PQCuPmAv/RTRUh24Q4UgAAAABJRU5ErkJggg==" alt="日本語" width="16" height="11" style="width: 16px; height: 11px;"><span style="margin-left:0.3em;">日本語</span></a></li>
                            </ul>
                        </li>
                    </ul>            </div>
            </div>
        </div>
    </section>





    <section id="disclaimer-top" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col my-2 text-gray-900">
                    <p>U.S. Immigration Support is an information website not affiliated with the United States government.</p>
                </div>
            </div>
        </div>
    </section>







    <section id="eligibility-form" class="py-32 py-md-128">
        <div class="container">
            <div class="form-wrapper row">
                <div class="col-12 col-xl-6 offset-xl-3">

                    <!-- STEP 1 -->
                    <section id="eligibility-form-step-1-section" class="form-step">
                        <form autocomplete="off" id="eligibility-form-step-1"  method="get">
                            <div class="step-header">
                                <div class="w-75">
                                    <h2 class="text-text-primary mb-16">
                                        Start ESTA Application                                        </h2>
                                </div>
                            </div>

                            <div class="step-row">
                                <label for="citizenship-country">Which country issued your passport?</label>
                                <select name="citizenship-country" id="citizenship-country">
                                    <option value="" disabled selected>Select country</option>
                                    @foreach($country as $c)
                                        <option value="{{ $c->countryCode }}">{{ $c->countryName }}</option>
                                    @endforeach
                                </select>
                                <div id="errorCitizenship" class="text-danger" style="display: none">Please select your citizenship</div>
                            </div>

                            <div class="step-row">
                                <label for="has-secondary-citizenship" class="form-item-wrapper">
                                    <input type="checkbox" name="has-secondary-citizenship" id="has-secondary-citizenship">
                                    <span>
                                        Check the box if you hold more than one passport                                    </span>
                                </label>
                            </div>

                            <div id="secondary-citizenship-container" class="step-row d-none">
                                <label for="citizenship-country-secondary">
                                    Select your second passport                                    </label>
                                <select name="citizenship-country" id="citizenship-country">
                                    <option value="" disabled selected>Select country</option>
                                    @foreach($country as $c)
                                        <option value="{{ $c->countryCode }}">{{ $c->countryName }}</option>
                                    @endforeach
                                </select>
                                <div id="errorSecondaryCitizenship" class="text-danger"></div>
                            </div>
                            <hr>

                            <div class="step-row mx-md-2">
                                <div id="reason-for-travel" class="mb-4">
                                    <label class="text-dark mb-2">
                                        Select reason for traveling to the United States                                        </label>
                                    <div class="row">
                                        <div class="col-12 col-md-4 px-md-1">

                                            <label for="reason-for-travel-tourism" class="form-item-wrapper">
                                                <input class="form-check-input mx-auto" type="radio" name="reason-for-travel" id="reason-for-travel-tourism" value="tourism">

                                                <div class="wrapper text-center my-auto">
                                                    <img class="d-none d-md-block" src="https://www.usimmigrationsupport.org/wp-content/themes/USISORG-Eligibility-K-1.1/theme/assets/images/tourism-visit.svg">
                                                    <div class="p-strong text-center mt-1">
                                                        Tourism &amp; Travel                                                                                                                                                                                                </div>
                                                </div>
                                            </label>

                                        </div>
                                        <div class="col-12 col-md-4 px-md-1">

                                            <label for="reason-for-travel-business" class="form-item-wrapper">
                                                <input class="form-check-input mx-auto" type="radio" name="reason-for-travel" id="reason-for-travel-business" value="business">

                                                <div class="wrapper text-center my-auto">
                                                    <img class="d-none d-md-block" src="https://www.usimmigrationsupport.org/wp-content/themes/USISORG-Eligibility-K-1.1/theme/assets/images/business.svg">
                                                    <div class="p-strong text-center mt-1">
                                                        Business                                                                                                                                                                                                </div>
                                                </div>
                                            </label>

                                        </div>
                                        <div class="col-12 col-md-4 px-md-1">

                                            <label for="reason-for-travel-transit" class="form-item-wrapper">
                                                <input class="form-check-input mx-auto" type="radio" name="reason-for-travel" id="reason-for-travel-transit" value="transit">

                                                <div class="wrapper text-center my-auto">
                                                    <img class="d-none d-md-block" src="https://www.usimmigrationsupport.org/wp-content/themes/USISORG-Eligibility-K-1.1/theme/assets/images/transit.svg">
                                                    <div class="p-strong text-center mt-1">
                                                        Transit                                                                                                                                                                                                </div>
                                                </div>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                        <div class="step-row mt-16 mt-md-24 text-center">

                            <button  id="form_1_proceed" class="btn btn-success text-white text-uppercase">
                                Proceed to Application</button>
                        </div>
                    </section>

                    <!-- STEP 2 -->

                    <section id="eligibility-form-step-2-section" class="form-step">
                        <form autocomplete="off" id="eligibility-form-step-2" action="#" method="get">

                            <div class="append-data"></div>
                        </form>
                    </section>


                    <section id="eligibility-form-step-add-form-section" class="form-step">
                        <form autocomplete="off" id="eligibility-form-step-2-custom" action="#" method="get">
                            <div class="summary mb-16 d-flex" id="eligibility-form-step-2-outcome"><img src="{{ asset('app-logo/tick.png')  }}" alt="esta-eligibility-checker-eligible">
                                <h2 style="padding-top: 15px;" class="text-center">Personal Details<br>
                                </h2>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Legal Name</label>
                                    <input type="text" name="fullName" class="form-control" id="fullName" required>
                                    <div class="invalid-feedback">Please enter your full legal name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" name="firstName" class="form-control" id="firstName" required>
                                    <div class="invalid-feedback">Please enter your first name.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="middleName" class="form-label">Middle Name</label>
                                    <input type="text" name="middleName" class="form-control" id="middleName" required>
                                    <div class="invalid-feedback">Please enter your middle name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text"  name="lastName" class="form-control" id="lastName" required>
                                    <div class="invalid-feedback">Please enter your last name.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="phoneNumber" class="form-label">Phone No</label>
                                    <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" required>
                                    <div class="invalid-feedback">Please enter your phone number.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="confirmEmail" class="form-label">Confirm Email</label>
                                    <input type="email" name="confirmEmail" class="form-control" id="confirmEmail" required>
                                    <div class="invalid-feedback">Please confirm your email address.</div>
                                </div>
                            </div>


                        </form>
                        <div class="step-row mt-16 mt-md- text-center">
                            <button id="eligibility-form-step-2-submit-123" class="btn btn-success text-white text-uppercase ajax-request">Proceed To Application</button>
                        </div>
                    </section>

                    <!-------------------------CUSTOM-------------------->


                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <section class="py-24">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <h1>Visiting USA with a B-2 Tourist Visa or Travel Authorization (ESTA)</h1>
                        <p>All foreigners visiting the United States of America need to hold a valid visa or travel authorization (ESTA) unless they are green card holders. While a visa is issued by a US embassy, the travel authorization is applied for an issued online. The Electronic System for Travel Authorisation (ESTA) serves as an online platform designed to facilitate the application process for the U.S. Visa Waiver Program. For individuals planning to travel to the USA via air or sea, obtaining travel authorisation through ESTA is a prerequisite before embarking on their journey.</p>
                    </div>
                    <div class="col-12 col-lg-2 my-auto">
                        <img class="w-100 ps-lg-5" src="{{ asset('app-logo/Frame-27535.png')  }}" alt="ESTA Application">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>What are the requirements to apply for an ESTA?</h1>
                <p>Eligibility for the Visa Waiver Program is exclusive to citizens from 41 qualifying countries. To secure travel authorisation, an ESTA application must be duly completed. Additionally, a biometric passport featuring a microchip and the relevant symbol on its cover is mandatory. The Visa Waiver Program permits stays of up to 90 days, encompassing purposes such as tourism, business, transit, healthcare, or participation in non-credited study programs.</p>
                <p>It is recommended that travellers apply for ESTA prior to making any hotel or flight reservations, as there may be a need for a full visa. Once your ESTA application receives approval, you have the option to update it with final itinerary details before your departure</p>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>&nbsp;</p>
                <div class="row flag-list d-flex justify-content-between mx-0">
                    <h2 class="px-0">The 41 Visa Waiver Program Member Countries:</h2>
                    <div class="col-12 py-1">
                    </div>
                    <div class="col-6 px-0 col-md-auto order-1">
                        <ul>
                            <li><img decoding="async" src="{{ asset('country/ad.png') }}" alt="ESTA Countries">  Andorra</li>
                            <li><img decoding="async" src="{{ asset('country/au.png') }}" alt="ESTA Countries">  Australia</li>
                            <li><img decoding="async" src="{{ asset('country/at.png') }}" alt="ESTA Countries">  Austria</li>
                            <li><img decoding="async" src="{{ asset('country/be-min.png') }}" alt="ESTA Countries">  Belgium</li>
                            <li><img decoding="async" src="{{ asset('country/bn-min.png') }}" alt="ESTA Countries">  Brunei</li>
                            <li><img decoding="async" src="{{ asset('country/cl-min.png') }}" alt="ESTA Countries">  Chile</li>
                            <li><img decoding="async" src="{{ asset('country/cr.png') }}" alt="ESTA Countries">  Croatia</li>
                            <li><img decoding="async" src="{{ asset('country/cz-min.png') }}" alt="ESTA Countries">  Czech Republic</li>
                            <li><img decoding="async" src="{{ asset('country/dk-min.png') }}" alt="ESTA Countries">  Denmark</li>
                        </ul>
                    </div>
                    <div class="col-6 px-0 col-md-auto order-3 order-md-2">
                        <ul>
                            <li><img decoding="async" src="{{ asset('country/ee-min.png') }}" alt="ESTA Countries">  Estonia</li>
                            <li><img decoding="async" src="{{ asset('country/fi-min.png') }}" alt="ESTA Countries">  Finland</li>
                            <li><img decoding="async" src="{{ asset('country/fr-min.png') }}" alt="ESTA Countries">  France</li>
                            <li><img decoding="async" src="{{ asset('country/de-min.png') }}" alt="ESTA Countries">  Germany</li>
                            <li><img decoding="async" src="{{ asset('country/gr-min.png') }}" alt="ESTA Countries">  Greece</li>
                            <li><img decoding="async" src="{{ asset('country/hu-min.png') }}" alt="ESTA Countries">  Hungary</li>
                            <li><img decoding="async" src="{{ asset('country/is-min.png') }}" alt="ESTA Countries">  Iceland</li>
                            <li><img decoding="async" src="{{ asset('country/ie-min.png') }}" alt="ESTA Countries">  Ireland</li>
                            <li><img decoding="async" src="{{ asset('country/il-min.png') }}" alt="ESTA Countries">  Israel</li>
                        </ul>
                    </div>
                    <div class="col-6 px-0 col-md-auto order-5 order-md-3">
                        <ul>
                            <li><img decoding="async" src="{{ asset('country/it-min.png') }}" alt="ESTA Countries">  Italy</li>
                            <li><img decoding="async" src="{{ asset('country/jp-min.png') }}" alt="ESTA Countries">  Japan</li>
                            <li><img decoding="async" src="{{ asset('country/kr-min.png') }}" alt="ESTA Countries">  South Korea</li>
                            <li><img decoding="async" src="{{ asset('country/lv-min.png') }}" alt="ESTA Countries">  Latvia</li>
                            <li><img decoding="async" src="{{ asset('country/li-min.png') }}" alt="ESTA Countries">  Liechtenstein</li>
                            <li><img decoding="async" src="{{ asset('country/lt-min.png') }}" alt="ESTA Countries">  Lithuania</li>
                            <li><img decoding="async" src="{{ asset('country/lu-min.png') }}" alt="ESTA Countries">  Luxembourg</li>
                            <li><img decoding="async" src="{{ asset('country/mt-min.png') }}" alt="ESTA Countries">  Malta</li>
                            <li><img decoding="async" src="{{ asset('country/mc-min.png') }}" alt="ESTA Countries">  Monaco</li>
                        </ul>
                    </div>
                    <div class="col-6 px-0 col-md-auto order-2 order-md-4">
                        <ul>
                            <li><img decoding="async" src="{{ asset('country/nl-min.png') }}" alt="ESTA Countries">  Netherlands</li>
                            <li><img decoding="async" src="{{ asset('country/nz-min.png') }}" alt="ESTA Countries">  New Zealand</li>
                            <li><img decoding="async" src="{{ asset('country/no-min.png') }}" alt="ESTA Countries">  Norway</li>
                            <li><img decoding="async" src="{{ asset('country/pl-min.png') }}" alt="ESTA Countries">  Poland</li>
                            <li><img decoding="async" src="{{ asset('country/pt-min.png') }}" alt="ESTA Countries">  Portugal</li>
                            <li><img decoding="async" src="{{ asset('country/sm-min.png') }}" alt="ESTA Countries">  San Marino</li>
                            <li><img decoding="async" src="{{ asset('country/sg-min.png') }}" alt="ESTA Countries">  Singapore</li>
                            <li><img decoding="async" src="{{ asset('country/sk-min.png') }}" alt="ESTA Countries">  Slovakia</li>
                            <li><img decoding="async" src="{{ asset('country/si-min.png') }}" alt="ESTA Countries">  Slovenia</li>
                        </ul>
                    </div>
                    <div class="col-6 px-0 col-md-auto order-4 order-md-5">
                        <ul>
                            <li><img decoding="async" src="{{ asset('country/es-min.png') }}" alt="ESTA Countries">  Spain</li>
                            <li><img decoding="async" src="{{ asset('country/se-min.png') }}" alt="ESTA Countries">  Sweden</li>
                            <li><img decoding="async" src="{{ asset('country/ch-min.png') }}" alt="ESTA Countries">  Switzerland</li>
                            <li><img decoding="async" src="{{ asset('country/tw-min.png') }}" alt="ESTA Countries">  Taiwan</li>
                            <li><img decoding="async" src="{{ asset('country/gb-min.png') }}" alt="ESTA Countries">  United Kingdom</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-12 py-1">
    </div>  <div class="col-12 py-1">
    </div>


    <div class="container">
        <div class="row mx-0 py-12 border-1-4">
            <div class="col-12">
                <h2>Checklist for visiting the United States of America</h2>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="check-green">
                    <li>Valid Passport</li>
                    <li>Approved ESTA, visa or other travel authorization</li>
                    <li>Travel Insurance</li>
                    <li>Itinerary and accommodation details</li>
                    <li>Emergency Contacts</li>
                    <li>Travel Maps and Apps</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="check-green">
                    <li>Internet Access</li>
                    <li>Methods of payment and local currency (USD)</li>
                    <li>Transportation Options</li>
                    <li>Read the latest news</li>
                    <li>Language Translation App (If Needed)</li>
                    <li>Adaptors for 110V</li>
                </ul>
            </div>
        </div>
    </div>





    <footer id="site-footer" class="bg-atlantic-blue py-20 py-md-64">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 text-center text-lg-start mb-20 my-lg-auto">

                    <img class="navbar-brand" src="{{ asset('app-logo/logo-main.png') }}" alt="US Immigration support">

                </div>

                <div class="col-12 col-lg-7 my-auto">
                    <div class="wrapper popup-control d-grid text-center text-lg-end d-md-flex
                justify-content-md-center
                justify-content-lg-end">
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#terms" data-bs-toggle="modal" data-bs-target="#terms">Terms &
                            Conditions</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#privacy" data-bs-toggle="modal" data-bs-target="#privacy">Privacy Policy</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#cookies" data-bs-toggle="modal" data-bs-target="#cookies">Cookies</a>
                        <a type="text-white button" href="#contact" data-bs-toggle="modal" data-bs-target="#contact">Contact</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>






    <section class="bg-gray-50 py-3" id="footer-disclaimer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0" style="text-align: center;">U.S. Immigration Support is owned and operated by a private company. Our mission is to help immigrants and travelers through the complex United States immigration system with our do-it-yourself immigration guides and travel authorization consultancy. We are not a law firm, and our website does not provide legal advice. We are not affiliated with the the United States government. All applicants have the option file their submission directly at uscis.gov or travel.state.gov without our assistance. U.S. Immigration Support is a division of ETAS Travel LLC, which is affiliated with a U.S. law firm.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container-xxl">
        <div class="row pt-3">
            <div class="col-sm ">
                <p class="text-center">&copy; 2024 U.S. IMMIGRATION SUPPORT - All Rights
                    Reserved</p>
            </div>
        </div>
    </div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('#has-secondary-citizenship').change(function(){
            if($(this).is(":checked")) {
                $('#secondary-citizenship-container').removeClass('d-none');
            } else {
                $('#secondary-citizenship-container').addClass('d-none');
            }
        });



        $('#eligibility-form-step-2-section').hide();
        $('#eligibility-form-step-add-form-section').hide();

        var citizenshipCountry = $('#citizenship-country');
        var errorCitizenship = $('#errorCitizenship');

        errorCitizenship.hide();

        citizenshipCountry.change(function() {
            if (citizenshipCountry.val() !== "") {
                errorCitizenship.hide();
            }
        });

        // Event listener for button click
        $('#form_1_proceed').click(function() {
            if (citizenshipCountry.val() === "" || citizenshipCountry.val() === null) {
                errorCitizenship.show();
                return;
            }

            $('#eligibility-form-step-add-form-section').show();
            $('#eligibility-form-step-1-section').hide();
            $('#eligibility-form-step-2-section').hide();
        });


        var imagePath = "";
        $('.form-control').focusout(function() {
            $(this).removeClass('is-invalid');
        });
        $('#eligibility-form-step-2-submit-123').click(function(event){

            var form = $('#eligibility-form-step-2-custom')[0];

            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();

                $(form).addClass('was-validated');

                $('.form-control').each(function() {
                    if (!this.validity.valid) {
                        $(this).addClass('is-invalid');
                    }
                });

                return;
            }

            $('#eligibility-form-step-1-section').hide();
            $('#eligibility-form-step-add-form-section').hide();
            $('#eligibility-form-step-2-section').show();
            event.preventDefault(); // Prevent default form submission
            var selectedCountry = $('#citizenship-country').val();
            $.ajax({
                url: '/get_country',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { selectedCountry: selectedCountry },
                success: function (response) {
                    var checkActive = response.country[0].is_active;
                    var countryName = response.country[0].countryName;
                    var isoName = "(" + response.country[0].isoAlpha3 + ")";
                    if(checkActive == 1){
                         imagePath = "{{ asset('app-logo/tick.png') }}";
                        var eligibleText = `<h2 class="text-center">Congratulations!<br>You are eligible to apply for ESTA</h2>`;
                    }else{
                         imagePath = "{{ asset('app-logo/wrong.png') }}";
                        var eligibleText = `<h2 class="text-center">You are not eligible for ESTA Apply for Tourist Visa to visit the United States</h2>`;
                    }
                    var sectionHtml =`<div class="summary mb-16 d-flex" id="eligibility-form-step-2-outcome">
                                        <img src="${imagePath}" alt="esta-eligibility-checker-eligible">
                                        ${eligibleText}
                                    </div>
                                    <div class="step-row d-flex bg-gray-50 border-0-4 p-8" id="citizenship-meta">
                                        <div class="col-6">
                                            <span class="meta-key">Citizenship:</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="meta-value">${countryName} ${isoName}</span>
                                        </div>
                                    </div>
                                    <div class="step-row d-flex bg-gray-50 border-0-4 p-8" id="length-of-stay-meta">
                                        <div class="col-6">
                                            <span class="meta-key">Max length of stay:</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="meta-value">90 Days</span>
                                        </div>
                                    </div>
                                    <div class="step-row d-flex bg-gray-50 border-0-4 p-8" id="type-meta">
                                        <div class="col-6">
                                            <span class="meta-key">Recommended visa type:</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="meta-value">ESTA</span>
                                        </div>
                                    </div>
                                    <div class="step-row bg-gray-50 border-0-4 p-8">
                                        <div class="col-12 px-0 d-flex">
                                            <p class="billing-label my-auto">
                                                Do you live in the same country as your citizenship?
                                            </p>
                                            <div class="d-flex my-auto ms-auto">
                                                <div class="form-check">
                                                    <label class="form-item-wrapper" for="is-billing-country-not-residence-yes">
                                                        <input type="radio" id="is-billing-country-not-residence-yes" name="is-billing-country-not-residence" value="yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check ms-4">
                                                    <label class="form-item-wrapper" for="is-billing-country-not-residence-no">
                                                        <input type="radio" id="is-billing-country-not-residence-no" name="is-billing-country-not-residence" value="no">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="errorConfirmCountryYouLiveInRadio" class="text-danger"></div>
                                        <div class="col-12">
                                            <div id="billing-country-wrapper" class="wrapper d-none mt-24">
                                                <label for="country">
                                                    Select the country you live in:
                                                </label>
                                                <select name="billing-country">
                                                    <option value="" disabled="" selected="">Select country</option>

                                                </select>
                                            <div id="errorConfirmCountryYouLiveInCountry" class="text-danger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-row mt-16 mt-md- text-center">
                                    <button type="submit" id="eligibility-form-step-2-submit" class="btn btn-success text-white text-uppercase">APPLY NOW</button>
                                </div>`;

                    $('.append-data').append(sectionHtml);

                    $('input[name="is-billing-country-not-residence"]').change(function(){
                        if($(this).val() === 'no') {
                            $('#billing-country-wrapper').removeClass('d-none');
                        } else {
                            $('#billing-country-wrapper').addClass('d-none');
                        }
                    });
                    var countries = <?php echo json_encode($country); ?>; // Assuming $country is available in JavaScript
                    var selectDropdown = document.querySelector('select[name="billing-country"]');

                    countries.forEach(function(country) {
                        var option = document.createElement('option');
                        option.value = country.countryCode;
                        option.textContent = country.countryName;
                        selectDropdown.appendChild(option);
                    });


                },
                error: function (error) {
                    console.error("Error sending data to server:", error);
                }
            });
        });



    });
</script>




