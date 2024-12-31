<?php

namespace Cnaebadi\PersianFaker\Faker;

use Faker\Generator as Faker;

class PersianFaker
{
	 protected $faker;

	 /**
	  * Constructor to initialize the Faker instance.
	  *
	  * @param Faker $faker The Faker instance used to generate fake data.
	  */
	 public function __construct(Faker $faker)
	 {
		  $this->faker = $faker;
	 }

	 /**
	  * Generate a random landline phone prefix.
	  *
	  * @return string A random landline phone prefix from predefined constants.
	  */
	 public function randomLandlinePhonePrefix(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::LANDLINE_PHONE_PREFIXES);
	 }

	 /**
	  * Generate a random mobile phone prefix.
	  *
	  * @return string A random mobile phone prefix from predefined constants.
	  */
	 public function randomMobilePhonePrefix(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::MOBILE_PHONE_PREFIXES);
	 }

	 /**
	  * Generate a random word from predefined words.
	  *
	  * @return string A random word.
	  */
	 public function randomWord(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::WORDS);
	 }

	 /**
	  * Generate a random sentence.
	  *
	  * @return string A random sentence.
	  */
	 public function randomSentence(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::SENTENCES);
	 }

	 /**
	  * Generate a random paragraph.
	  *
	  * @return string A random paragraph.
	  */
	 public function randomParagraph(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::PARAGRAPHS);
	 }

	 /**
	  * Generate a random state from predefined list of states.
	  *
	  * @return string A random state.
	  */
	 public function randomState(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::STATES);
	 }

	 /**
	  * Generate a random city from predefined list of cities.
	  *
	  * @return string A random city.
	  */
	 public function randomCity(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::CITIES);
	 }

	 /**
	  * Generate a random street name.
	  *
	  * @return string A random street.
	  */
	 public function randomStreet(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::STREETS);
	 }

	 /**
	  * Generate a random protocol (e.g., http, https).
	  *
	  * @return string A random protocol.
	  */
	 public function randomProtocol(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::PROTOCOLS);
	 }

	 /**
	  * Generate a random domain name.
	  *
	  * @return string A random domain.
	  */
	 public function randomDomain(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::DOMAINS);
	 }

	 /**
	  * Generate a random male first name.
	  *
	  * @return string A random male first name.
	  */
	 public function randomMaleFirstName(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::MALE_FIRSTNAMES);
	 }

	 /**
	  * Generate a random English male first name.
	  *
	  * @return string A random English male first name.
	  */
	 public function randomEnglishMaleFirstName(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::ENGLISH_MALE_FIRSTNAMES);
	 }

	 /**
	  * Generate a random female first name.
	  *
	  * @return string A random female first name.
	  */
	 public function randomFemaleFirstName(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::FEMALE_FIRSTNAMES);
	 }

	 /**
	  * Generate a random English female first name.
	  *
	  * @return string A random English female first name.
	  */
	 public function randomEnglishFeMaleFirstName(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::ENGLISH_FEMALE_FIRSTNAMES);
	 }

	 /**
	  * Generate a random last name.
	  *
	  * @return string A random last name.
	  */
	 public function randomLastName(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::LASTNAMES);
	 }

	 /**
	  * Generate a random English last name.
	  *
	  * @return string A random English last name.
	  */
	 public function randomEnglishLastName(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::ENGLISH_LASTNAMES);
	 }

	 /**
	  * Generate a random first name, either male or female.
	  *
	  * @return string A random first name (either male or female).
	  */
	 public function randomFirstName(): string
	 {
		  $isMale = $this->faker->boolean();
		  if ($isMale) {
				return $this->randomMaleFirstName();
		  } else {
				return $this->randomFemaleFirstName();
		  }
	 }

	 /**
	  * Generate a random English first name, either male or female.
	  *
	  * @return string A random English first name (either male or female).
	  */
	 public function randomEnglishFirstName(): string
	 {
		  $isMale = $this->faker->boolean();
		  if ($isMale) {
				return $this->randomEnglishMaleFirstName();
		  } else {
				return $this->randomEnglishFeMaleFirstName();
		  }
	 }

	 /**
	  * Generate a random full name (first and last).
	  *
	  * @return string A random full name.
	  */
	 public function randomFullName(): string
	 {
		  return $this->randomFirstName() . ' ' . $this->randomLastName();
	 }

	 /**
	  * Generate a random English full name (first and last).
	  *
	  * @return string A random English full name.
	  */
	 public function randomEnglishFullName(): string
	 {
		  return $this->randomEnglishFirstName() . ' ' . $this->randomEnglishLastName();
	 }

	 /**
	  * Generate a random job title.
	  *
	  * @return string A random job title.
	  */
	 public function randomJobTitle(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::JOBS);
	 }

	 /**
	  * Generate a random landline phone number.
	  *
	  * @return string A random landline phone number.
	  */
	 public function randomLandlinePhone(): string
	 {
		  return $this->randomLandlinePhonePrefix() . rand(10000000, 99999999);
	 }

	 /**
	  * Generate a random mobile phone number.
	  *
	  * @return string A random mobile phone number.
	  */
	 public function randomMobilePhone(): string
	 {
		  return $this->randomMobilePhonePrefix() . rand(1000000, 9999999);
	 }

	 /**
	  * Generate a random national code (e.g., ID number).
	  *
	  * @param int $length The length of the national code, default is 10 digits.
	  * @return string A random national code.
	  */
	 public function randomNationalCode(int $length = 10): string
	 {
		  return str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
	 }

	 /**
	  * Generate a random address.
	  *
	  * @return string A random address in Persian format.
	  */
	 public function randomAddress(): string
	 {
		  return $this->randomState() . ' ' . $this->randomCity() . ' خیابان ' . $this->randomStreet() .
				' کوچه ' . $this->randomLastName() . ' پلاک ' . rand(1, 999) . ' واحد ' . rand(1, 20);
	 }

	 /**
	  * Generate a random postal code.
	  *
	  * @return string A random postal code.
	  */
	 public function randomPostalCode(): string
	 {
		  return str_pad(rand(10000, 99999), 10, '0', STR_PAD_RIGHT);
	 }

	 /**
	  * Generate a random date.
	  *
	  * @return string A random date in the format "YYYY/MM/DD".
	  */
	 public function randomDate(): string
	 {
		  $year  = rand(1300, 1400);
		  $month = rand(1, 12);
		  $day   = rand(1, 30);
		  return "$year/$month/$day";
	 }

	 /**
	  * Generate a random email address.
	  *
	  * @return string A random email address.
	  */
	 public function randomEmail(): string
	 {
		  $withDot    = $this->faker->boolean();
		  $withNumber = $this->faker->boolean();
		  if ($withDot) {
				$name = $this->randomEnglishFirstName() . '.' . $this->randomEnglishLastName();
		  } else {
				$name = $this->randomEnglishFirstName() . $this->randomEnglishLastName();
		  }

		  if ($withNumber) {
				$name = $name . rand(1, 9999);
		  }

		  return str_replace(' ', '', strtolower($name)) . '@' . $this->faker->randomElement(PersianFakerConstants::EMAIL_PREFIX);
	 }

	 /**
	  * Generate a random bank name.
	  *
	  * @return string A random bank name from predefined constants.
	  */
	 public function randomBank(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::BANKS);
	 }

	 /**
	  * Generate a random English bank name.
	  *
	  * @return string A random English bank name.
	  */
	 public function randomEnglishBank(): string
	 {
		  return $this->faker->randomElement(PersianFakerConstants::ENGLISH_BANKS);
	 }
}

