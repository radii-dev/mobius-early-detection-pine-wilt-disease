<?php
$conn = mysqli_connect("localhost", "root", "69314718056", "mobiusdb");
if ($conn->connect_error) {
die("Connection failed:". $conn-> connect_error);
}
// Include the ../src/fusioncharts.php file that contains functions to embed the charts./
include("fusioncharts.php");
?>

<html>
<head>
    <title>#00001 | Detail view</title>
    <script src="resources/js/fusioncharts.js"></script>
    <script src="resources/js/themes/fusioncharts.theme.fusion.js"></script>
</head>
<body>
<div id="map" style="width:500px;height:500px;float:left;"></div>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=7490e465198592f36ddc530e241bed67"></script>
<script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(36.719248, 128.038064), // 지도의 중심좌표
        level: 13 // 지도의 확대 레벨
    };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

    // 마커가 표시될 위치입니다 
    var markerPosition  = new kakao.maps.LatLng(36.624034, 128.727015); 

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition,
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);

    // 아래 코드는 지도 위의 마커를 제거하는 코드입니다
    // marker.setMap(null);    
</script>
<?php
// Chart Configuration stored in Associative Array
$arrChartConfig = array(
    "chart" => array(
        "caption" => "Countries With Most Oil Reserves [2017-18]",
        "subCaption" => "In MMbbl = One Million barrels",
        "xAxisName" => "Country",
        "yAxisName" => "Reserves (MMbbl)",
        "numberSuffix" => "K",
        "theme" => "fusion"
    )
);
// An array of hash objects which stores data
$arrChartData = array(
    ["Venezuela", "290"],
    ["Saudi", "260"],
    ["Canada", "180"],
    ["Iran", "140"],
    ["Russia", "115"],
    ["UAE", "100"],
    ["US", "30"],
    ["China", "30"]
);
$arrLabelValueData = array();
// Pushing labels and values
for($i = 0; $i < count($arrChartData); $i++) {
    array_push(
        $arrLabelValueData, array(
        "label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
        )
    );
}
$arrChartConfig["data"] = $arrLabelValueData;
// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
$jsonEncodedData = json_encode($arrChartConfig);
// chart object
$Chart = new FusionCharts("line", "MyFirstChart" , "800", "500", "chart-container", "json", $jsonEncodedData);
// Render the chart
$Chart->render();
?>
<center>
<div id="chart-container">Chart will render here!</div>
</center>
<h3>경북 안동시 와룡면 이상리 산 138-4</h3>
</body>
</html>
