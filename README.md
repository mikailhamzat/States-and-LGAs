# States-and-LGAs

## States and LGAs Seeder for Laravel
This Laravel seeder provides a convenient way to populate your database with Nigerian states and their corresponding Local Government Areas (LGAs).

## Features
Seeds Nigerian states along with their LGAs.
Provides a structured and easy-to-use database schema for Nigerian states and LGAs.
Saves time and effort in manually inputting state and LGA data.

## Requirements
Laravel >= 5.5

## Installation
1. You may run both command to quickly create the 3 files, Model, Migration, and Seeder for both State and LGA.
   ```
   php artisan make:model -ms State
   php artisan make:model -ms LocalGovernmentArea
   ```

2. Copy the code for both State and LGA files from the app/models directory of this repository to the corresponding files in your Laravel project's app/models directory.

3. Copy the code for both State and LGA files from the database/migrations directory of this repository to the corresponding files in your Laravel project's database/migrations directory.
   
4. Copy the code for both State and LGA files from the database/seeders directory of this repository to the corresponding files in your Laravel project's database/seeders directory.

5. Finally, register the StateSeeder and LocalGovernmentAreaSeeder class in the DatabaseSeeder.php file:
```
    public function run(): void
    {
        ...
        $this->call(StateSeeder::class);
        $this->call(LocalGovernmentAreaSeeder::class);
    }
```
7. Run the database migration and seeder:
   ```
   php artisan migrate --seed
   ```

This will populate your database with Nigerian states and their corresponding LGAs.

## Usage
Once the seeder has been run, you can use the State and LGA models in your Laravel application to access the state and LGA data.

## Example
```
use App\Models\State;
use App\Models\LGA;

// Get all states
$states = State::all();

// Get LGAs for a specific state
$state = State::where('name', 'Lagos')->first();
$lgas = $state->local_government_areas;
```

## Contributing
If you encounter any issues or have suggestions for improvements, feel free to open an issue or create a pull request.

Feel free to customize this guide according to your project's specifics. If you have any questions or need further assistance, don't hesitate to ask!
