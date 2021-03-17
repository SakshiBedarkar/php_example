<html>

<head>
    <title>practical5a (3-03-2021)</title>
</head>
<style>
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin: 50px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    .row {
        display: flex;
    }

    .inline {
        border: 1px solid black;
        flex: auto;
        padding: 20px 25px;
    }

    h2 {
        text-align: center;
    }

    label {
        font-size: large;
    }

    input {
        height: 40px;
        width: auto;
        border-radius: 3px;
        border: 1px solid black;
        outline: none;
        font-size: large;
        padding: 0 7px;
    }

    input[type=submit] {
        height: 40px;
        width: auto;
        border-radius: 3px;
        border: 1px solid black;
        outline: none;
        font-size: large;
        padding: 0 7px;

    }

    .rectangle input[type=submit] {
        background-color: #503B31;
        color: white;
    }

    .circle input[type=submit] {
        background-color: #9EA3B0;

    }

    .square input[type=submit] {
        background-color: #6B5CA5;
        color: white;
    }
</style>

<body>

    <?php
    interface Area
    {
        function area($l, $b);
    }
    class Rectangle implements Area
    {
        function area($l, $b)
        {
            return $l * $b;
        }
    }
    class Square extends Rectangle
    {
        function area($l, $b)
        {
            return $b * $b;
        }
    }
    class Circle
    {
        function area($r)
        {
            return (2 * pi() * $r * $r);
        }
    }
    ?>
    <form action="" method="post">
        <div class="container">
            <div class="row">


                <div class="inline rectangle">
                    <h2>Rectangle</h2>
                    <label for="">Enter height:</label>
                    <input type="number" name="rect_height">
                    <br><br>
                    <label for="">Enter width:</label>
                    <input type="number" name="rect_width">
                    <br><br>
                    <input type="submit" name="find_rect" value="find area"></input>
                    <br><br>
                    <?php if (isset($_POST["find_rect"])) {

                        $height = $_POST["rect_height"];
                        $width = $_POST["rect_width"];
                        $rect = new Rectangle();
                        $area_rect = $rect->area($height, $width);
                        echo "<label>Area of rectangle is $area_rect</label>";
                    } ?>
                </div>
                <div class="inline circle">
                    <h2>Circle</h2>
                    <label for="">Enter radius:</label>
                    <input type="number" name="radius" id="">
                    <br><br>
                    <input type="submit" name="find_circle" value="find area"></input>
                    <br><br>
                    <?php
                    if (isset($_POST["find_circle"])) {
                        $radius = $_POST["radius"];
                        $circle = new Circle();
                        $area_circle = $circle->area($radius);
                        echo "<label>Area of circle is $area_circle</label>";
                    }
                    ?>
                </div>
                <div class="inline square">
                    <h2>Sqaure</h2>
                    <label for="">Enter height/width:</label>
                    <input type="number" name="height" id="">
                    <br><br>
                    <input type="submit" name="find_square" value="find area"></input>
                    <br><br>
                    <?php
                    if (isset($_POST["find_square"])) {
                        $length = $_POST["height"];
                        $square = new Square();
                        $area_square = $square->area($length, $length);
                        echo " <label>Area of square is $area_square</label>";

                        
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>
</body>

</html>