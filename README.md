# Persian Faker

A Laravel package to generate Persian fake data for testing and development purposes.

## Features
- Generate random Persian names, addresses, phone numbers, and more.
- Supports a wide range of data types such as job titles, dates, and emails.

## Installation

Run the following command to install via Composer:

```bash
composer require cnaebadi/persian-faker

Usage
Here's how you can use the package in your Laravel project:
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

Methods
The following methods are available for generating fake data:

randomLandlinePhonePrefix(): Generate a random landline phone prefix.
randomMobilePhonePrefix(): Generate a random mobile phone prefix.
randomWord(): Generate a random Persian word.
randomSentence(): Generate a random Persian sentence.
randomParagraph(): Generate a random Persian paragraph.
randomState(): Generate a random Persian state.
randomCity(): Generate a random Persian city.
randomStreet(): Generate a random street name.
randomProtocol(): Generate a random protocol (http, https).
randomDomain(): Generate a random domain.
randomFullName(): Generate a random Persian full name.

License
This package is open-source and licensed under the MIT license.

```markdown
# Persian Faker

یک پکیج لاراول برای تولید داده‌های تصادفی فارسی برای تست و توسعه.

## ویژگی‌ها
- تولید نام، آدرس، شماره تلفن و دیگر داده‌های فارسی.
- پشتیبانی از انواع مختلف داده‌ها مانند عنوان شغلی، تاریخ و ایمیل.

## نصب

برای نصب این پکیج از دستور زیر استفاده کنید:

```bash
composer require cnaebadi/persian-faker

استفاده
نمونه‌ای از نحوه استفاده از پکیج در پروژه لاراول:
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

متدها
متدهای موجود برای تولید داده‌های تصادفی:

randomLandlinePhonePrefix(): تولید پیش‌شماره تلفن ثابت تصادفی.
randomMobilePhonePrefix(): تولید پیش‌شماره موبایل تصادفی.
randomWord(): تولید یک کلمه تصادفی.
randomSentence(): تولید یک جمله تصادفی.
randomParagraph(): تولید یک پاراگراف تصادفی.
randomState(): تولید یک استان تصادفی.
randomCity(): تولید یک شهر تصادفی.
randomStreet(): تولید یک نام خیابان تصادفی.
randomProtocol(): تولید یک پروتکل تصادفی (http، https).
randomDomain(): تولید یک دامنه تصادفی.
randomFullName(): تولید یک نام کامل تصادفی فارسی.
مجوز
این پکیج متن‌باز است و تحت مجوز MIT منتشر شده است.
