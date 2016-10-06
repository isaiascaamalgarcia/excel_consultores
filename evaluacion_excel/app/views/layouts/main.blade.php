<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Evaluación Excel</title>
	{{HTML::style("css/bootstrap/bootstrap.css")}}
	{{HTML::style("css/app/app.css")}}
</head>

<body>

	@yield("content")

  {{HTML::script("js/jquery-3.1.0.min.js")}}
  {{HTML::script("js/bootstrap.min.js")}}
	{{HTML::script("js/jquery.validate.min.js")}}

  <script type="text/javascript">
    var root_url = "{{Request::url()}}";
  </script>

  @yield("script")
</body>

</html>
