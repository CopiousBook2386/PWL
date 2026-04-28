<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Halaman Home </title>
  <style>
    body {
      background-color: #0a0a0a; /* hitam pekat */
      color: #1aff8d; /* hijau */
      font-family: 'Orbitron', sans-serif;
      text-align: center;
      padding-top: 100px;
    }

    a {
      display: inline-block;
      margin: 20px;
      padding: 15px 30px;
      color: #1aff8d;
      text-decoration: none;
      border: 2px solid #1aff8d;
      border-radius: 8px;
      transition: 0.3s;
      box-shadow: 0 0 10px #1aff8d;
    }

    a:hover {
      background-color: #1aff8d;
      color: #0a0a0a;
      box-shadow: 0 0 20px #139e64, 0 0 40px #139e64;
    }

    h1 {
      font-size: 3em;
      text-shadow: 0 0 15px #1aff8d;
    }

    /* Import font */
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap');
  </style>
</head>
<body>
<!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->



  <!--<h1>JRS shop</h1>
  <a href="/produk">Ke Halaman Produk</a>
  <a href="/keranjang">Ke Halaman Keranjang</a>-->
</body>
</html>
<?= $this->endSection() ?>