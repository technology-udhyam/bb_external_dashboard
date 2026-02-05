<?php
if (isset($_GET['s1'])) {
    $s1Value = $_GET['s1'];
    //echo $s1Value;
} else {
    echo "s1 parameter is missing!";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PYEP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        :root {
            --cta-color: #F2C70D;
            --cta-color-hover: #e2bb0e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* * {
            outline: 2px solid hotpink;
        } */
            
        body {
            font-family: Montserrat, Arial, sans-serif;
            display: flex;
            min-height: 100svh;
        }

        p{
            margin: 0px;
        }

        .left {
            flex: 1;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
            padding: 1rem;
            margin: 1rem;
            border-radius: 8px;
        }

        .left .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .left .wrapper .logo-container {
            display: flex;
            gap: 3rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .left .wrapper .logo-container img {
            max-height: 88px;
            max-width: 100%;
        }

        .left .wrapper .image-container {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .left .wrapper .image-container img {
            max-height: 196px;
            max-width: 100%;
        }

        .left .wrapper .heading-container .heading {
            font-size: 1.6rem;
            max-width: 30ch;
            margin-bottom: 0.4rem;
            font-weight: 600;
        }

        .left .wrapper .heading-container .subheading {
            font-style: italic;
        }

        .left .wrapper .udhyamlogo {
            max-height: 40px;
        }

        .left .wrapper .button-container{
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 500px; 
        }

        .left .wrapper .button-container .session-wrapper{
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .left .wrapper .button-container .session-wrapper .session-title{
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
        }

        .left .wrapper .button-container .session-wrapper .links-container{
            min-width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .left .wrapper .button-container .session-wrapper .links-container .cta {
            flex: 1;
            min-width: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-block: 12px;
            padding-inline: 24px;
            background-color: var(--cta-color);
            /* width: fit-content; */
            text-decoration: none;
            font-weight: 600;
            color: black;
            border-radius: 8px;
            gap: 1rem;
        }
        
        .left .wrapper .button-container .session-wrapper .links-container .cta:hover {
            background-color: var(--cta-color-hover);
        }

        .left .wrapper .button-container .session-wrapper .links-container .cta img {
            transform: rotate(0deg); 
            transition: transform 0.3s ease-in; 
        }

        .left .wrapper .button-container .session-wrapper .links-container .cta:hover img{
            transform: rotate(45deg);
            transition: transform 0.3s ease-in;
        }

        .right {
            flex: 1;
            background: url(/assets//bg.png);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            /* box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1); */
            padding: 1rem;
            margin: 1rem;
            border-radius: 8px;
        }

        .right .carousel .carousel-indicators li{
            background-color: gray;
        }

        .right .carousel .carousel-indicators .active{
            background-color: var(--cta-color);
        }

        @media (max-width: 1000px) {

            body {
                flex-direction: column; 
            }

            .left .wrapper .logo-container, .left .wrapper .image-container,.left .wrapper .cta, .left .wrapper .udhyamlogo{
                margin-bottom: 1rem;
            }
            
            .right {
                margin-bottom: 4rem;
            }


        }       
        
    </style>
</head>

<body>
    <div class="left">
        <div class="wrapper">
            <div class="logo-container">
                <img src="/assets/govtlogo.png" alt="punjab logo">
                <img src="/assets/pblogo.png" alt="punjab logo">
            </div>
            <div class="heading-container">
                <h2 class="heading">PUNJAB YOUNG ENTREPRENEURS PROGRAMME STATE SCHEME</h2>
                <p class="subheading">Empowering the next generation of entrepreneurs</p>
            </div>
            <div class="image-container">
                <img src="/assets/cm.png" alt="punjab logo">
                <img src="/assets/em.png" alt="punjab logo">
            </div>
            <div class="button-container">
                <div class="session-wrapper">
                    <p class="session-title">Session: 2025-26</p>
                    <div class="links-container">
                        <a class="cta" href="punjab_phase1(25-26).php" class="cta-button">
                            Phase 1 
                            <!-- <img src="/assets/arrow.svg" alt=""> -->
                        </a>
                        <a class="cta" href="punjab_phase2(25-26).php" class="cta-button">
                            Phase 2 
                            <!-- <img src="/assets/arrow.svg" alt=""> -->
                        </a>
                    </div>
                </div>
                <div class="session-wrapper">
                    <p class="session-title">Session: 2024-25</p>
                    <div class="links-container">
                        <a class="cta" href="punjab_phase1(24-25).php" class="cta-button">
                            Phase 1
                            <!-- <img src="/assets/arrow.svg" alt=""> -->
                        </a>
                        <a class="cta" href="punjab_phase2(24-25).php" class="cta-button">
                            Phase 2
                            <!-- <img src="/assets/arrow.svg" alt=""> -->
                        </a>
                    </div>
                </div>
                <div class="session-wrapper">
                    <p class="session-title">Session: 2023-24</p>
                    <div class="links-container">
                       <a class="cta" href="punjab_phase2(23-24).php?s1=<?php echo urlencode($s1Value); ?>" class="cta-button">
                            Phase 2
                            <!-- <img src="/assets/arrow.svg" alt=""> -->
                        </a>
                    </div>
                </div>
            </div>
            <img class="udhyamlogo" src="/assets/udhyamlogo.png" alt="">
        </div>
    </div>
    <div class="right">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5" ></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/assets/images/v1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/v2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/v3.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/v4.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/v5.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/v6.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span> -->
                <img src="/assets/left.png" alt="">
                <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <img src="/assets/right.png" alt="">
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>