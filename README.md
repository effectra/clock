# Effectra\Clock

This is a PHP class named `Effectra\Clock` that implements the `Psr\Clock\Clock` interface. It provides a simple and standard way to retrieve the current time and timestamp in PHP applications.

## Features

- Implements the `Psr\Clock\ClockInterface` interface
- Provides the `now()` method to retrieve the current time as a `DateTimeImmutable` object
- Offers the `timestamp()` method to retrieve the current timestamp as an integer

## Usage

```php
// Create a new instance of the Clock class
$clock = new \Effectra\Clock\Clock();

// Get the current time as a DateTimeImmutable object
$currentDateTime = $clock->now();

// Get the current timestamp as an integer
$currentTimestamp = $clock->timestamp();
```

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please feel free to submit a pull request or open an issue on the GitHub repository.

## License

This package is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).
"# clock" 
