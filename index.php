<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Jason Robinson">
    <meta name="robots" content="index,follow">
    <title>Unit Conversion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script defer src="js/UnitCalculator.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="icon" href="favicon.png">
</head>
<noscript style="color: red; text-align: center; font-weight: bold;">
    This webpage requires JavaScript. Please enable it or use a JavaScript capable browser.
</noscript>

<body class="d-flex flex-column h-100">

    <main role="main" class="flex-shrink-0">
        <div class="container-fluid p-0">
            <header class="main-header d-flex justify-content-between px-3">
                <section class="site-title">
                    <a href="/">
                        <h1 class="display-4">jrwebdev</h1>
                        <p class="tagline lead d-md-inline">Helping to create your world online.</p>
                    </a>
                </section>
                <section
                    class="social d-flex flex-column flex-sm-row justify-content-between justify-content-sm-between pt-2 pb-2 pt-sm-3">
                    <a class="" href="/" title="My Website" data-link="jnrwebdev"
                        target="_blank">
                        <img class="mb-2 mt-sm-0" src="img/site_logo.png" alt="My Website">
                    </a>
                    <a class="mb-2" href="https://twitter.com/jayuk79" target="_blank" title="Twitter" rel="noopener">
                        <img src="img/twitter_32.png" alt="Twitter" title="Twitter">
                    </a>
                    <a class="" href="https://github.com/jayuk79" target="_blank" title="GitHub" rel="noopener">
                        <img src="img/GitHub_32.png" alt="GitHub" title="GitHub">
                    </a>
                </section>

            </header>
            <section class="container d-flex flex-column align-items-center">
                <section class="navbars">
                    <nav class="mt-5 nav-buttons">
                        <button id="lengthButton" type="button" class="button converter-button"
                            data-converter="length">Length</button>
                        <button id="areaButton" type="button" class="button converter-button"
                            data-converter="area">Area</button>
                        <button id="temperatureButton" type="button" class="button converter-button"
                            data-converter="temp">Temperature</button>
                        <button id="weightButton" type="button" class="button converter-button"
                            data-converter="weight">Weight</button>
                    </nav>
                    <nav class="mt-5 nav-dropdown">
                        <select name="" id="converter-select-dropdown">
                            <option id="lengthOption" type="button" class="button converter-option"
                                data-converter="length">Length
                            </option>
                            <option id="areaOption" type="button" class="button converter-option" data-converter="area">
                                Area</option>
                            <option id="temperatureOption" type="button" class="button converter-option"
                                data-converter="temp">
                                Temperature</option>
                            <option id="weightOption" type="button" class="button converter-option"
                                data-converter="weight">Weight
                            </option>
                        </select>
                    </nav>
                </section>

                <!-- ///////  Length Converter  \\\\\\\ -->
                <article id="lengthConverter" class="card mt-3 py-3 px-0 px-sm-2 converter">
                    <header class="card-title">
                        <h2 class="text-center">Length</h2>
                    </header>
                    <section class="form-container" role="form" class="">
                        <form>
                            <div class="form-group">
                                <input class="form-control mb-2 unitOutput" type="text" maxlength="30"
                                    id="lengthUnitOutput" placeholder="Result" disabled>
                                <input class="form-control unitInput" maxlength="30" type="text" id="lengthUnitInput"
                                    onkeyup="javascript:convert(this.id);" data-unit="length"
                                    placeholder="Enter number to convert">
                            </div>
                            <div class="row">
                                <div class="col-sm px-3">
                                    <label for="lengthConvertFrom">From: </label>
                                    <select class="form-control unitSelect" name="lengthConvertFrom"
                                        id="lengthConvertFrom" onchange="javascript:convert('lengthUnitInput');">
                                        <option value="feet">Feet</option>
                                        <option value="metre">Metres</option>
                                        <option value="inch">Inches</option>
                                        <option value="cm">Centimetres</option>
                                        <option value="mm">Millimetres</option>
                                        <option value="kilometre">Kilometres</option>
                                        <option value="mile">Miles</option>
                                        <option value="yard">Yards</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label for="lengthConvertTo">To: </label>
                                    <select class="form-control unitSelect" name="lengthConvertTo" id="lengthConvertTo"
                                        onchange="javascript:convert('lengthUnitInput');">
                                        <option value="feet">Feet</option>
                                        <option value="metre" selected>Metres</option>
                                        <option value="inch">Inches</option>
                                        <option value="cm">Centimetres</option>
                                        <option value="mm">Millimetres</option>
                                        <option value="kilometre">Kilometres</option>
                                        <option value="mile">Miles</option>
                                        <option value="yard">Yards</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </section>
                </article>

                <!-- ///////  Area Converter  \\\\\\\ -->
                <article id="areaConverter" class="card mt-3 py-3 px-0 px-sm-2 converter">
                    <header class="card-title">
                        <h2 class="text-center">Area</h2>
                    </header>
                    <section class="form-container" role="form" class="">
                        <form>
                            <div class="form-group">
                                <input class="form-control mb-2 unitOutput" type="text" maxlength="30"
                                    id="areaUnitOutput" placeholder="Result" disabled>
                                <input class="form-control unitInput" maxlength="30" type="text" id="areaUnitInput"
                                    onkeyup="javascript:convert(this.id);" data-unit="area"
                                    placeholder="Enter number to convert">
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="lengthConvertFrom">From: </label>
                                    <select class="form-control unitSelect" name="areaConvertFrom" id="areaConvertFrom"
                                        size="" onchange="javascript:convert('areaUnitInput');">
                                        <option value="sqFeet" selected>Square Feet</option>
                                        <option value="sqMetre">Square Metres</option>
                                        <option value="sqInch">Square Inches</option>
                                        <option value="sqCm">Square Centimetres</option>
                                        <option value="sqMm">Square Millimetres</option>
                                        <option value="sqKilometre">Square Kilometres</option>
                                        <option value="sqMile">Square Miles</option>
                                        <option value="sqYard">Square Yards</option>
                                    </select>

                                </div>
                                <div class="col-sm">
                                    <label for="lengthConvertFrom">To: </label>
                                    <select class="form-control unitSelect" name="areaConvertTo" id="areaConvertTo"
                                        size="" onchange="javascript:convert('areaUnitInput');">
                                        <option value="sqFeet">Square Feet</option>
                                        <option value="sqMetre" selected>Square Metres</option>
                                        <option value="sqInch">Square Inches</option>
                                        <option value="sqCm">Square Centimetres</option>
                                        <option value="sqMm">Square Millimetres</option>
                                        <option value="sqKilometre">Square Kilometres</option>
                                        <option value="sqMile">Square Miles</option>
                                        <option value="sqYard">Square Yards</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </section>
                </article>

                <!-- ///////  Temperature Converter  \\\\\\\ -->
                <article id="tempConverter" class="card mt-3 py-3 px-0 px-sm-2 converter">
                    <header class="card-title">
                        <h2 class="text-center">Temperature</h2>
                    </header>
                    <section class="form-container" role="form" class="">
                        <form>
                            <div class="form-group">
                                <input class="form-control mb-2 unitOutput" type="text" maxlength="30"
                                    id="tempUnitOutput" placeholder="Result" disabled>
                                <input class="form-control unitInput" maxlength="30" type="text" id="tempUnitInput"
                                    onkeyup="javascript:convert(this.id);" data-unit="temp"
                                    placeholder="Enter number to convert">
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="lengthConvertFrom">From: </label>
                                    <select class="form-control unitSelect" name="tempConvertFrom" id="tempConvertFrom"
                                        size="" onchange="javascript:convert('tempUnitInput');">
                                        <option value="celsius" selected>Celsius</option>
                                        <option value="fahrenheit">Fahrenheit</option>
                                        <option value="kelvin">Kelvin</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label for="lengthConvertFrom">To: </label>
                                    <select class="form-control unitSelect" name="tempConvertTo" id="tempConvertTo"
                                        size="" onchange="javascript:convert('tempUnitInput');">
                                        <option value="celsius">Celsius</option>
                                        <option value="fahrenheit" selected>Fahrenheit</option>
                                        <option value="kelvin">Kelvin</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </section>
                </article>

                <!-- ///////  Weight Converter  \\\\\\\ -->
                <article id="weightConverter" class="card mt-3 py-3 px-0 px-sm-2 converter">
                    <header class="card-title">
                        <h2 class="text-center">Weight</h2>
                    </header>
                    <section class="form-container" role="form" class="">
                        <form>
                            <div class="form-group">
                                <input class="form-control mb-2 unitOutput" type="text" maxlength="30"
                                    id="weightUnitOutput" placeholder="Result" disabled>
                                <input class="form-control unitInput" maxlength="30" type="text" id="weightUnitInput"
                                    onkeyup="javascript:convert(this.id);" data-unit="weight"
                                    placeholder="Enter number to convert">
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="lengthConvertFrom">From: </label>
                                    <select class="form-control unitSelect" name="weightConvertFrom"
                                        id="weightConvertFrom" size=""
                                        onchange="javascript:convert('weightUnitInput');">
                                        <option value="gram" selected>Gram</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="pound">Pound</option>
                                        <option value="ounce">Ounce</option>
                                        <option value="stone">Stone</option>
                                        <option value="imperialTon">Imperial Ton</option>
                                        <option value="usTon">US Ton</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label for="lengthConvertFrom">To: </label>
                                    <select class="form-control unitSelect" name="weightConvertTo" id="weightConvertTo"
                                        size="" onchange="javascript:convert('weightUnitInput');">
                                        <option value="gram">Gram</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="pound">Pound</option>
                                        <option value="ounce" selected>Ounce</option>
                                        <option value="stone">Stone</option>
                                        <option value="imperialTon">Imperial Ton</option>
                                        <option value="usTon">US Ton</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </section>
                </article>
            </section>
        </div>
    </main>
    <footer class="footer mt-auto">
        <?php 
		$year = date("Y");
		$yearString="" ;
		if ($year > 2020) {
		$yearString = " - $year";
		}
		?>
        <p class="m-0">Results are approximate. There are no guarantees of accuracy.</p>
        <p class="m-0">Copyright &copy; 2020 <?=$yearString?> <a href="/">Jason Robinson.</a></p>
    </footer>

</body>

</html>