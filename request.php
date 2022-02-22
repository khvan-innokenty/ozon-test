$delivery = $this->post('principal-integration-api/v1/delivery/calculate/information', [
    'json' => [
        'fromPlaceId' => $this->f3->get('ozon.from_id'),
        'destinationAddress' => 'Санкт-Петербург',
        'packages' => [[
            'count' => 1,
            'price' => 24000,
            'estimatedPrice' => 24000,
            'dimensions' => [
                'weight' => 18310,
                'length' => 100,
                'height' => 100,
                'width' => 100
            ]
        ]],
    ],
]);
