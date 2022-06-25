<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLaps Online Compiler - HTML, CSS & JS</title>
    <link rel="stylesheet" href="design.css">
    <link rel="icon" type="image/x-icon" href="../../favicon/favicon.ico">

    
</head>

<body>
    <div class="change-layout">Change Layout</div>
    <div class="save-layout">Save</div>
    <div class="container view2">
        <div class="coder view2">
            <div class="code-editor htmlCoder">
                <div class="code-type">HTML</div>
                <div class="code html" id="html"></div>
            </div>
            <div class="code-editor cssCoder">
                <div class="code-type">CSS</div>
                <div class="code css" id="css"></div>
            </div>
            <div class="code-editor jsCoder">
                <div class="code-type">JS</div>
                <div class="code js" id="javascript"></div>
            </div>
        </div>
        <div class="output">
            <iframe src="" class="virtual-iframe" frameborder="0"></iframe>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script src="app.js" defer></script>
</body>

<script>
    const editor = ace.edit("html");
    const code = editor.getValue();
    console.log(code)
</script>

</html>