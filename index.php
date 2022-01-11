<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home - Transposisi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">KRIPTOGRAFI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="enkripsi.html">Enkripsi</a></li>
                        <li class="nav-item"><a class="nav-link" href="dekripsi.html">Dekripsi</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div>
                <h2><b>Apa itu Cipher Transposisi?</b></h2>
                <p>Cipher transposisi dapat disebut juga sebagai cipher permutasi, karena sebenarnya metode cipher transposisi ini mempermutasikan karakter-karakter plainteks, yaitu dengan menyusun ulang urutan karakter dalam pesan.</p>

                <h2><b>Contoh</b></h2>
                <p>Contoh cipher transposisi columnar dengan kunci <tt>"KRIPTO"</tt>. Panjang baris yang digunakan adalah
                sama dengan panjang kata kunci. Untuk mengenkripsi teks.</p>
                 
                <pre>aku suka mata  kuliah kriptografi</pre>
                <p>Dengan kata kunci <tt>KRIPTO</tt>:</p>

                <pre>
                K R I P T O
                a k u s u k
                a m a t a k
                u l i a h k
                r i p t o g
                r a f i x x
                </pre>

                <p>Pada contoh di atas, plaintext telah dipadatkan sehingga pas dengan rapi dalam persegi panjang. Ini dikenal sebagai transposisi kolumnar reguler.
                Transposisi kolumnar yang tidak teratur membuat karakter ini kosong, meskipun ini membuat dekripsi sedikit lebih sulit. Kolom sekarang disusun ulang
                sedemikian rupa sehingga huruf-huruf dalam kata kunci disusun menurut abjad.</p>

                <pre>
                I K O P R T
                u a k s k u
                a a k t m a
                i u k a l h
                p r g t i o
                f r x i a x</pre>

                <p>Ciphertext dibacakan di sepanjang kolom:</p>

                <pre>uaipfaaurrkkkgxstatikmliauahox</pre>

        </div>


        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
