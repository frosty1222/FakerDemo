# faker
### người thực hiện: Lò Văn Đồng
# I. Faker là gì 
```angular2html
Faker là một thư viện PHP tạo dữ liệu giả cho bạn. Cho dù bạn cần khởi động lại cơ
sở dữ liệu của mình, tạo các tài liệu XML đẹp mắt, điền vào sự kiên trì của bạn 
để kiểm tra căng thẳng hoặc ẩn danh dữ liệu được lấy từ một dịch vụ sản xuất, Faker là dành cho bạn.
```
### còn nữa 

```
Faker được truyền cảm hứng rất nhiều từ Dữ liệu của Perl :: Faker và Faker của ruby.

Faker yêu cầu PHP> = 5.3.3.
```
# Cách cài đặt faker 
```
chạy lệnh sau:
composer require fakerphp/faker
```
## Basic usage 
```php 
+ gọi tới vendor/autoload nếu bạn cài bằng composer trong file bạn muốn dùng 

 require_once 'vendor/autoload.php';
+ Sử dụng Faker\Factory::created() để tạo và khởi tạo trình tạo faker 
```
### Ví dụ
```php 
<?php
    // Sử dụng Factory để tạo Faker\Generator
    $faker = Faker\Factory::create();

    // Tạo dữ liệu bằng cách truy cập thuộc tính
    echo $faker->name;
    // 'John Henry';
    echo $faker->address;
    // "426 Jordy Lodgen"
    echo $faker->text;
    // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
    // sit minima sint.

```
### ví dụ về xuất tên ngẫu nhiên 
```php 
+ mỗi lệnh gọi đến $faker->name mang lại kết quả (ngẫu nhiên) khác nhau. Điều này là do Faker sử dụng phép thuật__get () và chuyển tiếp Faker\Generator->$property gọi đến Faker\Generator->format($property).


        function LoopName(){
            $faker = Faker\Factory::create();
            for ($i = 0; $i < 10; $i++) {
            echo $faker->name, "\n";
            }
        }
        echo "<pre>";
        echo LoopName();
   Kết quả:
    Miss Elyse Becker DDS
    Mr. Javier Becker Sr.
    Blanca Glover PhD
    Dannie West
    Dr. Roselyn Jacobs I
    Burdette Towne
    Vernice Mueller
    Rosanna Robel
    Mr. Lambert Mante DVM
    Prof. Dawson Rowe V
=> mỗi lần relaod trang thì ta sẽ lấy đc các tên là randomly  
```

## seeding trong faker 
```php
  // faker seeding
        function seedingFaker(){
            $faker = Faker\Factory::create();
            $faker->seed();
            echo $faker->name;
        }
        echo "<pre>";
        seedingFaker();
 // lệnh này sẽ tạo ra tên ngẫu nhiên vào mỗi lần ta chạy chương trình 
 // nếu ta không cung cấp cho seed() function một giá trị nào thì nó sẽ ném ra một tên mỗi lần load trang 

```

# Faker Formatters
```
Mỗi thuộc tính của trình tạo (như tên, địa chỉ và lorem) được gọi là "Formatters". Dưới đây là một số định dạng mà thường sử dụng nhiều
```
## 1.0 Faker\Provider\Base
```php 
    randomDigit             // 7
    randomDigitNot(5)       // 0, 1, 2, 3, 4, 6, 7, 8, or 9
    randomDigitNotNull      // 5
    randomNumber($nbDigits = NULL, $strict = false) // 79907610
    randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) // 48.8932
    numberBetween($min = 1000, $max = 9000) // 8567
    randomLetter            // 'b'
```
## 1.1  Faker\Provider\Lorem
```php 
word                                             // 'aut'
    words($nb = 3, $asText = false)                  // array('porro', 'sed', 'magni')
    sentence($nbWords = 6, $variableNbWords = true)  // 'Sit vitae voluptas sint non voluptates.'
    sentences($nb = 3, $asText = false)              // array('Optio quos qui illo error.', 'Laborum vero a officia id corporis.', 'Saepe provident esse hic eligendi.')
    paragraph($nbSentences = 3, $variableNbSentences = true) // 'Ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis. Ducimus eos odit amet et est ut eum.'
    paragraphs($nb = 3, $asText = false)             // array('Quidem ut sunt et quidem est accusamus aut. Fuga est placeat rerum ut. Enim ex eveniet facere sunt.', 'Aut nam et eum architecto fugit repellendus illo. Qui ex esse veritatis.', 'Possimus omnis aut incidunt sunt. Asperiores incidunt iure sequi cum culpa rem. Rerum exercitationem est rem.')
    text($maxNbChars = 200)                          // 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'
```
## 1.2  Faker\Provider\en_US\Person
```php
    title($gender = null|'male'|'female')     // 'Ms.'
    titleMale                                 // 'Mr.'
    titleFemale                               // 'Ms.'
    suffix                                    // 'Jr.'
    name($gender = null|'male'|'female')      // 'Dr. Zane Stroman'
    firstName($gender = null|'male'|'female') // 'Maynard'
    firstNameMale                             // 'Maynard'
    firstNameFemale                           // 'Rachel'
    lastName                                  // 'Zulauf'
```

## 1.3 Faker\Provider\en_US\Address
```php
    cityPrefix                          // 'Lake'
    secondaryAddress                    // 'Suite 961'
    state                               // 'NewMexico'
    stateAbbr                           // 'OH'
    citySuffix                          // 'borough'
    streetSuffix                        // 'Keys'
    buildingNumber                      // '484'
    city                                // 'West Judge'
    streetName                          // 'Keegan Trail'
    streetAddress                       // '439 Karley Loaf Suite 897'
    postcode                            // '17916'
    address                             // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
    country                             // 'Falkland Islands (Malvinas)'
```
## 1.4 Faker\Provider\en_US\PhoneNumber
```php 
    phoneNumber             // '201-886-0269 x3767'
    tollFreePhoneNumber     // '(888) 937-7238'
    e164PhoneNumber     // '+27113456789'
```
## 1.5 Faker\Provider\en_US\Company
```php 
    catchPhrase             // 'Monitored regional contingency'
    bs                      // 'e-enable robust architectures'
    company                 // 'Bogan-Treutel'
    companySuffix           // 'and Sons'
    jobTitle                // 'Cashier'
```

## 1.6 Faker\Provider\en_US\Text
```php
    realText($maxNbChars = 200, $indexSize = 2) // "And yet I wish you could manage it?) 'And what are they made of?' Alice asked in a shrill, passionate voice. 'Would YOU like cats if you were never even spoke to Time!' 'Perhaps not,' Alice replied."
```
## 1.7  Faker\Provider\DateTime
```php 
    dateTime($max = 'now', $timezone = null) // DateTime('2008-04-25 08:37:17', 'UTC')
    dateTimeAD($max = 'now', $timezone = null) // DateTime('1800-04-29 20:38:49', 'Europe/Paris')
    date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
    time($format = 'H:i:s', $max = 'now') // '20:49:42'
    dayOfMonth($max = 'now')              // '04'
    dayOfWeek($max = 'now')               // 'Friday'
    month($max = 'now')                   // '06'
    monthName($max = 'now')               // 'January'
    year($max = 'now')                    // '1993'
    timezone                              // 'Europe/Paris'
```
## 1.8 Faker\Provider\Internet
```php
    email                   // 'tkshlerin@collins.com'
    safeEmail               // 'king.alford@example.org'
    freeEmail               // 'bradley72@gmail.com'
    companyEmail            // 'russel.durward@mcdermott.org'
    freeEmailDomain         // 'yahoo.com'
    safeEmailDomain         // 'example.org'
    userName                // 'wade55'
    password                // 'k&|X+a45*2['
```

## 1.9  Faker\Provider\Color
```php 
    hexcolor               // '#fa3cc2'
    rgbcolor               // '0,255,122'
    rgbColorAsArray        // array(0,255,122)
    rgbCssColor            // 'rgb(0,255,122)'
    safeColorName          // 'fuchsia'
    colorName              // 'Gainsbor'
    hslColor               // '340,50,20'
```
## 2.0 Faker\Provider\Image
```php 
    imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
    imageUrl($width, $height, 'cats')     // 'http://lorempixel.com/800/600/cats/'
    imageUrl($width, $height, 'cats', true, 'Faker') // 'http://lorempixel.com/800/400/cats/Faker'
    imageUrl($width, $height, 'cats', true, 'Faker', true) // 'http://lorempixel.com/gray/800/400/cats/Faker/' Monochrome image
    image($dir = '/tmp', $width = 640, $height = 480) // '/tmp/13b73edae8443990be1aa8f1a483bc27.jpg'
    image($dir, $width, $height, 'cats')  // 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg' it's a cat!
    image($dir, $width, $height, 'cats', false) // '13b73edae8443990be1aa8f1a483bc27.jpg' it's a filename without path
    image($dir, $width, $height, 'cats', true, false) // it's a no randomize images (default: `true`)
    image($dir, $width, $height, 'cats', true, true, 'Faker') // 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg' it's a cat with 'Faker' text. Default, `null`.
```
## 2.1 Faker\Provider\Barcodeư
```php 
    ean13          // '4006381333931'
    ean8           // '73513537'
    isbn13         // '9790404436093'
    isbn10         // '4881416324'
```
**trên đây là một số faker formatter mà ta có thể sử dụng**