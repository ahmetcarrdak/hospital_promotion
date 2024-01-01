<?php require "inc/ust.php"; ?>

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hizmetlerimiz</h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<?php
$hizmetler = array(
    array(
        'ad' => 'Evde Hemşirelik Hizmetleri',
        'foto' => 'hizmet1.jpg',
        'detaylar' => 'Evde Hemşirelik Hizmetleri, sağlık hizmetlerinin bireylerin kendi evlerinde sunulduğu bir yaklaşımdır. Bu hizmetler, yaşlılar, hasta veya özel bakıma ihtiyaç duyan bireyler için evde sağlık bakımının sağlanmasını amaçlar. Hemşireler, tıbbi kontrolleri gerçekleştirir, ilaçları yönetir, pansuman yapar, yara bakımı sağlar ve hastaların genel sağlık durumunu izler. Evde Hemşirelik Hizmetleri, bireylerin rahatlığını ve güvenliğini sağlamak için profesyonel sağlık hizmetlerini ev ortamına taşır.'
    ),
    array(
        'ad' => 'Evde Serum Hizmetleri',
        'foto' => 'hizmet2.jpg',
        'detaylar' => 'Evde Serum Hizmetleri, tıbbi serumun bireylerin kendi evlerinde verildiği bir sağlık hizmetidir. Bu hizmet, genellikle kronik hastalığı olan veya iyileşme sürecinde olan bireyler için uygulanır. Evdeki bir sağlık uzmanı, tıbbi reçete doğrultusunda serum tedavisini evde gerçekleştirir. Serumlar, bireylerin vücutlarının ihtiyaç duyduğu sıvılar, elektrolitler, besin maddeleri veya ilaçları içerebilir. Evde Serum Hizmetleri, hastaların hastaneye gitmek zorunda kalmadan tedavi almasını sağlar, konforlarını artırır ve sağlık durumlarını yönetmelerine yardımcı olur.'
    ),
    array(
        'ad' => 'Evde Pansuman Hizmetleri',
        'foto' => 'hizmet3.jpg',
        'detaylar' => 'Evde Pansuman Hizmetleri, yara bakımı ve pansuman işlemlerinin bireylerin kendi evlerinde profesyonel sağlık uzmanları tarafından gerçekleştirildiği bir hizmettir. Bu hizmet, çeşitli nedenlerle oluşan yaraların iyileşmesini desteklemek amacıyla sunulur. Hemşireler, steril pansuman malzemeleri kullanarak yara temizliği, pansuman değişimi, dikişlerin kontrolü ve yara iyileşmesi sürecini takip eder. Evde Pansuman Hizmetleri, hastaların konforunu sağlamak, enfeksiyon riskini azaltmak ve yara iyileşmesini hızlandırmak için profesyonel ve özelleştirilmiş bir yaklaşım sunar.'
    ),
    array(
        'ad' => 'Kulak Yıkama Hizmetleri',
        'foto' => '',
        'detaylar' => 'Kulak Yıkama Hizmetleri, kulak hijyeninin sağlanması ve kulakta biriken fazla balmumu veya kirlerin temizlenmesi amacıyla sunulan profesyonel hizmetlerdir. Kulak yıkama işlemi, uzmanlar tarafından kontrollü bir şekilde gerçekleştirilir ve kulak kanalının temizlenmesini sağlar. Bu hizmet, işitme problemlerini önlemek, kulak tıkanıklığını gidermek ve kulak sağlığını korumak için önemlidir. Kulak yıkama işlemi, güvenli ve etkili bir şekilde gerçekleştirilirken, bireylerin rahatlığı ve konforu da göz önünde bulundurulur. Kulak Yıkama Hizmetleri, bireylere sağlıklı bir kulak ortamı sunarak işitme sağlığını destekler.'
    ),
    array(
        'ad' => 'Evde Enjeksiyon Hizmetleri',
        'foto' => '',
        'detaylar' => 'Evde enjeksiyon hizmetleri, hastaların ihtiyaç duydukları ilaçları rahatlıkla ev ortamında alabilmelerini sağlayan önemli bir sağlık hizmetidir. Bu hizmet sayesinde, kronik hastalığı olan bireyler veya tedavi sürecinde olan kişiler, hastaneye gitmeden evlerinde gerekli enjeksiyonları yaptırabilirler. Uzman sağlık personeli, ev ziyaretleri yaparak enjeksiyonları güvenli bir şekilde uygular ve hastaların rahatlığını sağlar. Evde enjeksiyon hizmetleri, hastaların yaşam kalitesini artırmak, tedavi uyumunu sağlamak ve hastane ziyaretlerini azaltmak amacıyla önemli bir seçenektir.'
    ),
    array(
        'ad' => 'Göbek Piercingi Hizmetleri',
        'foto' => '',
        'detaylar' => 'Göbek piercingi, beden süslemesi ve özgüveninizi artırmak için popüler bir seçenektir. Uzmanlarımız tarafından profesyonelce gerçekleştirilen göbek piercingi hizmetimizde, steril koşullarda kullanılan hijyenik malzemeler ve güvenli tekniklerle çalışıyoruz. İstenilen tasarımlara ve müşteri tercihlerine göre özelleştirilen göbek piercingi ile benzersiz bir stil oluşturabilirsiniz. Deneyimli ekibimiz, rahat bir deneyim sunmak için sizinle işbirliği yapacak ve sorularınızı yanıtlayacaktır. Göbek piercingi hizmetimizle, tarzınızı ifade etmenin ve kendinizi özel hissetmenin keyfini çıkarabilirsiniz.'
    ),
    array(
        'ad' => 'Kulak Delme Hizmetleri',
        'foto' => '',
        'detaylar' => 'Kulak delme hizmeti, profesyonel bir şekilde kulak delme işlemini gerçekleştiren bir sağlık hizmetidir. Bu hizmet, steril ortamlarda ve hijyenik ekipmanlarla sunulur. Uzmanlar tarafından yapılırken, özel kulak delme cihazları kullanılır. Kulak delme işlemi, hızlı ve etkili bir şekilde yapılırken, müşterilerin konforu ve güvenliği ön planda tutulur. Kulak delme hizmeti, isteğe bağlı olarak farklı kulak takıları ve küpelerin takılmasıyla tamamlanabilir. Bu hizmet, müşterilere hijyenik ve profesyonel bir deneyim sunarak kulak estetiğini ve stilini tamamlamak isteyenlere yöneliktir.'
    ),
);

$say = count($hizmetler);

?>

<style>
    .serviceSearch {
        width: 40%;
        border: 1px solid #dddddd;
        border-radius: 10px;
        padding: 4px 10px;
        color: #0c5460;
        transition: 0.3s;
    }

    .serviceSearchReset {
        margin-left: -24px;
        padding-right: 24px;
        color: red;
        cursor: pointer;
        font-size: 17px;
        transition: 0.3s;
        opacity: 0;
    }

    .serviceSearch:focus + .serviceSearchReset {
        opacity: 1;
    }

    .serviceSearch:focus {
        box-shadow: 0 0 10px #dddddd;
    }

    .serviceSearch::placeholder {
        color: #dddddd;
    }

    .counterİtem {
        margin-right: 10%;
        font-size: 12px;
        color: #dddddd;
    }
</style>

<!-- Welcome Area Starts -->
<section class="welcome-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 style="color: #007bff"
                >Hizmet Sayısı: <?php echo $say ?> Adet</h3>
            </div>
            <div class="col-6" style="text-align: right">
                <input type="search" class="serviceSearch" id="searchInput" placeholder="Hizmet Ara.."> <span
                    class="serviceSearchReset">x</span>
                <div class="counterİtem">
                    Sayfada Gösterilen: <span class="counter"></span> adet
                </div>
            </div>
        </div>
        <?php foreach ($hizmetler as $h) { ?>
            <div class="row mt-5 item">
                <div class="col-lg-4 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome.png" alt="" style="width: 400px; height: 300px">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2><?php echo $h['ad'] ?></h2>
                        <p class="pt-3">
                            <?php echo $h['detaylar'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Welcome Area End -->


<?php require "inc/alt.php"; ?>

<script>
    $(document).ready(function () {
        updateCounter();

        $('#searchInput').on('input', function () {
            var searchText = $(this).val().toLowerCase();

            $('.item').each(function () {
                var text = $(this).text().toLowerCase();

                if (text.indexOf(searchText) !== -1) {
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                }
            });

            updateCounter();
        });

        $('.serviceSearchReset').on('click', function () {
            $('#searchInput').val('');
            $('.item').fadeIn();
            updateCounter();
        });
    });

    function updateCounter() {
        var itemCount = $('.item:visible').length;
        $('.counter').text(itemCount);
    }

</script>