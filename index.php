<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Icons/weather.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="weatherStyle.css">
    <title>Weather Forcast</title>
</head>

<body>


    <?php
        $currentDate = date("F j, Y, g:i a");

        $url1 = "https://api.openweathermap.org/data/2.5/forecast?lat=23.7644025&lon=90.389015&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents1 = file_get_contents($url1);
        $clima1 = json_decode($contents1);

        $url2 = "https://api.openweathermap.org/data/2.5/forecast?lat=22.3336887&lon=91.8342162&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents2 = file_get_contents($url2);
        $clima2 = json_decode($contents2);

        $url3 = "https://api.openweathermap.org/data/2.5/forecast?lat=24.89922&lon=91.8685271&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents3 = file_get_contents($url3);
        $clima3 = json_decode($contents3);

        $url4 = "https://api.openweathermap.org/data/2.5/forecast?lat=22.8171664&lon=89.563759&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents4 = file_get_contents($url4);
        $clima4 = json_decode($contents4);

        $url5 = "https://api.openweathermap.org/data/2.5/forecast?lat=24.7482129&lon=90.4099158&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents5 = file_get_contents($url5);
        $clima5 = json_decode($contents5);

        $url6 = "https://api.openweathermap.org/data/2.5/forecast?lat=22.7046314&lon=90.37114178&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents6 = file_get_contents($url6);
        $clima6 = json_decode($contents6);

        $url7 = "https://api.openweathermap.org/data/2.5/forecast?lat=25.7569808&lon=89.241459&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents7 = file_get_contents($url7);
        $clima7 = json_decode($contents7);

        $url8 = "https://api.openweathermap.org/data/2.5/forecast?lat=24.3715513&lon=88.5921038&appid=ab0eb8cb65ecc913f2c9bd55554ba5ec";
        $contents8 = file_get_contents($url8);
        $clima8 = json_decode($contents8);
    ?>

    <div class="mt-3 mb-5 animate__animated animate__slideInDown" style="text-align: center;">
        <h1 style="color: green;"><i>Know <span style="color: red;">About Your </span>Bangladesh</i></h1>
    </div>

    <div class="card-group mb-2">

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Dhaka" target="_blank">Dhaka</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Dhaka, also spelled Dacca, city and capital of Bangladesh. It is located just north of the Buriganga River, a channel of the Dhaleswari River, in the south-central part of the country. Dhaka is Bangladesh's most populous city and is one of the largest metropolises in South Asia.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather1 = $clima1->list[0]->weather[0]->description;
                                                echo $weather1;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed1 = $clima1->list[0]->wind->speed;
                                        echo $windSpeed1." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure1 = $clima1->list[0]->main->pressure;
                                        echo $pressure1." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity1 = $clima1->list[0]->main->humidity;
                                        echo $humidity1."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp1 = $clima1->list[0]->main->temp;
                                        echo $temp1." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp1 = $clima1->list[0]->main->temp_max;
                                                echo $maxTemp1." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp1 = $clima1->list[0]->main->temp_min;
                                                echo $minTemp1." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Chittagong" target="_blank">Chittagong</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Chittagong, officially called Chattogram, city that is the chief Indian Ocean port of Bangladesh. It lies about 12 miles (19 km) north of the mouth of the Karnaphuli River, in the southeastern arm of the country. Chittagong is the second largest city in Bangladesh, after Dhaka.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather2 = $clima2->list[0]->weather[0]->description;
                                                echo $weather2;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed2 = $clima2->list[0]->wind->speed;
                                        echo $windSpeed2." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure2 = $clima2->list[0]->main->pressure;
                                        echo $pressure2." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity2 = $clima2->list[0]->main->humidity;
                                        echo $humidity2."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp2 = $clima2->list[0]->main->temp;
                                        echo $temp2." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp2 = $clima2->list[0]->main->temp_max;
                                                echo $maxTemp2." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp2 = $clima2->list[0]->main->temp_min;
                                                echo $minTemp2." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Sylhet" target="_blank">Sylhet</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Sylhet is one of the oldest city in Bangladesh having a vast historical and cultural background and diversified inhabitants of Garo , Khasia, Monipuri and,Hazong. The district is surrounded by the Jaintia, Khasi and Tripura hills. The city is has a population of 500,000 people having a high population density.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather3 = $clima3->list[0]->weather[0]->description;
                                                echo $weather3;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed3 = $clima3->list[0]->wind->speed;
                                        echo $windSpeed3." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure3 = $clima3->list[0]->main->pressure;
                                        echo $pressure3." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity3 = $clima3->list[0]->main->humidity;
                                        echo $humidity3."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp3 = $clima3->list[0]->main->temp;
                                        echo $temp3." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp3 = $clima3->list[0]->main->temp_max;
                                                echo $maxTemp3." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp3 = $clima3->list[0]->main->temp_min;
                                                echo $minTemp3." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="card-group mb-2">

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Khulna" target="_blank">Khulna</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Khulna is Bangladesh's third-largest city, after Dhaka and Chittagong. It is in the south-western part of the country, on the Rupsha and Bhairab Rivers. The city covers 59.57 square kilometres (23.00 sq mi), and Khulna District covers 4,394.46 square kilometres (1,696.71 sq mi).</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather4 = $clima4->list[0]->weather[0]->description;
                                                echo $weather4;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed4 = $clima4->list[0]->wind->speed;
                                        echo $windSpeed4." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure4 = $clima4->list[0]->main->pressure;
                                        echo $pressure4." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity4 = $clima4->list[0]->main->humidity;
                                        echo $humidity4."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp4 = $clima4->list[0]->main->temp;
                                        echo $temp4." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp4 = $clima4->list[0]->main->temp_max;
                                                echo $maxTemp4." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp4 = $clima4->list[0]->main->temp_min;
                                                echo $minTemp4." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Mymensingh#:~:text=Mymensingh%20is%20one%20of%20the,the%20headquarters%20of%20the%20district" target="_blank">Mymensingh</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Mymensingh is one of the sixteen old districts of Bangladesh which was constituted by the British East India Company on 1 May 1787. Being more than 220 years old, Mymensingh has a rich cultural and political history. In the beginning, Begunbari was chosen as the headquarters of the district.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather5 = $clima5->list[0]->weather[0]->description;
                                                echo $weather5;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed5 = $clima5->list[0]->wind->speed;
                                        echo $windSpeed5." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure5 = $clima5->list[0]->main->pressure;
                                        echo $pressure5." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity5 = $clima5->list[0]->main->humidity;
                                        echo $humidity5."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp5 = $clima5->list[0]->main->temp;
                                        echo $temp5." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp5 = $clima5->list[0]->main->temp_max;
                                                echo $maxTemp5." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp5 = $clima5->list[0]->main->temp_min;
                                                echo $minTemp5." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Barisal" target="_blank">Barishal</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Barisal, officially called Barishal, city, south-central Bangladesh. It lies in the delta of the Padma (Ganges [Ganga]) and Jamuna (Brahmaputra) rivers on the Kirtonkhola, an offshoot of the Arial Khan River. Incorporated as a municipality in 1876, it is a trade centre, most notably for rice, jute, and fish.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather6 = $clima6->list[0]->weather[0]->description;
                                                echo $weather6;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed6 = $clima6->list[0]->wind->speed;
                                        echo $windSpeed6." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure6 = $clima6->list[0]->main->pressure;
                                        echo $pressure6." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity6 = $clima6->list[0]->main->humidity;
                                        echo $humidity6."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp6 = $clima6->list[0]->main->temp;
                                        echo $temp6." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp6 = $clima6->list[0]->main->temp_max;
                                                echo $maxTemp6." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp6 = $clima6->list[0]->main->temp_min;
                                                echo $minTemp6." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="card-group mb-4">

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Rangpur,_Bangladesh#:~:text=Rangpur%20is%20famous%20for%20Shataranji,Rangpur%20is%20called%20Baher%20Desh.&text=Rangpur%2C%20a%20city%20of%20history,southern%20part%20of%20the%20city" target="_blank">Rangpur</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Rangpur is famous for Shataranji, Haribhanga (mango), Rangpur (fruit) and tobacco. Rangpur is called Baher Desh. Rangpur, a city of history and heritage is located in the northwestern part of Bangladesh. Begum Rokeya University and Rangpur Cadet College are situated in the southern part of the city.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather7 = $clima7->list[0]->weather[0]->description;
                                                echo $weather7;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed7 = $clima7->list[0]->wind->speed;
                                        echo $windSpeed7." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure7 = $clima7->list[0]->main->pressure;
                                        echo $pressure7." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity7 = $clima7->list[0]->main->humidity;
                                        echo $humidity7."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp7 = $clima7->list[0]->main->temp;
                                        echo $temp7." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp7 = $clima7->list[0]->main->temp_max;
                                                echo $maxTemp7." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp7 = $clima7->list[0]->main->temp_min;
                                                echo $minTemp7." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card text-bg-dark border-light">
            <h2 style="text-align: center;"><a href="https://en.wikipedia.org/wiki/Rajshahi#:~:text=Rajshahi%20is%20a%20significant%20administrative,renowned%20educational%20institutions%20of%20Bangladesh" target="_blank">Rajshahi</a></h2>
            <div class="card-body">
                <h5 class="card-title mb-3" style="text-align: justify; color: #00d989;">Rajshahi is a significant administrative, educational, cultural, and business centre in Bangladesh. It is a historic center of silk production. Varendra Research Museum, the oldest of its kind in Bangladesh, is located in the city. The city is home to many renowned educational institutions of Bangladesh.</h5>
                <?php
                echo "<span style=\"color: rgb(223, 56, 56);\">Date: $currentDate</span>";
                ?>
                <ul class="fs-5">
                    <li>
                        Weather Condition: <?php 
                                                $weather8 = $clima8->list[0]->weather[0]->description;
                                                echo $weather8;
                                            ?>
                    </li>
                    <li>
                        Wind Speed: <?php 
                                        $windSpeed8 = $clima8->list[0]->wind->speed;
                                        echo $windSpeed8." km/h";
                                    ?>
                    </li>
                    <li>
                        Pressure: <?php 
                                        $pressure8 = $clima8->list[0]->main->pressure;
                                        echo $pressure8." mbar";
                                  ?>
                    </li>
                    <li>
                        Humidity: <?php 
                                        $humidity8 = $clima8->list[0]->main->humidity;
                                        echo $humidity8."%";
                                  ?>
                    </li>
                    <li>
                        Temperature: <?php 
                                        $temp8 = $clima8->list[0]->main->temp;
                                        echo $temp8." &deg;F";
                                      ?>
                    </li>
                    <li>
                        Maximum Temperature: <?php 
                                                $maxTemp8 = $clima8->list[0]->main->temp_max;
                                                echo $maxTemp8." &deg;F";
                                             ?>
                    </li>
                    <li>
                        Minimum Temperature: <?php 
                                                $minTemp8 = $clima8->list[0]->main->temp_min;
                                                echo $minTemp8." &deg;F";
                                             ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div style="text-align: center; margin-bottom: 20px;">
        <img src="Photos/BangladeshFlag.png" alt="" style ="width: 30vw; height: 35vh;">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>