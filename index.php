<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="./app.css">

    <title>File upload</title>
  </head>

  <body>
    <form class="needs-validation" name="uploadForm" id="form-file-upload" action="upload.php" method="POST" enctype="multipart/form-data" novalidate>
      <div class="mb-3 text-center">
        <svg width="80px" height="80px" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="green" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
        </svg>
      </div>
      <div class="form-file form-file-lg mb-3">
        <input type="file" name="uploadFile" class="form-file-input" id="upload-file" required>
        <label class="form-file-label" for="upload-file">
          <span class="form-file-text">Choose a file</span>
          <span class="form-file-button">Browse</span>
        </label>
        <div class="invalid-feedback">Please choose a file.</div>
      </div>
      <section id="feedback-alert" class="hide">
        <div class="alert alert-warning alert-dismissible" role="alert">
          <strong id="file-name"></strong> (<span id="file-size"></span>)
        </div>
      </section>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="upload-button">Upload</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
  </body>
</html>
