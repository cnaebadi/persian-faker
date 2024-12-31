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
```bash
### Methods

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

```
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
```bash
randomLandlinePhonePrefix(): string

توضیحات: پیش‌وند تصادفی شماره تلفن ثابت را برمی‌گرداند.

randomMobilePhonePrefix(): string

توضیحات: پیش‌وند تصادفی شماره تلفن همراه را برمی‌گرداند.

randomWord(): string

توضیحات: یک کلمه تصادفی از لیست کلمات پیش‌فرض تولید می‌کند.

randomSentence(): string

توضیحات: یک جمله تصادفی تولید می‌کند.

randomParagraph(): string

توضیحات: یک پاراگراف تصادفی تولید می‌کند.

randomState(): string

توضیحات: یک استان تصادفی از لیست استان‌های پیش‌فرض برمی‌گرداند.

randomCity(): string

توضیحات: یک شهر تصادفی از لیست شهرهای پیش‌فرض برمی‌گرداند.

randomStreet(): string

توضیحات: یک نام خیابان تصادفی تولید می‌کند.

randomProtocol(): string

توضیحات: یک پروتکل تصادفی (مانند http یا https) برمی‌گرداند.

randomDomain(): string

توضیحات: یک نام دامنه تصادفی تولید می‌کند.

randomMaleFirstName(): string

توضیحات: یک نام کوچک مردانه تصادفی تولید می‌کند.

randomEnglishMaleFirstName(): string

توضیحات: یک نام کوچک مردانه انگلیسی تصادفی تولید می‌کند.

randomFemaleFirstName(): string

توضیحات: یک نام کوچک زنانه تصادفی تولید می‌کند.

randomEnglishFemaleFirstName(): string

توضیحات: یک نام کوچک زنانه انگلیسی تصادفی تولید می‌کند.

randomLastName(): string

توضیحات: یک نام خانوادگی تصادفی تولید می‌کند.

randomEnglishLastName(): string

توضیحات: یک نام خانوادگی انگلیسی تصادفی تولید می‌کند.

randomFullName(): string

توضیحات: یک نام کامل تصادفی (نام کوچک و نام خانوادگی) تولید می‌کند.

randomEnglishFullName(): string

توضیحات: یک نام کامل انگلیسی تصادفی تولید می‌کند.

randomJobTitle(): string

توضیحات: یک عنوان شغلی تصادفی تولید می‌کند.

randomLandlinePhone(): string

توضیحات: یک شماره تلفن ثابت تصادفی تولید می‌کند.

randomMobilePhone(): string

توضیحات: یک شماره تلفن همراه تصادفی تولید می‌کند.

randomNationalCode(int $length = 10): string

توضیحات: یک کد ملی تصادفی تولید می‌کند.

randomAddress(): string

توضیحات: یک آدرس تصادفی به فرمت فارسی تولید می‌کند.

randomPostalCode(): string

توضیحات: یک کد پستی تصادفی تولید می‌کند.

randomDate(): string

توضیحات: یک تاریخ تصادفی تولید می‌کند.

randomEmail(): string

توضیحات: یک آدرس ایمیل تصادفی تولید می‌کند.

randomBank(): string

توضیحات: یک نام بانک تصادفی از لیست بانک‌های پیش‌فرض برمی‌گرداند.

randomEnglishBank(): string

توضیحات: یک نام بانک انگلیسی تصادفی تولید می‌کند.
```
## مجوز
این پکیج متن‌باز است و تحت مجوز MIT منتشر شده است.
