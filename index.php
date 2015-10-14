<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lotto Numbers</title>

    <meta name="description" content="Lotto Numbers">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!-- Inline CSS -->
<style type="text/css">
pre{
    color: green;
    font-family: Consolas, Menlo, Monaco, Lucida Console, Bitstream Vera Sans Mono, Courier New, monospace, serif;
    margin-bottom: 10px;
    overflow: auto;
    width: auto;
    padding: 5px;
    background-color: #000;
    width: 650px!ie7;
    padding-bottom: 20px!ie7;
    max-height: 600px;
}
</style>

    <h1>Generate 6 set of lotto numbers (1 - 49 )</h1>

    <!-- Solution #01 -->
    <h2>Solution #01</h2>
    <?php 
        function gimmeLotto() {
            $numbers = range(1, 49);
            shuffle($numbers);
            $numbers = array_slice($numbers, 0, 6);

            print "Winning numbers: ";
            foreach ($numbers as $number => $winning_numbers) {
                print $winning_numbers . " ";
            }
        }

        gimmeLotto();
    ?>

    <pre>   
    function gimmeLotto() {    
        $numbers = range(1, 49);
        shuffle($numbers);
        $numbers = array_slice($numbers, 0, 6);

        print "Winning numbers: ";
        foreach ($numbers as $number => $winning_numbers) {
            print $winning_numbers . " ";
        }   
    }

    gimmeLotto();
    </pre>



    <!-- Solution #02 -->
    <h2>Solution #02</h2>
    <?php 
        function gimmeLotto2() {
            print "Winning numbers: " . '<br>';

            for ($i = 0; $i < 6; $i++) {
                $numbers = range(1, 49);
                shuffle($numbers);
                $numbers = array_slice($numbers, $i*6, 6);
            
                foreach ($numbers as $number => $winning_numbers) {
                    print $winning_numbers . " ";
                }
                //print PHP_EOL;
                print '<br>';
            }    
        }

        gimmeLotto2();
        
    ?>

    <pre>
    function gimmeLotto2() {
        print "Winning numbers: " ;

        for ($i = 0; $i < 6; $i++) {
            $numbers = range(1, 49);
            shuffle($numbers);
            $numbers = array_slice($numbers, $i*6, 6);
        
            foreach ($numbers as $number => $winning_numbers) {
                print $winning_numbers . " ";
            }
            //print PHP_EOL;
        }   
    } 
       
    gimmeLotto2();    
    </pre>

</body>

</html>


