<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<style>



body{
    background-color: #f6f6f6;
    font-family: 'Raleway', sans-serif;
    margin: 0px;
}
.vakje{
    transition: 0.5s;
    margin-bottom: 30px;
    background-color: white;
    width: 300px;
    height: 80px;
    text-align: center;
    vertical-align: middle; 
    line-height: 80px;
    border-radius: 8px;
    -webkit-box-shadow: 0px 0px 31px 4px rgba(0,0,0,0.43);
    -moz-box-shadow: 0px 0px 31px 4px rgba(0,0,0,0.43);
    box-shadow: 0px 0px 31px 4px rgba(0,0,0,0.43);
}

.vakje:hover {
    transition: 0.5s;
    -webkit-box-shadow: 0px 0px 23px 5px rgba(0,0,0,0.7);
    -moz-box-shadow: 0px 0px 23px 5px rgba(0,0,0,0.7);
    box-shadow: 0px 0px 23px 5px rgba(0,0,0,0.7);
}

.vakje p{
    vertical-align: middle;
}

.head{
    text-shadow: 2px 2px #f2f2f2;
    padding: 15px;
    background-color: white;
    -webkit-box-shadow: 0px 0px 31px 4px rgba(0,0,0,0.43);
    -moz-box-shadow: 0px 0px 31px 4px rgba(0,0,0,0.43);
    box-shadow: 0px 0px 31px 4px rgba(0,0,0,0.43);

}
.content{
    text-align: center;
    margin: 15px;
}

.embed{
    font-family: 'IBM Plex Mono', monospace;
    background-color: #f6f6f6;
    -webkit-box-shadow: inset 0px 0px 5px 2px rgba(0,0,0,0.4);
    -moz-box-shadow: inset 0px 0px 5px 2px rgba(0,0,0,0.4);
    box-shadow: inset 0px 0px 5px 2px rgba(0,0,0,0.4);
   padding: 0px 10px 0px 10px;
}

</style>

<body>
<div class="head">
<h2>Dit zijn de vakken die je morgen hebt: <span class='embed'>4LWI</span></h2>
<p>Taken en toetsen worden hier niet weergegeven.</p>
</div>
<br>
<div class="content">
<?php
foreach($query as $vak){
    $vak_naam = $vak["vak_naam"];
    echo "<div class='vakje'><p><b>" . $vak_naam . "</b></p></div>";
}

?>
</div>
</body>
</html>