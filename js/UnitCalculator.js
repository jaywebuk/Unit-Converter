let unitSelectSize = document.querySelectorAll(".unitSelect");
let converterButton = document.querySelectorAll(".converter-button");
let button = document.querySelectorAll(".button");
let converter = document.querySelectorAll(".converter");
let converterSelectDropdown = document.getElementById(
  "converter-select-dropdown"
);

document.getElementById("lengthConverter").style["display"] = "block";

if (window.innerWidth >= 576) {
  unitSelectSize.forEach((el) => {
    el.setAttribute("size", "8");
  });
}

converterButton.forEach((el) => {
  el.addEventListener("click", function () {
    button.forEach((thisButton) => {
      thisButton.style = "color: #ccc; background: rgb(69, 27, 83);";
    });
    this.style = "color: white; background: rgb(103, 45, 122)";
    let id = this.dataset["converter"];
    converter.forEach((thisConverter) => {
      thisConverter.style["display"] = "none";
    });
    document.querySelector(`#${id}UnitInput`).setAttribute("value", "");
    document.querySelector(`#${id}UnitOutput`).setAttribute("value", "");
    document.querySelector(`#${id}Converter`).style["display"] = "block";
  });
});

converterSelectDropdown.addEventListener("change", () => {
  let id =
    converterSelectDropdown.options[
      converterSelectDropdown.options.selectedIndex
    ].dataset["converter"];
  console.log(`#${id}UnitInput`);
  converter.forEach((thisConverter) => {
    thisConverter.style["display"] = "none";
  });
  document.querySelector(`#${id}UnitInput`).setAttribute("value", "");
  document.querySelector(`#${id}UnitOutput`).setAttribute("value", "");
  document.querySelector(`#${id}Converter`).style["display"] = "block";
});

window.onresize = () => {
  if (window.innerWidth >= 576) {
    $(".unitSelect").attr("size", "8");
  } else {
    $(".unitSelect").attr("size", "");
  }
};

var length = {
  feet: {
    feet: 1,
    metre: 0.3048,
    inch: 12,
    cm: 30.48,
    mm: 304.8,
    yard: 0.3333333333,
    kilometre: 0.0003048,
    mile: 0.0001893932,
  },
  metre: {
    feet: 3.280839895,
    metre: 1,
    inch: 39.37007874,
    cm: 100,
    mm: 1000,
    yard: 1.0936132983,
    kilometre: 0.001,
    mile: 0.0006213689,
  },
  inch: {
    feet: 0.0833333333,
    metre: 0.0254,
    inch: 1,
    cm: 2.54,
    mm: 25.4,
    yard: 0.0277777778,
    kilometre: 0.0000254,
    mile: 0.0000157828,
  },
  cm: {
    feet: 0.032808399,
    metre: 0.01,
    inch: 0.3937007874,
    cm: 1,
    mm: 10,
    yard: 0.010936133,
    kilometre: 0.00001,
    mile: 0.0000062137,
  },
  yard: {
    feet: 3,
    metre: 0.9144,
    inch: 36,
    cm: 91.44,
    mm: 914.4,
    yard: 1,
    kilometre: 0.0009144,
    mile: 0.0005681797,
  },
  kilometre: {
    feet: 3280.839895,
    metre: 1000,
    inch: 39370.07874,
    cm: 100000,
    mm: 1000000,
    yard: 1093.6132983,
    kilometre: 1,
    mile: 0.6213688756,
  },
  mile: {
    feet: 5280.019685,
    metre: 1609.35,
    inch: 63360.23622,
    cm: 160935,
    mm: 1609350,
    yard: 1760.0065617,
    kilometre: 1.60935,
    mile: 1,
  },
  mm: {
    feet: 0.0032808399,
    metre: 0.001,
    inch: 0.0393700787,
    cm: 0.1,
    mm: 1,
    yard: 0.0010936133,
    kilometre: 0.000001,
    mile: 6.2137e-7,
  },
};

var area = {
  sqFeet: {
    sqFeet: 1,
    sqMetre: 0.09290304,
    sqInch: 144,
    sqCm: 929.0304,
    sqMm: 92903.04,
    sqYard: 0.1111111111,
    sqKilometre: 9.290304e-8,
    sqMile: 3.58700381e-8,
  },
  sqMetre: {
    sqFeet: 10.763910417,
    sqMetre: 1,
    sqInch: 1550.0031,
    sqCm: 10000,
    sqMm: 1000000,
    sqYard: 1.1959900463,
    sqKilometre: 0.000001,
    sqMile: 3.861018768e-7,
  },
  sqInch: {
    sqFeet: 0.0069444444,
    sqMetre: 0.00064516,
    sqInch: 1,
    sqCm: 6.4516,
    sqMm: 645.16,
    sqYard: 0.0007716049,
    sqKilometre: 6.4516e-10,
    sqMile: 2.490974868e-10,
  },
  sqCm: {
    sqFeet: 0.001076391,
    sqMetre: 0.0001,
    sqInch: 0.15500031,
    sqCm: 1,
    sqMm: 100,
    sqYard: 0.000119599,
    sqKilometre: 1e-10,
    sqMile: 3.861018768e-11,
  },
  sqMm: {
    sqFeet: 0.0000107639,
    sqMetre: 0.000001,
    sqInch: 0.0015500031,
    sqCm: 0.01,
    sqMm: 1,
    sqYard: 0.000001196,
    sqKilometre: 1e-12,
    sqMile: 3.861018768e-13,
  },
  sqYard: {
    sqFeet: 9,
    sqMetre: 0.83612736,
    sqInch: 1296,
    sqCm: 8361.2736,
    sqMm: 836127.36,
    sqYard: 1,
    sqKilometre: 8.3612736e-7,
    sqMile: 3.228303429e-7,
  },
  sqKilometre: {
    sqFeet: 10763910.417,
    sqMetre: 1000000,
    sqInch: 1550003100,
    sqCm: 10000000000,
    sqMm: 1000000000000,
    sqYard: 1195990.0463,
    sqKilometre: 1,
    sqMile: 1000000,
  },
  sqMile: {
    sqFeet: 27878420.34,
    sqMetre: 2589990,
    sqInch: 4014492529,
    sqCm: 25899900000,
    sqMm: 2589990000000,
    sqYard: 3097602.26,
    sqKilometre: 2.58999,
    sqMile: 1,
  },
};

var weight = {
  gram: {
    gram: 1,
    kilogram: 0.001,
    pound: 0.00220462,
    ounce: 0.035274,
    stone: 0.000157473,
    imperialTon: 9.8421e-7,
    usTon: 1.1023e-6,
  },
  kilogram: {
    gram: 1000,
    kilogram: 1,
    pound: 2.20462,
    ounce: 35.274,
    stone: 0.157473,
    imperialTon: 0.000984207,
    usTon: 0.00110231,
  },
  pound: {
    gram: 453.592,
    kilogram: 0.453592,
    pound: 1,
    ounce: 16,
    stone: 0.0714286,
    imperialTon: 0.000446429,
    usTon: 0.0005,
  },
  ounce: {
    gram: 28.3495,
    kilogram: 0.0283495,
    pound: 0.0625,
    ounce: 1,
    stone: 0.00446429,
    imperialTon: 2.7902e-5,
    usTon: 3.125e-5,
  },
  stone: {
    gram: 6350.29,
    kilogram: 6.35029,
    pound: 14,
    ounce: 224,
    stone: 1,
    imperialTon: 0.00625,
    usTon: 0.007,
  },
  imperialTon: {
    gram: 1.016e6,
    kilogram: 1016.05,
    pound: 2240,
    ounce: 35840,
    stone: 160,
    imperialTon: 1,
    usTon: 1.12,
  },
  usTon: {
    gram: 907185,
    kilogram: 907.185,
    pound: 2000,
    ounce: 32000,
    stone: 142.857,
    imperialTon: 0.892857,
    usTon: 1,
  },
};

var temp = {
  celsius: {
    celsius: (temp) => parseFloat(temp),
    fahrenheit: (temp) => parseFloat(temp / 5) * 9 + 32,
    kelvin: (temp) => parseFloat(temp) + 273.15,
  },
  fahrenheit: {
    celsius: (temp) => ((parseFloat(temp) - 32) * 5) / 9,
    fahrenheit: (temp) => parseFloat(temp),
    kelvin: (temp) => (parseFloat(temp) - 32) * (5 / 9) + 273.15,
  },
  kelvin: {
    celsius: (temp) => parseFloat(temp) - 273.15,
    fahrenheit: (temp) => (parseFloat(temp) - 273.15) * (9 / 5) + 32,
    kelvin: (temp) => parseFloat(temp),
  },
};

const convert = id => {
  const input = document.querySelector(`#${id}`).value;
  const unit = document.querySelector(`#${id}`).dataset["unit"];
  let output = null;

  if (input === "") {
    document.querySelector(`#${unit}UnitOutput`).value = "";
    return;
  }

  const convertFrom = document.querySelector(`#${unit}ConvertFrom`).value;
  const convertTo = document.querySelector(`#${unit}ConvertTo`).value;

  if (input) {
    if (isNaN(input) && input !== "-" && input !== ".") {
      document.querySelector(`#${unit}UnitOutput`).value = "Invalid Input.";
      return;
    }
    if (input === "-") {
      document.querySelector(`#${unit}UnitOutput`).value = "-";
      return;
    }
    if (input === ".") {
      document.querySelector(`#${unit}UnitOutput`).value = ".";
      return;
    }

    if (unit === "temp") {
      output = window[unit][convertFrom][convertTo](input);
    } else {
      output = input * window[unit][convertFrom][convertTo];
    }

    document.querySelector(`#${unit}UnitOutput`).value = parseFloat(
      output.toFixed(4)
    );
  }
}
