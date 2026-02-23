<?php
if (false !== strpos($_SERVER['REQUEST_URI'], 's1')) {
    if (strlen($_GET["s1"]) % 2 === 0) {
        $state = isset($_GET["s1"]) ? $_GET["s1"] : 0;
        $text = hex2bin($state);
        //echo $text;
        echo "<script>var stateName = '$text';</script>";
    } else {
        echo "Wrong state parameter";
        die;
    }
} else {
    echo "";
}
?>
<!-- // https://bbextdashboard-iaphgjzbjq-as.a.run.app/?s1=50756E6A6162 
 https://bbextdashboard-iaphgjzbjq-as.a.run.app/?s1=4d61646879612050726164657368
-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (false !== strpos($_SERVER['REQUEST_URI'], 's1') && $text == "Madhya Pradesh") {
            echo "Tejasvi Dashboard - $text";
        } else if (false !== strpos($_SERVER['REQUEST_URI'], 's1') && $text == "Punjab") {
            echo "BB Dashboard - $text";
        } else {
            echo "Dashboard";
        }
        ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        *,
        *::after,
        *::before {
            box-sizing: border-box;

        }

        /* * {
            outline: 2px solid red;
        } */

        html {
            overflow: auto;
        }

        body {
            font-family: 'Noto Sans';
        }

        html,
        body,
        div,
        iframe {
            margin: 0px;
            padding: 0px;
            height: 100%;
            border: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        header {
            border-bottom: 1px solid #e0e0e0;
        }

        header nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }

        header nav img {
            height: 5rem;
        }

        .udhyam_logos {
            height: 4rem;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 0.8 rem;
        }

        .buttons {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        h2 {
            font-size: 1rem;
            font-weight: 700;
            width: 48px;
            border-right: 1px solid gray;
        }

        a {
            background-color: #4285F3;
            padding: 0.5rem 1rem;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.75rem;
        }

        button {
            font-family: 'Noto Sans';
            background-color: #4285F3;
            padding: 0.6rem 1rem;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.75rem;
        }

        select {
            font-family: 'Noto Sans';
            font-size: 0.75rem;
            padding: 0.45rem 0.8rem;
        }

        a:hover,
        button:hover {
            background-color: #4245D1;
        }

        .image-container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .image-container .udhyamlogo{
           max-height: 40px;
        }

        #downloadButton:disabled {
        opacity: 0.6;
        cursor: not-allowed; 
    }

        @media only screen and (max-width: 460px) {
            .button-container {
                gap: 0.6rem;
            }

            .image-container {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                gap: 1rem;
            }
        }
    </style>
</head>

<body>
    <?php 
    // if (false !== strpos($_SERVER['REQUEST_URI'], 's1')) { 
        ?>
        <header>
            <nav>
            <div class="image-container">
                <img src="/assets/2026/PSEBLogo.png" alt="pseb logo">
                <img src="/assets/2026/GovtOfPunjabLogo.png" alt="govt logo">
                <img class="udhyamlogo" src="/assets/2026/Udhyamwholelogo.png" alt="udhyam logo">
                <!-- <img class="pblogo" src="PunjabLogo.png" alt="logo"> -->
            </div>
                <?php 
                // if (!empty(!empty($_GET['s1']))) { 
                    ?> 
                    <!-- <div class="button-container">
                        <div class="buttons">
                            <h2>PDF</h2>
                            <a href="https://us-central1-teacherengagement-gliffic.cloudfunctions.net/report_generation_api_dist_phase1?state=Punjab&type=pdf">Download State Report</a>
                            <a href="https://us-central1-teacherengagement-gliffic.cloudfunctions.net/report_generation_api_dist_phase1?state=Punjab&district=all&type=pdf">Download District Report</a>
                        </div>
                        <div class="buttons">
                            <h2>Excel</h2>
                            <a href="https://us-central1-teacherengagement-gliffic.cloudfunctions.net/report_generation_api_dist_phase1?state=Punjab&type=xlsx">Download State Report</a>
                            <a href="https://us-central1-teacherengagement-gliffic.cloudfunctions.net/report_generation_api_dist_phase1?state=Punjab&district=all&type=xlsx">Download District Report</a>
                        </div> -->
                        <!-- <h2>JPG</h2>
                        <div class="buttons">
                           
                                <select class="select" name="district" id="district" onchange="toggleButton()">
                                    <option value="np">Select District</option>
                                    <option value="AMRITSAR">Amritsar</option>
                                    <option value="BARNALA">Barnala</option>
                                    <option value="BATHINDA">Bathinda</option>
                                    <option value="FARIDKOT">Faridkot</option>
                                    <option value="FATEHGARH SAHIB">Fatehgarh Sahib</option>
                                    <option value="FAZILKA">Fazilka</option>
                                    <option value="FIROZPUR">Firozpur</option>
                                    <option value="GURDASPUR">Gurdaspur</option>
                                    <option value="HOSIARPUR">Hosiarpur</option>
                                    <option value="JALANDHAR">Jalandhar</option>
                                    <option value="KAPURTHALA">Kapurthala</option>
                                    <option value="LUDHIANA">Ludhiana</option>
                                    <option value="MALERKOTLA">Malerkotla</option>
                                    <option value="MANSA">Mansa</option>
                                    <option value="MOGA">Moga</option>
                                    <option value="MUKTHSAR">Mukthsar</option>
                                    <option value="PATHANKOT">Pathankot</option>
                                    <option value="PATIALA">Patiala</option>
                                    <option value="ROOPNAGAR">Roopnagar</option>
                                    <option value="SBS NAGAR">SBS Nagar</option>
                                    <option value="SANGRUR">Sangrur</option>
                                    <option value="SAS NAGAR">SAS Nagar</option>
                                    <option value="TARANTARAN">Tarantaran</option>
                                </div>
                                </select> -->
                            <?php 
                            // } else {
                            // } 
                            ?>

                            <!-- <button id="downloadButton" onclick="sendRequest()" disabled>Download Report</button> -->
                    <!-- </div> -->
                <?php 
                // } 
                // else {
                // } 
                ?>
            </nav>
        </header>
    <?php
    // } else { 
    ?> 
        <!-- <header>
        <nav>
            <div class="image-container">
                <img class="pblogo" src="PunjabLogo.png" alt="logo">
            </div>
        </nav>
    </header> -->
     <?php 
    // } 
    ?> 

    <script>
        document.querySelectorAll('a').forEach((button) => {
            button.addEventListener('click', (event) => {
                // Prevent the default action
                //event.preventDefault();
                const href = button.getAttribute('href');
                if (!href || href === "#") {
                    console.warn("No valid download link found.");
                    return;
                }

                // Disable all buttons
                document.querySelectorAll('a').forEach((btn) => {
                    btn.style.pointerEvents = 'none'; // Prevent clicks
                    btn.style.opacity = '0.5';        // Dim appearance
                });

                // Update the clicked button's text
                //button.innerText = 'Downloading...';

                // Re-enable all buttons after a delay
                setTimeout(() => {
                    document.querySelectorAll('a').forEach((btn) => {
                        btn.style.pointerEvents = 'auto'; // Re-enable clicks
                        btn.style.opacity = '1';         // Restore appearance
                    });
                    // Reset the clicked button's text
                    //button.innerText = 'Download ' + button.innerText.split(' ')[1];
                }, 10000); // 10-second delay
            });
        });


        // function toggleButton() {
        //     var selectedDistrict = document.getElementById('district').value;
        //     var downloadButton = document.getElementById('downloadButton');

        //     // Check if selectedDistrict is "np" and disable/enable the button accordingly
        //     if (selectedDistrict === "np") {
        //         downloadButton.disabled = true;
        //     } else {
        //         downloadButton.disabled = false;
        //     }
        // }

        // function sendRequest() {
        // var selectedDistrict = document.getElementById('district').value;
        // var apiUrl = `https://us-central1-teacherengagement-gliffic.cloudfunctions.net/report_generation_api_dist_jpeg?state=${stateName}&type=image&district=` + selectedDistrict;
        // window.location.href = apiUrl;
        //}
    </script>

</body>

<!-- <?php
        $hexadecimal_string = "4d61646879612050726164657368";

        $text = hex2bin($hexadecimal_string);

        echo "Hexadecimal: $hexadecimal_string\n";
        echo "Text: $text";

        $hexadecimal_string1 = "56a6f16cd"; // Replace this with your hexadecimal string
        $decimal_number = hexdec($hexadecimal_string1);

        echo "Hexadecimal: $hexadecimal_string1\n";
        echo "Decimal: $decimal_number";
        ?> -->

<?php
$udise_code = isset($_GET["udc"]) ? $_GET["udc"] : 0;
$state = isset($_GET["s1"]) ? $_GET["s1"] : 0;
$string = $_SERVER["REQUEST_URI"];
$substring = "?s1";
if (strpos($string, $substring) !== false) {
    $text = hex2bin($state);
    $encoded_string = urlencode($text);
    $encoded_string = str_replace('+', '%20', $encoded_string);
    // echo $encoded_string;
    // echo'<iframe width="100%" height="680" src="https://lookerstudio.google.com/embed/reporting/eae17fe5-462a-4053-a1d0-6b4a5ac91a6d/page/p_fs5i69p88c?params=%7B%22s1%22:%22'.$encoded_string.'%22,%22s2%22:%22'.$encoded_string.'%22%7D%22 frameborder="0" style="border:0" allowfullscreen></iframe>';
    // echo '<iframe width="100%" height="100%" src="https://lookerstudio.google.com/reporting/b70ee548-d2ec-4be8-aad8-c1e77f29a881/page/AIUZF" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>';
    echo '<iframe width="100%" height="100%" src="https://lookerstudio.google.com/embed/reporting/b70ee548-d2ec-4be8-aad8-c1e77f29a881/page/p_ob7xefrz0d" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>';
} else {
    $decimal_number = hexdec($udise_code);
    // echo $decimal_number;
    $encoded_string = urlencode($decimal_number);
    $encoded_string = str_replace('+', '%20', $encoded_string);
    // echo '<iframe width="100%" height="100%" src="https://lookerstudio.google.com/embed/reporting/7b0c33d7-a1b0-4936-8317-1d1b36f55813/page/p_fs5i69p88c?params=%7B%22udc%22:%22'.$decimal_number.'%22%7D " frameborder="0" style="border:0" allowfullscreen></iframe>';
    //echo '<iframe width="100%" height="100%" src="https://lookerstudio.google.com/reporting/b70ee548-d2ec-4be8-aad8-c1e77f29a881/page/AIUZF" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>';
    echo '<iframe width="100%" height="100%" src="https://lookerstudio.google.com/embed/reporting/b70ee548-d2ec-4be8-aad8-c1e77f29a881/page/p_ob7xefrz0d" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>';
    exit;
}

// echo $_GET['udise'];
// print $_SERVER["HTTP_HOST"];
// print $_SERVER["SERVER_NAME"];
// print $_SERVER["REQUEST_URI"];

// $fullUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

</html>
