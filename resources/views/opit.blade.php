<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="row">
        <form action="{{ route('vote') }}" method="POST">
            <input value="{{ csrf_token() }}" name="_token" type="text" hidden>

            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-hand-right"></span> Guess</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input class="form-control" type="text" name="fname" value="" required placeholder="First name">
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input class="form-control" type="text" name="lname" value="" required placeholder="Last name">
                                    </label>
                                </div>
                            </li>
                        </ul>

                        <h1 class="panel-title">
                            Select your profession</h1>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <select class="form-control" name="special" required>
                                            <option value="Economic">Economic</option>
                                            <option value="Journalist">Journalist</option>
                                            <option value="IT">IT</option>
                                            <option value="Matematics">Matematics</option>
                                        </select>
                                    </label>
                                </div>
                            </li>
                        </ul>

                            <h1 class="panel-title">
                                 Select programing language</h1>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input name="language[]" checked type="checkbox" value="PHP">
                                        PHP
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input name="language[]" type="checkbox" value="JAVA">
                                        JAVA
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input name="language[]" type="checkbox" value="Python">
                                        Python
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input name="language[]" type="checkbox" value="C#">
                                        C#
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input name="language[]" type="checkbox" value="C++">
                                        C++
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input name="language[]" type="checkbox" value="JavaScript">
                                        JavaScript
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" class="btn btn-primary btn-block btn-sm">
                            Vote</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
    </div>
</div>
</body>
</html>
