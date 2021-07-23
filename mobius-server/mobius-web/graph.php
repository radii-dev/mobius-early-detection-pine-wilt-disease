<?php
session_start(); // 이 구문은 페이지에서 딱 한번만 세션을 쓰기 전에 사용하시면 됩니다.  
$device_id = $_SESSION['deviceid'];

$conn = mysqli_connect("localhost", "root", "69314718056", "mobiusdb");
if ($conn->connect_error) {
die("Connection failed:". $conn-> connect_error);
}
$sql = "SELECT ri, con FROM cin WHERE pi = '/Mobius/Take_Out_PF/mois1L' ORDER BY ri DESC LIMIT 20";
$result = mysqli_query($conn, $sql);
$rowarr = array(
    array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array(),array()
);
$i=0;
while($row = mysqli_fetch_array($result)) {
    $rowarr[$i] = $row;
    $tmp = substr($rowarr[$i][0], 27, 17);
    $rowarr[$i++][0] = $tmp;
}
// Include the ../src/fusioncharts.php file that contains functions to embed the charts./
include("fusioncharts.php");
?>

<html>
<head>
    <title><?php echo $device_id?> | Detail view</title>
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
        "caption" => $device_id,
        "subCaption" => "Last 20 moisture records",
        "xAxisName" => "Date",
        "yAxisName" => "Moisture(%)",
        "numberSuffix" => "%",
        "theme" => "fusion"
    )
);
// An array of hash objects which stores data
$arrChartData = array(
    [$rowarr[19][0], $rowarr[19][1]],
    [$rowarr[18][0], $rowarr[18][1]],
    [$rowarr[17][0], $rowarr[17][1]],
    [$rowarr[16][0], $rowarr[16][1]],
    [$rowarr[15][0], $rowarr[15][1]],
    [$rowarr[14][0], $rowarr[14][1]],
    [$rowarr[13][0], $rowarr[13][1]],
    [$rowarr[12][0], $rowarr[12][1]],
    [$rowarr[11][0], $rowarr[11][1]],
    [$rowarr[10][0], $rowarr[10][1]],
    [$rowarr[9][0], $rowarr[9][1]],
    [$rowarr[8][0], $rowarr[8][1]],
    [$rowarr[7][0], $rowarr[7][1]],
    [$rowarr[6][0], $rowarr[6][1]],
    [$rowarr[5][0], $rowarr[5][1]],
    [$rowarr[4][0], $rowarr[4][1]],
    [$rowarr[3][0], $rowarr[3][1]],
    [$rowarr[2][0], $rowarr[2][1]],
    [$rowarr[1][0], $rowarr[1][1]],
    [$rowarr[0][0], $rowarr[0][1]]
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
