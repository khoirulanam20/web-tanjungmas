<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METAVERSE | FOOTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<style>
    /* Footer
====================================================================== */
#footer-menu {
    height: 50px;
    background: #fcfcfc url(../img/bg-k20.png) repeat;
    border-top: 4px solid #f6f6f6;
    border-bottom: 4px solid #f6f6f6;
    margin-top: 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

#footer-menu-logo img {
    margin-top: 10px;
}

#footer-menu-links {
    display: flex;
    align-items: center;
}

#footer-menu-links ul {
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
}

#footer-menu-links li {
    margin-right: 15px;
}

#footer-menu-links li a {
    color: #999999;
    text-decoration: none;
    font-size: 12px;
    font-family: 'Droid Sans';
    text-transform: lowercase;
    padding: 10px 15px;
    transition: color 0.3s ease-in-out;
}

#footer-menu-links li a:hover {
    color: #8698e3;
}

#footer-menu-back-to-top {
    margin: 10px;
    z-index: 999;
}

#footer-menu-back-to-top a {
    width: 30px;
    height: 30px;
    display: block;
    background-color: #76b6eb;
    background-image: url(/img/scroll-top-top.png);
    background-repeat: no-repeat;
    background-position: 50%;
    transition: background-color 0.1s ease-in-out;
}

#footer-menu-back-to-top a:hover {
    background-color: #cbd2f6;
}

#footer {
    background: url(../img/bg-k10.png) repeat;
    border-bottom: 4px solid #f6f6f6;
    color: #810b0b !important;
    padding: 40px 0;
    position: relative;
    opacity: 1;
}

#footer,
#footer p,
#footer a {
    color: #666 !important;
}

#footer a:hover {
    color: #fff;
}

#footer h3 {
    padding: 2px 0 !important;
    margin-bottom: 10px;
    color: #666;
    border-bottom: 5px double #f6f6f6;
}

.fot {
    border-right: 1px dashed #fff;
}

.fot ol {
    list-style: none;
    padding-left: 10px;
}

.fot ol li a {
    color: #BCB244;
}

a.ft1 {
    color: #fff;
    text-decoration: none;
    padding-right: 9px;
    font-size: 0.8em;
    border-right: 1px solid #fff;
}

a.ft1:hover {
    color: yellow;
}

.ucapan {
    font-family: 'Satisfy', cursive;
}

.ultah:hover {
    text-decoration: none;
    color: orangered;
}

/* footer social icons */
ul.social-network {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;
}

ul.social-network li {
    margin: 0 5px;
}

.social-network a {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    transition: transform 0.2s;
}

.social-network a:hover {
    transform: rotate(360deg);
}

.social-network a.icoRss { background-color: #F56505; }
.social-network a.icoFacebook { background-color: #3B5998; }
.social-network a.icoTwitter { background-color: #33ccff; }
.social-network a.icoGoogle { background-color: #BD3518; }
.social-network a.icoInstagram { background-color: #996633; }
.social-network a.icoVimeo { background-color: #0590B8; }
.social-network a.icoLinkedin { background-color: #007bb7; }

.go-top {
    display: block;
    width: 40px;
    height: 40px;
    line-height: 35px;
    text-align: center;
    font-size: 30px;
    position: fixed;
    bottom: -40px;
    right: 20px;
    transition: bottom 1s ease;
    background-color: #404040;
    color: #FFFFFF;
    text-decoration: none;
    border-radius: 5px;
}

.go-top.show {
    bottom: 50px;
}

.go-top:hover {
    background-color: #012554;
    color: #FFFFFF;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    background-color: #2F2F2F;
    color: #fff;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin: 10px;
}

.footer-section h4 {
    color: #fa4e3af1;
}

.footer-section p, .footer-section a {
    font-size: 0.8em;
    color: #fff;
}

.footer-section a:hover {
    color: yellow;
}

.footer-social {
    text-align: center;
    margin-top: 20px;
}

.footer-social ul {
    display: flex;
    justify-content: center;
    padding: 0;
    list-style: none;
}

.footer-social ul li {
    margin: 0 10px;
}

.footer-social a {
    color: #fff;
    font-size: 1.5em;
    transition: color 0.3s;
}

.footer-social a:hover {
    color: #fa4e3af1;
}
</style>


  <body>
    <!-- JAVA SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <div class="footer-container">
            <div class="footer-section" style="flex: 1; text-align: left;">
                <img src="{{ asset('images/logo/logokelurahan.png') }}" width="100%" style="max-width: 100px; max-height: 110px; margin-left: 20px;">
            </div>
            <div class="footer-section" style="flex: 2; text-align: left;">
                <h4>Kelurahan Tanjung Mas</h4>
                <p>
                    Main Location: Semarang Utara Street || <i class="fa fa-phone" style="color: #FFCC00"></i> (024) 3560341<br>
                    Other Location: Jl. Ronggowarsito 42.a Semarang Street || <i class="fa fa-phone" style="color: #FFCC00"></i> (024) 3560341<br>
                    <i class="fa fa-fax" style="color: #FFCC00"></i> Fax. (024) 3560341 || Semarang 50174 Indonesia<br>
                    <i class="fa fa-envelope" style="color: #FFCC00"></i><a href="https://dinus.ac.id/hospitality" style="color: #fff;"> Contact us</a>
                </p>
            </div>
            <div class="footer-section" style="flex: 1;">
                <!-- Histats.com  START  (standard)-->
                <script type="text/javascript">
                    document.write(unescape("%3Cscript src=%27https://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
                </script>
                <a href="https://www.histats.com" target="_blank" title="free web stats">
                    <script type="text/javascript">
                        try {
                            Histats.start(1, 3257677, 4, 322, 112, 62, "00011111");
                            Histats.track_hits();
                        } catch (err) {};
                    </script>
                </a>
                <noscript><a href="https://www.histats.com" target="_blank"><img src="https://sstatic1.histats.com/0.gif?3257677&101" alt="free web stats" border="0"></a></noscript>
                <!-- Histats.com  END  -->
            </div>
            <div class="footer-section footer-social" style="flex: 1;">
                <h4 class="mb-5">Contact Us</h4>
                <ul class="social-network social-circle">
                    <li><a target="_blank" href="https://www.facebook.com/pages/Kelurahan%20Tanjung%20Emas%20Semarang%20Utara/131972440313750/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook sc"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/kel_Tanjungmas/" class="icoTwitter" title="Twitter"><i class="fa fa-twitter sc"></i></a></li>
                    <li><a target="_blank" href="https://plus.google.com/101582294656647784536" class="icoGoogle" title="Google +"><i class="fa fa-google-plus sc"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- PERCOBAAN FOOTER SIADIN-->
        <div style="background-color: #3C3F48;border-top: 2px solid #1D1D1F;border-bottom: 5px solid #1D1D1F;">
            <div class="container" style="color: #fff;font-size: 1.2em;padding-top: 10px; margin-bottom:10px;">
                <center>
                    <p>
                        <!-- <a href="http://dinus.ac.id/gallery2/" class="ft1" target="_blank">Gallery</a> -->
                        <a href="/about" class="ft1" target="_blank">Profil</a>
                        <a href="/berita" class="ft1" target="_blank">Berita</a>
                        <a href="http://127.0.0.1:8000/kelembagaan_karang_taruna" class="ft1" target="_blank">Karang Taruna</a>
                        <a href="http://127.0.0.1:8000/pemberdayaan_kamtibmas" class="ft1" target="_blank">KAMTIBMAS</a>
                        <a href="https://e-pbb.semarangkota.go.id/" class="ft1" target="_blank">PBB</a>

                        <a href="https://semarangkota.go.id/" class="ft1" target="_blank">Semarang</a>
                        <a href="https://kipjateng.jatengprov.go.id/" class="ft1" target="_blank">KIP Jateng</a>
                        <a href="https://www.kpk.go.id/id" class="ft1" target="_blank">KPK</a>
                        <a href="https://polri.go.id/" class="ft1" target="_blank">POLRI</a>
                        <a href="https://www.kpu.go.id/" class="ft1" target="_blank">KPU</a>
                        <a href="https://www.kpu.go.id/" class="ft1" target="_blank">Tribun Jateng</a>
                        <a href="https://www.kominfo.go.id/" class="ft1" target="_blank">KOMINFO</a>
                        <a href="https://bkpp.semarangkota.go.id/" target="_blank" class="ft1">BKPP</a>
                        <a href="https://ppid.semarangkota.go.id/informasi-penerimaan-pegawai-kota-semarang/" target="_blank" class="ft1">PPID</a>
                        <a href="https://silaga.semarangkota.go.id/" target="_blank" class="ft1">Silaga</a>
                        <a href="https://pantausemar.semarangkota.go.id/?cctv_category_id=3" target="_blank" class="ft1">Tilik Semar</a>
                        <a href="https://distaru.semarangkota.go.id/semarang/index.php?webgis=tataruang" target="_blank" class="ft1" style="border-right:none;">One Map SMG</a>

                    </p>
                </center>
            </div>
        </div>
         <!-- PENUTUP FOOTER -->

        <!-- start: Copyright -->
        <div id="copyright">
            

            <!-- start: Container -->
            <div class="container" style="padding-top:2%; margin-top:-1%; font-size:0.80em;">
            
                <center><p>
                    KELURAHAN TANJUNG MAS KOTA SEMARANG || Copyright &copy; <a href="http://bootstrapmaster.com" alt="Bootstrap Themes"> 2024</a>  DEVELOPER All right Reserved
                </p>
                </center>

            

            </div>
            <!-- end: Container  -->
            
        </div>	
        <!-- end: Copyright -->
</body>

</html>