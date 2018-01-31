<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">

        <h1>Cursos</h1>
        <ul class="list-group">
          @foreach ($cursos as $curso)
            <li>
              {{$curso}}
            </li>
          @endforeach
        </ul>
    </div>
    <script type="text/javascript" src="/js/app.js">
  </body>
</html>