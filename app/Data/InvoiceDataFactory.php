<?php

namespace App\Data;

class InvoiceDataFactory
{
    public static function make(string $type): InvoiceData
    {
        return match ($type) {
            'type1' => new InvoiceData(
                invoice_no: '500202524',
                issue_date: '14.05.2025',
                service_date: '14.05.2025',
                payment_date: '13.07.2025',
                payment_terms: 'within 30 days',
                payment_days: 30,

                supplier_name: 'x-treme distribution s.r.o.',
                supplier_address: 'cp. 128 Cisovice - Praha 252 04',
                supplier_city: 'Praha',
                supplier_id: '04252535',
                supplier_vat_id: 'CZ04252535',

                bank_name: 'Československá obchodní banka a.s.',
                iban: 'CZ6103000000001017466813',
                swift: 'CEKOCZPP',
                business_register: 'Obchodní rejstřík C 244758 vedená u Městského soudu v Praze',

                customer_company: 'Esports Sensacio',
                customer_id: '11102',
                payer_id: '11102',

                ship_to_name: 'Esports Sensacio',
                ship_to_address: 'Sample Address',
                ship_to_city: 'Sample City',
                ship_to_country: 'Czech Republic',

                incoterms: 'EXW Radčice',

                items: [
                    [
                        'ean_code' => '8591747635652',
                        'description' => 'MTSE953628PB_XL',
                        'colour' => 'Bitz 72475',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 4.09,
                        'total_price' => 4.09
                    ],
                    [
                        'ean_code' => '8591747635898',
                        'description' => 'MTSE953713PC_L',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 16.37,
                        'total_price' => 16.37
                    ],
                    [
                        'ean_code' => '8591747635881',
                        'description' => 'MTSE953713PC_M',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 4.09,
                        'total_price' => 4.09
                    ],
                    [
                        'ean_code' => '8591747635836',
                        'description' => 'MTSE953713PC_XL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 20.46,
                        'total_price' => 20.46
                    ],
                    [
                        'ean_code' => '8591747635829',
                        'description' => 'MTSE953713PC_XXL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 20.46,
                        'total_price' => 40.92
                    ],
                    [
                        'ean_code' => '8591747634570',
                        'description' => 'LTSE675487PA_L',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 13.60,
                        'total_price' => 27.20
                    ],
                    [
                        'ean_code' => '8591747479829',
                        'description' => 'KJCD333725PA_152-158',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 3,
                        'unit_price' => 13.60,
                        'total_price' => 40.80
                    ],
                    [
                        'ean_code' => '8591747479836',
                        'description' => 'KJCD333725PA_164-170',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 17.69,
                        'total_price' => 17.69
                    ],
                    [
                        'ean_code' => '8591747406818',
                        'description' => 'MPAC709990_48',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 5.41,
                        'total_price' => 5.41
                    ],
                    [
                        'ean_code' => '8591747636109',
                        'description' => 'MTSE953990PA_5XL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 5,
                        'unit_price' => 5.41,
                        'total_price' => 27.05
                    ],
                    // Adding the remaining items to complete the dataset
                    [
                        'ean_code' => '8591747635287',
                        'description' => 'MTSE952681PA_M',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 5.41,
                        'total_price' => 10.82
                    ],
                    [
                        'ean_code' => '8591747635256',
                        'description' => 'MTSE952681PA_XL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 4,
                        'unit_price' => 5.41,
                        'total_price' => 21.64
                    ],
                    [
                        'ean_code' => '8591747406849',
                        'description' => 'MPAC709990_54',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 4.09,
                        'total_price' => 8.18
                    ],
                    [
                        'ean_code' => '8591747635126',
                        'description' => 'MTSE952005PB_XL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 18,
                        'unit_price' => 4.09,
                        'total_price' => 73.62
                    ],
                    [
                        'ean_code' => '8591747635294',
                        'description' => 'MTSE952681PA_L',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 9,
                        'unit_price' => 4.09,
                        'total_price' => 36.81
                    ],
                    [
                        'ean_code' => '8591747451245',
                        'description' => 'MTSC826990_XXXL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 20,
                        'unit_price' => 4.09,
                        'total_price' => 81.80
                    ],
                    [
                        'ean_code' => '8591747636130',
                        'description' => 'MTSE953990PA_XL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 4,
                        'unit_price' => 4.09,
                        'total_price' => 16.36
                    ],
                    [
                        'ean_code' => '8591747636123',
                        'description' => 'MTSE953990PA_XXL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 4,
                        'unit_price' => 4.09,
                        'total_price' => 16.36
                    ],
                    [
                        'ean_code' => '8591747635812',
                        'description' => 'MTSE953713PC_XXXL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 11,
                        'unit_price' => 4.09,
                        'total_price' => 44.99
                    ],
                    [
                        'ean_code' => '8591747636246',
                        'description' => 'MTSE953990PB_XL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 4.09,
                        'total_price' => 8.18
                    ],
                    [
                        'ean_code' => '8591747636239',
                        'description' => 'MTSE953990PB_XXL',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 12,
                        'unit_price' => 4.09,
                        'total_price' => 49.08
                    ],
                    [
                        'ean_code' => '8591747636185',
                        'description' => 'MTSE953990PA_L',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 4.09,
                        'total_price' => 8.18
                    ],
                    [
                        'ean_code' => '8591747636178',
                        'description' => 'MTSE953990PA_M',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 4.09,
                        'total_price' => 4.09
                    ],
                    [
                        'ean_code' => '8591747634013',
                        'description' => 'LTSE668128PA_M',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 4.09,
                        'total_price' => 4.09
                    ],
                    [
                        'ean_code' => '8591747634006',
                        'description' => 'LTSE668128PA_S',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 2,
                        'unit_price' => 5.41,
                        'total_price' => 10.82
                    ],
                    [
                        'ean_code' => '8591747634563',
                        'description' => 'LTSE675487PA_M',
                        'colour' => '',
                        'size' => '',
                        'quantity' => 1,
                        'unit_price' => 5.41,
                        'total_price' => 5.41
                    ],

                ],

                total_quantity: 115,
                subtotal: 612.69,
                tax_rate: 0,
                vat_base: 612.7,
                vat_amount: 0.0,
                total_amount: 612.69,

                print_date: '14.05.2025 - 16:29',
                variable_symbol: '500202524',
                purchase_order: null,
                delivery_note: 'ESP-001',
                order_ref: '7251133692',
                ship_to_vat_id: 'CZ11102',
                insurance_warning: true,
                total_pages: 1,
            ),
            'type2' => new InvoiceData(
                invoice_no: '50280302',
                issue_date: '05.05.2025',
                service_date: '05.05.2025',
                payment_date: '04.06.2025',
                payment_terms: 'within 30 days',
                payment_days: 30,

                supplier_name: 'x-treme distribution s.r.o.',
                supplier_address: 'cp. 128 Cisovice - Praha 252 04',
                supplier_city: 'Praha',
                supplier_id: '04252535',
                supplier_vat_id: 'CZ04252535',

                bank_name: 'Československá obchodní banka a.s.',
                iban: 'CZ6103000000001017466813',
                swift: 'CEKOCZPP',
                business_register: 'Obchodní rejstřík C 244758 vedená u Městského soudu v Praze',

                customer_company: 'Limango - c/o Rhenus Contract Logistics S.A.',
                customer_id: '11102',
                payer_id: '11102',

                ship_to_name: 'Hesch-Textil GmbH & Co.KG',
                ship_to_address: 'Ulmenstraße 5',
                ship_to_city: 'Bitz 72475',
                ship_to_country: 'Germany',

                incoterms: 'EXW Radčice',

                items: [
        [
            'ean_code' => '8591747635652',
            'description' => 'MTSE953628PB_XL',
            'colour' => 'Bitz 72475',
            'size' => 'XL',
            'quantity' => 1,
            'unit_price' => 4.09,
            'total_price' => 4.09
        ],
        [
            'ean_code' => '8591747635898',
            'description' => 'MTSE953713PC_L',
            'colour' => 'Navy Blue',
            'size' => 'L',
            'quantity' => 1,
            'unit_price' => 16.37,
            'total_price' => 16.37
        ],
        [
            'ean_code' => '8591747635881',
            'description' => 'MTSE953713PC_M',
            'colour' => 'Black',
            'size' => 'M',
            'quantity' => 1,
            'unit_price' => 4.09,
            'total_price' => 4.09
        ],
        [
            'ean_code' => '8591747635836',
            'description' => 'MTSE953713PC_XL',
            'colour' => 'Charcoal',
            'size' => 'XL',
            'quantity' => 1,
            'unit_price' => 20.46,
            'total_price' => 20.46
        ],
        [
            'ean_code' => '8591747635829',
            'description' => 'MTSE953713PC_XXL',
            'colour' => 'Gray',
            'size' => 'XXL',
            'quantity' => 2,
            'unit_price' => 20.46,
            'total_price' => 40.92
        ],
        [
            'ean_code' => '8591747634570',
            'description' => 'LTSE675487PA_L',
            'colour' => 'Royal Blue',
            'size' => 'L',
            'quantity' => 2,
            'unit_price' => 13.60,
            'total_price' => 27.20
        ],
        [
            'ean_code' => '8591747479829',
            'description' => 'KJCD333725PA_152-158',
            'colour' => 'Red',
            'size' => 'L',
            'quantity' => 3,
            'unit_price' => 13.60,
            'total_price' => 40.80
        ],
        [
            'ean_code' => '8591747479836',
            'description' => 'KJCD333725PA_164-170',
            'colour' => 'Green',
            'size' => 'L',
            'quantity' => 1,
            'unit_price' => 17.69,
            'total_price' => 17.69
        ],
        [
            'ean_code' => '8591747406818',
            'description' => 'MPAC709990_48',
            'colour' => 'Brown',
            'size' => 'M',
            'quantity' => 1,
            'unit_price' => 5.41,
            'total_price' => 5.41
        ],
        [
            'ean_code' => '8591747636109',
            'description' => 'MTSE953990PA_5XL',
            'colour' => 'White',
            'size' => '5XL',
            'quantity' => 5,
            'unit_price' => 5.41,
            'total_price' => 27.05
        ],
        [
            'ean_code' => '8591747635287',
            'description' => 'MTSE952681PA_M',
            'colour' => 'Dark Gray',
            'size' => 'M',
            'quantity' => 2,
            'unit_price' => 5.41,
            'total_price' => 10.82
        ],
        [
            'ean_code' => '8591747635256',
            'description' => 'MTSE952681PA_XL',
            'colour' => 'Burgundy',
            'size' => 'XL',
            'quantity' => 4,
            'unit_price' => 5.41,
            'total_price' => 21.64
        ],
        [
            'ean_code' => '8591747406849',
            'description' => 'MPAC709990_54',
            'colour' => 'Olive',
            'size' => 'L',
            'quantity' => 2,
            'unit_price' => 4.09,
            'total_price' => 8.18
        ],
        [
            'ean_code' => '8591747635126',
            'description' => 'MTSE952005PB_XL',
            'colour' => 'Maroon',
            'size' => 'XL',
            'quantity' => 18,
            'unit_price' => 4.09,
            'total_price' => 73.62
        ],
        [
            'ean_code' => '8591747635294',
            'description' => 'MTSE952681PA_L',
            'colour' => 'Forest Green',
            'size' => 'L',
            'quantity' => 9,
            'unit_price' => 4.09,
            'total_price' => 36.81
        ],
        [
            'ean_code' => '8591747451245',
            'description' => 'MTSC826990_XXXL',
            'colour' => 'Light Blue',
            'size' => 'XXXL',
            'quantity' => 20,
            'unit_price' => 4.09,
            'total_price' => 81.80
        ],
        [
            'ean_code' => '8591747636130',
            'description' => 'MTSE953990PA_XL',
            'colour' => 'Khaki',
            'size' => 'XL',
            'quantity' => 4,
            'unit_price' => 4.09,
            'total_price' => 16.36
        ],
        [
            'ean_code' => '8591747636123',
            'description' => 'MTSE953990PA_XXL',
            'colour' => 'Beige',
            'size' => 'XXL',
            'quantity' => 4,
            'unit_price' => 4.09,
            'total_price' => 16.36
        ],
        [
            'ean_code' => '8591747635812',
            'description' => 'MTSE953713PC_XXXL',
            'colour' => 'Black',
            'size' => 'XXXL',
            'quantity' => 11,
            'unit_price' => 4.09,
            'total_price' => 44.99
        ],
        [
            'ean_code' => '8591747636246',
            'description' => 'MTSE953990PB_XL',
            'colour' => 'Navy Blue',
            'size' => 'XL',
            'quantity' => 2,
            'unit_price' => 4.09,
            'total_price' => 8.18
        ],
        [
            'ean_code' => '8591747636239',
            'description' => 'MTSE953990PB_XXL',
            'colour' => 'White',
            'size' => 'XXL',
            'quantity' => 12,
            'unit_price' => 4.09,
            'total_price' => 49.08
        ],
        [
            'ean_code' => '8591747636185',
            'description' => 'MTSE953990PA_L',
            'colour' => 'Gray',
            'size' => 'L',
            'quantity' => 2,
            'unit_price' => 4.09,
            'total_price' => 8.18
        ],
        [
            'ean_code' => '8591747636178',
            'description' => 'MTSE953990PA_M',
            'colour' => 'Red',
            'size' => 'M',
            'quantity' => 1,
            'unit_price' => 4.09,
            'total_price' => 4.09
        ],
        [
            'ean_code' => '8591747634013',
            'description' => 'LTSE668128PA_M',
            'colour' => 'Charcoal',
            'size' => 'M',
            'quantity' => 1,
            'unit_price' => 4.09,
            'total_price' => 4.09
        ],
        [
            'ean_code' => '8591747634006',
            'description' => 'LTSE668128PA_S',
            'colour' => 'Green',
            'size' => 'S',
            'quantity' => 2,
            'unit_price' => 5.41,
            'total_price' => 10.82
        ],
        [
            'ean_code' => '8591747634563',
            'description' => 'LTSE675487PA_M',
            'colour' => 'Brown',
            'size' => 'M',
            'quantity' => 1,
            'unit_price' => 5.41,
            'total_price' => 5.41
        ],
        [
            'ean_code' => '8591747634808',
            'description' => 'LTSE675669PA_XL',
            'colour' => 'Royal Blue',
            'size' => 'XL',
            'quantity' => 1,
            'unit_price' => 4.09,
            'total_price' => 4.09
        ],
        [
            'ean_code' => '8591747450651',
            'description' => 'LTSC971425_L',
            'colour' => 'Dark Gray',
            'size' => 'L',
            'quantity' => 1,
            'unit_price' => 4.09,
            'total_price' => 4.09
        ],
    ],

                total_quantity: 115,
                subtotal: 612.69,
                tax_rate: 0,
                vat_base: 612.7,
                vat_amount: 0.0,
                total_amount: 612.69,

                print_date: '05.05.2025 - 16:29',
                variable_symbol: '50280302',
                purchase_order: null,
                delivery_note: '13322 - part 2',
                order_ref: '8238283',
                ship_to_vat_id: 'DE123456723',
                insurance_warning: true,
                total_pages: 1,
            ),

            default => throw new \InvalidArgumentException('Invalid invoice type.'),
        };
    }
}
