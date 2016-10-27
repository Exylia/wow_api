Highcharts.theme = {
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        backgroundColor:'transparent',
    },
    title: {
        style: {
            color: 'white',
            font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    subtitle: {
        style: {
            color: '#666666',
            font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
        }
    },

    legend: {
        itemStyle: {
            font: '9pt Trebuchet MS, Verdana, sans-serif',
            color: 'white'
        },
        itemHoverStyle:{
            color: 'gray'
        }
    },
    xAxis: {
        labels: {
            style: {
                color: "white",
            },
        },
    },
    yAxis: {
        title: {
            style: {
                color: "white",
            },
        },
        labels: {
            style: {
                color: "white",
            }
        }
    }
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);