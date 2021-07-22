<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
    <h1>Pengulangan PHP</h1>
    <p>Pada PHP ada 4 jenis perulangan yang bisa kita gunakan:</p>
  <ul>
		<li>Perulangan For</li>
		<li>Perulangan While</li>
		<li>Perulangan Do/While</li>
		<li>Perulangan Foreach</li>		
	</ul>
    <h1>A.Perulangan For-1</h1>
    <b><p>Contoh Script</p></b>
    <p>Hasil Dari <a href="Contoh for 1.php"> For-1</a></p>
  <!-- HTML generated using hilite.me -->
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
<span style="color: #557799">&lt;?php</span>

<span style="color: #008800; font-weight: bold">for</span>(<span style="color: #996633">$i</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; <span style="color: #996633">$i</span> <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">9</span>; <span style="color: #996633">$i</span><span style="color: #333333">++</span>)
{
    <span style="color: #008800; font-weight: bold">echo</span> <span style="color: #996633">$i</span> <span style="color: #333333">.</span> <span style="background-color: #fff0f0">&#39;&lt;br /&gt;&#39;</span>;
}

<span style="color: #557799">?&gt;</span>
&lt;/body&gt;
&lt;/html&gt;
</pre></div>

<ul>
  <h1>B.Pengulangan While</h1>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Contoh While.php">While</a></p>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span> 

<span style="color: #996633">$ulangi</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>;

<span style="color: #008800; font-weight: bold">while</span>(<span style="color: #996633">$ulangi</span> <span style="color: #333333">&lt;</span> <span style="color: #0000DD; font-weight: bold">10</span>){
    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;p&gt;Ini adalah perulangan ke-</span><span style="background-color: #eeeeee">$ulangi</span><span style="background-color: #fff0f0">&lt;/p&gt;&quot;</span>;
    <span style="color: #996633">$ulangi</span><span style="color: #333333">++</span>;
}

<span style="color: #557799">?&gt;</span>
</pre></div>

<ul>
  <h1>C.Pengulangan Do/While</h1>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Contoh Do_While.php">Do/While</a></p>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span> 

<span style="color: #996633">$ulangi</span> <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">10</span>;

<span style="color: #008800; font-weight: bold">do</span> {
    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;p&gt;ini adalah perulangan ke-</span><span style="background-color: #eeeeee">$ulangi</span><span style="background-color: #fff0f0">&lt;/p&gt;&quot;</span>;
    <span style="color: #996633">$ulangi</span><span style="color: #333333">--</span>;
} <span style="color: #008800; font-weight: bold">while</span> (<span style="color: #996633">$ulangi</span> <span style="color: #333333">&gt;</span> <span style="color: #0000DD; font-weight: bold">0</span>);

<span style="color: #557799">?&gt;</span>
</pre></div>
<ul>
  <h1>B.Pengulangan Foreach</h1>
  <b><p>Contoh Script</p></b>
  <p>Hasil Dari <a href="Foreach.php">While</a></p>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
<span style="color: #996633">$books</span> <span style="color: #333333">=</span> [
    <span style="background-color: #fff0f0">&quot;PHP Dasar&quot;</span>,
    <span style="background-color: #fff0f0">&quot;Funtion&quot;</span>,
    <span style="background-color: #fff0f0">&quot;HTML&quot;</span>,
    <span style="background-color: #fff0f0">&quot;Boostrap&quot;</span>
];

<span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;h5&gt;Judul Latihan:&lt;/h5&gt;&quot;</span>;
<span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;ul&gt;&quot;</span>;
<span style="color: #008800; font-weight: bold">foreach</span>(<span style="color: #996633">$books</span> <span style="color: #008800; font-weight: bold">as</span> <span style="color: #996633">$buku</span>){
    <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;li&gt;</span><span style="background-color: #eeeeee">$buku</span><span style="background-color: #fff0f0">&lt;/li&gt;&quot;</span>;
}
<span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;&lt;/ul&gt;&quot;</span>;

<span style="color: #557799">?&gt;</span>
</pre></div>

<p>Sumber Dari PetaniKode.com</p>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>