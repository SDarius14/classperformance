var ctx = document.getElementById("gradeChart").getContext("2d");
var data = {
    labels: ["Prelims", "Midterms", "Finals"],
    datasets: [
        {
            label: "Student 1",
            borderColor: "red",
            data: [85, 90, 95],
            fill: false,
        },
        {
            label: "Student 2",
            borderColor: "blue",
            data: [88, 92, 96],
            fill: false,
        },
        {
            label: "Student 3",
            borderColor: "green",
            data: [90, 91, 94],
            fill: false,
        },
        {
            label: "Student 4",
            borderColor: "purple",
            data: [92, 93, 98],
            fill: false,
        },
        {
            label: "Student 5",
            borderColor: "orange",
            data: [95, 96, 100],
            fill: false,
        },
    ],
};

var options = {
    responsive: true,
    scales: {
        x: {
            display: true,
            title: {
                display: true,
                text: "Exams",
            },
        },
        y: {
            display: true,
            title: {
                display: true,
                text: "Grades (%)",
            },
            suggestedMin: 75,
            suggestedMax: 100,
        },
    },
};

var myChart = new Chart(ctx, {
    type: "line",
    data: data,
    options: options,
});
