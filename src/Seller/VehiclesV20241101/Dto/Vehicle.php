<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\VehiclesV20241101\Dto;

use SellingPartnerApi\Dto;

final class Vehicle extends Dto
{
    protected static array $complexArrayTypes = [
        'identifiers' => VehicleIdentifiers::class,
        'engineOutput' => EngineOutput::class,
    ];

    /**
     * @param  string  $make  Vehicle Brand.
     * @param  string  $model  Specific model of a vehicle.
     * @param  VehicleIdentifiers[]  $identifiers  Identifiers that can be used to identify the vehicle uniquely
     * @param  ?string  $variantName  Name of the vehicle variant.
     * @param  ?string  $bodyStyle  Body style of vehicle (example: Hatchback, Cabriolet).
     * @param  ?string  $driveType  Drive type of vehicle(example: Rear wheel drive).
     * @param  ?string  $energy  Energy Source for the vehicle(example: Petrol)
     * @param  EngineOutput[]|null  $engineOutput  Engine output of vehicle.
     * @param  ?MonthAndYear  $manufacturingStartDate  Represents a month in a specific year.
     * @param  ?MonthAndYear  $manufacturingStopDate  Represents a month in a specific year.
     * @param  ?string  $lastProcessedDate  The date on which the vehicle was last updated, in ISO-8601 date/time format.
     * @param  ?string  $status  Status of vehicle in Amazon's catalog.
     */
    public function __construct(
        public string $make,
        public string $model,
        public array $identifiers,
        public ?string $variantName = null,
        public ?string $bodyStyle = null,
        public ?string $driveType = null,
        public ?string $energy = null,
        public ?array $engineOutput = null,
        public ?MonthAndYear $manufacturingStartDate = null,
        public ?MonthAndYear $manufacturingStopDate = null,
        public ?string $lastProcessedDate = null,
        public ?string $status = null,
    ) {}
}
