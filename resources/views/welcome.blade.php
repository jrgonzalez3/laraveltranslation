<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
    <title>@lang('app.title')</title>


</head>

<body class="antialiased">
    <div class="container">
        <h1>@lang('app.title')</h1>
        <h3>@lang('app.select_language')</h3>
        <ul>
            <li><a href="lang\es">ES-es</a></li>
            <li><a href="lang\en">EN-en</a></li>
        </ul>
        <h2>@lang('app.example')</h2>
        <h3>@lang('app.articles')</h3>
        <table class="table table-responsive table-stripped table-hovered table-bordered">
            <thead class="table-success">
                <th class="text-center">@lang('app.title')</th>
                <th class="text-center">@lang('app.content')</th>
                <th class="text-center">Locale</th>

            </thead>
            <tbody>
                @foreach(\App\Models\Article::all() as $article)
                <tr class="text-center">
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td>{{$article->locale}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="footer table-warning">
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>