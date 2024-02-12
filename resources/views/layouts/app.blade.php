<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'U.S. Immigration Support') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dist/css/custom.css')  }}">
    <link rel="stylesheet" href="{{ asset('dist/css/b5st9632.css')  }}">
    <link rel="stylesheet" href="{{ asset('dist/css/styles.css')  }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
                            @endif

                            @if (Route::has('register'))
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<script type="c8afb60f36a3fdc0ba218d80-text/javascript">
    window._ELIGIBILITY_FORM_OPTIONS = {"language":"en","vwpLabels":{"heading":"<h2 class=\"text-center\">Congratulations!<br \/>\nYou are eligible to apply for ESTA<\/h2>\n","citizenshipPrefix":"Citizenship:","lengthPrefix":"Max length of stay:","length":"90 Days","typePrefix":"Recommended visa type:","type":"ESTA","text":"<div class=\"col-md-6 p-0\">\n<p class=\"text-strong\"><strong>ESTA Eligibility:<\/strong><\/p>\n<ul>\n<li><span dir=\"ltr\" role=\"presentation\">You are a citizen of one of the Visa Waiver Countries<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">You will travel to the US for 90 days or less<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">You will travel for business or pleasure<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">You are not in possession of a visitor visa<\/span><\/li>\n<\/ul>\n<\/div>\n<div class=\"col-md-6 p-0 mb-3 mb-md-0\">\n<p class=\"text-strong\"><strong>What you need to apply for ESTA:<\/strong><\/p>\n<ul>\n<li><span dir=\"ltr\" role=\"presentation\">A valid passport<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">A valid email address<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">Your home address and phone number<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">Your emergency contact&#8217;s phone number and email<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">A valid credit card with available funds<\/span><\/li>\n<\/ul>\n<\/div>\n","submit":"APPLY NOW","url":"https:\/\/www.onlineimmigration.com\/en\/esta-application.html\/step1"},"nonVwpLabels":{"heading":"<h2 class=\"text-center\" style=\"text-align: center;\">You are not eligible for ESTA<br \/>\nApply for Tourist Visa to visit the United States<\/h2>\n","citizenshipPrefix":"Citzienship:","lengthPrefix":"Max length of stay:","length":"180 Days","typePrefix":"Recommended visa type:","type":"B1 \/ B2 Visa","text":"<div class=\"col-12 p-0\">\n<p class=\"text-strong\"><strong>Benefits of a United States Visitor Visa<\/strong><\/p>\n<ul>\n<li><span dir=\"ltr\" role=\"presentation\">Access to the United States for travel and exploration.<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">Experience tourism and leisure in iconic locations.<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">Business opportunities for conferences and meetings.<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">Reunite with family members residing in the U.S.<\/span><\/li>\n<li><span dir=\"ltr\" role=\"presentation\">Engage in short-term educational pursuits and cultural exchange.<br role=\"presentation\" \/><\/span><\/li>\n<\/ul>\n<p>&nbsp;<\/p>\n<p>Click the button below to learn more.<\/p>\n<\/div>\n","submit":"APPLY NOW","url":"https:\/\/www.onlineimmigration.com\/en\/pdf\/b-2-tourist-visa-application-guide-en\/step1"},"vwpCountries":["ANDORRA (AND)","AUSTRALIA (AUS)","AUSTRIA (AUT)","BELGIUM (BEL)","BRUNEI (BRN)","CHILE (CHL)","CROATIA (HRV)","CZECH REPUBLIC (CZE)","DENMARK (DNK)","ESTONIA (EST)","FINLAND (FIN)","FRANCE (FRA)","GERMANY (DEU)","GREECE (GRC)","HUNGARY (HUN)","ICELAND (ISL)","IRELAND (IRL)","ITALY (ITA)","JAPAN (JPN)","LATVIA (LVA)","LIECHTENSTEIN (LIE)","LITHUANIA (LTU)","LUXEMBOURG (LUX)","MALTA (MLT)","MONACO (MCO)","NETHERLANDS (NLD)","NEW ZEALAND (NZL)","NORWAY (NOR)","POLAND (POL)","PORTUGAL (PRT)","SAN MARINO (SMR)","SINGAPORE (SGP)","SLOVAKIA (SVK)","SLOVENIA (SVN)","SOUTH KOREA (KOR)","SPAIN (ESP)","SWEDEN (SWE)","SWITZERLAND (CHE)","TAIWAN (TWN)","UNITED KINGDOM (GBR)","ISRAEL (ISR)"],"countriesToIom":["AUSTRIA (AUT)","BELGIUM (BEL)","CROATIA (HRV)","CZECH REPUBLIC (CZE)","DENMARK (DNK)","ESTONIA (EST)","FINLAND (FIN)","FRANCE (FRA)","GERMANY (DEU)","GREECE (GRC)","HUNGARY (HUN)","IRELAND (IRL)","ITALY (ITA)","LATVIA (LVA)","LITHUANIA (LTU)","LUXEMBOURG (LUX)","MALTA (MLT)","NETHERLANDS (NLD)","POLAND (POL)","PORTUGAL (PRT)","SLOVAKIA (SVK)","SLOVENIA (SVN)","SWEDEN (SWE)","SWITZERLAND (CHE)"],"countriesToCy":["JAPAN (JPN)","TAIWAN (TWN)","AUSTRALIA (AUS)","NEW ZEALAND (NZL)","UNITED KINGDOM (GBR)","SOUTH KOREA (KOR)","SINGAPORE (SGP)","NORWAY (NOR)","ISRAEL (ISR)","ICELAND (ISL)","BRAZIL (BRA)","ARGENTINA (ARG)","UNITED STATES (USA)","CANADA (CAN)"],"errorCitizenshipEmpty":{"en":"Please select your citizenship","cs":"Vyberte pros\u00edm sv\u00e9 ob\u010danstv\u00ed","da":"V\u00e6lg dit statsborgerskab","de":"Bitte w\u00e4hlen Sie Ihre Staatsb\u00fcrgerschaft aus","el":"\u03a0\u03b1\u03c1\u03b1\u03ba\u03b1\u03bb\u03ce \u03b5\u03c0\u03b9\u03bb\u03ad\u03be\u03c4\u03b5 \u03c4\u03b7\u03bd \u03c5\u03c0\u03b7\u03ba\u03bf\u03cc\u03c4\u03b7\u03c4\u03ac \u03c3\u03b1\u03c2","es":"Por favor, seleccione su ciudadan\u00eda","et":"Palun valige oma kodakondsus","fi":"Valitse kansalaisuutesi","fr":"Veuillez s\u00e9lectionner votre citoyennet\u00e9","hr":"Odaberite svoje dr\u017eavljanstvo","hu":"K\u00e9rj\u00fck, v\u00e1lassza ki \u00e1llampolg\u00e1rs\u00e1g\u00e1t","is":"Vinsamlegast veldu r\u00edkisfang \u00feitt","it":"Seleziona la tua cittadinanza","ja":"\u5e02\u6c11\u6a29\u3092\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044","ko":"\uc2dc\ubbfc\uad8c\uc744 \uc120\ud0dd\ud558\uc138\uc694","lt":"Pasirinkite savo pilietyb\u0119","lv":"L\u016bdzu, izv\u0113lieties savu pilson\u012bbu","nb":"Velg statsborgerskap","nl":"Selecteer uw staatsburgerschap","pl":"Wybierz swoje obywatelstwo","pt":"Por favor, selecione a sua Cidadania","sk":"Vyberte si svoje ob\u010dianstvo","sl":"Izberite svoje dr\u017eavljanstvo","sv":"V\u00e4lj ditt medborgarskap","tw":"\u8acb\u9078\u64c7\u60a8\u7684\u516c\u6c11\u8eab\u4efd"},"errorSecondaryCitizenshipEmpty":{"en":"Please select your Secondary Citizenship","cs":"Vyberte pros\u00edm sv\u00e9 sekund\u00e1rn\u00ed ob\u010danstv\u00ed","da":"V\u00e6lg dit sekund\u00e6re statsborgerskab","de":"Bitte w\u00e4hlen Sie Ihre sekund\u00e4re Staatsb\u00fcrgerschaft aus","el":"\u03a0\u03b1\u03c1\u03b1\u03ba\u03b1\u03bb\u03ce \u03b5\u03c0\u03b9\u03bb\u03ad\u03be\u03c4\u03b5 \u03c4\u03b7 \u0394\u03b5\u03c5\u03c4\u03b5\u03c1\u03b5\u03cd\u03bf\u03c5\u03c3\u03b1 \u03a5\u03c0\u03b7\u03ba\u03bf\u03cc\u03c4\u03b7\u03c4\u03ac \u03c3\u03b1\u03c2","es":"Por favor, seleccione su Ciudadan\u00eda Secundaria","et":"Palun valige oma teisene kodakondsus","fi":"Valitse toissijainen kansalaisuutesi","fr":"Veuillez s\u00e9lectionner votre citoyennet\u00e9 secondaire","hr":"Odaberite svoje sekundarno dr\u017eavljanstvo","hu":"K\u00e9rj\u00fck, v\u00e1lassza ki m\u00e1sodlagos \u00e1llampolg\u00e1rs\u00e1g\u00e1t","is":"Vinsamlegast veldu aukar\u00edkisfang \u00feitt","it":"Seleziona la tua cittadinanza secondaria","ja":"\u4e8c\u6b21\u56fd\u7c4d\u3092\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044","ko":"\uc81c2 \uc2dc\ubbfc\uad8c\uc744 \uc120\ud0dd\ud558\uc2ed\uc2dc\uc624","lt":"Pasirinkite savo antrin\u0119 pilietyb\u0119","lv":"L\u016bdzu, izv\u0113lieties savu otro pilson\u012bbu","nb":"Velg ditt andre statsborgerskap","nl":"Selecteer uw secundair staatsburgerschap","pl":"Wybierz swoje obywatelstwo wt\u00f3rne","pt":"Por favor, selecione a sua cidadania secund\u00e1ria","sk":"Vyberte si druhotn\u00e9 ob\u010dianstvo","sl":"Izberite svoje sekundarno dr\u017eavljanstvo","sv":"V\u00e4lj ditt sekund\u00e4ra medborgarskap","tw":"\u8acb\u9078\u64c7\u60a8\u7684\u7b2c\u4e8c\u516c\u6c11\u8eab\u4efd"},"errorConfirmCountryYouLiveIn":{"en":"Confirm the country where you live","cs":"Potvr\u010fte zemi, kde \u017eijete","da":"Bekr\u00e6ft det land, hvor du bor","de":"Best\u00e4tigen Sie das Land, in dem Sie leben","el":"\u0395\u03c0\u03b9\u03b2\u03b5\u03b2\u03b1\u03b9\u03ce\u03c3\u03c4\u03b5 \u03c4\u03b7 \u03c7\u03ce\u03c1\u03b1 \u03c3\u03c4\u03b7\u03bd \u03bf\u03c0\u03bf\u03af\u03b1 \u03b6\u03b5\u03af\u03c4\u03b5","es":"Confirma el pa\u00eds donde vives","et":"Kinnitage riik, kus te elate","fi":"Vahvista asuinmaasi","fr":"Confirmez le pays o\u00f9 vous vivez","hr":"Potvrdite zemlju u kojoj \u017eivite","hu":"Er\u0151s\u00edtsd meg az orsz\u00e1got, ahol \u00e9lsz","is":"Sta\u00f0festu landi\u00f0 \u00fear sem \u00fe\u00fa b\u00fdr\u00f0","it":"Conferma il paese in cui vivi","ja":"\u304a\u4f4f\u307e\u3044\u306e\u56fd\u3092\u78ba\u8a8d\u3059\u308b","ko":"\uac70\uc8fc \uad6d\uac00 \ud655\uc778","lt":"Patvirtinkite \u0161al\u012f, kurioje gyvenate","lv":"Apstipriniet valsti, kur\u0101 dz\u012bvojat","nb":"Bekreft landet du bor i","nl":"Bevestig het land waar u woont","pl":"Potwierd\u017a kraj, w kt\u00f3rym mieszkasz","pt":"Confirme o pa\u00eds onde vive","sk":"Potvr\u010fte krajinu, v ktorej \u017eijete","sl":"Potrdite dr\u017eavo, v kateri prebivate","sv":"Bekr\u00e4fta landet d\u00e4r du bor","tw":"\u78ba\u8a8d\u60a8\u5c45\u4f4f\u7684\u570b\u5bb6\/\u5730\u5340"}};
</script>

{{--<script src="{{ asset('dist/js/eligibility-form9632.js') }}"></script>--}}
