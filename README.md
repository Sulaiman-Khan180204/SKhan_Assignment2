# CHT2520 Assignment 2 U2286550 Sulaiman Khan

## Introduction 

This project was developed for the assignment and is based on showing the stats of the Manchester United
football team which is something I'm very familiar with and have a good understanding of. After seeing the whole
Assignment 1 specification and how I have to build on it for Assignment 2 I had various ideas already thought of, of the
extent I can develop this website to. I have followed the mark scheme as closely as I could, demonstrating understanding 
of Laravel, watching the videos on Laracast, to then use MVC architecture, CRUD operations, routing, Blade templates,
migrations, seeders, validations and database interaction (search bar). The system allows users to add, view update and delete
whilst fitting to the theme and making it simple as possible for users to understand.

## Application Overview
 
The application had to have a decent amount of data to handle so I used 15 players and 6 stats for each player. This may
change for Assignment 2. Because only one table was allowed, the structure had to fully meet first normal form, ensuring atomic
values and no repeating groups. The application had to be easy to rebuild using migration and seeders. Users should easily be able
to browse through the paged squad list, add a new entry through a form, edit an existing player and remove a player permanently.

## MVC Used

### Model (M):

The 'Player' model represents the database table and handles all communication with MySQL. The $fillable property defines which attributes 
can be mass-assigned, ensuring safe and controlled updates:

```php   

protected $fillable = [

        'name',
        'position',
        'number',
        'nationality',
        'appearances',
        'goals'
    ];

```

### View (V):

Blade was used to construct user interface. The site uses a reusable layout component (x-layout), meaning navigation
and styling remain consistent across all pages:

```blade

<x-layout title="Manchester United Player Stats 25/26">
    <h1>Manchester United Stats 25/26</h1>
    </x-layout>

```



(also used on create, edit, show.blade.php)

This keeps the design clean and follows good practice by avoiding duplicated HTML.


### Controller (C):

The controller was integral to the project as it manages all CRUD functionality. It receives the request, validates input, retrieves or updates
data and returns the correct Blade view. For example, the update() method safely validates adn saves edited player data:

```php

$player = Player::find($id);
        $player->update($data);

```

## Other practices used in the project:

### Server-side validation

Using server-side validation was good practise for me a it made my site more realistic and made sure that the data submitted was correct
and secure. Instead of relying on HTML alone, Laravel's validation checks every incoming field:



```php

 $data = $request->validate([
            'name'        => 'required|max:200',
            'position'    => 'required|max:50',
            'number'      => 'required|integer|min:1|max:99',
            'nationality' => 'required|max:100',
            'appearances' => 'required|integer|min:0',
            'goals'       => 'required|integer|min:0',
        ],
 )

 ```



 Of course, this prevents invalid inputs such as negative numbers, unrealistic squad numbers or empty fields.

 I then further wanted to improve by showing error messages when an irregular value was shown:

```blade

@if ($errors->any())
            <div class = "error-box" style="color:red; margin-bottom:10px;">

            <ul>

            @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>

            </div>
@endif
 
```

Plus what i want the actual error messages to say which are shown in the PlayerController in both the store() and update() functions.

### Clean Routing Structure 

All routes follow Laravel's best practice pattern:
```php

- /players #list
- /players/create  #form
-/players/{id}/edit  #edit page
-/players/{id}  #update/delete

```

This makes the application predictable and professional

### Database Migrations and Seeders

Migrations ensure the database is consistently structured, and seeders allow automatic population
sample players. This was key for me at some times when adding players I was testing on, or when testing
the update or delete function I would often end up using php artisan db:seed/php artisan migrate:fresh --seed to refresh my list of players.

### Search and Pagination

To improve usablity, the app includes search filtering and pagination:


```blade

<input
            type="text"
            name="search"
            placeholder="Search players..."
            value= "{{ request('search') }}"

    >

<button type="submit">Search</button>

```



This keeps the interface clean even with many records.



### Reusable components and DRY principles

Using a layout component simplifies styling and avoids repeated markup. The navigation bar is written once and included on every page.

## Conclusion

I believe this project demonstrates a strong understanding of Laravel and the MVC architecture while fully meeting the assignment requirements. With features such as validated data entry, migrations, seeders, and the required functionality, it forms a solid, well-structured foundation. This will make it much easier to extend and enhance the site going into Assignment 2, enabling smoother development and future growth.

