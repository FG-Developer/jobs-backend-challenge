# jobs-backend-challenge
Jobs Backend Challenge Laravel 5.1 surumu icin hazirlanmis bir pakettir.

## Kurulum

Bu paketi yuklemek icin composer paket yoneticisi ile yuklemelisiniz. Yukleme islemi icin asagidaki kodu kullanmalisiniz.

```shell
composer require fg-developer/jobs-backend-challenge
```

Paket yukleme isleme isleminden sonra ServiceProvider tanimlamasi icin asagidaki satiri config/app/php dosyasi icerisindeki providers bolumune eklemelisiniz.

```php
'providers' => [
...
Fg\Developer\JobsBackEndChallenge\JobsBackEndChallengeServiceProvider::class
]
```

Provider tanimlamasi yapildiktan sonra projenin root composer dosyasinin autoload kismina paket Class'larinin psr-4 standarti olarak tanitilmasi gerekmektedir. Bu islemi asagidaki sekilde yapabilirsiniz.

```php
"psr-4": {
    ....,
    "Fg\\Developer\\JobsBackEndChallenge\\": "vendor/fg-developer/jobs-backend-challenge/src/"
}
```

Tum islemler tamamlandiktan sonra paket'in dosyalarini laravel projesine publish edebilmek icin asagidaki artisan komutu calistirilmalidir.

```shell
php artisan vendor:publish
```

Yukaridaki paket dosyalari publish edildiginde asagidaki dosyalar projenize dahil edilecektir.

Model:
```shell
app/Countries.php
app/Hotels.php
app/Reviews.php
```

Migrations:
```shell
app/database/migrations/2017_12_13_Countries.php
app/database/migrations/2017_12_13_Hotels.php
app/database/migrations/2017_12_13_Reviews.php
```

Tablolari veritabaniniza eklemek icin migration'lari calistirmalisiniz. Bu islem icin asagidaki yontemi izleyebilirsiniz.

```shell
php artisan migrate
```
