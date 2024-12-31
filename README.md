# Persian Faker

A Laravel package to generate Persian fake data for testing and development purposes.

## Features
- Generate random Persian names, addresses, phone numbers, and more.
- Supports a wide range of data types such as job titles, dates, and emails.

## Installation

Run the following command to install via Composer:

```bash
composer require cnaebadi/persian-faker
```

## Usage
Here's how you can use the package in your Laravel project:
```bash
use Cnaebadi\PersianFaker\Faker\PersianFaker;
use Faker\Factory as FakerFactory;

// Create a Faker instance
$faker = FakerFactory::create();

// Create a PersianFaker instance
$persianFaker = new PersianFaker($faker);

// Generate Persian fake data
echo $persianFaker->randomFullName(); // Outputs a random Persian full name
echo $persianFaker->randomLandlinePhone(); // Outputs a random landline phone number
echo $persianFaker->randomAddress(); // Outputs a random Persian address
```

## Methods
The following methods are available for generating fake data:


#### `randomFullName()`
Generates a random full name in Persian.  
Example: `محمد رضا احمدی`

#### `randomEnglishFullName()`
Generates a random full name in English.  
Example: `Sina Mohammadi`

#### `randomFirstName()`
Generates a random first name in Persian.  
Example: `زهرا`

#### `randomEnglishFirstName()`
Generates a random first name in English.  
Example: `Ali`

#### `randomLastName()`
Generates a random last name in Persian.  
Example: `کاظمی`

#### `randomEnglishLastName()`
Generates a random last name in English.  
Example: `Karimi`

#### `randomMaleFirstName()`
Generates a random male first name in Persian.  
Example: `حسین`

#### `randomEnglishMaleFirstName()`
Generates a random male first name in English.  
Example: `Reza`

#### `randomFemaleFirstName()`
Generates a random female first name in Persian.  
Example: `نرگس`

#### `randomEnglishFemaleFirstName()`
Generates a random female first name in English.  
Example: `Sara`

#### `randomJobTitle()`
Generates a random job title.  
Example: `مهندس نرم‌افزار`

#### `randomAddress()`
Generates a random address in Persian.  
Example: `تهران، خیابان ولیعصر، کوچه احمدی، پلاک 5، واحد 2`

#### `randomLandlinePhone()`
Generates a random landline phone number.  
Example: `02112345678`

#### `randomMobilePhone()`
Generates a random mobile phone number.  
Example: `09123456789`

#### `randomEmail()`
Generates a random email address.  
Example: `sina.mohammadi@gmail.com`

#### `randomNationalCode()`
Generates a random national code.  
Example: `1234567890`

#### `randomPostalCode()`
Generates a random postal code.  
Example: `1234567890`

#### `randomDate()`
Generates a random date in the format `YYYY/MM/DD`.  
Example: `1399/05/21`

#### `randomWord()`
Generates a random Persian word.  
Example: `دوست`

#### `randomSentence()`
Generates a random Persian sentence.  
Example: `او کتاب خود را خواند.`

#### `randomParagraph()`
Generates a random Persian paragraph.  
Example: `این یک پاراگراف نمونه است که شامل کلمات مختلف می‌باشد.`

#### `randomState()`
Generates a random Persian state.  
Example: `تهران`

#### `randomCity()`
Generates a random Persian city.  
Example: `اصفهان`

#### `randomStreet()`
Generates a random Persian street.  
Example: `خیابان حافظ`

#### `randomProtocol()`
Generates a random protocol (e.g., http or https).  
Example: `https`

#### `randomDomain()`
Generates a random domain.  
Example: `example.com`

#### `randomBank()`
Generates a random bank name in Persian.  
Example: `بانک ملی`

#### `randomEnglishBank()`
Generates a random bank name in English.  
Example: `Mellat Bank`

## Contribution

We welcome contributions!  
To contribute, fork the repository, make your changes, and submit a pull request. Please ensure your code is clean and well-documented. Thank you!

## Thanks

This project was inspired by my dear friend, Keyvan. I am truly grateful for his guidance and support.

## License
This package is open-source and licensed under the MIT license.


# فیکر فارسی

یک پکیج لاراول برای تولید داده‌های تصادفی فارسی برای تست و توسعه.

## ویژگی‌ها
- تولید نام، آدرس، شماره تلفن و دیگر داده‌های فارسی.
- پشتیبانی از انواع مختلف داده‌ها مانند عنوان شغلی، تاریخ و ایمیل.

## نصب

برای نصب این پکیج از دستور زیر استفاده کنید:

```bash
composer require cnaebadi/persian-faker
```

## استفاده
نمونه‌ای از نحوه استفاده از پکیج در پروژه لاراول:
```bash
use Cnaebadi\PersianFaker\Faker\PersianFaker;
use Faker\Factory as FakerFactory;

// ساخت نمونه Faker
$faker = FakerFactory::create();

// ساخت نمونه PersianFaker
$persianFaker = new PersianFaker($faker);

// تولید داده‌های تصادفی فارسی
echo $persianFaker->randomFullName(); // تولید یک نام کامل تصادفی فارسی
echo $persianFaker->randomLandlinePhone(); // تولید یک شماره تلفن ثابت تصادفی
echo $persianFaker->randomAddress(); // تولید یک آدرس تصادفی فارسی
```
## متدها
متدهای موجود برای تولید داده‌های تصادفی:


#### `randomFullName()`
یک نام کامل تصادفی به زبان فارسی تولید می‌کند.  
مثال: `محمد رضا احمدی`

#### `randomEnglishFullName()`
یک نام کامل تصادفی به زبان انگلیسی تولید می‌کند.  
مثال: `Sina Mohammadi`

#### `randomFirstName()`
یک نام کوچک تصادفی به زبان فارسی تولید می‌کند.  
مثال: `زهرا`

#### `randomEnglishFirstName()`
یک نام کوچک تصادفی به زبان انگلیسی تولید می‌کند.  
مثال: `Ali`

#### `randomLastName()`
یک نام خانوادگی تصادفی به زبان فارسی تولید می‌کند.  
مثال: `کاظمی`

#### `randomEnglishLastName()`
یک نام خانوادگی تصادفی به زبان انگلیسی تولید می‌کند.  
مثال: `Karimi`

#### `randomMaleFirstName()`
یک نام کوچک مردانه تصادفی به زبان فارسی تولید می‌کند.  
مثال: `حسین`

#### `randomEnglishMaleFirstName()`
یک نام کوچک مردانه تصادفی به زبان انگلیسی تولید می‌کند.  
مثال: `Reza`

#### `randomFemaleFirstName()`
یک نام کوچک زنانه تصادفی به زبان فارسی تولید می‌کند.  
مثال: `نرگس`

#### `randomEnglishFemaleFirstName()`
یک نام کوچک زنانه تصادفی به زبان انگلیسی تولید می‌کند.  
مثال: `Sara`

#### `randomJobTitle()`
یک عنوان شغلی تصادفی تولید می‌کند.  
مثال: `مهندس نرم‌افزار`

#### `randomAddress()`
یک آدرس تصادفی به زبان فارسی تولید می‌کند.  
مثال: `تهران، خیابان ولیعصر، کوچه احمدی، پلاک 5، واحد 2`

#### `randomLandlinePhone()`
یک شماره تلفن ثابت تصادفی تولید می‌کند.  
مثال: `02112345678`

#### `randomMobilePhone()`
یک شماره تلفن همراه تصادفی تولید می‌کند.  
مثال: `09123456789`

#### `randomEmail()`
یک ایمیل تصادفی تولید می‌کند.  
مثال: `sina.mohammadi@gmail.com`

#### `randomNationalCode()`
یک کد ملی تصادفی تولید می‌کند.  
مثال: `1234567890`

#### `randomPostalCode()`
یک کد پستی تصادفی تولید می‌کند.  
مثال: `1234567890`

#### `randomDate()`
یک تاریخ تصادفی به فرمت `YYYY/MM/DD` تولید می‌کند.  
مثال: `1399/05/21`

#### `randomWord()`
یک کلمه تصادفی به زبان فارسی تولید می‌کند.  
مثال: `دوست`

#### `randomSentence()`
یک جمله تصادفی به زبان فارسی تولید می‌کند.  
مثال: `او کتاب خود را خواند.`

#### `randomParagraph()`
یک پاراگراف تصادفی به زبان فارسی تولید می‌کند.  
مثال: `این یک پاراگراف نمونه است که شامل کلمات مختلف می‌باشد.`

#### `randomState()`
یک استان تصادفی به زبان فارسی تولید می‌کند.  
مثال: `تهران`

#### `randomCity()`
یک شهر تصادفی به زبان فارسی تولید می‌کند.  
مثال: `اصفهان`

#### `randomStreet()`
یک خیابان تصادفی به زبان فارسی تولید می‌کند.  
مثال: `خیابان حافظ`

#### `randomProtocol()`
یک پروتکل تصادفی (مثل http یا https) تولید می‌کند.  
مثال: `https`

#### `randomDomain()`
یک دامنه تصادفی تولید می‌کند.  
مثال: `example.com`

#### `randomBank()`
یک نام بانک تصادفی به زبان فارسی تولید می‌کند.  
مثال: `بانک ملی`

#### `randomEnglishBank()`
یک نام بانک تصادفی به زبان انگلیسی تولید می‌کند.  
مثال: `Mellat Bank`

## تشکر و قدردانی

این پروژه با الهام از دوست عزیزم، کیوان، ساخته شده است. از راهنمایی‌ها و حمایت‌های او بسیار سپاسگزارم.

## مشارکت

مشارکت شما باعث خوشحالی ماست!  
برای مشارکت، مخزن را Fork کنید، تغییرات خود را اعمال کرده و یک Pull Request ارسال کنید. لطفاً مطمئن شوید که کد شما تمیز و مستند است. سپاسگزاریم!

## مجوز
این پکیج متن‌باز است و تحت مجوز MIT منتشر شده است.
