<!DOCTYPE html>
<html lang="en">

<head>
  <base href="https://ionmax1311.github.io/spin-land-en/" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" type="image/svg+xml" href="img/favicon.PNG" />

  <title>Congratulations!</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      width: 100%;
      min-height: 100vh;
      display: flex;

      padding: 5rem 0;
      margin: 0;
      font-family: "Ubuntu", sans-serif;
      color: #ffffff;
      font-size: 1.2rem;
      line-height: 2.2rem;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
      color: #000;
    }

    .logo-container {
      width: 100%;
      text-align: center;
    }

    .logo-img {
      width: 120px;
      height: auto;
    }

    .thankyou-heading {
      font-size: 2rem;
      line-height: 2.8rem;
      margin-top: 3rem;
    }

    .signature-wrapper {
      display: flex;
      justify-content: space-between;
    }

    .signature-img {
      width: 180px;
      height: auto;
    }

    .btn {
      color: #fafafa;
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      transition: transform 0.5sease;
      position: relative;
      z-index: 1;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 17px 75px;
      line-height: 1.4;
      overflow: hidden;
      text-transform: uppercase;
      max-height: fit-content;
      display: inline-table;
      background-color: #343434;
      box-shadow: 0px 4px 4px 1px rgba(0, 0, 0, 0.25);
      border-radius: 20px;
    }

    @media (max-width: 576px) {
      body {
        padding: 4rem 0;
        font-size: 1rem;
        line-height: 2rem;
      }

      .container {
        max-width: 86%;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <p>An expert will contact you shortly.</p>
    <br />
    <a href="index.html" class="btn btn-warning text-dark fw-bold px-4 py-2 mt-3">
      <span>Go back</span>
    </a>
  </div>
</body>

</html>