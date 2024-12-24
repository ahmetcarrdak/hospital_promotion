# Hospital Promotion - Hastane Tanıtım Websitesi

## Proje Hakkında
Hospital Promotion, sağlık hizmetleri sunan bir hastane ya da klinik için tanıtım amaçlı geliştirilmiş bir web sitesidir. PHP ve MySQL kullanılarak hazırlanmış bu proje, hastane hakkında bilgiler, hizmetler, iletişim bilgileri ve kullanıcı geri bildirimleri gibi sayfalardan oluşmaktadır.

## Teknoloji Yığını
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Veritabanı**: MySQL

## Özellikler
- **Ana Sayfa**: Hastane hakkında genel bilgiler ve tanıtım içerikleri.
- **Hizmetler Sayfası**: Hastanenin sunduğu sağlık hizmetleri hakkında detaylı açıklamalar.
- **İletişim Sayfası**: Kullanıcıların hastane ile iletişim kurabilmesi için form ve iletişim bilgileri.
- **Hakkımızda Sayfası**: Hastanenin misyonu, vizyonu ve genel bilgileri.

## Kurulum

### Gereksinimler
- PHP 7.4 veya üstü
- MySQL 5.7 veya üstü
- Apache veya Nginx sunucu

### Adımlar
1. Depoyu klonlayın:
   ```bash
   git clone https://github.com/ahmetcarrdak/hospital_promotion.git
   ```
2. Proje dizinine gidin:
   ```bash
   cd hospital_promotion
   ```
3. `database.sql` dosyasını MySQL veritabanına yükleyin.
4. `config.php` dosyasındaki veritabanı bağlantı bilgilerini düzenleyin.
5. Web sitesini Apache veya Nginx sunucusunda çalıştırın.

## Veritabanı Şeması
Veritabanı aşağıdaki tabloları içermektedir:
- **Hizmetler**: Hastanenin sunduğu sağlık hizmetlerini içerir.
- **İletişim**: Kullanıcı geri bildirimleri ve iletişim bilgilerini saklar.

## Kullanım
- **Kullanıcılar**: Hastane hakkında bilgi alabilir, hizmetleri görebilir ve iletişim kurabilir.
- **Yöneticiler**: Yönetici paneli aracılığıyla içerik ekleyebilir veya güncelleyebilir.

## Katkıda Bulunma
Katkıda bulunmak için:
1. Depoyu çatallayın (fork).
2. Yeni bir dal (branch) oluşturun.
3. Yapmak istediğiniz değişiklikleri ekleyin ve pull request gönderin.

## Lisans
Bu proje MIT Lisansı altında yayınlanmıştır.
