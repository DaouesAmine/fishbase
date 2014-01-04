<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="clientresources/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="clientresources/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="clientresources/css/font-awesome.min.css" rel="stylesheet" media="screen">

    <!-- JQuery -->
    <script src="clientresources/lib/jquery/jquery.1.10.2.min.js"></script>

    <!-- Twitter Bootstrap -->
    <script src="clientresources/lib/bootstrap/bootstrap.min.js"></script>
    
</head>

<body>

<div class="container">
    <div class="row">
        <h1>FishBase REST API</h1>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">REST API Interactive Documentation</h3>
                </div>
                <div class="panel-body">
                    The REST API Documentation is auto-generated and allows for interactive testing.
                    <br/>
                    <br/>
                    <div class="text-center">
                    <a href="docs/swagger-ui/index.html"  class="btn btn-primary">View API</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">REST API Test Links</h3>
                </div>
                <div class="panel-body">
                    Load a specific Species: <a href="api/species/acanthodes">api/species/acanthodes</a> :: <a
                        href="api/species/acanthodes?type=xml">XML</a> :: <a href="api/species/acanthodes?type=xml&pretty=1">Human-Readable
                    XML</a>
                    <br/><br/>

                    Paginate through all Species: <a href="api/species/all/1">api/species/all/1</a>
                    <br/><br/>

                    Load the first AlgalSpecies and prettify: <a href="api/algal/1?pretty=1">api/algal/1?pretty=1</a>

                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
