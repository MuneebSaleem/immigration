@extends('layouts.app')
<style>

    @media (min-width: 960px) {
        /* line 126, ../../../sass/styles.scss */
        .navbar-default {
            background: #142E5D url("https://www.onlineimmigration.com/static/frontend/img/navmenubg.png") no-repeat right center;
            margin-top: 5px;
            padding-top: 15px;
        }
    }
    @media (min-width: 1200px) {
        /* line 126, ../../../sass/styles.scss */
        .navbar-default {
            width: 1440px;
            margin: auto;
        }
    }
    @media (max-width: 960px) {
        /* line 129, ../../../sass/styles.scss */
        .navbar-default .navbar-nav {
            background: #142E5D;
        }
    }
    /* line 130, ../../../sass/styles.scss */
    .navbar-default .navbar-nav li a {
        color: #fff;
        font-weight: bold;
    }
    /* line 130, ../../../sass/styles.scss */
    .navbar-default .navbar-nav li a:hover {
        color: #fff;
    }
    @media (min-width: 960px) {
        /* line 130, ../../../sass/styles.scss */
        .navbar-default .navbar-nav li a {
            padding-right: 20px;
        }
    }
</style>
@include('home_modal')
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


    <div class="row sep-spacer hidden-xs">&nbsp;</div>



    <div class="normal-content container">
        <div class="row product-page">
            <p>&nbsp;</p>
            <div class="container product-box pdf-box">
                <form id="id_wizard-form" method="post" action="/en/pdf/b-2-tourist-visa-application-guide-en/step1" novalidate="novalidate" data-validate="" data-error-class="errv">

                    <div class="visible-xs col-xs-12">
                        <div class="col-xs-12 right-box-content-block">
                            <div class="col-xs-12 no-mar no-pad">
                                <h2 class="text-center">B-2 TOURIST VISA APPLICATION GUIDE</h2>
                            </div>
                            <br>
                            <p class="text-center">
                                <img class="prod-thumb" src="/media/photo/b-2-tourist-visa-application-guide-en.jpg" alt="B-2 Tourist Visa Application Guide">
                            </p>
                            <br>
                            <p class="right-prod-price text-center no-mar no-pad">
                                <img src="/static/frontend/img/icon_pdf.png">&nbsp;PRICE US$ 9.95
                            </p>

                            <p class="text-center">

                            </p>

                            <p class="text-center">
                                <img src="/static/frontend/img/star-separator.png" style="max-width:231px; width:100%;">
                            </p>
                            <p class="text-justify">Many visitors to the U.S. need to apply for a B-2 tourist visa depending on which passport is being used. The B-2 tourist visa application process can take several months, and all tourists&nbsp; are advised to start the visa process early to avoid any trip delays. Download the Visa Application Guide for more information about how to apply and what documents are needed.

                            </p><ul class="greenli" style="margin:20px 10px;">
                                <li>Overview of the B-2 Tourist Visa Application</li>
                                <li>What is the B-2 Tourist Visa?
                                </li><li>List of Who Can Apply and Restrictions</li>
                                <li>All B-2 Tourist Visa Requirements</li>
                                <li>All Documents &amp; Forms Included</li>
                                <li>Step by Step Guide on How to Apply </li>
                                <li>All You Need to Know About the B-2 Tourist Visa Application</li>
                            </ul><p></p>
                            <p class="text-center"><img src="/static/workflow_processing/img/credit-cards-accepted.png" style="margin:1px; margin-top:-3px; width:100%; max-width:130px;"></p>
                            <p>&nbsp;</p>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-8 left-box-content-block">




                        <input type="hidden" name="csrfmiddlewaretoken" value="I6D7h4mb2xrmJSf810LjmmwHoHiKjR6z">
                        <input id="id_pdf_guides-current_step" name="pdf_guides-current_step" type="hidden" value="step1">

                        <div class="col-xs-12 super-form-container">
                            <div class="col-xs-12 form-container">
                                <fieldset>
                                    <div class="col-xs-12" id="form-fieldset">





                                        <div class="col-xs-12 product-heading "><h2>Customer Information</h2></div>
                                        <div class="col-xs-12 underblock">



                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="field-first_name form-group required" data-fieldname="first_name" aria-required="true">
                                                        <label for="id_step1-first_name">

                                                            <span class="text-danger">*</span>

                                                            First Name
                                                        </label>


                                                        <input class="form-control" data-maxlength="45" data-upper="True" id="id_step1-first_name" maxlength="45" name="step1-first_name" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-first_name">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group required field-last_name" data-fieldname="last_name" aria-required="true">
                                                        <label for="id_step1-last_name">

                                                            <span class="text-danger">*</span>

                                                            Last Name
                                                        </label>


                                                        <input class="form-control" data-maxlength="45" data-upper="True" id="id_step1-last_name" maxlength="45" name="step1-last_name" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-last_name">

                                                        </div>
                                                    </div>
                                                </div>






                                            </div>











                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="field-email form-group required" data-fieldname="email" aria-required="true">
                                                        <label for="id_step1-email">

                                                            <span class="text-danger">*</span>

                                                            Email address
                                                        </label>


                                                        <input class="form-control" data-lower="True" data-maxlength="255" data-trim="True" id="id_step1-email" maxlength="255" name="step1-email" type="email">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-email">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group required field-email_confirm" data-fieldname="email_confirm" aria-required="true">
                                                        <label for="id_step1-email_confirm">

                                                            <span class="text-danger">*</span>

                                                            Confirm email
                                                        </label>


                                                        <input autocomplete="off" class="form-control" data-lower="True" data-maxlength="255" data-trim="True" data-validation="email_confirm" data-validation-error="not_equal" data-validation-target="email" id="id_step1-email_confirm" maxlength="255" name="step1-email_confirm" onpaste="javascript: return false;" type="email">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-email_confirm">

                                                        </div>
                                                    </div>
                                                </div>






                                            </div>











                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group field-alternate_email" data-fieldname="alternate_email">
                                                        <label for="id_step1-alternate_email">

                                                            Alternative email address
                                                        </label>


                                                        <input autocomplete="off" class="form-control" data-lower="True" data-maxlength="255" data-trim="True" data-validation="alternate_email" data-validation-error="different_to" data-validation-target="email" id="id_step1-alternate_email" maxlength="255" name="step1-alternate_email" type="email">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-alternate_email">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="field-phone form-group" data-fieldname="phone">
                                                        <label for="id_step1-phone_0">

                                                            Phone Number
                                                        </label>



                                                        <div class="row">

                                                            <div class="col-xs-8 col-sm-8">
                                                                <select chosen-params="{&quot;width&quot;: &quot;100%&quot;, &quot;search_contains&quot;: true}" class="chosenized form-control text-center" id="id_step1-phone_0" name="step1-phone_prefix" style="display: none;">
                                                                    <option value="" selected="selected">--</option>
                                                                    <option value="1:US">UNITED STATES (USA) (+1)</option>
                                                                    <option value="93:AF">AFGHANISTAN (AFG) (+93)</option>
                                                                    <option value="358:AX">ALAND ISLANDS (ALA) (+358)</option>
                                                                    <option value="355:AL">ALBANIA (ALB) (+355)</option>
                                                                    <option value="213:DZ">ALGERIA (DZA) (+213)</option>
                                                                    <option value="1:AS">AMERICAN SAMOA (ASM) (+1)</option>
                                                                    <option value="376:AD">ANDORRA (AND) (+376)</option>
                                                                    <option value="244:AO">ANGOLA (AGO) (+244)</option>
                                                                    <option value="1:AI">ANGUILLA (AIA) (+1)</option>
                                                                    <option value="672:AQ">ANTARCTICA (ATA) (+672)</option>
                                                                    <option value="1:AG">ANTIGUA AND BARBUDA (ATG) (+1)</option>
                                                                    <option value="54:AR">ARGENTINA (ARG) (+54)</option>
                                                                    <option value="374:AM">ARMENIA (ARM) (+374)</option>
                                                                    <option value="297:AW">ARUBA (ABW) (+297)</option>
                                                                    <option value="61:AU">AUSTRALIA (AUS) (+61)</option>
                                                                    <option value="43:AT">AUSTRIA (AUT) (+43)</option>
                                                                    <option value="994:AZ">AZERBAIJAN (AZE) (+994)</option>
                                                                    <option value="1:BS">BAHAMAS (BHS) (+1)</option>
                                                                    <option value="973:BH">BAHRAIN (BHR) (+973)</option>
                                                                    <option value="880:BD">BANGLADESH (BGD) (+880)</option>
                                                                    <option value="1:BB">BARBADOS (BRB) (+1)</option>
                                                                    <option value="375:BY">BELARUS (BLR) (+375)</option>
                                                                    <option value="32:BE">BELGIUM (BEL) (+32)</option>
                                                                    <option value="501:BZ">BELIZE (BLZ) (+501)</option>
                                                                    <option value="229:BJ">BENIN (BEN) (+229)</option>
                                                                    <option value="1:BM">BERMUDA (BMU) (+1)</option>
                                                                    <option value="975:BT">BHUTAN (BTN) (+975)</option>
                                                                    <option value="591:BO">BOLIVIA (BOL) (+591)</option>
                                                                    <option value="599:BQ">BONAIRE, SINT EUSTATIUS AND SABA (BES) (+599)</option>
                                                                    <option value="387:BA">BOSNIA AND HERZEGOVINA (BIH) (+387)</option>
                                                                    <option value="267:BW">BOTSWANA (BWA) (+267)</option>
                                                                    <option value="55:BV">BOUVET ISLAND (BVT) (+55)</option>
                                                                    <option value="55:BR">BRAZIL (BRA) (+55)</option>
                                                                    <option value="246:IO">BRITISH INDIAN OCEAN TERRITORY (IOT) (+246)</option>
                                                                    <option value="673:BN">BRUNEI (BRN) (+673)</option>
                                                                    <option value="359:BG">BULGARIA (BGR) (+359)</option>
                                                                    <option value="226:BF">BURKINA FASO (BFA) (+226)</option>
                                                                    <option value="95:BU">BURMA (BUR) (+95)</option>
                                                                    <option value="257:BI">BURUNDI (BDI) (+257)</option>
                                                                    <option value="855:KH">CAMBODIA (KHM) (+855)</option>
                                                                    <option value="237:CM">CAMEROON (CMR) (+237)</option>
                                                                    <option value="1:CA">CANADA (CAN) (+1)</option>
                                                                    <option value="686:CT">CANTON AND ENDERBURY ISLANDS (CTE) (+686)</option>
                                                                    <option value="238:CV">CAPE VERDE (CPV) (+238)</option>
                                                                    <option value="1:KY">CAYMAN ISLANDS (CYM) (+1)</option>
                                                                    <option value="236:CF">CENTRAL AFRICAN REPUBLIC (CAF) (+236)</option>
                                                                    <option value="235:TD">CHAD (TCD) (+235)</option>
                                                                    <option value="56:CL">CHILE (CHL) (+56)</option>
                                                                    <option value="86:CN">CHINA (CHN) (+86)</option>
                                                                    <option value="61:CX">CHRISTMAS ISLAND (CXR) (+61)</option>
                                                                    <option value="61:CC">COCOS (KEELING) ISLANDS (CCK) (+61)</option>
                                                                    <option value="57:CO">COLOMBIA (COL) (+57)</option>
                                                                    <option value="269:KM">COMOROS (COM) (+269)</option>
                                                                    <option value="243:CD">CONGO, DEMOCRATIC REPUBLIC OF (COD) (+243)</option>
                                                                    <option value="242:CG">CONGO, REPUBLIC OF (COG) (+242)</option>
                                                                    <option value="682:CK">COOK ISLANDS (COK) (+682)</option>
                                                                    <option value="506:CR">COSTA RICA (CRI) (+506)</option>
                                                                    <option value="225:CI">COTE D'IVOIRE (CIV) (+225)</option>
                                                                    <option value="385:HR">CROATIA (HRV) (+385)</option>
                                                                    <option value="53:CU">CUBA (CUB) (+53)</option>
                                                                    <option value="599:CW">CURACAO (CUW) (+599)</option>
                                                                    <option value="357:CY">CYPRUS (CYP) (+357)</option>
                                                                    <option value="420:CZ">CZECH REPUBLIC (CZE) (+420)</option>
                                                                    <option value="967:YD">DEMOCRATIC YEMEN (YMD) (+967)</option>
                                                                    <option value="45:DK">DENMARK (DNK) (+45)</option>
                                                                    <option value="253:DJ">DJIBOUTI (DJI) (+253)</option>
                                                                    <option value="1:DM">DOMINICA (DMA) (+1)</option>
                                                                    <option value="1:DO">DOMINICAN REPUBLIC (DOM) (+1)</option>
                                                                    <option value="670:TP">EAST TIMOR (TMP) (+670)</option>
                                                                    <option value="593:EC">ECUADOR (ECU) (+593)</option>
                                                                    <option value="20:EG">EGYPT (EGY) (+20)</option>
                                                                    <option value="503:SV">EL SALVADOR (SLV) (+503)</option>
                                                                    <option value="240:GQ">EQUATORIAL GUINEA (GNQ) (+240)</option>
                                                                    <option value="291:ER">ERITREA (ERI) (+291)</option>
                                                                    <option value="372:EE">ESTONIA (EST) (+372)</option>
                                                                    <option value="251:ET">ETHIOPIA (ETH) (+251)</option>
                                                                    <option value="500:FK">FALKLAND ISLANDS (FLK) (+500)</option>
                                                                    <option value="298:FO">FAROE ISLANDS (FRO) (+298)</option>
                                                                    <option value="679:FJ">FIJI (FJI) (+679)</option>
                                                                    <option value="358:FI">FINLAND (FIN) (+358)</option>
                                                                    <option value="33:FR">FRANCE (FRA) (+33)</option>
                                                                    <option value="33:FX">FRANCE METROPOLITAN (FXX) (+33)</option>
                                                                    <option value="594:GF">FRENCH GUIANA (GUF) (+594)</option>
                                                                    <option value="689:PF">FRENCH POLYNESIA (PYF) (+689)</option>
                                                                    <option value="262:TF">FRENCH SOUTHERN TERRITORIES (ATF) (+262)</option>
                                                                    <option value="241:GA">GABON (GAB) (+241)</option>
                                                                    <option value="220:GM">GAMBIA (GMB) (+220)</option>
                                                                    <option value="995:GE">GEORGIA (GEO) (+995)</option>
                                                                    <option value="49:DE">GERMANY (DEU) (+49)</option>
                                                                    <option value="233:GH">GHANA (GHA) (+233)</option>
                                                                    <option value="350:GI">GIBRALTAR (GIB) (+350)</option>
                                                                    <option value="30:GR">GREECE (GRC) (+30)</option>
                                                                    <option value="299:GL">GREENLAND (GRL) (+299)</option>
                                                                    <option value="1:GD">GRENADA (GRD) (+1)</option>
                                                                    <option value="590:GP">GUADELOUPE (GLP) (+590)</option>
                                                                    <option value="1:GU">GUAM (GUM) (+1)</option>
                                                                    <option value="502:GT">GUATEMALA (GTM) (+502)</option>
                                                                    <option value="44:GG">GUERNSEY (GGY) (+44)</option>
                                                                    <option value="224:GN">GUINEA (GIN) (+224)</option>
                                                                    <option value="245:GW">GUINEA-BISSAU (GNB) (+245)</option>
                                                                    <option value="592:GY">GUYANA (GUY) (+592)</option>
                                                                    <option value="509:HT">HAITI (HTI) (+509)</option>
                                                                    <option value="0:HM">HEARD AND MC DONALD ISLANDS (HMD) (+0)</option>
                                                                    <option value="504:HN">HONDURAS (HND) (+504)</option>
                                                                    <option value="852:HK">HONG KONG (HKG) (+852)</option>
                                                                    <option value="36:HU">HUNGARY (HUN) (+36)</option>
                                                                    <option value="354:IS">ICELAND (ISL) (+354)</option>
                                                                    <option value="91:IN">INDIA (IND) (+91)</option>
                                                                    <option value="62:ID">INDONESIA (IDN) (+62)</option>
                                                                    <option value="98:IR">IRAN (IRN) (+98)</option>
                                                                    <option value="964:IQ">IRAQ (IRQ) (+964)</option>
                                                                    <option value="353:IE">IRELAND (IRL) (+353)</option>
                                                                    <option value="44:IM">ISLE OF MAN (IMN) (+44)</option>
                                                                    <option value="972:IL">ISRAEL (ISR) (+972)</option>
                                                                    <option value="39:IT">ITALY (ITA) (+39)</option>
                                                                    <option value="1:JM">JAMAICA (JAM) (+1)</option>
                                                                    <option value="81:JP">JAPAN (JPN) (+81)</option>
                                                                    <option value="44:JE">JERSEY (JEY) (+44)</option>
                                                                    <option value="1:JT">JOHNSTON ISLAND (JTN) (+1)</option>
                                                                    <option value="962:JO">JORDAN (JOR) (+962)</option>
                                                                    <option value="7:KZ">KAZAKHSTAN (KAZ) (+7)</option>
                                                                    <option value="254:KE">KENYA (KEN) (+254)</option>
                                                                    <option value="686:KI">KIRIBATI (KIR) (+686)</option>
                                                                    <option value="383:KV">KOSOVO (KVV) (+383)</option>
                                                                    <option value="965:KW">KUWAIT (KWT) (+965)</option>
                                                                    <option value="996:KG">KYRGYZSTAN (KGZ) (+996)</option>
                                                                    <option value="856:LA">LAOS (LAO) (+856)</option>
                                                                    <option value="371:LV">LATVIA (LVA) (+371)</option>
                                                                    <option value="961:LB">LEBANON (LBN) (+961)</option>
                                                                    <option value="266:LS">LESOTHO (LSO) (+266)</option>
                                                                    <option value="231:LR">LIBERIA (LBR) (+231)</option>
                                                                    <option value="218:LY">LIBYA (LBY) (+218)</option>
                                                                    <option value="423:LI">LIECHTENSTEIN (LIE) (+423)</option>
                                                                    <option value="370:LT">LITHUANIA (LTU) (+370)</option>
                                                                    <option value="352:LU">LUXEMBOURG (LUX) (+352)</option>
                                                                    <option value="853:MO">MACAU (MAC) (+853)</option>
                                                                    <option value="389:MK">MACEDONIA (MKD) (+389)</option>
                                                                    <option value="261:MG">MADAGASCAR (MDG) (+261)</option>
                                                                    <option value="265:MW">MALAWI (MWI) (+265)</option>
                                                                    <option value="60:MY">MALAYSIA (MYS) (+60)</option>
                                                                    <option value="960:MV">MALDIVES (MDV) (+960)</option>
                                                                    <option value="223:ML">MALI (MLI) (+223)</option>
                                                                    <option value="356:MT">MALTA (MLT) (+356)</option>
                                                                    <option value="692:MH">MARSHALL ISLANDS (MHL) (+692)</option>
                                                                    <option value="596:MQ">MARTINIQUE (MTQ) (+596)</option>
                                                                    <option value="222:MR">MAURITANIA (MRT) (+222)</option>
                                                                    <option value="230:MU">MAURITIUS (MUS) (+230)</option>
                                                                    <option value="262:YT">MAYOTTE (MYT) (+262)</option>
                                                                    <option value="52:MX">MEXICO (MEX) (+52)</option>
                                                                    <option value="691:FM">MICRONESIA - FEDERATED STATES OF (FSM) (+691)</option>
                                                                    <option value="1:MI">MIDWAY ISLANDS (MID) (+1)</option>
                                                                    <option value="373:MD">MOLDOVA (MDA) (+373)</option>
                                                                    <option value="377:MC">MONACO (MCO) (+377)</option>
                                                                    <option value="976:MN">MONGOLIA (MNG) (+976)</option>
                                                                    <option value="382:ME">MONTENEGRO (MNE) (+382)</option>
                                                                    <option value="1:MS">MONTSERRAT (MSR) (+1)</option>
                                                                    <option value="212:MA">MOROCCO (MAR) (+212)</option>
                                                                    <option value="258:MZ">MOZAMBIQUE (MOZ) (+258)</option>
                                                                    <option value="95:MM">MYANMAR (MMR) (+95)</option>
                                                                    <option value="264:NA">NAMIBIA (NAM) (+264)</option>
                                                                    <option value="674:NR">NAURU (NRU) (+674)</option>
                                                                    <option value="977:NP">NEPAL (NPL) (+977)</option>
                                                                    <option value="31:NL">NETHERLANDS (NLD) (+31)</option>
                                                                    <option value="599:AN">NETHERLANDS ANTILLES (ANT) (+599)</option>
                                                                    <option value="687:NC">NEW CALEDONIA (NCL) (+687)</option>
                                                                    <option value="64:NZ">NEW ZEALAND (NZL) (+64)</option>
                                                                    <option value="505:NI">NICARAGUA (NIC) (+505)</option>
                                                                    <option value="227:NE">NIGER (NER) (+227)</option>
                                                                    <option value="234:NG">NIGERIA (NGA) (+234)</option>
                                                                    <option value="683:NU">NIUE (NIU) (+683)</option>
                                                                    <option value="672:NF">NORFOLK ISLAND (NFK) (+672)</option>
                                                                    <option value="850:KP">NORTH KOREA (PRK) (+850)</option>
                                                                    <option value="1:MP">NORTHERN MARIANA ISLANDS (MNP) (+1)</option>
                                                                    <option value="47:NO">NORWAY (NOR) (+47)</option>
                                                                    <option value="968:OM">OMAN (OMN) (+968)</option>
                                                                    <option value="92:PK">PAKISTAN (PAK) (+92)</option>
                                                                    <option value="680:PW">PALAU (PLW) (+680)</option>
                                                                    <option value="970:PS">PALESTINIAN TERRITORIES (PSE) (+970)</option>
                                                                    <option value="507:PA">PANAMA (PAN) (+507)</option>
                                                                    <option value="675:PG">PAPUA NEW GUINEA (PNG) (+675)</option>
                                                                    <option value="595:PY">PARAGUAY (PRY) (+595)</option>
                                                                    <option value="51:PE">PERU (PER) (+51)</option>
                                                                    <option value="63:PH">PHILIPPINES (PHL) (+63)</option>
                                                                    <option value="64:PN">PITCAIRN ISLANDS (PCN) (+64)</option>
                                                                    <option value="48:PL">POLAND (POL) (+48)</option>
                                                                    <option value="351:PT">PORTUGAL (PRT) (+351)</option>
                                                                    <option value="1:PR">PUERTO RICO (PRI) (+1)</option>
                                                                    <option value="974:QA">QATAR (QAT) (+974)</option>
                                                                    <option value="262:RE">REUNION (REU) (+262)</option>
                                                                    <option value="40:RO">ROMANIA (ROM) (+40)</option>
                                                                    <option value="7:RU">RUSSIA (RUS) (+7)</option>
                                                                    <option value="250:RW">RWANDA (RWA) (+250)</option>
                                                                    <option value="590:BL">SAINT BARTHELEMY (BLM) (+590)</option>
                                                                    <option value="1:KN">SAINT KITTS AND NEVIS (KNA) (+1)</option>
                                                                    <option value="1:LC">SAINT LUCIA (LCA) (+1)</option>
                                                                    <option value="590:MF">SAINT MARTIN (FRENCH PART) (MAF) (+590)</option>
                                                                    <option value="1:VC">SAINT VINCENT AND THE GRENADINES (VCT) (+1)</option>
                                                                    <option value="685:WS">SAMOA (WSM) (+685)</option>
                                                                    <option value="378:SM">SAN MARINO (SMR) (+378)</option>
                                                                    <option value="239:ST">SAO TOME AND PRINCIPE (STP) (+239)</option>
                                                                    <option value="966:SA">SAUDI ARABIA (SAU) (+966)</option>
                                                                    <option value="221:SN">SENEGAL (SEN) (+221)</option>
                                                                    <option value="381:RS">SERBIA (SRB) (+381)</option>
                                                                    <option value="381:CS">SERBIA AND MONTENEGRO (SCG) (+381)</option>
                                                                    <option value="248:SC">SEYCHELLES (SYC) (+248)</option>
                                                                    <option value="232:SL">SIERRA LEONE (SLE) (+232)</option>
                                                                    <option value="65:SG">SINGAPORE (SGP) (+65)</option>
                                                                    <option value="1:SX">SINT MAARTEN (DUTCH PART) (SXM) (+1)</option>
                                                                    <option value="421:SK">SLOVAKIA (SVK) (+421)</option>
                                                                    <option value="386:SI">SLOVENIA (SVN) (+386)</option>
                                                                    <option value="677:SB">SOLOMON ISLANDS (SLB) (+677)</option>
                                                                    <option value="252:SO">SOMALIA (SOM) (+252)</option>
                                                                    <option value="27:ZA">SOUTH AFRICA (ZAF) (+27)</option>
                                                                    <option value="500:GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS (SGS) (+500)</option>
                                                                    <option value="82:KR">SOUTH KOREA (KOR) (+82)</option>
                                                                    <option value="211:SS">SOUTH SUDAN (SSD) (+211)</option>
                                                                    <option value="34:ES">SPAIN (ESP) (+34)</option>
                                                                    <option value="94:LK">SRI LANKA (LKA) (+94)</option>
                                                                    <option value="290:SH">ST. HELENA (SHN) (+290)</option>
                                                                    <option value="508:PM">ST. PIERRE AND MIQUELON (SPM) (+508)</option>
                                                                    <option value="249:SD">SUDAN (SDN) (+249)</option>
                                                                    <option value="597:SR">SURINAME (SUR) (+597)</option>
                                                                    <option value="47:SJ">SVALBARD AND JAN MAYEN ISLANDS (SJM) (+47)</option>
                                                                    <option value="268:SZ">SWAZILAND (SWZ) (+268)</option>
                                                                    <option value="46:SE">SWEDEN (SWE) (+46)</option>
                                                                    <option value="41:CH">SWITZERLAND (CHE) (+41)</option>
                                                                    <option value="963:SY">SYRIA (SYR) (+963)</option>
                                                                    <option value="886:TW">TAIWAN (TWN) (+886)</option>
                                                                    <option value="992:TJ">TAJIKISTAN (TJK) (+992)</option>
                                                                    <option value="255:TZ">TANZANIA (TZA) (+255)</option>
                                                                    <option value="66:TH">THAILAND (THA) (+66)</option>
                                                                    <option value="670:TL">TIMOR-LESTE (TLS) (+670)</option>
                                                                    <option value="228:TG">TOGO (TGO) (+228)</option>
                                                                    <option value="690:TK">TOKELAU (TKL) (+690)</option>
                                                                    <option value="676:TO">TONGA (TON) (+676)</option>
                                                                    <option value="1:TT">TRINIDAD AND TOBAGO (TTO) (+1)</option>
                                                                    <option value="216:TN">TUNISIA (TUN) (+216)</option>
                                                                    <option value="90:TR">TURKEY (TUR) (+90)</option>
                                                                    <option value="993:TM">TURKMENISTAN (TKM) (+993)</option>
                                                                    <option value="1:TC">TURKS AND CAICOS ISLANDS (TCA) (+1)</option>
                                                                    <option value="688:TV">TUVALU (TUV) (+688)</option>
                                                                    <option value="256:UG">UGANDA (UGA) (+256)</option>
                                                                    <option value="380:UA">UKRAINE (UKR) (+380)</option>
                                                                    <option value="971:AE">UNITED ARAB EMIRATES (ARE) (+971)</option>
                                                                    <option value="44:GB">UNITED KINGDOM (GBR) (+44)</option>
                                                                    <option value="1:UM">UNITED STATES MINOR OUTLYING ISLANDS (UMI) (+1)</option>
                                                                    <option value="598:UY">URUGUAY (URY) (+598)</option>
                                                                    <option value="998:UZ">UZBEKISTAN (UZB) (+998)</option>
                                                                    <option value="678:VU">VANUATU (VUT) (+678)</option>
                                                                    <option value="379:VA">VATICAN CITY STATE (HOLY SEE) (VAT) (+379)</option>
                                                                    <option value="58:VE">VENEZUELA (VEN) (+58)</option>
                                                                    <option value="84:VN">VIETNAM (VNM) (+84)</option>
                                                                    <option value="1:VG">VIRGIN ISLANDS (BRITISH) (VGB) (+1)</option>
                                                                    <option value="1:VI">VIRGIN ISLANDS (U.S.) (VIR) (+1)</option>
                                                                    <option value="808:WK">WAKE ISLAND (WAK) (+808)</option>
                                                                    <option value="681:WF">WALLIS AND FUTUNA ISLANDS (WLF) (+681)</option>
                                                                    <option value="212:EH">WESTERN SAHARA (ESH) (+212)</option>
                                                                    <option value="967:YE">YEMEN (YEM) (+967)</option>
                                                                    <option value="243:ZR">ZAIRE (ZAR) (+243)</option>
                                                                    <option value="260:ZM">ZAMBIA (ZMB) (+260)</option>
                                                                    <option value="263:ZW">ZIMBABWE (ZWE) (+263)</option>
                                                                </select><div class="chosen-container chosen-container-single" style="width: 100%;" title="" id="id_step1_phone_0_chosen"><a class="chosen-single"><span>--</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4">
                                                                <input class="form-control" id="id_step1-phone_1" maxlength="125" name="step1-phone" type="tel">
                                                            </div>

                                                        </div>

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-phone">

                                                        </div>
                                                    </div>
                                                </div>






                                            </div>









                                            <p>&nbsp;</p></div>
                                        <div class="col-xs-12 product-heading "><h2>Secure Billing Information</h2></div>
                                        <div class="col-xs-12 underblock">



                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="field-ch_first_name form-group required" data-fieldname="ch_first_name" aria-required="true">
                                                        <label for="id_step1-ch_first_name">

                                                            <span class="text-danger">*</span>

                                                            First name
                                                        </label>


                                                        <input class="form-control" data-maxlength="45" data-upper="True" id="id_step1-ch_first_name" maxlength="45" name="step1-ch_first_name" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-ch_first_name">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="field-ch_last_name form-group required" data-fieldname="ch_last_name" aria-required="true">
                                                        <label for="id_step1-ch_last_name">

                                                            <span class="text-danger">*</span>

                                                            Last name
                                                        </label>


                                                        <input class="form-control" data-maxlength="45" data-upper="True" id="id_step1-ch_last_name" maxlength="45" name="step1-ch_last_name" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-ch_last_name">

                                                        </div>
                                                    </div>
                                                </div>






                                            </div>











                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group field-address" data-fieldname="address">
                                                        <label for="id_step1-address">

                                                            Street Address
                                                        </label>


                                                        <input class="form-control" data-maxlength="255" data-upper="True" id="id_step1-address" maxlength="255" name="step1-address" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-address">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group field-city" data-fieldname="city">
                                                        <label for="id_step1-city">

                                                            City
                                                        </label>


                                                        <input class="form-control" data-maxlength="255" data-upper="True" id="id_step1-city" maxlength="255" name="step1-city" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-city">

                                                        </div>
                                                    </div>
                                                </div>






                                            </div>











                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group field-zip_postal" data-fieldname="zip_postal">
                                                        <label for="id_step1-zip_postal">

                                                            Zip/Postal Code
                                                        </label>


                                                        <input class="form-control" data-upper="True" id="id_step1-zip_postal" name="step1-zip_postal" type="text">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-zip_postal">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group required field-country" data-fieldname="country" aria-required="true">
                                                        <label for="id_step1-country">

                                                            <span class="text-danger">*</span>

                                                            Country
                                                        </label>


                                                        <select chosen-params="{&quot;width&quot;: &quot;100%&quot;, &quot;search_contains&quot;: true}" class="chosenized form-control text-center" data-blocked="country" data-blocked-error="blocked_value" data-blocked-value="AF|BY|BZ|BI|CF|CD|CU|GH|IR|IQ|LBLY|ML|MM|NG|KP|RU|SL|SO|SS|SY|UA|YE" id="id_step1-country" name="step1-country" style="display: none;">
                                                            <option value="" selected="selected">Select country</option>
                                                            <option value="AF">AFGHANISTAN (AFG)</option>
                                                            <option value="AX">ALAND ISLANDS (ALA)</option>
                                                            <option value="AL">ALBANIA (ALB)</option>
                                                            <option value="DZ">ALGERIA (DZA)</option>
                                                            <option value="AS">AMERICAN SAMOA (ASM)</option>
                                                            <option value="AD">ANDORRA (AND)</option>
                                                            <option value="AO">ANGOLA (AGO)</option>
                                                            <option value="AI">ANGUILLA (AIA)</option>
                                                            <option value="AQ">ANTARCTICA (ATA)</option>
                                                            <option value="AG">ANTIGUA AND BARBUDA (ATG)</option>
                                                            <option value="AR">ARGENTINA (ARG)</option>
                                                            <option value="AM">ARMENIA (ARM)</option>
                                                            <option value="AW">ARUBA (ABW)</option>
                                                            <option value="AU">AUSTRALIA (AUS)</option>
                                                            <option value="AT">AUSTRIA (AUT)</option>
                                                            <option value="AZ">AZERBAIJAN (AZE)</option>
                                                            <option value="BS">BAHAMAS (BHS)</option>
                                                            <option value="BH">BAHRAIN (BHR)</option>
                                                            <option value="BD">BANGLADESH (BGD)</option>
                                                            <option value="BB">BARBADOS (BRB)</option>
                                                            <option value="BY">BELARUS (BLR)</option>
                                                            <option value="BE">BELGIUM (BEL)</option>
                                                            <option value="BZ">BELIZE (BLZ)</option>
                                                            <option value="BJ">BENIN (BEN)</option>
                                                            <option value="BM">BERMUDA (BMU)</option>
                                                            <option value="BT">BHUTAN (BTN)</option>
                                                            <option value="BO">BOLIVIA (BOL)</option>
                                                            <option value="BQ">BONAIRE, SINT EUSTATIUS AND SABA (BES)</option>
                                                            <option value="BA">BOSNIA AND HERZEGOVINA (BIH)</option>
                                                            <option value="BW">BOTSWANA (BWA)</option>
                                                            <option value="BV">BOUVET ISLAND (BVT)</option>
                                                            <option value="BR">BRAZIL (BRA)</option>
                                                            <option value="IO">BRITISH INDIAN OCEAN TERRITORY (IOT)</option>
                                                            <option value="BN">BRUNEI (BRN)</option>
                                                            <option value="BG">BULGARIA (BGR)</option>
                                                            <option value="BF">BURKINA FASO (BFA)</option>
                                                            <option value="BU">BURMA (BUR)</option>
                                                            <option value="BI">BURUNDI (BDI)</option>
                                                            <option value="KH">CAMBODIA (KHM)</option>
                                                            <option value="CM">CAMEROON (CMR)</option>
                                                            <option value="CA">CANADA (CAN)</option>
                                                            <option value="CT">CANTON AND ENDERBURY ISLANDS (CTE)</option>
                                                            <option value="CV">CAPE VERDE (CPV)</option>
                                                            <option value="KY">CAYMAN ISLANDS (CYM)</option>
                                                            <option value="CF">CENTRAL AFRICAN REPUBLIC (CAF)</option>
                                                            <option value="TD">CHAD (TCD)</option>
                                                            <option value="CL">CHILE (CHL)</option>
                                                            <option value="CN">CHINA (CHN)</option>
                                                            <option value="CX">CHRISTMAS ISLAND (CXR)</option>
                                                            <option value="CC">COCOS (KEELING) ISLANDS (CCK)</option>
                                                            <option value="CO">COLOMBIA (COL)</option>
                                                            <option value="KM">COMOROS (COM)</option>
                                                            <option value="CD">CONGO, DEMOCRATIC REPUBLIC OF (COD)</option>
                                                            <option value="CG">CONGO, REPUBLIC OF (COG)</option>
                                                            <option value="CK">COOK ISLANDS (COK)</option>
                                                            <option value="CR">COSTA RICA (CRI)</option>
                                                            <option value="CI">COTE D'IVOIRE (CIV)</option>
                                                            <option value="HR">CROATIA (HRV)</option>
                                                            <option value="CU">CUBA (CUB)</option>
                                                            <option value="CW">CURACAO (CUW)</option>
                                                            <option value="CY">CYPRUS (CYP)</option>
                                                            <option value="CZ">CZECH REPUBLIC (CZE)</option>
                                                            <option value="YD">DEMOCRATIC YEMEN (YMD)</option>
                                                            <option value="DK">DENMARK (DNK)</option>
                                                            <option value="DJ">DJIBOUTI (DJI)</option>
                                                            <option value="DM">DOMINICA (DMA)</option>
                                                            <option value="DO">DOMINICAN REPUBLIC (DOM)</option>
                                                            <option value="NQ">DRONNING MAUD LAND (DML)</option>
                                                            <option value="TP">EAST TIMOR (TMP)</option>
                                                            <option value="EC">ECUADOR (ECU)</option>
                                                            <option value="EG">EGYPT (EGY)</option>
                                                            <option value="SV">EL SALVADOR (SLV)</option>
                                                            <option value="GQ">EQUATORIAL GUINEA (GNQ)</option>
                                                            <option value="ER">ERITREA (ERI)</option>
                                                            <option value="EE">ESTONIA (EST)</option>
                                                            <option value="ET">ETHIOPIA (ETH)</option>
                                                            <option value="FK">FALKLAND ISLANDS (FLK)</option>
                                                            <option value="FO">FAROE ISLANDS (FRO)</option>
                                                            <option value="FJ">FIJI (FJI)</option>
                                                            <option value="FI">FINLAND (FIN)</option>
                                                            <option value="FR">FRANCE (FRA)</option>
                                                            <option value="FX">FRANCE METROPOLITAN (FXX)</option>
                                                            <option value="GF">FRENCH GUIANA (GUF)</option>
                                                            <option value="PF">FRENCH POLYNESIA (PYF)</option>
                                                            <option value="TF">FRENCH SOUTHERN TERRITORIES (ATF)</option>
                                                            <option value="GA">GABON (GAB)</option>
                                                            <option value="GM">GAMBIA (GMB)</option>
                                                            <option value="GE">GEORGIA (GEO)</option>
                                                            <option value="DE">GERMANY (DEU)</option>
                                                            <option value="GH">GHANA (GHA)</option>
                                                            <option value="GI">GIBRALTAR (GIB)</option>
                                                            <option value="GR">GREECE (GRC)</option>
                                                            <option value="GL">GREENLAND (GRL)</option>
                                                            <option value="GD">GRENADA (GRD)</option>
                                                            <option value="GP">GUADELOUPE (GLP)</option>
                                                            <option value="GU">GUAM (GUM)</option>
                                                            <option value="GT">GUATEMALA (GTM)</option>
                                                            <option value="GG">GUERNSEY (GGY)</option>
                                                            <option value="GN">GUINEA (GIN)</option>
                                                            <option value="GW">GUINEA-BISSAU (GNB)</option>
                                                            <option value="GY">GUYANA (GUY)</option>
                                                            <option value="HT">HAITI (HTI)</option>
                                                            <option value="HM">HEARD AND MC DONALD ISLANDS (HMD)</option>
                                                            <option value="HN">HONDURAS (HND)</option>
                                                            <option value="HK">HONG KONG (HKG)</option>
                                                            <option value="HU">HUNGARY (HUN)</option>
                                                            <option value="IS">ICELAND (ISL)</option>
                                                            <option value="IN">INDIA (IND)</option>
                                                            <option value="ID">INDONESIA (IDN)</option>
                                                            <option value="IR">IRAN (IRN)</option>
                                                            <option value="IQ">IRAQ (IRQ)</option>
                                                            <option value="IE">IRELAND (IRL)</option>
                                                            <option value="IM">ISLE OF MAN (IMN)</option>
                                                            <option value="IL">ISRAEL (ISR)</option>
                                                            <option value="IT">ITALY (ITA)</option>
                                                            <option value="JM">JAMAICA (JAM)</option>
                                                            <option value="JP">JAPAN (JPN)</option>
                                                            <option value="JE">JERSEY (JEY)</option>
                                                            <option value="JT">JOHNSTON ISLAND (JTN)</option>
                                                            <option value="JO">JORDAN (JOR)</option>
                                                            <option value="KZ">KAZAKHSTAN (KAZ)</option>
                                                            <option value="KE">KENYA (KEN)</option>
                                                            <option value="KI">KIRIBATI (KIR)</option>
                                                            <option value="KV">KOSOVO (KVV)</option>
                                                            <option value="KW">KUWAIT (KWT)</option>
                                                            <option value="KG">KYRGYZSTAN (KGZ)</option>
                                                            <option value="LA">LAOS (LAO)</option>
                                                            <option value="LV">LATVIA (LVA)</option>
                                                            <option value="LB">LEBANON (LBN)</option>
                                                            <option value="LS">LESOTHO (LSO)</option>
                                                            <option value="LR">LIBERIA (LBR)</option>
                                                            <option value="LY">LIBYA (LBY)</option>
                                                            <option value="LI">LIECHTENSTEIN (LIE)</option>
                                                            <option value="LT">LITHUANIA (LTU)</option>
                                                            <option value="LU">LUXEMBOURG (LUX)</option>
                                                            <option value="MO">MACAU (MAC)</option>
                                                            <option value="MK">MACEDONIA (MKD)</option>
                                                            <option value="MG">MADAGASCAR (MDG)</option>
                                                            <option value="MW">MALAWI (MWI)</option>
                                                            <option value="MY">MALAYSIA (MYS)</option>
                                                            <option value="MV">MALDIVES (MDV)</option>
                                                            <option value="ML">MALI (MLI)</option>
                                                            <option value="MT">MALTA (MLT)</option>
                                                            <option value="MH">MARSHALL ISLANDS (MHL)</option>
                                                            <option value="MQ">MARTINIQUE (MTQ)</option>
                                                            <option value="MR">MAURITANIA (MRT)</option>
                                                            <option value="MU">MAURITIUS (MUS)</option>
                                                            <option value="YT">MAYOTTE (MYT)</option>
                                                            <option value="MX">MEXICO (MEX)</option>
                                                            <option value="FM">MICRONESIA - FEDERATED STATES OF (FSM)</option>
                                                            <option value="MI">MIDWAY ISLANDS (MID)</option>
                                                            <option value="MD">MOLDOVA (MDA)</option>
                                                            <option value="MC">MONACO (MCO)</option>
                                                            <option value="MN">MONGOLIA (MNG)</option>
                                                            <option value="ME">MONTENEGRO (MNE)</option>
                                                            <option value="MS">MONTSERRAT (MSR)</option>
                                                            <option value="MA">MOROCCO (MAR)</option>
                                                            <option value="MZ">MOZAMBIQUE (MOZ)</option>
                                                            <option value="MM">MYANMAR (MMR)</option>
                                                            <option value="NA">NAMIBIA (NAM)</option>
                                                            <option value="NR">NAURU (NRU)</option>
                                                            <option value="NP">NEPAL (NPL)</option>
                                                            <option value="NL">NETHERLANDS (NLD)</option>
                                                            <option value="AN">NETHERLANDS ANTILLES (ANT)</option>
                                                            <option value="NT">NEUTRAL ZONE (NTZ)</option>
                                                            <option value="NC">NEW CALEDONIA (NCL)</option>
                                                            <option value="NZ">NEW ZEALAND (NZL)</option>
                                                            <option value="NI">NICARAGUA (NIC)</option>
                                                            <option value="NE">NIGER (NER)</option>
                                                            <option value="NG">NIGERIA (NGA)</option>
                                                            <option value="NU">NIUE (NIU)</option>
                                                            <option value="NF">NORFOLK ISLAND (NFK)</option>
                                                            <option value="KP">NORTH KOREA (PRK)</option>
                                                            <option value="MP">NORTHERN MARIANA ISLANDS (MNP)</option>
                                                            <option value="NO">NORWAY (NOR)</option>
                                                            <option value="OM">OMAN (OMN)</option>
                                                            <option value="PK">PAKISTAN (PAK)</option>
                                                            <option value="PW">PALAU (PLW)</option>
                                                            <option value="PS">PALESTINIAN TERRITORIES (PSE)</option>
                                                            <option value="PA">PANAMA (PAN)</option>
                                                            <option value="PG">PAPUA NEW GUINEA (PNG)</option>
                                                            <option value="PY">PARAGUAY (PRY)</option>
                                                            <option value="PE">PERU (PER)</option>
                                                            <option value="PH">PHILIPPINES (PHL)</option>
                                                            <option value="PN">PITCAIRN ISLANDS (PCN)</option>
                                                            <option value="PL">POLAND (POL)</option>
                                                            <option value="PT">PORTUGAL (PRT)</option>
                                                            <option value="PR">PUERTO RICO (PRI)</option>
                                                            <option value="QA">QATAR (QAT)</option>
                                                            <option value="RE">REUNION (REU)</option>
                                                            <option value="RO">ROMANIA (ROM)</option>
                                                            <option value="RU">RUSSIA (RUS)</option>
                                                            <option value="RW">RWANDA (RWA)</option>
                                                            <option value="BL">SAINT BARTHELEMY (BLM)</option>
                                                            <option value="KN">SAINT KITTS AND NEVIS (KNA)</option>
                                                            <option value="LC">SAINT LUCIA (LCA)</option>
                                                            <option value="MF">SAINT MARTIN (FRENCH PART) (MAF)</option>
                                                            <option value="VC">SAINT VINCENT AND THE GRENADINES (VCT)</option>
                                                            <option value="WS">SAMOA (WSM)</option>
                                                            <option value="SM">SAN MARINO (SMR)</option>
                                                            <option value="ST">SAO TOME AND PRINCIPE (STP)</option>
                                                            <option value="SA">SAUDI ARABIA (SAU)</option>
                                                            <option value="SN">SENEGAL (SEN)</option>
                                                            <option value="RS">SERBIA (SRB)</option>
                                                            <option value="CS">SERBIA AND MONTENEGRO (SCG)</option>
                                                            <option value="SC">SEYCHELLES (SYC)</option>
                                                            <option value="SL">SIERRA LEONE (SLE)</option>
                                                            <option value="SG">SINGAPORE (SGP)</option>
                                                            <option value="SX">SINT MAARTEN (DUTCH PART) (SXM)</option>
                                                            <option value="SK">SLOVAKIA (SVK)</option>
                                                            <option value="SI">SLOVENIA (SVN)</option>
                                                            <option value="SB">SOLOMON ISLANDS (SLB)</option>
                                                            <option value="SO">SOMALIA (SOM)</option>
                                                            <option value="ZA">SOUTH AFRICA (ZAF)</option>
                                                            <option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS (SGS)</option>
                                                            <option value="KR">SOUTH KOREA (KOR)</option>
                                                            <option value="SS">SOUTH SUDAN (SSD)</option>
                                                            <option value="ES">SPAIN (ESP)</option>
                                                            <option value="LK">SRI LANKA (LKA)</option>
                                                            <option value="SH">ST. HELENA (SHN)</option>
                                                            <option value="PM">ST. PIERRE AND MIQUELON (SPM)</option>
                                                            <option value="SD">SUDAN (SDN)</option>
                                                            <option value="SR">SURINAME (SUR)</option>
                                                            <option value="SJ">SVALBARD AND JAN MAYEN ISLANDS (SJM)</option>
                                                            <option value="SZ">SWAZILAND (SWZ)</option>
                                                            <option value="SE">SWEDEN (SWE)</option>
                                                            <option value="CH">SWITZERLAND (CHE)</option>
                                                            <option value="SY">SYRIA (SYR)</option>
                                                            <option value="TW">TAIWAN (TWN)</option>
                                                            <option value="TJ">TAJIKISTAN (TJK)</option>
                                                            <option value="TZ">TANZANIA (TZA)</option>
                                                            <option value="TH">THAILAND (THA)</option>
                                                            <option value="TL">TIMOR-LESTE (TLS)</option>
                                                            <option value="TG">TOGO (TGO)</option>
                                                            <option value="TK">TOKELAU (TKL)</option>
                                                            <option value="TO">TONGA (TON)</option>
                                                            <option value="TT">TRINIDAD AND TOBAGO (TTO)</option>
                                                            <option value="TN">TUNISIA (TUN)</option>
                                                            <option value="TR">TURKEY (TUR)</option>
                                                            <option value="TM">TURKMENISTAN (TKM)</option>
                                                            <option value="TC">TURKS AND CAICOS ISLANDS (TCA)</option>
                                                            <option value="TV">TUVALU (TUV)</option>
                                                            <option value="UG">UGANDA (UGA)</option>
                                                            <option value="UA">UKRAINE (UKR)</option>
                                                            <option value="AE">UNITED ARAB EMIRATES (ARE)</option>
                                                            <option value="GB">UNITED KINGDOM (GBR)</option>
                                                            <option value="US">UNITED STATES (USA)</option>
                                                            <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS (UMI)</option>
                                                            <option value="UY">URUGUAY (URY)</option>
                                                            <option value="UZ">UZBEKISTAN (UZB)</option>
                                                            <option value="VU">VANUATU (VUT)</option>
                                                            <option value="VA">VATICAN CITY STATE (HOLY SEE) (VAT)</option>
                                                            <option value="VE">VENEZUELA (VEN)</option>
                                                            <option value="VN">VIETNAM (VNM)</option>
                                                            <option value="VG">VIRGIN ISLANDS (BRITISH) (VGB)</option>
                                                            <option value="VI">VIRGIN ISLANDS (U.S.) (VIR)</option>
                                                            <option value="WK">WAKE ISLAND (WAK)</option>
                                                            <option value="WF">WALLIS AND FUTUNA ISLANDS (WLF)</option>
                                                            <option value="EH">WESTERN SAHARA (ESH)</option>
                                                            <option value="YE">YEMEN (YEM)</option>
                                                            <option value="ZR">ZAIRE (ZAR)</option>
                                                            <option value="ZM">ZAMBIA (ZMB)</option>
                                                            <option value="ZW">ZIMBABWE (ZWE)</option>
                                                        </select><div class="chosen-container chosen-container-single" style="width: 100%;" title="" id="id_step1_country_chosen"><a class="chosen-single"><span>Select country</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-country">

                                                        </div>
                                                    </div>
                                                </div>






                                            </div>











                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="field-card_number form-group required" data-fieldname="card_number" aria-required="true">
                                                        <label for="id_step1-card_number">

                                                            <span class="text-danger">*</span>

                                                            Card Number
                                                        </label>


                                                        <input autocomplete="off" class="form-control" data-force-disable-onfocusout="true" data-maxlength="22" data-number-with-space="true" data-validation="{&quot;cc_luhn&quot;: &quot;invalid&quot;, &quot;cc_supported&quot;: &quot;not_supported&quot;}" data-validation-nolog="cc_pad" id="id_step1-card_number" maxlength="22" name="step1-card_number" onpaste="javascript: return false;" type="tel">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-card_number">

                                                        </div>
                                                    </div>
                                                </div>
















                                                <div class="col-xs-6 col-sm-3">
                                                    <div class="form-group required field-cvv" data-fieldname="cvv" aria-required="true">
                                                        <label for="id_step1-cvv">

                                                            <span class="text-danger">*</span>

                                                            Code CVV
                                                        </label>


                                                        <input autocomplete="off" class="form-control" data-force-disable-onfocusout="true" data-maxlength="4" data-minlength="3" data-number-with-space="false" data-validation="cvv" id="id_step1-cvv" maxlength="4" name="step1-cvv" onpaste="javascript: return false;" type="tel">

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-cvv">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-6 col-sm-3 cvv_box">
                                                    <a href="#cvv_modal" data-toggle="modal"><img src="/static/workflow_processing/img/cvv_small.png" alt="CVV"></a>
                                                </div>





                                            </div>











                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="form-group required field-card_expiry" data-fieldname="card_expiry" aria-required="true">
                                                        <label for="id_step1-card_expiry_0">

                                                            <span class="text-danger">*</span>

                                                            Card Expiration Date
                                                        </label>



                                                        <div class="row">

                                                            <div class="col-xs-6 col-sm-6">
                                                                <select chosen-params="{&quot;width&quot;: &quot;100%&quot;, &quot;search_contains&quot;: true}" class="chosenized form-control text-center" data-validation="date_validate" data-validation-nolog="true" id="id_step1-card_expiry_0" name="step1-card_expiry_month" style="display: none;">
                                                                    <option value="" selected="selected">Select month</option>
                                                                    <option value="01">01 - January</option>
                                                                    <option value="02">02 - February</option>
                                                                    <option value="03">03 - March</option>
                                                                    <option value="04">04 - April</option>
                                                                    <option value="05">05 - May</option>
                                                                    <option value="06">06 - June</option>
                                                                    <option value="07">07 - July</option>
                                                                    <option value="08">08 - August</option>
                                                                    <option value="09">09 - September</option>
                                                                    <option value="10">10 - October</option>
                                                                    <option value="11">11 - November</option>
                                                                    <option value="12">12 - December</option>
                                                                </select><div class="chosen-container chosen-container-single" style="width: 100%;" title="" id="id_step1_card_expiry_0_chosen"><a class="chosen-single"><span>Select month</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6">
                                                                <select chosen-params="{&quot;width&quot;: &quot;100%&quot;, &quot;search_contains&quot;: true}" class="chosenized form-control text-center" data-validation="date_validate" data-validation-nolog="true" id="id_step1-card_expiry_1" name="step1-card_expiry_year" style="display: none;">
                                                                    <option value="" selected="selected">Select year</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                    <option value="2031">2031</option>
                                                                    <option value="2032">2032</option>
                                                                    <option value="2033">2033</option>
                                                                    <option value="2034">2034</option>
                                                                    <option value="2035">2035</option>
                                                                    <option value="2036">2036</option>
                                                                    <option value="2037">2037</option>
                                                                    <option value="2038">2038</option>
                                                                    <option value="2039">2039</option>
                                                                    <option value="2040">2040</option>
                                                                    <option value="2041">2041</option>
                                                                </select><div class="chosen-container chosen-container-single" style="width: 100%;" title="" id="id_step1_card_expiry_1_chosen"><a class="chosen-single"><span>Select year</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                                                            </div>

                                                        </div>

                                                        <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-card_expiry">

                                                        </div>
                                                    </div>
                                                </div>














                                            </div>
                                        </div></div></fieldset>
                            </div>
                        </div>


                        <p>&nbsp;</p>
                        <div class="col-xs-12 text-justify accept-box form-group required" data-fieldname="accept" aria-required="true">
                            <div class="checkbox" id="id_step1-accept">
                                <label for="id_step1-accept_0"><input data-validation-error-decoration="true" id="id_step1-accept_0" name="step1-accept" type="checkbox" value="on"> I have read and consent to the <a class="privacy-anc" href="#">Privacy Policy</a> and <a class="terms-anc" href="#">Terms &amp; Conditions</a> of this website. I am of legal age, or have parental/guardian consent. <b>Price: US$ 9.95</b></label>
                            </div>
                            <div class="col-xs-12 text-danger validation-advice" id="validation_application_step1-accept">

                            </div>
                        </div>



                        <input id="id_step1-referrer" name="step1-referrer" type="hidden" value="https://www.usimmigrationsupport.org/">

                        <input id="id_step1-countries_cards" name="step1-countries_cards" type="hidden" value="{&quot;&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BB&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;JT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BJ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;WS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BQ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;JE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;WK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;RU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;RW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;RS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;RE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TJ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;RO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GQ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GP&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;JP&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GB&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;GH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;OM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;JM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;JO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;WF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;HR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;HT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;HU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;HK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;HN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;HM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IQ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;PL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ZM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;EH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;EE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;EG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ZA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;EC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SB&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ET&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ZW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ES&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ER&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ME&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;UZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ML&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MQ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MP&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;UG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MX&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FX&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SJ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FJ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;FO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ZR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NP&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NQ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;NU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CX&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;CT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SX&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ST&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KP&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;KY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;SD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;DO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;DM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;DJ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;DK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;DE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;YE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;YD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;DZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;US&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;UY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;YT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;UM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LB&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TW&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LK&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TP&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LV&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TH&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;TC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;LY&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VC&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AD&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AG&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AF&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;VI&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AM&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AQ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AS&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AR&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AU&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AT&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IO&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IN&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AX&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;AZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;IE&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;ID&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;UA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;BL&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;QA&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;], &quot;MZ&quot;: [&quot;DISCOVER&quot;, &quot;MAESTRO&quot;, &quot;VISA_ELECTRON&quot;, &quot;MASTERCARD&quot;, &quot;VISA&quot;]}">

                        <input id="id_step1-all_cc_regex" name="step1-all_cc_regex" type="hidden" value="{&quot;MASTERCARD&quot;: &quot;^((5[1-5][0-9]{14})|((222[1-9])[0-9]{12})|((22[3-9])[0-9]{13})|((2[3-6])[0-9]{14})|((27[0-1])[0-9]{13})|((2720)[0-9]{12}))$&quot;, &quot;AMEX&quot;: &quot;^3[47][0-9]{13}$&quot;, &quot;DISCOVER&quot;: &quot;^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)&quot;, &quot;OTHER&quot;: &quot;^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\\\\d{3})\\d{11})$&quot;, &quot;VISA_ELECTRON&quot;: &quot;^(4026|417500|4405|4508|4844|491(3|7))&quot;, &quot;VISA&quot;: &quot;^4[0-9]{12}([0-9]{3})?$&quot;, &quot;DINERS&quot;: &quot;^36[0-9]{12}$&quot;, &quot;JCB&quot;: &quot;^35(2[89]|[3-8][0-9])&quot;, &quot;MAESTRO&quot;: &quot;^(5018|5020|5038|5612|5893|6304|6390|6759|676[1-3])&quot;, &quot;DINERS BL&quot;: &quot;^30[0-5][0-9]{11}$&quot;}">

                        <input id="id_step1-cc_regex" name="step1-cc_regex" type="hidden" value="{&quot;DISCOVER&quot;:&quot;^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)&quot;,&quot;MAESTRO&quot;:&quot;^(5018|5020|5038|5612|5893|6304|6390|6759|676[1-3])&quot;,&quot;VISA_ELECTRON&quot;:&quot;^(4026|417500|4405|4508|4844|491(3|7))&quot;,&quot;MASTERCARD&quot;:&quot;^((5[1-5][0-9]{14})|((222[1-9])[0-9]{12})|((22[3-9])[0-9]{13})|((2[3-6])[0-9]{14})|((27[0-1])[0-9]{13})|((2720)[0-9]{12}))$&quot;,&quot;VISA&quot;:&quot;^4[0-9]{12}([0-9]{3})?$&quot;}">

                        <input id="id_step1-pid" name="step1-pid" type="hidden" value="324">

                        <input id="id_step1-oid" name="step1-oid" type="hidden">








                        <p class="required-text">*Required Text</p>
                        <div id="checkout-btn-holder" class="col-xs-12 text-right">
                            <button class="btn btn-success pull-right" type="submit">ORDER NOW&nbsp;&nbsp;<img src="/static/workflow_processing/img/button-next.png" class="butt-arrow"></button>
                            <p class="processing pull-right">Processing, please wait...</p>
                            <div style="clear:both;"></div>
                            <p>&nbsp;</p>
                        </div>

                        <div class="modal fade" id="cvv_modal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p class="text-center" data-dismiss="modal">
                                            <img src="/static/frontend/img/cvv_large.jpg">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="hidden-xs col-sm-4">
                        <div class="col-xs-12 right-box-content-block">
                            <div class="col-xs-12 no-mar no-pad">
                                <h2 class="text-center">B-2 TOURIST VISA APPLICATION GUIDE</h2>
                            </div>
                            <br>
                            <p class="text-center">
                                <img class="prod-thumb" src="{{ asset('app-logo/b-2-tourist-visa.jpg') }}" alt="B-2 Tourist Visa Application Guide">
                            </p>
                            <br>
                            <p class="right-prod-price text-center no-mar no-pad">
                                <img src="{{ asset('app-logo/icon_pdf.png') }}">&nbsp;PRICE US$ 9.95
                            </p>

                            <p class="text-center">

                            </p>

                            <p class="text-center">
                                <img src="{{ asset('app-logo/star-separator.png') }}" style="max-width:231px; width:100%;">
                            </p>
                            <p class="text-justify">Many visitors to the U.S. need to apply for a B-2 tourist visa depending on which passport is being used. The B-2 tourist visa application process can take several months, and all tourists&nbsp; are advised to start the visa process early to avoid any trip delays. Download the Visa Application Guide for more information about how to apply and what documents are needed.

                            </p><ul class="greenli" style="margin:20px 10px;">
                                <li>Overview of the B-2 Tourist Visa Application</li>
                                <li>What is the B-2 Tourist Visa?
                                </li><li>List of Who Can Apply and Restrictions</li>
                                <li>All B-2 Tourist Visa Requirements</li>
                                <li>All Documents &amp; Forms Included</li>
                                <li>Step by Step Guide on How to Apply </li>
                                <li>All You Need to Know About the B-2 Tourist Visa Application</li>
                            </ul><p></p>
                            <p class="text-center"><img src="{{ asset('app-logo/credit-cards-accepted.png') }}" style="margin:1px; margin-top:-3px; width:100%; max-width:130px;"></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>








@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





