<?php

namespace Database\Factories\Companies;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Companies\Companies;

class CompaniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
			'label' => $this->faker->unique()->name(),
			'website'=>  $this->faker->domainName(),
			'fbsite'=>   $this->faker->domainName(),
			'twittersite'=>   $this->faker->domainName(),
			'lkdsite'=>   $this->faker->domainName(),
			'SIREN'=> $this->faker->siren(),
			'naf_code'=> $this->faker->regexify('[0-4]{4}[A-Z]{1}'),
			'intra_community_vat' => $this->faker->vat(),
			'TVA_ID' => $this->faker->randomElement([1, 2, 3]),
			'picture'=> $this->faker->imageUrl(640, 480, 'Companies Logo', true),
			'statu_customer' => $this->faker->randomElement([0, 1]),
			'discount'=> $this->faker->randomElement([0, 1, 5, 10]), 
			'users_id' => $this->faker->randomElement([1, 2, 3]), 
			'account_general_customer' => $this->faker->randomElement([1, 2, 3]), 
			'account_auxiliary_customer' => $this->faker->randomElement([1, 2, 3]),  
			'statu_supplier' => $this->faker->randomElement([0, 1]), 
			'account_general_supplier' => $this->faker->randomElement([1, 2, 3]), 
			'account_auxiliary_supplier'=> $this->faker->randomElement([1, 2, 3]), 
			'recept_controle' => $this->faker->randomElement([0, 1]), 
			'comment'=> $this->faker->realText($maxNbChars = 200, $indexSize = 2),
			'sector_id' => $this->faker->randomElement([1, 2, 3])
            
        ];
    }
}