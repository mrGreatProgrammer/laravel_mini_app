<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $shareTxt = "hello"; ?>
    <form action="/share-txt" method="get">
        <textarea name="share_txt" id="share_txt"></textarea>
        <button type="submit">send text</button>
    </form>
    <p>
        {{$shareTxt}}
    </p>
    <p>
    </p>
    <form action="/api/share-txt" method="get">
        <button type="submit">get text</button>
    </form>
</body>

</html>