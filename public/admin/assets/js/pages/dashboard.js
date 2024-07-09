var chartColors = {
    red: "rgb(255, 99, 132)",
    orange: "rgb(255, 159, 64)",
    yellow: "rgb(255, 205, 86)",
    // green: "rgb(75, 192, 192)",
    info: "#41B1F9",
    blue: "#3245D1",
    purple: "rgb(153, 102, 255)",
    grey: "#EBEFF6",
    aliceblue: "rgb(240, 248, 255)",
    antiquewhite: "rgb(250, 235, 215)",
    aqua: "rgb(0, 255, 255)",
    aquamarine: "rgb(127, 255, 212)",
    azure: "rgb(240, 255, 255)",
    beige: "rgb(245, 245, 220)",
    bisque: "rgb(255, 228, 196)",
    black: "rgb(0, 0, 0)",
    blanchedalmond: "rgb(255, 235, 205)",
    blue: "rgb(0, 0, 255)",
    blueviolet: "rgb(138, 43, 226)",
    brown: "rgb(165, 42, 42)",
    burlywood: "rgb(222, 184, 135)",
    cadetblue: "rgb(95, 158, 160)",
    chartreuse: "rgb(127, 255, 0)",
    chocolate: "rgb(210, 105, 30)",
    coral: "rgb(255, 127, 80)",
    cornflowerblue: "rgb(100, 149, 237)",
    cornsilk: "rgb(255, 248, 220)",
    crimson: "rgb(220, 20, 60)",
    cyan: "rgb(0, 255, 255)",
    darkblue: "rgb(0, 0, 139)",
    darkcyan: "rgb(0, 139, 139)",
    darkgoldenrod: "rgb(184, 134, 11)",
    darkgray: "rgb(169, 169, 169)",
    darkgreen: "rgb(0, 100, 0)",
    darkgrey: "rgb(169, 169, 169)",
    darkkhaki: "rgb(189, 183, 107)",
    darkmagenta: "rgb(139, 0, 139)",
    darkolivegreen: "rgb(85, 107, 47)",
    darkorange: "rgb(255, 140, 0)",
    darkorchid: "rgb(153, 50, 204)",
    darkred: "rgb(139, 0, 0)",
    darksalmon: "rgb(233, 150, 122)",
    darkseagreen: "rgb(143, 188, 143)",
    darkslateblue: "rgb(72, 61, 139)",
    darkslategray: "rgb(47, 79, 79)",
    darkslategrey: "rgb(47, 79, 79)",
    darkturquoise: "rgb(0, 206, 209)",
    darkviolet: "rgb(148, 0, 211)",
    deeppink: "rgb(255, 20, 147)",
    deepskyblue: "rgb(0, 191, 255)",
    dimgray: "rgb(105, 105, 105)",
    dimgrey: "rgb(105, 105, 105)",
    dodgerblue: "rgb(30, 144, 255)",
    firebrick: "rgb(178, 34, 34)",
    floralwhite: "rgb(255, 250, 240)",
    forestgreen: "rgb(34, 139, 34)",
    fuchsia: "rgb(255, 0, 255)",
    gainsboro: "rgb(220, 220, 220)",
    ghostwhite: "rgb(248, 248, 255)",
    gold: "rgb(255, 215, 0)",
    goldenrod: "rgb(218, 165, 32)",
    gray: "rgb(128, 128, 128)",
    green: "rgb(0, 128, 0)",
    greenyellow: "rgb(173, 255, 47)",
    // grey: 'rgb(128, 128, 128)',
    honeydew: "rgb(240, 255, 240)",
    hotpink: "rgb(255, 105, 180)",
    indianred: "rgb(205, 92, 92)",
    indigo: "rgb(75, 0, 130)",
    ivory: "rgb(255, 255, 240)",
    khaki: "rgb(240, 230, 140)",
    lavender: "rgb(230, 230, 250)",
    lavenderblush: "rgb(255, 240, 245)",
    lawngreen: "rgb(124, 252, 0)",
    lemonchiffon: "rgb(255, 250, 205)",
    lightblue: "rgb(173, 216, 230)",
    lightcoral: "rgb(240, 128, 128)",
    lightcyan: "rgb(224, 255, 255)",
    lightgoldenrodyellow: "rgb(250, 250, 210)",
    lightgray: "rgb(211, 211, 211)",
    lightgreen: "rgb(144, 238, 144)",
    lightgrey: "rgb(211, 211, 211)",
    lightpink: "rgb(255, 182, 193)",
    lightsalmon: "rgb(255, 160, 122)",
    lightseagreen: "rgb(32, 178, 170)",
    lightskyblue: "rgb(135, 206, 250)",
    lightslategray: "rgb(119, 136, 153)",
    lightslategrey: "rgb(119, 136, 153)",
    lightsteelblue: "rgb(176, 196, 222)",
    lightyellow: "rgb(255, 255, 224)",
    lime: "rgb(0, 255, 0)",
    limegreen: "rgb(50, 205, 50)",
    linen: "rgb(250, 240, 230)",
    magenta: "rgb(255, 0, 255)",
    maroon: "rgb(128, 0, 0)",
    mediumaquamarine: "rgb(102, 205, 170)",
    mediumblue: "rgb(0, 0, 205)",
    mediumorchid: "rgb(186, 85, 211)",
    mediumpurple: "rgb(147, 112, 219)",
    mediumseagreen: "rgb(60, 179, 113)",
    mediumslateblue: "rgb(123, 104, 238)",
    mediumspringgreen: "rgb(0, 250, 154)",
    mediumturquoise: "rgb(72, 209, 204)",
    mediumvioletred: "rgb(199, 21, 133)",
    midnightblue: "rgb(25, 25, 112)",
    mintcream: "rgb(245, 255, 250)",
    mistyrose: "rgb(255, 228, 225)",
    moccasin: "rgb(255, 228, 181)",
    navajowhite: "rgb(255, 222, 173)",
    navy: "rgb(0, 0, 128)",
    oldlace: "rgb(253, 245, 230)",
    olive: "rgb(128, 128, 0)",
    olivedrab: "rgb(107, 142, 35)",
    orange: "rgb(255, 165, 0)",
    orangered: "rgb(255, 69, 0)",
    orchid: "rgb(218, 112, 214)",
    palegoldenrod: "rgb(238, 232, 170)",
    palegreen: "rgb(152, 251, 152)",
    paleturquoise: "rgb(175, 238, 238)",
    palevioletred: "rgb(219, 112, 147)",
    papayawhip: "rgb(255, 239, 213)",
    peachpuff: "rgb(255, 218, 185)",
    peru: "rgb(205, 133, 63)",
    pink: "rgb(255, 192, 203)",
    plum: "rgb(221, 160, 221)",
    powderblue: "rgb(176, 224, 230)",
    purple: "rgb(128, 0, 128)",
    rebeccapurple: "rgb(102, 51, 153)",
    red: "rgb(255, 0, 0)",
    rosybrown: "rgb(188, 143, 143)",
    royalblue: "rgb(65, 105, 225)",
    saddlebrown: "rgb(139, 69, 19)",
    salmon: "rgb(250, 128, 114)",
    sandybrown: "rgb(244, 164, 96)",
    seagreen: "rgb(46, 139, 87)",
    seashell: "rgb(255, 245, 238)",
    sienna: "rgb(160, 82, 45)",
    silver: "rgb(192, 192, 192)",
    skyblue: "rgb(135, 206, 235)",
    slateblue: "rgb(106, 90, 205)",
    slategray: "rgb(112, 128, 144)",
    slategrey: "rgb(112, 128, 144)",
    snow: "rgb(255, 250, 250)",
    springgreen: "rgb(0, 255, 127)",
    steelblue: "rgb(70, 130, 180)",
    tan: "rgb(210, 180, 140)",
    teal: "rgb(0, 128, 128)",
    thistle: "rgb(216, 191, 216)",
    tomato: "rgb(255, 99, 71)",
    turquoise: "rgb(64, 224, 208)",
    violet: "rgb(238, 130, 238)",
    wheat: "rgb(245, 222, 179)",
    white: "rgb(255, 255, 255)",
    whitesmoke: "rgb(245, 245, 245)",
    yellow: "rgb(255, 255, 0)",
    yellowgreen: "rgb(154, 205, 50)",
};

var config1 = {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Balance",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 40, 20, 70, 10, 50, 20],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: -10,
                top: 10,
            },
        },
        legend: {
            display: false,
        },
        title: {
            display: false,
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
        },
    },
};
var config2 = {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Revenue",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 800, 300, 400, 10, 50, 20],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: -10,
                top: 10,
            },
        },
        legend: {
            display: false,
        },
        title: {
            display: false,
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
        },
    },
};
var config3 = {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Orders",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 40, 20, 200, 10, 540, 723],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: -10,
                top: 10,
            },
        },
        legend: {
            display: false,
        },
        title: {
            display: false,
            text: "Chart.js Line Chart",
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
        },
    },
};
var config4 = {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 40, 20, 70, 10, 5, 23],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: -10,
                top: 10,
            },
        },
        legend: {
            display: false,
        },
        title: {
            display: false,
            text: "Chart.js Line Chart",
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
            yAxes: [
                {
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                },
            ],
        },
    },
};

var randomScalingFactor = function () {
    return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
};

// draws a rectangle with a rounded top
Chart.helpers.drawRoundedTopRectangle = function (
    ctx,
    x,
    y,
    width,
    height,
    radius
) {
    ctx.beginPath();
    ctx.moveTo(x + radius, y);
    // top right corner
    ctx.lineTo(x + width - radius, y);
    ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
    // bottom right	corner
    ctx.lineTo(x + width, y + height);
    // bottom left corner
    ctx.lineTo(x, y + height);
    // top left
    ctx.lineTo(x, y + radius);
    ctx.quadraticCurveTo(x, y, x + radius, y);
    ctx.closePath();
};

Chart.elements.RoundedTopRectangle = Chart.elements.Rectangle.extend({
    draw: function () {
        var ctx = this._chart.ctx;
        var vm = this._view;
        var left, right, top, bottom, signX, signY, borderSkipped;
        var borderWidth = vm.borderWidth;

        if (!vm.horizontal) {
            // bar
            left = vm.x - vm.width / 2;
            right = vm.x + vm.width / 2;
            top = vm.y;
            bottom = vm.base;
            signX = 1;
            signY = bottom > top ? 1 : -1;
            borderSkipped = vm.borderSkipped || "bottom";
        } else {
            // horizontal bar
            left = vm.base;
            right = vm.x;
            top = vm.y - vm.height / 2;
            bottom = vm.y + vm.height / 2;
            signX = right > left ? 1 : -1;
            signY = 1;
            borderSkipped = vm.borderSkipped || "left";
        }

        // Canvas doesn't allow us to stroke inside the width so we can
        // adjust the sizes to fit if we're setting a stroke on the line
        if (borderWidth) {
            // borderWidth shold be less than bar width and bar height.
            var barSize = Math.min(
                Math.abs(left - right),
                Math.abs(top - bottom)
            );
            borderWidth = borderWidth > barSize ? barSize : borderWidth;
            var halfStroke = borderWidth / 2;
            // Adjust borderWidth when bar top position is near vm.base(zero).
            var borderLeft =
                left + (borderSkipped !== "left" ? halfStroke * signX : 0);
            var borderRight =
                right + (borderSkipped !== "right" ? -halfStroke * signX : 0);
            var borderTop =
                top + (borderSkipped !== "top" ? halfStroke * signY : 0);
            var borderBottom =
                bottom + (borderSkipped !== "bottom" ? -halfStroke * signY : 0);
            // not become a vertical line?
            if (borderLeft !== borderRight) {
                top = borderTop;
                bottom = borderBottom;
            }
            // not become a horizontal line?
            if (borderTop !== borderBottom) {
                left = borderLeft;
                right = borderRight;
            }
        }

        // calculate the bar width and roundess
        var barWidth = Math.abs(left - right);
        var roundness = this._chart.config.options.barRoundness || 0.5;
        var radius = barWidth * roundness * 0.5;

        // keep track of the original top of the bar
        var prevTop = top;

        // move the top down so there is room to draw the rounded top
        top = prevTop + radius;
        var barRadius = top - prevTop;

        ctx.beginPath();
        ctx.fillStyle = vm.backgroundColor;
        ctx.strokeStyle = vm.borderColor;
        ctx.lineWidth = borderWidth;

        // draw the rounded top rectangle
        Chart.helpers.drawRoundedTopRectangle(
            ctx,
            left,
            top - barRadius + 1,
            barWidth,
            bottom - prevTop,
            barRadius
        );

        ctx.fill();
        if (borderWidth) {
            ctx.stroke();
        }

        // restore the original top value so tooltips and scales still work
        top = prevTop;
    },
});

Chart.defaults.roundedBar = Chart.helpers.clone(Chart.defaults.bar);

Chart.controllers.roundedBar = Chart.controllers.bar.extend({
    dataElementType: Chart.elements.RoundedTopRectangle,
});

var ctxBar = document.getElementById("bar").getContext("2d");
var myBar = new Chart(ctxBar, {
    type: "bar",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [
            {
                label: "Students",
                backgroundColor: [
                    chartColors.grey,
                    chartColors.grey,
                    chartColors.grey,
                    chartColors.grey,
                    chartColors.lightseagreen,
                    chartColors.green,
                    chartColors.grey,
                ],
                data: [5, 10, 30, 40, 35, 55, 15],
            },
        ],
    },
    options: {
        responsive: true,
        barRoundness: 1,
        title: {
            display: false,
            text: "Chart.js - Bar Chart with Rounded Tops (drawRoundedTopRectangle Method)",
        },
        legend: {
            display: false,
        },
        scales: {
            yAxes: [
                {
                    ticks: {
                        beginAtZero: true,
                        suggestedMax: 40 + 20,
                        padding: 10,
                    },
                    gridLines: {
                        drawBorder: false,
                    },
                },
            ],
            xAxes: [
                {
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                },
            ],
        },
    },
});
var radialBarsOptions = {
    series: [44, 80, 67],
    chart: {
        height: 350,
        type: "radialBar",
    },
    theme: {
        mode: "light",
        palette: "palette1",
        monochrome: {
            enabled: true,
            color: chartColors.green,
            shadeTo: "light",
            shadeIntensity: 0.65,
        },
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    offsetY: -15,
                    fontSize: "22px",
                },
                value: {
                    fontSize: "2.5rem",
                },
                total: {
                    show: true,
                    label: "Earnings",
                    color: chartColors.green,
                    fontSize: "16px",
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return "$4,124";
                    },
                },
            },
        },
    },
    labels: ["Apples", "Oranges", "Bananas", "Berries"],
};
var radialBars = new ApexCharts(
    document.querySelector("#radialBars"),
    radialBarsOptions
);
radialBars.render();
let ctx1 = document.getElementById("canvas1").getContext("2d");
let ctx2 = document.getElementById("canvas2").getContext("2d");
let ctx3 = document.getElementById("canvas3").getContext("2d");
let ctx4 = document.getElementById("canvas4").getContext("2d");
var lineChart1 = new Chart(ctx1, config1);
var lineChart2 = new Chart(ctx2, config2);
var lineChart3 = new Chart(ctx3, config3);
var lineChart4 = new Chart(ctx4, config4);
