<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel MVC - Presentation</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>
<article class="container container-fluid">
    <div class="formcontainer col-lg-6 col-md-6 col-sm-10 col-xs-12"><br>
        <h2>Vul het formulier in ...</h2>
        <form method="post" action="submit" style="col-lg-12 col-md-12 col-sm-12 col-xs-12" enctype="multipart/form-data">
            <br>
            <label>Voornaam<br>
                <input type="text" name="name" placeholder="">
            </label><br>
            <label>Email<br>
                <input type="email" name="email" placeholder="">
            </label><br>
            <label>Password<br>
                <input type="password" name="pass" placeholder="">
            </label><br><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="indienen">
            <br><br>
        </form>
        <center><a href="{{URL::to('/users')}}" target="_blank">Bekijk users</a></center>
    </div>
</article>
</body>
</html>