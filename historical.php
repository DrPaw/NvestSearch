<script>
/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Set up data source
chart.dataSource.url = "https://api.nomics.com/v1/market-cap/history?key=2018-09-demo-dont-deploy-b69315e440beb145&start=2019-02-25T00%3A00%3A00Z&end=2019-02-27T00%3A00%3A00Z";

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "timestamp";

// Create value axis
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series1 = chart.series.push(new am4charts.LineSeries());
series1.dataFields.valueY = "market_cap";
series1.dataFields.categoryX = "year";
series1.name = "BTC";
series1.strokeWidth = 3;
series1.tensionX = 0.7;
series1.bullets.push(new am4charts.CircleBullet());



// Add legend
chart.legend = new am4charts.Legend();
</script>