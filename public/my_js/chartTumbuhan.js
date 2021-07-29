const myData = () => {
    return fetch("http://127.0.0.1:8000/api/totalTumbuhan").then(response =>
        response.json().then(response => response)
    );
};

async function grafik() {
    let data = await myData();
    const jmlh = data.map(function(item) {
        return item.jmlh;
    });
    const nm_tumbuhan = data.map(function(item) {
        return item.nm_tumbuhan;
    });

    var options = {
        series: [
            {
                name: "Lokasi",
                data: jmlh
            }
        ],
        chart: {
            height: 350,
            type: "bar",
            events: {
                click: function(chart, w, e) {
                    // console.log(chart, w, e)
                }
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "45%",
                distributed: true
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: nm_tumbuhan,
            labels: {
                style: {
                    fontSize: "12px"
                }
            }
        },
        title: {
            text: "Grafik Sebaran Tumbuhan Obat",
            floating: true,
            offsetY: 0,
            align: "center",
            style: {
                fontSize: "18px",
                color: "#444"
            }
        },
        theme: {
            palette: "palette1" // upto palette10
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
}

grafik();
