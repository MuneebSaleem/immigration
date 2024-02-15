@extends('layouts.app')
@section('content')

<div class="container">
	<section id="top-bar-main" class="py-20">
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">

                    <img class="" src="{{ asset('app-logo/logo-main-dark.png') }}" alt="US Immigration support">

                </div>

                <div class="col-3 col-md-6 col-xl-8 my-auto d-flex justify-content-end text-end">
                    
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
                    </ul>
                </div>
            </div>
        <!-- </div> -->
    </section>
    <header class="image-color-background">
    	<div class="secure-text">
    		<i class="fa fa-shield"></i> SECURE APPLICATION
    	</div>
    </header>
    <section class="container px-160 py-4">
    	<div class="row">
    		<div class="col-md-8">
    			<form class="row font-14 ">
	    			<div class="container-form">
	    				<div class="blue-area-bg px-48 py-4">
	    					<h1 class="m-0">Customer Information
	    					<img class="float-right" src="{{ asset('app-logo/us-flag.png') }}" />
	    					</h1>
	    				</div>

	    				
						<div class="col-md-6 mt-4 ">
							<label for="firstName" class="font-weight-500 form-label"><span class="red">*</span> First Name</label>
						    <input required type="email" class="form-control" id="firstName">
						</div>
						<div class="col-md-6 mt-4 ">
						    <label for="lastName" class="font-weight-500 form-label"><span class="red">*</span> Last Name</label>
						    <input type="text" class="form-control" id="lastName">
						</div>

						<div class="col-md-6 mt-4 ">
							<label for="email" class="font-weight-500 form-label"><span class="red">*</span> Email Address</label>
						    <input required type="email" class="form-control" id="email">
						</div>
						<div class="col-md-6 mt-4 ">
						    <label for="confirEmail" class="font-weight-500 form-label"><span class="red">*</span> Email Address</label>
						    <input type="text" class="form-control" id="confirEmail">
						</div>

						<div class="col-md-6 mt-4 ">
							<label for="alternativeEmail" class="font-weight-500 form-label"><span class="red">*</span> Alternative Email Address</label>
						    <input required type="email" class="form-control" id="alternativeEmail">
						</div>
						<div class="col-md-6 mt-4 ">
						    <label for="number" class="font-weight-500 form-label"><span class="red">*</span> Phone Number</label>
						    <select class="form-select form-control" id="number" data-placeholder="Choose one thing">
							    <option></option>
							    <option>Reactive</option>
							    <option>Solution</option>
							    <option>Conglomeration</option>
							    <option>Algoritm</option>
							    <option>Holistic</option>
							</select>
						</div>

                        <div class="blue-area-bg px-48 py-4 mt-4">
                            <h1 class="m-0">Secure Billing Information
                            <img class="float-right" src="{{ asset('app-logo/us-flag.png') }}" />
                            </h1>
                        </div>

                        <div class="col-md-6 mt-4 ">
                            <label for="firstName" class="font-weight-500 form-label"><span class="red">*</span> First Name</label>
                            <input required type="email" class="form-control" id="firstName">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="lastName" class="font-weight-500 form-label"><span class="red">*</span> Last Name</label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="streetAddress" class="font-weight-500 form-label"><span class="red">*</span> Street Address</label>
                            <input required type="email" class="form-control" id="streetAddress">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="city" class="font-weight-500 form-label"><span class="red">*</span> City</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="zipCode" class="font-weight-500 form-label"><span class="red">*</span> Zip Code</label>
                            <input type="text" class="form-control" id="zipCode">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="country" class="font-weight-500 form-label"><span class="red">*</span> Country</label>
                            <select class="form-select form-control" id="country" data-placeholder="Choose one thing">
                                <option>Select Country</option>
                                @foreach ($countries as $country)
                                <option>{{ $country->countryName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="cardNumber" class="font-weight-500 form-label"><span class="red">*</span> Card Number</label>
                            <input type="text" class="form-control" id="cardNumber">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="cvv" class="font-weight-500 form-label"><span class="red">*</span> CVV</label>
                                    <input type="text" class="w-90 form-control" id="cvv">
                                </div>
                                <div class="col-md-3">
                                    <img src="{{ asset('app-logo/cvv_small.png') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mt-4 ">
                            <label for="cardExpiration" class="font-weight-500 form-label"><span class="red">*</span> Card Expiration</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select form-control" id="cardExpiration" data-placeholder="Choose Month">
                                        <option></option>
                                        <option>1- January</option>
                                        <option>2- Febuary</option>
                                        <option>3- March</option>
                                        <option>4- April</option>
                                        <option>5- May</option>
                                        <option>6- June</option>
                                        <option>7- July</option>
                                        <option>8- August</option>
                                        <option>9- September</option>
                                        <option>10- October</option>
                                        <option>11- November</option>
                                        <option>12- December</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" id="cardExpiration" data-placeholder="Choose Year">
                                        <option></option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                        <option>2031</option>
                                        <option>2032</option>
                                        <option>2033</option>
                                        <option>2034</option>
                                        <option>2035</option>
                                        <option>2036</option>
                                    </select>
                                </div>
                            </div>
                        </div>
						

	    			</div>
                    <div class="mt-4 form-check bg-grey p-5">
                      <input class="form-check-input" type="checkbox" value="" id="agreeCheck">
                      <label class="form-check-label" for="agreeCheck">
                        I have read and consent to the Privacy Policy and Terms & Conditions of this website. I am of legal age, or have parental/guardian consent. Price: US$ 9.95
                      </label>
                    </div>
                    <div class="col-md-12 mt-4 ">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-success me-md-2" type="button">Order Now <i class="fa fa-angle-right"></i> </button>
                        </div>
                    </div>
    			</form>
    		</div>
    		<div class="col-md-4">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    		</div>
    	</div>
    </section>
</div>



@endsection
<script type="text/javascript">
	$(document).ready(function() {
		$('#number').select2( {
		    theme: "bootstrap-5",
		    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
		    placeholder: $( this ).data( 'placeholder' ),
		} );
	});
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>