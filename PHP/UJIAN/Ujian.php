<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ujian Bangun Ruang dgn Function</title>
  </head>
  <body>
    <h1><u>Menghitung bangun Ruang</u></h1>
		
	</ul>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Bangun Ruang.php">Ujian-1</a></p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #333333">&lt;!</span><span style="color: #007700">DOCTYPE</span> <span style="color: #007700">html</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">html</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">head</span><span style="color: #333333">&gt;</span>
  <span style="color: #333333">&lt;</span><span style="color: #007700">title</span><span style="color: #333333">&gt;</span><span style="color: #007700">Menghitung</span> <span style="color: #007700">Bangun</span> <span style="color: #007700">Ruang</span> <span style="color: #333333">&lt;/</span><span style="color: #007700">title</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;/</span><span style="color: #007700">head</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">body</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">form</span> <span style="color: #007700">method</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;post&quot;</span><span style="color: #333333">&gt;</span>
    
  <span style="color: #333333">&lt;</span><span style="color: #007700">table</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">h3</span><span style="color: #333333">&gt;</span><span style="color: #007700">Kubus</span><span style="color: #333333">&lt;/</span><span style="color: #007700">h3</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span><span style="color: #007700">Sisi</span> <span style="color: #007700">1</span><span style="color: #333333">&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;:</span> <span style="color: #333333">&lt;</span><span style="color: #007700">input</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;sisi1&quot;</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;/</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span><span style="color: #007700">Sisi</span> <span style="color: #007700">2</span><span style="color: #333333">&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;:</span> <span style="color: #333333">&lt;</span><span style="color: #007700">input</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;sisi2&quot;</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;/</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span><span style="color: #007700">Sisi</span> <span style="color: #007700">3</span><span style="color: #333333">&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;:</span> <span style="color: #333333">&lt;</span><span style="color: #007700">input</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;sisi3&quot;</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;/</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;&lt;</span><span style="color: #007700">button</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;submit&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;isi&quot;</span><span style="color: #333333">&gt;</span><span style="color: #007700">Klik</span> <span style="color: #007700">untuk</span> <span style="color: #007700">hasil</span><span style="color: #333333">&lt;/</span><span style="color: #007700">button</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;/</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
  <span style="color: #333333">&lt;/</span><span style="color: #007700">table</span><span style="color: #333333">&gt;</span>
  <span style="color: #333333">&lt;</span><span style="color: #007700">table</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">h3</span><span style="color: #333333">&gt;</span><span style="color: #007700">Limas</span> <span style="color: #007700">Segiempat</span><span style="color: #333333">&lt;/</span><span style="color: #007700">h3</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span><span style="color: #007700">Sisi</span> <span style="color: #007700">1</span><span style="color: #333333">&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;:</span> <span style="color: #333333">&lt;</span><span style="color: #007700">input</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;s1&quot;</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;/</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span><span style="color: #007700">Sisi</span> <span style="color: #007700">2</span><span style="color: #333333">&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;:</span> <span style="color: #333333">&lt;</span><span style="color: #007700">input</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;s2&quot;</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;/</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
    <span style="color: #333333">&lt;</span><span style="color: #007700">tr</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span><span style="color: #007700">Sisi</span> <span style="color: #007700">3</span><span style="color: #333333">&lt;/</span><span style="color: #007700">td</span><span style="color: #333333">&gt;</span>
      <span style="color: #333333">&lt;</span><span style="color: #007700">td</span><span style="color: #333333">&gt;:</span> <span style="color: #333333">&lt;</span><span style="color: #007700">input</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #007700">name</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;s3&quot;</span><span style="color: #333333">&gt;&lt;/</span><span style="color: #007


  
</pre></div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>