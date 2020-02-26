<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Navigate</h2>
    <p>Click the file names in order to navigate to them. <a href="../index.html">Click Here</a> for <i>Home Page</i>
    </p>
    <table class="table">
      <thead>
        <tr>
          <th>File Name</th>
          <th>Folder</th>
        </tr>
      </thead>
      <tbody class="table">
        <tr>
          <td><a href="..">..</a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <span style="display:none" class="files">
    <?php
    foreach (array_merge(glob(dirname(__FILE__) . "/*.php"), glob(dirname(__FILE__) . "/*.html")) as $file) {
      echo "<div>{$file}</div>";
    }
    ?>
  </span>
  <script src="../assets/jquery/jquery.js"></script>
  <script>
    console.log()
    fileNames_divs = $('.files').children()
    fileNames = new Array()
    for (const div_el of fileNames_divs) {
      fileNames.push(div_el.innerText)
    }
    $.each(fileNames, (_, filename) => {
      fn = filename.split('/')[1]
      fl = filename.split('\\')[4].split('/')[0]
      console.log(fn)
      $('.table').append(`<tr class="tr"><td><a href="${fn}" class="fn">${fn}</a></td><td>${fl}</td></tr>`)
    })
    if ($('.tr').length % 2 == 0) $('.tr').last().remove()
    for (let i = 0; i < $('.tr').length; i++) {
      if (!(i % 2 == 0)) continue
      $('.tr')[i].remove()
    };
  </script>
</body>

</html>