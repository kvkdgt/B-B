//Total Listing Chart

var canvas = document.getElementById("total_listing_chart");
var ctx = canvas.getContext("2d");
var data = [30, 10, 45, 75, 25, 125, 15, 145, 13, 14, 78, 52];
var labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];

// Draw the chart
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: labels,
        datasets: [
            {
                label: "Listings",
                data: data,
                lineTension: 0,
                pointStyle: "circle",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                //            borderColor: 'transparent',
                pointRadius: 1,
                pointHoverRadius: 5,
                pointHoverBorderWidth: 5,
                pointBorderColor: "transparent",
                borderWidth: 1,
                fill: {
                    target: "origin",
                    above: "rgba(29, 161, 242, 0.5)", // Area will be red above the origin
                    //                below: 'rgb(0, 0, 255)'    // And blue below the origin
                },
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    color: "rgb(255, 99, 132)",
                },
            },
        },
        scales: {
            x: {
                display: false,
                title: {
                    display: true,
                    text: "Month",
                },
            },
            y: {
                display: false,
                title: {
                    display: true,
                    text: "Value",
                },
            },
        },
    },
});

//Total Revenue Chart

var canvas = document.getElementById("total_revenue_chart");
var ctx = canvas.getContext("2d");
var data = [30, 10, 45, 15, 75, 25, 115, 45, 13, 104, 78, 12];
var labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];

// Draw the chart
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: labels,
        datasets: [
            {
                label: "Listings",
                data: data,
                lineTension: 0,
                pointStyle: "circle",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                //            borderColor: 'transparent',
                pointRadius: 1,
                pointHoverRadius: 5,
                pointHoverBorderWidth: 5,
                pointBorderColor: "transparent",
                borderWidth: 1,
                fill: {
                    target: "origin",
                    above: "rgba(29, 161, 242, 0.5)", // Area will be red above the origin
                    //                below: 'rgb(0, 0, 255)'    // And blue below the origin
                },
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    color: "rgb(255, 99, 132)",
                },
            },
        },
        scales: {
            x: {
                display: false,
                title: {
                    display: true,
                    text: "Month",
                },
            },
            y: {
                display: false,
                title: {
                    display: true,
                    text: "Value",
                },
            },
        },
    },
});

//Total Net Income Chart

var canvas = document.getElementById("total_income_chart");
var ctx = canvas.getContext("2d");
var data = [10, 110, 15, 25, 75, 125, 115, 145, 103, 14, 78, 112];
var labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];

// Draw the chart
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: labels,
        datasets: [
            {
                label: "Listings",
                data: data,
                lineTension: 0,
                pointStyle: "circle",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                //            borderColor: 'transparent',
                pointRadius: 1,
                pointHoverRadius: 5,
                pointHoverBorderWidth: 5,
                pointBorderColor: "transparent",
                borderWidth: 1,
                fill: {
                    target: "origin",
                    above: "rgba(29, 161, 242, 0.5)", // Area will be red above the origin
                    //                below: 'rgb(0, 0, 255)'    // And blue below the origin
                },
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    color: "rgb(255, 99, 132)",
                },
            },
        },
        scales: {
            x: {
                display: false,
                title: {
                    display: true,
                    text: "Month",
                },
            },
            y: {
                display: false,
                title: {
                    display: true,
                    text: "Value",
                },
            },
        },
    },
});

//Bookings Chart

var canvas = document.getElementById("bookings_chart");
var ctx = canvas.getContext("2d");
var data = [10, 110, 15, 25, 75, 125, 115, 145, 103, 14, 78, 112];
var labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];

// Draw the chart
var chart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: labels,
        datasets: [
            {
                label: "Accepted",
                data: [100, 90, 150, 50, 105, 15, 150, 145, 103, 140, 78, 65],
                backgroundColor: ["rgba(108, 185, 173, 1)"],
                borderWidth: 1,
            },
            {
                label: "Rejected",
                data: [10, 20, 15, 25, 75, 15, 45, 15, 23, 14, 78, 2],
                backgroundColor: ["rgba(50, 77, 221, 1)"],
                borderWidth: 1,
            },
            {
                label: "Refunded",
                data: [5, 11, 11, 25, 75, 15, 5, 14, 10, 14, 8, 12],
                backgroundColor: ["rgba(39, 42, 62, 1)"],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: "rgba(0, 0, 0, 1)",
                },
            },
        },
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: "Month",
                },
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: "Bookngs",
                },
            },
        },
    },
});

//Income Pie Chart

var canvas = document.getElementById("income_pie_chart");
var ctx = canvas.getContext("2d");

// Draw the chart
var chart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Revenue", "Payout", "Income"],
        datasets: [
            {
                label: "€",
                data: [30, 50, 80],
                backgroundColor: [
                    "rgba(247, 110, 253, 1)",
                    "rgba(255, 204, 145, 1)",
                    "rgba(151, 165, 235, 1)",
                ],
                hoverOffset: 4,
            },
        ],
    },
});

var canvas = document.getElementById("total_chart");
var ctx = canvas.getContext("2d");
var data = [30, 10, 45, 75, 25, 125, 15, 145, 13, 14, 78, 52];
var labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];

// Draw the chart
var chart = new Chart(ctx, {
    type: "line",
    data: {
        labels: labels,
        datasets: [
            {
                label: "Listings",
                data: data,
                lineTension: 0,
                pointStyle: "circle",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                //            borderColor: 'transparent',
                pointRadius: 1,
                pointHoverRadius: 5,
                pointHoverBorderWidth: 5,
                pointBorderColor: "transparent",
                borderWidth: 1,
                fill: {
                    target: "origin",
                    above: "rgba(29, 161, 242, 0.5)", // Area will be red above the origin
                    //                below: 'rgb(0, 0, 255)'    // And blue below the origin
                },
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    color: "rgb(255, 99, 132)",
                },
            },
        },
        scales: {
            x: {
                display: false,
                title: {
                    display: true,
                    text: "Month",
                },
            },
            y: {
                display: false,
                title: {
                    display: true,
                    text: "Value",
                },
            },
        },
    },
});
