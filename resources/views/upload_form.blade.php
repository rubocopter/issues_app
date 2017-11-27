<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    @include ('layouts.heads')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{{ asset('img/logo-fundacion.png') }}}">

    <title>Issue form</title>

    @include ('layouts.imports')

</head>

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
                    <label for="inputInstitution" class="control-label">Institution:</label>
                    <input type="text" class="form-control" id="inputName" name="institution" aria-describedby="inputInstitution" placeholder="Enter your institution." data-error="Please enter the name of your institution." required>
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
                        <option>Windows XP</option>
                        <option>Windows 7</option>
                        <option>Windows 8</option>
                        <option>Windows 10</option>
                        <option>OS X 10.10 Yosemite</option>
                        <option>OS X 10.11 El Capitan</option>
                        <option>macOS 10.12 Sierra</option>
                        <option>macOS 10.13 High Sierra</option>
                        <option>Ubuntu</option>
                        <option>Linux Mint</option>
                        <option>Debian</option>
                        <option>Fedora</option>
                        <option>CentOS</option>
                        <option>Other</option>
                    </select>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback" >
                    <label for="inputBrowser" class="control-label">Browser:</label>
                    <input type="text" class="form-control" id="inputBrowser" aria-describedby="inputBrowser" placeholder="Name and version of your browser." name="browser" data-error="Please fill the information about your web browser." required>
                    <p><a href="/browserHelp" target="_blank">How to find version of installed Internet browser.</a></p>
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
                        <option>Hipathia</option>
                        <option>Team</option>
                        <option>CNVS</option>
                    </select>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="issueTextarea" class="control-label">Issue information:</label>
                    <textarea class="form-control" placeholder="Explain the problems experienced in the application" id="issueTextarea" rows="4" data-error="Please tell us about your issue." name="issue_info" required></textarea>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>


                <div class="form-group">
                    <label for="fileAttachment">Screenshots:</label>
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
</body>
</html>