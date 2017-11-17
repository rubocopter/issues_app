<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>body { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);}</style>

    <!-- Favicon -->
    <link rel="icon" type="icon" href="{{{ asset('img/logo-fundacion.png') }}}">

    <title>Issue form</title>

    <!-- Jquery -->
    <script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" charset="utf-8"></script>

    <!-- Bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" charset="utf-8"></script>

    <!-- bootstrap-validator -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>


<body id="page-top">
<div class="content">

    <br><br><br>

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <form action="/upload" id="issueForm" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h4>Submit issue information:</h4>
                <br>

                <div class="form-group has-feedback">
                    <label for="inputName" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="inputName" name="name" aria-describedby="inputName" placeholder="Enter your name." data-error="Please enter your name." required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="inputEmail" class="control-label">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your Email address." name="email"  data-error="That email address is invalid." required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="osSelect" class="control-label">Operating System:</label>
                    <select class="form-control" id="osSelect" data-error="We need some info about your Operating System." name="os" required>
                        <option disabled selected value> -- Select an option. -- </option>
                        <option>Windows</option>
                        <option>Mac OSX</option>
                        <option>Linux</option>
                    </select>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback" >
                    <label for="inputBrowser" class="control-label">Browser:</label>
                    <input type="text" class="form-control" id="inputBrowser" aria-describedby="inputBrowser" placeholder="Name of your browser." name="browser" data-error="Please type the name of your web browser." required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="applicationSelect" class="control-label">Application:</label>
                    <select class="form-control" id="applicationSelect" name="app" required>
                        <option disabled selected value> -- Select an option. -- </option>
                        <option>IVA</option>
                        <option>Babelomics</option>
                        <option>CSVS</option>
                        <option>BierApp</option>
                    </select>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="issueTextarea" class="control-label">Issue information:</label>
                    <textarea class="form-control" id="issueTextarea" rows="4" data-error="Please tell us about your issue." name="issue_info" required></textarea>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>


                <div class="form-group">
                    <label for="fileAttachment">File attachment:</label>
                    <input type="file" name="screenshots[]" class="form-control-file" id="fileAttachment" aria-describedby="fileHelp" accept="image/*" data-show-upload="false" data-show-caption="true" multiple>
                    <small id="fileHelp" class="form-text text-muted">Upload some screenshots.</small>
                </div>

                @include ('layouts.errors')

                <input type="submit" value="Submit" class="btn btn-success"></input>

            </form>

            <div class="col-md-3"></div>

        </div>
    </div>
</div>
