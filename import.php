<?php 
include 'config.php';

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://trailapi-trailapi.p.rapidapi.com/trails/explore/?lat=46.954&lon=25.9891&radius=500",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: trailapi-trailapi.p.rapidapi.com",
		"X-RapidAPI-Key: 64cb39daf6mshe65604b84c160edp14271fjsn16e8d2051bf3"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $json = json_decode($response, true);
    foreach($json['data'] as $res):
        
        $trip_id = $res['id'];
        $name = $res['name'];
        $url = $res['url'];
        $length = $res['length'];
        $description = $res['description'];
        $direction = $res['direction'];
        $city = $res['city'];
        $region = $res['region'];
        $country = $res['country'];
        $lat = $res['lat'];
        $longtitude = $res['lon'];
        $diffculty = $res['difficulty'];
        $feature = $res['feature'];
        $rating = $res['rating'];
        $thumbnail = $res['thumbnail'];
       echo $sql = "INSERT INTO trips (trip_id, name, url, length, description, direction, city, region, country, lat, longtitude, difficulty, feature, rating, thumnail)
					VALUES ('$trip_id', '$name', '$url', '$length', '$description', '$direction', '$city', '$region', '$country', '$lat', '$longtitude', '$difficulty', '$feature', '$rating', '$thumbnail')";
					
			$result = mysqli_query($conn, $sql);
    endforeach;
	
}
?>